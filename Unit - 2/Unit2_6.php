<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>
    <form method="post">
        <label>Enter First Number : </label>
        <input type="number" name="num1" required><br><br>

        <label>Enter Second Number : </label>
        <input type="number" name="num2" required><br><br>

        <label>Select Operation : </label>
        <select name="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select><br><br>

        <input type="submit" name="submit" value="Calculate">
    </form>

<?php
    function calculate($num1, $num2, $operation) 
    {
        switch ($operation) 
        {
            case "add":
                return $num1 + $num2;
            case "subtract":
                return $num1 - $num2;
            case "multiply":
                return $num1 * $num2;
            case "divide":
                return $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero!";
            default:
                return "Invalid operation!";
        }
    }

    if (isset($_POST['submit'])) 
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        $result = calculate($num1, $num2, $operation);
        echo "<h3>Result: $result</h3>";
    }
?>
</body>
</html>
