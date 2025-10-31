<?php

echo "<h2>Result</h2>";

// Your variables (unchanged)
$student_name = "Bhatasana Mann Jayeshbhai";
$enrollment_number = 220801031;
$semester = "6 Semester";
$university_name = "Atmiya University";
$year = "April - 2025";
$program_name = "Bachelor of Computer Application";
$subject_name_1 = "Networking";
$subject_name_2 = "ASP.NET";
$subject_name_3 = "Android";
$subject_name_4 = "ASP.NET Practical";
$subject_name_5 = "Android Practical";
$subject_name_6 = "Project";
$subject_1_mark = 85;
$subject_2_mark = 90;
$subject_3_mark = 98;
$subject_4_mark = 90;
$subject_5_mark = 90;
$subject_6_mark = 90;
$max_mark = 100;
$total_marks_of_all_subject = $subject_1_mark + $subject_2_mark + $subject_3_mark + $subject_4_mark + $subject_5_mark + $subject_6_mark;
$percentage = $total_marks_of_all_subject / 600 * 100;
$tota_mark = 600;
$grade = "";
$status = "";
$class_name = "";
$cgpa = (10 * $percentage) / 100;
$sgpa = (10 * $percentage) / 100;

if (
    $subject_1_mark >= 40 && $subject_2_mark >= 40 && $subject_3_mark >= 40 &&
    $subject_4_mark >= 40 && $subject_5_mark >= 40 && $subject_6_mark >= 40
) {
    $status = "PASS";
    if ($percentage > 90) {
        $grade = "O";
        $class_name = "Distinction";
    }
    if ($percentage > 80 && $percentage <= 90) {
        $grade = "A";
        $class_name = "First";
    }
    if ($percentage > 70 && $percentage <= 80) {
        $grade = "B";
        $class_name = "Second";
    }
    if ($percentage > 40 && $percentage <= 70) {
        $grade = "C";
        $class_name = "Pass";
    }
} else {
    $grade = "Fail";
    $status = "Fail";
    $class_name = "Fail";
}

echo "<table border='1'>
        <tr>
            <td>Student Name</td>
            <td colspan='3'>$student_name</td>
        </tr>
        <tr>
            <td>Program Name</td>
            <td>$program_name</td>
            <td>Semester No</td>
            <td>$semester</td>
        </tr>
        <tr>
            <td>Enrollment No</td>
            <td>$enrollment_number</td>
            <td>Examination</td>
            <td>$year</td>
        </tr>
        <tr>
            <td>Subject No</td>
            <td>Subject</td>
            <td>Maximum</td>
            <td>Mark</td>
        </tr>
        <tr>
            <td>1</td>
            <td>$subject_name_1</td>
            <td>$max_mark</td>
            <td>$subject_1_mark</td>
        </tr>
        <tr>
            <td>2</td>
            <td>$subject_name_2</td>
            <td>$max_mark</td>
            <td>$subject_2_mark</td>
        </tr>
        <tr>
            <td>3</td>
            <td>$subject_name_3</td>
            <td>$max_mark</td>
            <td>$subject_3_mark</td>
        </tr>
        <tr>
            <td>4</td>
            <td>$subject_name_4</td>
            <td>$max_mark</td>
            <td>$subject_4_mark</td>
        </tr>
        <tr>
            <td>5</td>
            <td>$subject_name_5</td>
            <td>$max_mark</td>
            <td>$subject_5_mark</td>
        </tr>
        <tr>
            <td>6</td>
            <td>$subject_name_6</td>
            <td>$max_mark</td>
            <td>$subject_6_mark</td>
        </tr>
        <tr>
            <td colspan='3'>Total Mark</td>
            <td>$total_marks_of_all_subject</td>
        </tr>
        <tr>
            <td>Percentage</td>
            <td>" . number_format($percentage, 2) . " %</td>
            <td>Status</td>
            <td>$status</td>
        </tr>
        <tr>
            <td>Grade</td>
            <td>$grade</td>
            <td>Class</td>
            <td>$class_name</td>
        </tr>
        <tr>
            <td>CGPA</td>
            <td>" . number_format($cgpa, 2) . "</td>
            <td>SGPA</td>
            <td>" . number_format($sgpa, 2) . "</td>
        </tr>
    </table>";
?>
