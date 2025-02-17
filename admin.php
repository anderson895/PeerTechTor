<?php include "components/header.php" ?>


<body class="bg-gray-900 flex items-center justify-center h-screen">

<?php include "function/PageSpinner.php"; ?>


    <div class="bg-white shadow-lg rounded-lg w-full max-w-sm p-6">
        <div class="text-center mb-4">
            <a href="index.php">
               <img src="assets/Logos/ICTHS.png" alt="Logo" class="mx-auto w-20">
            </a>
        </div>
        
        <h3 class="text-xl font-semibold text-center mb-4 text-gray-700">
            <i class="bi bi-person-badge"></i> Guidance Counselor/Principal
        </h3>
        
        <form id="frmLoginGuidance">

               <!-- Spinner -->
            <div class="spinner" id="spinner" style="display:none;">
                <div class="absolute inset-0 bg-white bg-opacity-75 flex items-center justify-center">
                    <div class="w-10 h-10 border-4 border-indigo-500 border-t-transparent rounded-full animate-spin"></div>
                </div>
            </div>

            <div class="mb-4">
                <label for="Guidance Counselor/Principal_code" class="block text-gray-600 font-medium">Email</label>
                <div class="flex items-center border border-gray-300 rounded-md overflow-hidden">
                    <span class="px-3 bg-gray-100 text-gray-500"><i class="bi bi-person"></i></span>
                    <input type="email" id="Guidance Counselor/Principal_code" name="email" required placeholder="Enter your email" class="w-full p-2 focus:outline-none">
                </div>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600 font-medium">Password</label>
                <div class="flex items-center border border-gray-300 rounded-md overflow-hidden">
                    <span class="px-3 bg-gray-100 text-gray-500"><i class="bi bi-lock"></i></span>
                    <input type="password" id="password" name="password" required placeholder="Enter your password" class="w-full p-2 focus:outline-none">
                </div>
            </div>
            <div class="mb-4 flex items-center">
                <input type="checkbox" id="rememberMe" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="rememberMe" class="ml-2 text-gray-600">Remember me</label>
            </div>
            <button type="submit" id="btnLoginGuidance" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition">Login</button>
        </form>
        
    </div>
    
    <?php include "components/footer.php" ?>