<?php
include_once "./includes/_Head.php";
include_once "./includes/_Topbar.php";
include_once "./includes/_Nav.php";
?>

<hr>
<style>
    #bg-top {
        position: relative;
        background-image: url('https://www.rkdesaicollege.ac.in/assets/images/img-20220604-wa0000.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    #bg-top::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(6, 38, 69, 0.75); /* blue shade */
        z-index: 1;
    }

    #bg-top .content {
        position: relative;
        z-index: 2;
    }
</style>

<main>

    <!-- PAGE HEADER -->
  <section id="bg-top" class="py-16">
        <div class="content max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">
                About Us
            </h1>
            <p class="max-w-2xl mx-auto text-gray-200">
                Learn more about R.K. Desai Memorial Trust and our commitment
                to quality education and holistic student development.
            </p>
        </div>
    </section>

    <!-- ABOUT TRUST SECTION -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                <!-- TEXT -->
                <div class="about-text">
                    <h2 class="text-2xl font-semibold mb-4">
                        R.K. Desai Memorial Trust
                    </h2>

                    <p class="text-gray-700 mb-4 leading-relaxed">
                        R.K. Desai Memorial Trust was established with a vision
                        to provide quality education that combines academic
                        excellence with strong moral and ethical values.
                        The Trust has been actively contributing to the field
                        of education for several years.
                    </p>

                    <p class="text-gray-700 mb-4 leading-relaxed">
                        Our institution focuses on nurturing students intellectually,
                        socially, and emotionally. We believe that education is
                        not merely about textbooks, but about building character,
                        confidence, and responsibility.
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        With experienced faculty members, disciplined academic
                        environment, and student-centric approach, we strive
                        to prepare our students for higher education and future
                        professional challenges.
                    </p>
                </div>

                <!-- IMAGE -->
                <div class="about-img flex justify-center">
                    <img
                        src="https://images.unsplash.com/photo-1588072432836-e10032774350?q=80&w=900"
                        alt="School Campus"
                        class="rounded-xl shadow-lg w-full max-w-md"
                    >
                </div>

            </div>
        </div>
    </section>

    <!-- VISION & MISSION -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <div class="mb-14 text-center">
                <p class="text-yellow-500 uppercase tracking-widest mb-2">
                    Our Purpose
                </p>
                <h2 class="text-3xl font-bold text-gray-800">
                    Vision & Mission
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                <!-- VISION -->
                <div class="vm-card bg-gray-50 rounded-xl p-8 shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">
                        Our Vision
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        To become a leading educational institution that empowers
                        students with knowledge, discipline, and values, enabling
                        them to become responsible citizens and future leaders.
                    </p>
                </div>

                <!-- MISSION -->
                <div class="vm-card bg-gray-50 rounded-xl p-8 shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">
                        Our Mission
                    </h3>
                    <p class="text-gray-700 leading-relaxed">
                        To provide quality education through experienced faculty,
                        modern teaching methodologies, and a supportive learning
                        environment that encourages academic excellence and
                        holistic development.
                    </p>
                </div>

            </div>
        </div>
    </section>

</main>

<?php
include_once "./includes/_Footer.php";
?>

<!-- GSAP ANIMATION -->
<script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".about-text p", {
        scrollTrigger: {
            trigger: ".about-text",
            start: "top 80%",
        },
        opacity: 0,
        y: 40,
        duration: 1,
        stagger: 0.25,
        ease: "power2.out"
    });

    gsap.from(".about-img img", {
        scrollTrigger: {
            trigger: ".about-img",
            start: "top 80%",
        },
        opacity: 0,
        scale: 0.9,
        duration: 1,
        ease: "power2.out"
    });

    gsap.from(".vm-card", {
        scrollTrigger: {
            trigger: ".vm-card",
            start: "top 85%",
        },
        opacity: 0,
        y: 30,
        duration: 0.8,
        stagger: 0.2,
        ease: "power2.out"
    });
</script>

</body>
</html>
