<?php
// Include the class
include('../class.php');

// Get search term if exists
$searchTerm = isset($_GET['query']) ? $_GET['query'] : '';

// Create class instance and fetch admin account data
$class = new global_class();
$class->fetch_Admin_account($searchTerm);


?>
