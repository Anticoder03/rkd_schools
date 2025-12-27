<?php
include_once 'includes/_Head.php';
include_once 'includes/_Topbar.php';
include_once 'includes/_Nav.php';
include_once 'includes/db.php';
?>

<main class="py-16 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        <!-- PAGE HEADER -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-bold mb-3">
                Our Staff
            </h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Meet our experienced and dedicated faculty members.
            </p>
        </div>

        <?php
        // Fetch unique positions
        $posSql = "SELECT DISTINCT position FROM staff ORDER BY position";
        $posResult = $conn->query($posSql);

        while ($posRow = $posResult->fetch_assoc()):
            $position = $posRow['position'];
        ?>

        <!-- POSITION TITLE -->
        <h2 class="text-2xl font-semibold mt-16 mb-8 border-l-4 border-yellow-400 pl-4">
            <?= htmlspecialchars($position) ?>
        </h2>

        <!-- STAFF CARDS GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

            <?php
            $staffSql = "SELECT name, qualification, photo 
                         FROM staff 
                         WHERE position = ? 
                         ORDER BY name";

            $stmt = $conn->prepare($staffSql);
            $stmt->bind_param("s", $position);
            $stmt->execute();
            $staffResult = $stmt->get_result();

            while ($staff = $staffResult->fetch_assoc()):
            ?>

            <!-- STAFF CARD -->
            <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition">

                <img
                    src="admin/uploads/staff/<?= htmlspecialchars($staff['photo']) ?>"
                    alt="<?= htmlspecialchars($staff['name']) ?>"
                    class="w-32 h-32 mx-auto rounded-full object-cover border-4 border-yellow-400 mb-4"
                >

                <h3 class="text-lg font-semibold text-gray-800">
                    <?= htmlspecialchars($staff['name']) ?>
                </h3>

                <p class="text-sm text-blue-700 font-medium mt-1">
                    <?= htmlspecialchars($position) ?>
                </p>

                <p class="text-sm text-gray-600 mt-2">
                    <?= htmlspecialchars($staff['qualification']) ?>
                </p>

            </div>

            <?php endwhile; ?>

        </div>

        <?php endwhile; ?>

    </div>

</main>

<?php
include_once 'includes/_Footer.php';
?>
