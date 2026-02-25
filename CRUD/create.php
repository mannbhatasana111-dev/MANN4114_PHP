<?php
include('config.php');

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $address = trim($_POST['address']);
    $salary = (int) $_POST['salary'];

    $stmt = $mysqli->prepare("INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $name, $address, $salary);
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
    <title>Add Employee</title>
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
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #218838;
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
        <h2>Add New Employee</h2>
        <form method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>

            <label for="address">Address</label>
            <input type="text" name="address" id="address" required>

            <label for="salary">Salary</label>
            <input type="number" name="salary" id="salary" required>

            <button type="submit">Save Employee</button>
        </form>
        <div class="footer">
            &copy; <?= date("Y") ?> Employee Management System
        </div>
    </div>
</body>
</html>
