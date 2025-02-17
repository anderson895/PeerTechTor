<?php include "components/header.php";?>

<div class="container mx-auto p-4 sm:p-6">
    <!-- Header -->
    <h2 class="text-2xl font-semibold text-gray-800 mb-6 sm:mb-12 text-center">Manage Report</h2>

    <div class="bg-white shadow-lg rounded-lg p-4 sm:p-6">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-4 space-y-3 sm:space-y-0">
            <!-- Create Report Button -->
            <button id="Show_create_report_modal" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition w-full sm:w-auto">
                + Create Report
            </button>

            <!-- Search Input -->
            <input type="text" id="searchInput" placeholder="Search campus..." 
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
                        <th class="px-4 sm:px-6 py-3 text-left text-gray-600 font-medium">Sent to</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-gray-600 font-medium">Report Type</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-gray-600 font-medium text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 sm:px-6 py-4">1</td>
                        <td class="px-4 sm:px-6 py-4">January 1, 2025</td>
                        <td class="px-4 sm:px-6 py-4">Juan Dela cruz</td>
                        <td class="px-4 sm:px-6 py-4">
                            <span class="px-3 py-1 text-sm text-green-700 bg-green-100 rounded-full">Active</span>
                        </td>
                        <td class="px-4 sm:px-6 py-4 text-center">
                            <button class="bg-gray-500 text-white px-3 py-1 rounded-lg hover:bg-gray-600 transition w-full sm:w-auto">
                                Edit
                            </button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 transition ml-0 sm:ml-2 w-full sm:w-auto">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

















<!-- Modal -->
<div id="create_report_modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center" style="display:none;">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full sm:max-w-3xl max-h-[90vh] overflow-y-auto flex flex-col justify-between">

        <!-- Spinner -->
        <div class="spinner" style="display:none;">
            <div class=" absolute inset-0 bg-white bg-opacity-75 flex items-center justify-center">
                <div class="w-10 h-10 border-4 border-indigo-500 border-t-transparent rounded-full animate-spin"></div>
            </div>
        </div>

        <h2 class="text-xl font-semibold text-gray-700 mb-4">Create Report</h2>
        <!-- Modal Form for Adding Product -->
        <form id="frmCreateReport">
            <input type="text" placeholder="To" class="w-full border-b-2 p-2 text-gray-700 focus:outline-none">
            <select class="w-full border-b-2 p-2 mt-2 text-gray-700 focus:outline-none">
                <option value="" disabled selected>Select Subject</option>
                <option value="Inquiry">Inquiry</option>
                <option value="Support">Support</option>
                <option value="Feedback">Feedback</option>
                <option value="Other">Other</option>
            </select>
            <textarea placeholder="Compose your email..." class="w-full h-40 border p-2 mt-2 text-gray-700 focus:outline-none rounded-md"></textarea>
           
            <div class="flex items-center mt-4 space-x-2">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Send</button>
                <input type="file" accept="image/*" class="p-2 border rounded-md text-gray-700">
            </div>
        </form>
    </div>
</div>

<?php include "components/footer.php";?>

<!-- JavaScript for Search Function -->
<script src="../function/js/search_table.js"></script>
<script src="../function/js/modal.js"></script>
