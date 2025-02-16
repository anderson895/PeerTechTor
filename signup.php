<?php include "components/header.php" ?>
<body class="bg-gray-900  items-center justify-center h-screen">

<?php include "function/PageSpinner.php"; ?>


<div class=" flex items-center justify-center min-h-screen">
  
  <!-- Registration Area -->
  <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg relative">
    
    <!-- Spinner -->
     <div id="spinner" style="display:none;">
        <div class=" absolute inset-0 bg-white bg-opacity-75 flex items-center justify-center">
          <div class="w-10 h-10 border-4 border-indigo-500 border-t-transparent rounded-full animate-spin"></div>
        </div>
     </div>
   

    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Signup</h2>
    
    <form id="FrmRegister" class="space-y-6 p-4">

    <!-- Spinner -->
    <div class="spinner" id="spinner" style="display:none;">
        <div class="absolute inset-0 bg-white bg-opacity-75 flex items-center justify-center">
          <div class="w-10 h-10 border-4 border-indigo-500 border-t-transparent rounded-full animate-spin"></div>
        </div>
     </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div>
          <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
          <input type="text" id="first-name" name="first_name" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500" required>
        </div>
        
        <div>
          <label for="middle-name" class="block text-sm font-medium text-gray-700">Middle Name</label>
          <input type="text" id="middle-name" name="middle_name" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500">
        </div>
        
        <div>
          <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
          <input type="text" id="last-name" name="last_name" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500" required>
        </div>
    </div>

    <div>
        <label for="yr_section" class="block text-sm font-medium text-gray-700">Year & Section</label>
        <input type="text" id="yr_section" name="yr_section" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500" required>
    </div>

    <div>
        <label for="lrn" class="block text-sm font-medium text-gray-700">LRN</label>
        <input type="number" id="lrn" name="lrn" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500" required>
    </div>

    <div>
        <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
        <input type="tel" id="contact" name="contact" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500" required>
    </div>

    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500" required>
    </div>

    <div>
        <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm-password" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500" required>
    </div>

    <button type="submit" id="btnRegister" class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75">Create Account</button>
</form>


    <p class="mt-6 text-center text-sm text-gray-600">
      Already have an account? <a href="student.php" class="text-indigo-600 hover:text-indigo-500" >Log in</a>
    </p>
  </div>

</div>

<?php include "components/footer.php" ?>