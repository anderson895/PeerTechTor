<?php
include ('db.php');
date_default_timezone_set('Asia/Manila');

class global_class extends db_connect
{
    public function __construct()
    {
        $this->connect();
    }


    public function get_count_report()
{
    $query = $this->conn->prepare("
       SELECT  
            COUNT(CASE WHEN `seen` = '1' THEN 1 END) AS Unseen
        FROM `report` ;

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



    public function mark_all_seen(){
        $query = $this->conn->prepare("UPDATE `report` SET `seen` = '0'");

        if ($query->execute()) {
            $result = $query->get_result();
            return 200;
        }
    }
    


    public function fetch_all_reports(){
        $query = $this->conn->prepare("SELECT report.*, admin.* FROM `report`
        LEFT JOIN admin ON admin.id = report.IDsentTo
        where report.status='1'
        ");

        if ($query->execute()) {
            $result = $query->get_result();
            return $result;
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