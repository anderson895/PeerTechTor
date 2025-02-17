<?php
include ('db.php');
date_default_timezone_set('Asia/Manila');

class global_class extends db_connect
{
    public function __construct()
    {
        $this->connect();
    }


    public function SignUp($first_name,$middle_name,$last_name,$yr_section,$lrn,$contact,$password)
    {
        $link_expiration = date("Y-m-d H:i:s", strtotime("+5 minutes"));
    
        // Check if the email already exists
        $stmt = $this->conn->prepare("SELECT * FROM `student` WHERE `lrn` = ?");
        $stmt->bind_param("s", $lrn);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            // Email already exists, return error response
            echo json_encode(array('status' => 'LRN_ALREADY', 'message' => 'LRN already exists'));
            return;  // Stop further execution
        }
        
        // Hash the password using SHA-256
        $hashedPassword = hash('sha256', $password);
    
        // Proceed with insertion if email does not exist
        $stmt = $this->conn->prepare("INSERT INTO `student` (`fname`, `mname`, `lname`, `yr_sec`, `lrn`, `contact`, `password`) VALUES (?, ?, ?, ?, ?,?,?)");
        $stmt->bind_param("sssssss", $first_name, $middle_name, $last_name, $yr_section, $lrn, $contact, $hashedPassword);
    
        if ($stmt->execute()) {
            session_start();
            $userId = $this->conn->insert_id;
            $_SESSION['id'] = $userId;
            $response = array(
                'status' => 'success',
                'id' => $userId
            );
            echo json_encode($response);
        } else {
            // Return an error status with the error code
            echo json_encode(array('status' => 'error', 'message' => 'Unable to register'));
        }
    }










    public function LoginStudent($login_lrn, $login_password)
    {
        // Hash the input password using SHA-256
        $hashedPassword = hash('sha256', $login_password);
        // Prepare the SQL query
        $query = $this->conn->prepare("SELECT * FROM `student` WHERE `lrn` = ? AND `password` = ? AND status = '1'");
    
        // Bind the email and the hashed password
        $query->bind_param("ss", $login_lrn, $hashedPassword);
        
        // Execute the query
        if ($query->execute()) {
            $result = $query->get_result();
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                session_start();
                $_SESSION['lrn'] = $user['lrn'];
                $_SESSION['id'] = $user['id'];
    
                return $user;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }







    public function LoginAdmin($email, $password)
    {
        // Hash the input password using SHA-256
        $hashedPassword = hash('sha256', $password);
        // Prepare the SQL query
        $query = $this->conn->prepare("SELECT * FROM `admin` WHERE `email` = ? AND `password` = ? AND status = '1'");
    
        // Bind the email and the hashed password
        $query->bind_param("ss", $email, $hashedPassword);
        
        // Execute the query
        if ($query->execute()) {
            $result = $query->get_result();
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                session_start();
                $_SESSION['email'] = $user['email'];
                $_SESSION['id'] = $user['id'];
    
                return $user;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }











}