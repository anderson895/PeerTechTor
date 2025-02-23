<?php
include('../class.php');

$db = new global_class();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['requestType'])) {
        if ($_POST['requestType'] == 'RemoveReport') {

            $reportID=$_POST['reportId'];
            
            $user = $db->RemoveReport($reportID);
            
            if ($user) {
                echo "success";
            } else {
                echo "Error Messages .";
            }
        }else if ($_POST['requestType'] == 'mark_all_seen') {
            session_start();
            $admin_id = intval($_SESSION['id']); 
        
            $session_account = $db->check_account($admin_id);
            
            $result = $db->mark_all_seen($admin_id);
            
            if ($result) {
                echo "success";
            } else {
                echo "Error Messages .";
            }
        }else if ($_POST['requestType'] == 'AddUser') {

           
            $first_name = $_POST['first_name'];
            $middle_name = $_POST['middle_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $position = $_POST['position'];

           // Hash the password using SHA-256
            $hashed_password = hash('sha256', $password);


            // Call the method
            $user = $db->AddUser($first_name, $middle_name, $last_name, $email, $hashed_password, $position);

            if ($user === "email_exists") {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Email already exists!'
                ]);
            } elseif ($user) {
                echo json_encode([
                    'status' => 'success',
                    'message' => 'User added successfully!',
                    'data' => $user
                ]);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'User addition failed!'
                ]);
            }

            
        } else if ($_POST['requestType'] === "DeleteAdmin") {
            $admin_id = $_POST['admin_id'];
    
            if ($db->DeleteAdmin($admin_id)) {
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Admin deleted successfully!'
                ]);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Failed to delete admin. Please try again!'
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