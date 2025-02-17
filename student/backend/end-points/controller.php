<?php
include('../class.php');

$db = new global_class();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['requestType'])) {
        if ($_POST['requestType'] == 'CreateReport') {

            if (isset($_FILES['imagesProof']) && $_FILES['imagesProof']['error'] == 0) {
                $uploadedFile = $_FILES['imagesProof'];
                $uploadDir = '../../../upload_messages/';
                
                // Get the original file extension
                $fileExtension = pathinfo($uploadedFile['name'], PATHINFO_EXTENSION);
                
                // Generate a unique file name using a timestamp and a random unique ID
                $uniqueFileName = uniqid('report_', true) . '.' . $fileExtension;
                $uploadFilePath = $uploadDir . $uniqueFileName;
            
                // Ensure the directory exists
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
            
                // Move the uploaded file to the target directory
                if (move_uploaded_file($uploadedFile['tmp_name'], $uploadFilePath)) {
                    $imagesProof = $uniqueFileName; // Store the unique file name
                } else {
                    $imagesProof = null; // File upload failed
                }
            } else {
                $imagesProof = null; // No file uploaded
            }
            
            // Collect other form data
            $IDsentFrom = $_POST['IDsentFrom'];
            $IDsentTo = $_POST['IDsentTo'];
            $bullyingType = $_POST['bullyingType'];
            $messages = $_POST['messages'];
            
            // Insert the car record into the database
            $user = $db->CreateReport($IDsentFrom,$IDsentTo, $bullyingType, $messages,$imagesProof);
            
            if ($user) {
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