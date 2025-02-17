<?php include "components/header.php";?>

<div class="container mx-auto p-4 sm:p-6">
    <!-- Header -->
    <h2 class="text-2xl font-semibold text-gray-800 mb-6 sm:mb-12 text-center">Dashboard</h2>

    <!-- Dashboard Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
    <!-- Card for Total Customer -->
    <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center">
        <img src="assets/images/icon/students.png" alt="students icon" class="mb-4 w-12 max-w-full" />
        <h3 class="text-gray-700 font-semibold text-lg">Total Student</h3>
        <p class="text-blue-500 text-2xl font-bold count_users">3</p>
    </div>

    <!-- Card for Total Sales -->
    <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center">
        <img src="assets/images/icon/document.png" alt="students icon" class="mb-4 w-12 max-w-full" />
        <h3 class="text-gray-700 font-semibold text-lg">Total Reports</h3>
        <p class="text-blue-500 text-2xl font-bold totalSales">0</p>
    </div>

   
</div>





<?php include "components/footer.php";?>
