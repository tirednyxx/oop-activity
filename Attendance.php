<?php
require_once 'Database.php';

class Attendance extends Database {
    public function addAttendance($student_id, $date, $status) {
        $this->create('attendance', ['student_id' => $student_id, 'date' => $date, 'status' => $status]);
    }

    public function getAttendance() {
        return $this->read('attendance');
    }

    public function updateAttendance($id, $student_id, $date, $status) {
        $this->update('attendance', ['student_id' => $student_id, 'date' => $date, 'status' => $status], $id);
    }

    public function deleteAttendance($id) {
        $this->delete('attendance', $id);
    }
}
?>