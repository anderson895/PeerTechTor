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

            
            $result = $db->mark_all_seen();
            
            if ($result) {
                echo "success";
            } else {
                echo "Error Messages .";
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