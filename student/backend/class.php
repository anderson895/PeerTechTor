<?php
include ('db.php');
date_default_timezone_set('Asia/Manila');

class global_class extends db_connect
{
    public function __construct()
    {
        $this->connect();
    }





    public function check_account($student_id) {
      
    
        // SQL query para hanapin ang admin_id sa table
        $query = "SELECT * FROM student WHERE id = $student_id";
    
        $result = $this->conn->query($query);
    
        // Prepare ang array para sa result
        $items = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $items[] = $row;
            }
        }
        return $items; // Ibabalik ang array ng results o empty array kung walang nahanap
    }







}