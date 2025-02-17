<?php
include ('db.php');
date_default_timezone_set('Asia/Manila');

class global_class extends db_connect
{
    public function __construct()
    {
        $this->connect();
    }




    public function fetch_Admin_account($searchTerm = '') {
        // SQL query to fetch data from the admin table with search condition
        $query = "SELECT id, email FROM admin WHERE email LIKE '%" . $this->conn->real_escape_string($searchTerm) . "%'";

        // Execute the query
        $result = $this->conn->query($query);

        // Initialize an array to hold the results
        $items = [];

        // Check if there are rows returned
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $items[] = [
                    'id' => $row['id'],
                    'email' => $row['email']
                ];
            }
        } else {
            // No records found
            $items[] = ['id' => '', 'name' => 'No results found'];
        }

        // Return the results as a JSON response
        echo json_encode($items);
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