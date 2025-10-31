<?php

echo "<h2>Month</h2>";

echo "<form method='post'>
        <table border='1'>
            <tr>
                <td>Enter The Month Number</td>
                <td>
                    <input type='number' name='month' placeholder='Enter the Month Number' required><br><br>
                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    <input type='submit' name='submit'><br><br>
                </td>
            </tr>
";

if (isset($_REQUEST['submit'])) {
    $month_name = "";
    $month = $_REQUEST['month'];

    switch ($month) {
        case 1: 
            $month_name = "January";
            break;
        case 2: 
            $month_name = "February"; 
            break;
        case 3: 
            $month_name = "March"; 
            break;
        case 4: 
            $month_name = "April"; 
            break;
        case 5: 
            $month_name = "May"; 
            break;
        case 6: 
            $month_name = "June"; 
            break;
        case 7: 
            $month_name = "July"; 
            break;
        case 8: 
            $month_name = "August"; 
            break;
        case 9: 
            $month_name = "September"; 
            break;
        case 10: 
            $month_name = "October"; 
            break;
        case 11: 
            $month_name = "November"; 
            break;
        case 12: 
            $month_name = "December"; 
            break;
        default: 
            $month_name = "Invalid month number";
    }

    echo "
        <tr>
            <td>Month Name</td>
            <td>$month_name</td>
        </tr>
    ";
}

echo "</table></form>";
?>
