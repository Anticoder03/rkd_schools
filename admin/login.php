<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === "admin" && $password === "admin03") {
        $_SESSION['admin_logged_in'] = true;
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-sm">
        <h2 class="text-2xl font-bold text-center mb-6">Admin Login</h2>

        <?php if ($error): ?>
            <p class="text-red-500 text-sm mb-4 text-center">
                <?= $error ?>
            </p>
        <?php endif; ?>

        <form method="POST" class="space-y-4">
            <input type="text" name="username" placeholder="Username"
                   class="w-full border px-4 py-2 rounded-md" required>

            <input type="password" name="password" placeholder="Password"
                   class="w-full border px-4 py-2 rounded-md" required>

            <button type="submit"
                    class="w-full bg-[#062645] text-white py-2 rounded-md hover:bg-gray-800">
                Login
            </button>
        </form>
    </div>

</body>
</html>
