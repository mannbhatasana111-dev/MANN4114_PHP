<body>
 <h2>Maximum / Minimum</h2>

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
                <td>Maximum/Minimum</td>
                <td>Value</td>
            </tr>
            <tr>
                <td>Maximum</td>
                <td>" . max($a, $b) . "</td>
            </tr>
            <tr>
                <td>Minimum</td>
                <td>" . min($a, $b) . "</td>
            </tr>
          </table>";
}
?>
