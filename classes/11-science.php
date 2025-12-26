<?php
include_once '../includes/_Head.php';
include_once '../includes/_Topbar.php';
include_once './_Nav.php';
?>

<main>
    <hr>
    <!-- PAGE HEADER -->
    <section class="bg-[#062645] py-16">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">
                11th Science
            </h1>
            <p class="max-w-2xl mx-auto text-gray-200">
                Our 11th Science program is designed to build a strong foundation
                in core scientific concepts and prepare students for higher
                academic challenges.
            </p>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <!-- TEXT -->
                <div class="science-text">
                    <h2 class="text-2xl font-semibold mb-4">
                        About 11th Science
                    </h2>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        The 11th Science curriculum at R.K. Desai School focuses on
                        developing analytical thinking, conceptual clarity, and
                        problem-solving skills. Students are guided by experienced
                        faculty to understand fundamental scientific principles.
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        This program lays the groundwork for competitive exams,
                        higher secondary education, and future careers in science,
                        engineering, medicine, and research.
                    </p>
                </div>

                <!-- IMAGE (OPTIONAL PLACEHOLDER) -->
                <div class="science-img flex justify-center">
                    <img
                        src="../img/11-science.jpg"
                        alt="Science Classroom"
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
                <table class="subject-table w-full border-collapse rounded-xl overflow-hidden shadow-lg">
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
<script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".science-text p", {
        scrollTrigger: {
            trigger: ".science-text",
            start: "top 80%",
        },
        opacity: 0,
        y: 40,
        duration: 1,
        stagger: 0.3,
        ease: "power2.out"
    });

    gsap.from(".science-img img", {
        scrollTrigger: {
            trigger: ".science-img",
            start: "top 80%",
        },
        opacity: 0,
        scale: 0.9,
        duration: 1,
        ease: "power2.out"
    });

    gsap.from(".subject-table tbody tr", {
        scrollTrigger: {
            trigger: ".subject-table",
            start: "top 80%",
        },
        opacity: 0,
        y: 30,
        duration: 0.8,
        stagger: 0.15,
        ease: "power2.out"
    });
</script>
