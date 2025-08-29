<?php
require_once 'Attendance.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_POST['student_id'];
    $date = $_POST['date'];
    $status = $_POST['status'];

    $attendance = new Attendance();
    $attendance->addAttendance($student_id, $date, $status);

    echo "Attendance recorded successfully!";
}
?>