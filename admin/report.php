<?php include "components/header.php";?>

<div class="container mx-auto p-4 sm:p-6">
    <!-- Header -->
    <h2 class="text-2xl font-semibold text-gray-800 mb-6 sm:mb-12 text-center">Manage Report</h2>

    <div class="bg-white shadow-lg rounded-lg p-4 sm:p-6">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-4 space-y-3 sm:space-y-0">
           

            <!-- Search Input -->
            <input type="text" id="searchInput" placeholder="Search report..." 
                class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400 w-full sm:w-auto"
                onkeyup="searchTable()">
        </div>

        <!-- Table Wrapper -->
        <div class="overflow-x-auto">
            <table id="campusTable" class="w-full border-collapse bg-white shadow-sm rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 sm:px-6 py-3 text-left text-gray-600 font-medium">#</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-gray-600 font-medium">Date</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-gray-600 font-medium">From</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-gray-600 font-medium">Report Type</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-gray-600 font-medium">Message Content</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-gray-600 font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php  include "backend/end-points/report_list.php"; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


















<?php include "components/footer.php";?>
<script src="assets/js/mark_as_seen.js"></script>