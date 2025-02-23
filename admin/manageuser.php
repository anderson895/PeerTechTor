<?php include "components/header.php";?>

<div class="container mx-auto p-4 sm:p-6">
    <!-- Header -->
    <h2 class="text-2xl font-semibold text-gray-800 mb-6 sm:mb-12 text-center">Manage User</h2>

    <div class="bg-white shadow-lg rounded-lg p-4 sm:p-6">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-4 space-y-3 sm:space-y-0">
            <!-- Create Report Button -->
            <button id="Show_addUser_modal" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition w-full sm:w-auto">
                + Add User
            </button>

            <!-- Search Input -->
            <input type="text" id="searchInput" placeholder="Search..." 
                class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400 w-full sm:w-auto"
                onkeyup="searchTable()">
        </div>

        <!-- Table Wrapper -->
        <div class="overflow-x-auto">
            <table id="campusTable" class="w-full border-collapse bg-white shadow-sm rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 sm:px-6 py-3 text-left text-gray-600 font-medium">#</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-gray-600 font-medium">Name</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-gray-600 font-medium">Email</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-gray-600 font-medium">Position</th>
                        <th class="px-4 sm:px-6 py-3 text-left text-gray-600 font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php  include "backend/end-points/user_list.php"; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

















<!-- Modal -->
<div id="addUser_modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center" style="display:none;">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full sm:max-w-3xl max-h-[90vh] overflow-y-auto flex flex-col justify-between">

        <!-- Spinner -->
        <div class="spinner" style="display:none;">
            <div class="absolute inset-0 bg-white bg-opacity-75 flex items-center justify-center">
                <div class="w-10 h-10 border-4 border-indigo-500 border-t-transparent rounded-full animate-spin"></div>
            </div>
        </div>

        <h2 class="text-xl font-semibold text-gray-700 mb-4">Add user</h2>
        <!-- Modal Form for Adding User -->
        <form id="frmAddUser" class="space-y-4">
            <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" id="first_name" name="first_name" class="mt-1 p-2 w-full border rounded-lg" required>
            </div>
            
            <div>
                <label for="middle_name" class="block text-sm font-medium text-gray-700">Middle Name (Optional)</label>
                <input type="text" id="middle_name" name="middle_name" class="mt-1 p-2 w-full border rounded-lg">
            </div>
            
            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" id="last_name" name="last_name" class="mt-1 p-2 w-full border rounded-lg" required>
            </div>
            
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-lg" required>
            </div>
            
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-lg" required>
            </div>
            
            <div>
                <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                <select id="position" name="position" class="mt-1 p-2 w-full border rounded-lg" required>
                    <option value="">Select Position</option>
                    <option value="super admin">Super admin</option>
                    <option value="guidance Counselor">Guidance Counselor</option>
                    <option value="principal">Principal</option>
                </select>
            </div>
            
            <div class="flex justify-end">
                <button type="submit" id="btnAddStudent" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add</button>
            </div>
        </form>
    </div>
</div>

<?php include "components/footer.php";?>


<script src='assets/js/manage_user.js'></script>
<script src='../function/js/search_table.js'></script>
