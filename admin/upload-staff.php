<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

<?php
include_once "auth.php";
include_once "conn.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $qualification = mysqli_real_escape_string($conn, $_POST['qualification']);

    $uploadDir = "uploads/staff/";
    $fileName = time() . "_" . basename($_FILES["photo"]["name"]);
    $targetFile = $uploadDir . $fileName;

    $imageType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (!in_array($imageType, ["jpg", "jpeg", "png"])) {
        die("Only JPG, JPEG, PNG files allowed.");
    }

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {

        // INSERT INTO DATABASE
        $sql = "INSERT INTO staff (name, position, qualification, photo)
                VALUES ('$name', '$position', '$qualification', '$fileName')";

        if (mysqli_query($conn, $sql)) {
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Staff Uploaded</title>
                <script src="https://cdn.tailwindcss.com"></script>
            </head>
            <body class="bg-gray-100 min-h-screen flex items-center justify-center">

                <div class="bg-white shadow-xl rounded-xl p-8 max-w-md w-full text-center">

                    <h2 class="text-2xl font-bold text-green-600 mb-4">
                        <i class="fa-solid fa-check"></i> Staff Uploaded Successfully
                    </h2>

                    <div class="flex justify-center mb-4">
                        <img src="<?= $targetFile ?>"
                             class="w-40 h-40 object-cover rounded-full border-4 border-green-500">
                    </div>

                    <div class="text-left space-y-2">
                        <p><span class="font-semibold">Name:</span> <?= htmlspecialchars($name) ?></p>
                        <p><span class="font-semibold">Position:</span> <?= htmlspecialchars($position) ?></p>
                        <p><span class="font-semibold">Qualification:</span> <?= htmlspecialchars($qualification) ?></p>
                    </div>

                    <a href="add-staff.php"
                       class="inline-block mt-6 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                        <i class="fa-solid fa-plus"></i> Add Another Staff
                    </a>

                </div>

            </body>
            </html>
            <?php
        } else {
            echo "Database Error: " . mysqli_error($conn);
        }

    } else {
        echo "Error uploading file.";
    }
}
?>
