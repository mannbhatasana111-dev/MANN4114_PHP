<body>
<h2>Operators</h2>

    <form method="post">
        <input type="number" name="first" placeholder="Enter The First Value"><br><br>
        <input type="number" name="second" placeholder="Enter The Second Value"><br><br>
        <input type="submit" name="submit" value="SUBMIT"><br><br>
    </form>
</body>

<?php
if (isset($_REQUEST['submit'])) {
    $a = $_REQUEST['first'];
    $b = $_REQUEST['second'];

    echo "<table border='1'>
            <tr>
                <td>Operators</td>
                <td>Output</td>
            </tr>
            <tr>
                <td>+</td>
                <td>$a + $b = " . ($a + $b) . "</td>
            </tr>
            <tr>
                <td>-</td>
                <td>$a - $b = " . ($a - $b) . "</td>
            </tr>
            <tr>
                <td>*</td>
                <td>$a * $b = " . ($a * $b) . "</td>
            </tr>
            <tr>
                <td>/</td>
                <td>";
    
    if ($b == 0) {
        echo "Division by zero error";
    } else {
        echo "$a / $b = " . ($a / $b);
    }

    echo "</td>
            </tr>
          </table>";
}
?>
