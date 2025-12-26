<?php
include_once '../includes/_Head.php';
include_once '../includes/_Topbar.php';
include_once './_Nav.php';
?>

<main>

    <!-- PAGE HEADER -->
    <section class="bg-[#062645] py-16">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">
                12th Commerce
            </h1>
            <p class="max-w-2xl mx-auto text-gray-200">
                The 12th Commerce program focuses on in-depth understanding of
                commerce subjects with strong preparation for board examinations
                and future professional studies.
            </p>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <!-- TEXT -->
                <div class="commerce-text">
                    <h2 class="text-2xl font-semibold mb-4">
                        About 12th Commerce
                    </h2>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        The 12th Commerce curriculum at R.K. Desai School is designed
                        to strengthen students’ understanding of business studies,
                        economics, and accountancy with an exam-oriented approach.
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        Students are guided through structured teaching methods,
                        regular evaluations, and practical exposure to prepare
                        them for higher education in commerce, management, and finance.
                    </p>
                </div>

                <!-- IMAGE -->
                <div class="commerce-img flex justify-center">
                    <img
                        src="../img/12-comm.jpg"
                        class="rounded-xl shadow-lg w-full max-w-md"
                    >
                </div>

            </div>
        </div>
    </section>

    <!-- SUBJECTS TABLE -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <div class="mb-10 text-center">
                <p class="text-yellow-500 uppercase tracking-widest mb-2">
                    Curriculum
                </p>
                <h2 class="text-3xl font-bold text-gray-800">
                    Subjects Offered
                </h2>
            </div>

            <div class="overflow-x-auto">
                <table class="commerce-table w-full border-collapse rounded-xl overflow-hidden shadow-lg">
                    <thead class="bg-[#062645] text-white">
                        <tr>
                            <th class="px-6 py-4 text-left">Sr. No</th>
                            <th class="px-6 py-4 text-left">Subject Code</th>
                            <th class="px-6 py-4 text-left">Subject Name</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4">SUB-1</td>
                            <td class="px-6 py-4">Subject 1</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">2</td>
                            <td class="px-6 py-4">SUB-2</td>
                            <td class="px-6 py-4">Subject 2</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">3</td>
                            <td class="px-6 py-4">SUB-3</td>
                            <td class="px-6 py-4">Subject 3</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">4</td>
                            <td class="px-6 py-4">SUB-4</td>
                            <td class="px-6 py-4">Subject 4</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

</main>

<?php
include_once './_Footer.php';
?>

<!-- GSAP ANIMATION SCRIPT -->
<script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".commerce-text p", {
        scrollTrigger: {
            trigger: ".commerce-text",
            start: "top 80%",
        },
        opacity: 0,
        y: 40,
        duration: 1,
        stagger: 0.3,
        ease: "power2.out"
    });

    gsap.from(".commerce-img img", {
        scrollTrigger: {
            trigger: ".commerce-img",
            start: "top 80%",
        },
        opacity: 0,
        scale: 0.9,
        duration: 1,
        ease: "power2.out"
    });

    gsap.from(".commerce-table tbody tr", {
        scrollTrigger: {
            trigger: ".commerce-table",
            start: "top 80%",
        },
        opacity: 0,
        y: 30,
        duration: 0.8,
        stagger: 0.15,
        ease: "power2.out"
    });
</script>
</body>
</html>
