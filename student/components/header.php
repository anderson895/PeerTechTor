<?php
session_start();
include('backend/class.php');

$db = new global_class();

if (isset($_SESSION['lrn'])) {
    $student_id = intval($_SESSION['id']); 

    // Gamitin ang check_account method
    $result = $db->check_account($student_id);

    if (!empty($result)) {
      
    } else {
       header('location: index.php');
    }
} else {
   header('location: index.php');
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN</title>
  <link rel="icon" type="image/png" href="../assets/logo.webp">
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.css" integrity="sha512-MpdEaY2YQ3EokN6lCD6bnWMl5Gwk7RjBbpKLovlrH6X+DRokrPRAF3zQJl1hZUiLXfo2e9MrOt+udOnHCAmi5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" integrity="sha512-JnjG+Wt53GspUQXQhc+c4j8SBERsgJAoHeehagKHlxQN+MtCCmFDghX9/AcbkkNRZptyZU4zC8utK59M5L45Iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 

</head>
<body class="bg-gray-100 font-sans antialiased">



<?php include "../function/PageSpinner.php"; ?>





  <div class="min-h-screen flex flex-col lg:flex-row">
    
  <!-- Sidebar -->
<aside id="sidebar" class="bg-white shadow-lg w-64 lg:w-1/5 xl:w-1/6 p-6 space-y-6 lg:static fixed inset-y-0 left-0 z-50 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">
  <!-- Hide Sidebar Button -->
  <div class="flex items-center space-x-4 p-4 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
  <img src="../assets/logo.webp" alt="Logo" class="w-20 h-20 rounded-full border-2 border-gray-300 shadow-sm transform transition-transform duration-300 hover:scale-105"> <!-- Logo -->
 
</div>


<nav class="space-y-4 text-left lg:text-left">
    <a href="dashboard.php" class="flex items-center space-x-3 text-gray-600 hover:text-blue-500 hover:bg-gray-100 px-4 py-2 rounded-md transition-all duration-300">
        <span class="material-icons text-xl leading-none">home</span>
        <span>Home</span>
    </a>

    <a href="orderlist.php" class="flex items-center space-x-3 text-gray-600 hover:text-blue-500 hover:bg-gray-100 px-4 py-2 rounded-md transition-all duration-300">
        <span class="material-icons text-xl leading-none">assignment</span>
        <span>Create Report</span>
    </a>

    <a href="return.php" class="flex items-center space-x-3 text-gray-600 hover:text-blue-500 hover:bg-gray-100 px-4 py-2 rounded-md transition-all duration-300">
        <span class="material-icons text-xl leading-none">settings</span>
        <span>Settings</span>
    </a>

    <a href="logout.php">
        <button type="submit" class="flex items-center space-x-3 text-gray-600 hover:text-red-500 hover:bg-gray-100 px-4 py-2 rounded-md transition-all duration-300">
            <span class="material-icons text-xl leading-none">logout</span>
            <span>Logout</span>
        </button>
    </a>
</nav>

</aside>



    <!-- Overlay for Mobile Sidebar -->
    <div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden lg:hidden z-40"></div>

    <!-- Main Content -->
    <main class="flex-1 bg-gray-50 p-8 lg:p-12">
      <!-- Mobile menu button -->
      <button id="menuButton" class="lg:hidden text-gray-700 mb-4">
        <span class="material-icons">menu</span> 
      </button>

   

     