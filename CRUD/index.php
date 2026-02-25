<?php
include('config.php');

if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit();
}

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $stmt = $mysqli->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows) {
        $row = $res->fetch_assoc();
        if (password_verify($pass, $row['password'])) {
            $_SESSION['user'] = $user;
            if (!empty($_POST['remember'])) {
                setcookie("user", $user, time() + (86400 * 7));
            }
            header("Location: dashboard.php");
            exit();
        } else {
            $msg = "❌ Invalid password!";
        }
    } else {
        $msg = "❌ User not found!";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Employee Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #e0eafc, #cfdef3);
            margin: 0;
            padding: 0;
        }

        .login-container {
            max-width: 400px;
            margin: 80px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .checkbox {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .checkbox input {
            margin-right: 8px;
        }

        button {
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .message {
            margin-top: 15px;
            color: red;
            text-align: center;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Employee Portal Login</h2>
        <form method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?= htmlspecialchars($_COOKIE['user'] ?? '') ?>" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <div class="checkbox">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </div>

            <button type="submit">Login</button>

            <?php if ($msg): ?>
                <p class="message"><?= $msg ?></p>
            <?php endif; ?>
        </form>
        <div class="footer">
            &copy; <?= date("Y") ?> Employee Management System
        </div>
    </div>
</body>
</html>
