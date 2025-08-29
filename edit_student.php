<?php
require_once 'Student.php';
$student = new Student();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student->updateStudent($_POST['id'], $_POST['name'], $_POST['email']);
    echo "Student updated successfully!";
    exit;
}

$id = $_GET['id'];
$students = $student->getStudents();
$current = null;
foreach ($students as $s) {
    if ($s['id'] == $id) {
        $current = $s;
        break;
    }
}
?>

<form method="POST">
    <input type="hidden" name="id" value="<?= $current['id'] ?>">
    <label>Name:</label>
    <input type="text" name="name" value="<?= $current['name'] ?>"><br>
    <label>Email:</label>
    <input type="email" name="email" value="<?= $current['email'] ?>"><br>
    <button type="submit">Update Student</button>
</form>