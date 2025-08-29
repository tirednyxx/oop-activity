<?php
require_once 'Student.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $student = new Student();
    $student->addStudent($name, $email);

    echo "Student added successfully!";
}
?>