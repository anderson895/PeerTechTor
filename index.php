<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeerTechtor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="relative min-h-screen bg-cover bg-center flex flex-col items-center justify-center px-4" style="background-image: url('assets/background1.jpg');">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    
    <!-- Header -->
    <header class="absolute top-0 w-full text-white text-center p-3 font-semibold text-xs sm:text-sm md:text-base bg-black bg-opacity-50 hidden sm:block">
        PEERTECHTOR IS A WEBSITE FOCUSED ON COMBATING BULLYING, AIMING TO PROMOTE A SAFER AND MORE SUPPORTIVE SCHOOL ENVIRONMENT.
    </header>

    
    <!-- Logo and Intro -->
    <div class="relative z-10 flex flex-col items-center text-white text-center px-4">
        <img src="assets/logo.webp" alt="PeerTechtor Logo" class="w-20 sm:w-24 mb-6 drop-shadow-lg">
        <h2 class="text-sm sm:text-lg font-semibold max-w-lg leading-relaxed">PeerTechtor is a website focused on combating bullying, aiming to promote a safer and more supportive school environment.</h2>
        
        <!-- Main Title -->
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mt-6 drop-shadow-md">
            Empowering Voices, <br class="hidden sm:block"> Protecting Identities
        </h1>
    </div>

    <!-- Login Cards -->
    <div class="relative z-10 flex items-center justify-center mt-10 w-full">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 w-full max-w-3xl">
            <!-- Admin Card -->
            <div class="flex justify-center">
                <div class="bg-white shadow-xl rounded-xl p-6 w-full max-w-xs text-center hover:scale-105 transition-transform duration-300">
                    <div class="mb-4 text-blue-500">
                        <span class="material-icons text-5xl">admin_panel_settings</span>
                    </div>
                    <h5 class="text-lg font-semibold">Teachers Counselors/Principal</h5>
                    <a href="admin.php" class="mt-4 inline-block bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition">Login As Admin</a>
                </div>
            </div>
            <!-- Faculty Card -->
            <div class="flex justify-center">
                <div class="bg-white shadow-xl rounded-xl p-6 w-full max-w-xs text-center hover:scale-105 transition-transform duration-300">
                    <div class="mb-4 text-green-500">
                        <span class="material-icons text-5xl">school</span>
                    </div>
                    <h5 class="text-lg font-semibold">Student</h5>
                    <a href="student.php" class="mt-4 inline-block bg-green-500 text-white px-5 py-2 rounded-lg hover:bg-green-600 transition">Login As Student</a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
