<?php
require_once 'Student.php';
$student = new Student();

$id = $_GET['id'];
$student->deleteStudent($id);

echo "Student deleted successfully!";
?>