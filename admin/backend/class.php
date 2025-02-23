<?php
include ('db.php');
date_default_timezone_set('Asia/Manila');

class global_class extends db_connect
{
    public function __construct()
    {
        $this->connect();
    }


    public function get_count_report($session_account)
{
    $query = $this->conn->prepare("
      SELECT  
            COUNT(CASE WHEN `report`.`seen` = '1' THEN 1 END) AS Unseen,
            COUNT(CASE WHEN `report`.`status` = '1' THEN 1 END) AS totalreport,
            COUNT(CASE WHEN `student`.`status` = '1' THEN 1 END) AS totalstudent
        FROM `report`
        JOIN `student` ON `student`.`id` = `report`.`IDsentFrom`
        where report.IDsentTo = $session_account
      


    ");

    if ($query->execute()) {
        $result = $query->get_result()->fetch_assoc();
        // Return the result as JSON
        echo json_encode($result);
        return;
    }
}




    public function RemoveReport($reportID){
        $query = $this->conn->prepare("UPDATE `report` SET `status` = '0' WHERE `report`.`report_id` = $reportID");

        if ($query->execute()) {
            $result = $query->get_result();
            return 200;
        }
    }



    public function mark_all_seen($admin_id){
        $query = $this->conn->prepare("UPDATE `report` SET `seen` = '0' where IDsentTo = '$admin_id'");

        if ($query->execute()) {
            $result = $query->get_result();
            return 200;
        }
    }
    


    public function fetch_teacher_reports($teacher_id){
        $query = $this->conn->prepare("SELECT report.*, student.* FROM `report`
        LEFT JOIN student ON student.id = report.IDsentFrom 
        where report.status='1' AND report.IDsentTo = '$teacher_id'
        ");

        if ($query->execute()) {
            $result = $query->get_result();
            return $result;
        }
    }

    public function fetch_all_admin(){
        $query = $this->conn->prepare("SELECT * FROM `admin`where status='1' ");

        if ($query->execute()) {
            $result = $query->get_result();
            return $result;
        }
    }

    public function AddUser($first_name, $middle_name, $last_name, $email, $password, $position) {
        // Check if email already exists
        $check_query = $this->conn->prepare("SELECT id FROM admin WHERE email = ?");
        $check_query->bind_param("s", $email);
        $check_query->execute();
        $check_query->store_result();
    
        if ($check_query->num_rows > 0) {
            return "email_exists";  // Return a flag indicating email already exists
        }
    
        // Insert new user if email does not exist
        $query = $this->conn->prepare("INSERT INTO admin (f_name, m_name, l_name, email, password, position) VALUES (?, ?, ?, ?, ?, ?)");
        $query->bind_param("ssssss", $first_name, $middle_name, $last_name, $email, $password, $position);
    
        if ($query->execute()) {
            return [
                'id' => $this->conn->insert_id,  // Get last inserted ID
                'first_name' => $first_name,
                'middle_name' => $middle_name,
                'last_name' => $last_name,
                'email' => $email,
                'position' => $position
            ];
        } else {
            return false;  // Return false if insertion failed
        }
    }



    public function DeleteAdmin($admin_id) {
        $query = $this->conn->prepare("DELETE FROM admin WHERE id = ?");
        $query->bind_param("i", $admin_id);  // "i" = integer type binding
    
        if ($query->execute()) {
            return true; // Deletion successful
        } else {
            return false; // Failed to delete
        }
    }
    
    


    public function check_account($student_id) {
      
        $query = "SELECT * FROM admin WHERE id = $student_id";
    
        $result = $this->conn->query($query);
    
        $items = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $items[] = $row;
            }
        }
        return $items; 
    }







}