<?php
include_once "auth.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <nav class="bg-[#062645] text-white px-6 py-4 flex justify-between">
        <h1 class="font-semibold text-lg">Admin Panel</h1>
        <a href="logout.php" class="text-sm hover:underline">Logout</a>
    </nav>

    <main class="p-6">
        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-2xl font-bold mb-4">
                Welcome, Admin 👋
            </h2>
            <p class="text-gray-700">
                This is the admin dashboard. From here you can later manage
                courses, teachers, gallery, and contact messages.
            </p>
        </div>
    </main>

</body>
</html>
