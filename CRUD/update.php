<?php
include('config.php');

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'] ?? null;
if (!$id || !is_numeric($id)) {
    header("Location: dashboard.php");
    exit();
}

$stmt = $mysqli->prepare("SELECT * FROM employees WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_assoc();
$stmt->close();

if (!$row) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $address = trim($_POST['address']);
    $salary = (int) $_POST['salary'];

    $stmt = $mysqli->prepare("UPDATE employees SET name = ?, address = ?, salary = ? WHERE id = ?");
    $stmt->bind_param("ssii", $name, $address, $salary, $id);
    $stmt->execute();
    $stmt->close();

    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Employee</title>
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

        .form-container {
            max-width: 500px;
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
        input[type="number"] {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 16px;
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

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Update Employee</h2>
        <form method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= htmlspecialchars($row['name']) ?>" required>

            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="<?= htmlspecialchars($row['address']) ?>" required>

            <label for="salary">Salary</label>
            <input type="number" name="salary" id="salary" value="<?= htmlspecialchars($row['salary']) ?>" required>

            <button type="submit">Update Employee</button>
        </form>
        <div class="footer">
            &copy; <?= date("Y") ?> Employee Management System
        </div>
    </div>
</body>
</html>
