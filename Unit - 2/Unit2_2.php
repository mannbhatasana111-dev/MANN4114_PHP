<!DOCTYPE html>
<html>
<head>
    <title>Sort Array</title>
</head>
<body>

<form method="post">
    Enter numbers separated by commas:<br>
    <input type="text" name="numbers" size="50" value="<?php echo isset($_POST['numbers']) ? htmlspecialchars($_POST['numbers']) : ''; ?>"><br><br>
    <input type="submit" value="Sort Array">
</form>

<?php
    $input = $_POST['numbers'];
    $array = explode(',', $input);

    sort($array);
    echo "<h3>Sorted Array:</h3>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";
?>

</body>
</html>
