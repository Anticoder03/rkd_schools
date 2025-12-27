<?php
include_once "auth.php";
?>
<?php
include_once "auth.php";
include_once "_Navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Staff Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    

    <main class="p-6 max-w-3xl mx-auto">

        <div class="bg-white p-8 rounded-xl shadow">
            <h2 class="text-2xl font-bold mb-6">
                Add Staff Profile
            </h2>

            <form action="upload-staff.php" method="POST" enctype="multipart/form-data" class="space-y-5">

                <div>
                    <label class="block mb-1 font-medium">Staff Photo</label>
                    <input type="file" name="photo" required
                           class="w-full border px-3 py-2 rounded-md">
                </div>

                <div>
                    <label class="block mb-1 font-medium">Full Name</label>
                    <input type="text" name="name" placeholder="Enter staff name" required
                           class="w-full border px-4 py-2 rounded-md">
                </div>

                <div>
                    <label class="block mb-1 font-medium">Position</label>
                    <input type="text" name="position" placeholder="e.g. Physics Teacher" required
                           class="w-full border px-4 py-2 rounded-md">
                </div>

                <div>
                    <label class="block mb-1 font-medium">Qualification</label>
                    <input type="text" name="qualification" placeholder="e.g. M.Sc, B.Ed" required
                           class="w-full border px-4 py-2 rounded-md">
                </div>

                <button type="submit"
                        class="bg-[#062645] text-white px-6 py-3 rounded-md hover:bg-gray-800 transition">
                    Upload Staff Profile
                </button>

            </form>
        </div>

    </main>

</body>
</html>
