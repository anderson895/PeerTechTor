<?php
include('../class.php');

$db = new global_class();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['requestType'])) {
        if ($_POST['requestType'] == 'Signup') {


            $first_name=$_POST['first_name'];
            $middle_name=$_POST['middle_name'];
            $last_name=$_POST['last_name'];
            $yr_section=$_POST['yr_section'];
            $lrn=$_POST['lrn'];
            $contact=$_POST['contact'];
            $password=$_POST['password'];

            echo $db->SignUp($first_name,$middle_name,$last_name,$yr_section,$lrn,$contact,$password);
        }else if ($_POST['requestType'] == 'LoginStudent') {
            $login_lrn = $_POST['login_lrn'];
            $login_password = $_POST['login_password'];

            $user = $db->LoginStudent($login_lrn, $login_password);

            // Check if login was successful
            if ($user) {
                // Convert the result to JSON format to echo as a response
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Login successful',
                    'data' => $user
                ]);
            } else {
                // Return JSON error response
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Invalid LRN or password'
                ]);
            }
        }else if ($_POST['requestType'] == 'LoginAdmin') {

           
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $db->LoginAdmin($email, $password);

            // Check if login was successful
            if ($user) {
                // Convert the result to JSON format to echo as a response
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Login successful',
                    'data' => $user
                ]);
            } else {
                // Return JSON error response
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Invalid Email or password'
                ]);
            }
        } else {
            echo 'requestType NOT FOUND';
        }
    } else {
        echo 'Access Denied! No Request Type.';
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
}
?>