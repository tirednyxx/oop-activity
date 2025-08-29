<?php
require_once 'Database.php';

class Student extends Database {
    public function addStudent($name, $email) {
        $this->create('students', ['name' => $name, 'email' => $email]);
    }

    public function getStudents() {
        return $this->read('students');
    }

    public function updateStudent($id, $name, $email) {
        $this->update('students', ['name' => $name, 'email' => $email], $id);
    }

    public function deleteStudent($id) {
        $this->delete('students', $id);
    }
}
?>