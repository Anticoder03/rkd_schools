<?php
include_once 'includes/_Head.php';
include_once 'includes/_Topbar.php';
include_once 'includes/_Nav.php';
?>

<hr>

<main class="bg-gray-50">

    <!-- PAGE HEADER -->
    <section class="bg-[#062645] py-16">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">
                Gallery
            </h1>
            <p class="max-w-2xl mx-auto text-gray-200">
                A glimpse of academic life, events, and activities at
                R.K. Desai School.
            </p>
        </div>
    </section>

    <!-- GALLERY SECTION -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-6">

            <!-- GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <!-- IMAGE CARD -->
                <?php
                // TEMP images (replace later with DB-driven images)
                $images = [
                    "https://images.unsplash.com/photo-1524995997946-a1c2e315a42f",
                    "https://images.unsplash.com/photo-1588072432836-e10032774350",
                    "https://images.unsplash.com/photo-1509062522246-3755977927d7",
                    "https://images.unsplash.com/photo-1523240795612-9a054b0db644",
                    "https://images.unsplash.com/photo-1513258496099-48168024aec0",
                    "https://images.unsplash.com/photo-1531482615713-2afd69097998",
                    "https://images.unsplash.com/photo-1554224155-6726b3ff858f",
                    "https://images.unsplash.com/photo-1581091215367-59ab6c1d6c8d"
                ];

                foreach ($images as $img):
                ?>
                <div class="group relative overflow-hidden rounded-xl shadow-lg bg-white">
                    <img
                        src="<?= $img ?>?q=80&w=800"
                        alt="School Gallery"
                        class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500"
                    >

                    <!-- OVERLAY -->
                    <div class="absolute inset-0 bg-black/40 opacity-0 
                                group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white text-sm tracking-widest uppercase">
                            View
                        </span>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

        </div>
    </section>

</main>

<?php
include_once 'includes/_Footer.php';
?>
