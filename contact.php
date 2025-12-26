<?php
include_once "./includes/_Head.php";
include_once "./includes/_Topbar.php";
include_once "./includes/_Nav.php";
?>

<main>
<hr>
    <!-- PAGE HEADER -->
    <section class="bg-[#062645] py-16">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">
                Contact Us
            </h1>
            <p class="max-w-2xl mx-auto text-gray-200">
                Get in touch with R.K. Desai School for admissions, inquiries,
                or any academic-related information.
            </p>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

                <!-- CONTACT INFO -->
                <div class="contact-info">
                    <h2 class="text-2xl font-semibold mb-6">
                        Contact Information
                    </h2>

                    <ul class="space-y-5 text-gray-700">
                        <li class="flex gap-4">
                            <i class="fa-solid fa-location-dot text-xl text-yellow-500 mt-1"></i>
                            <span>
                                R.K. Desai School,<br>
                                Valsad, Gujarat, India
                            </span>
                        </li>

                        <li class="flex gap-4">
                            <i class="fa-solid fa-phone text-xl text-yellow-500 mt-1"></i>
                            <span>+91 260 2421963</span>
                        </li>

                        <li class="flex gap-4">
                            <i class="fa-regular fa-envelope text-xl text-yellow-500 mt-1"></i>
                            <span>rkd_bca@yahoo.com</span>
                        </li>

                        <li class="flex gap-4">
                            <i class="fa-regular fa-clock text-xl text-yellow-500 mt-1"></i>
                            <span>Office Hours: 8:30 AM – 3:30 PM</span>
                        </li>
                    </ul>
                </div>

                <!-- CONTACT FORM -->
                <div class="contact-form bg-white p-8 rounded-xl shadow-lg">
                    <h2 class="text-2xl font-semibold mb-6">
                        Send Us a Message
                    </h2>

                    <form action="#" method="post" class="space-y-5">
                        <div>
                            <label class="block text-sm mb-1">Full Name</label>
                            <input type="text" placeholder="Your Name"
                                   class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        </div>

                        <div>
                            <label class="block text-sm mb-1">Email Address</label>
                            <input type="email" placeholder="Your Email"
                                   class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        </div>

                        <div>
                            <label class="block text-sm mb-1">Message</label>
                            <textarea rows="4" placeholder="Your Message"
                                      class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
                        </div>

                        <button type="submit"
                                class="bg-[#062645] text-white px-6 py-3 rounded-md hover:bg-yellow-400 hover:text-black transition">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- GOOGLE MAP -->
    <section class="bg-white">
        <iframe
            class="w-full h-[400px]"
            src="https://www.google.com/maps?q=Valsad,Gujarat&output=embed"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </section>

</main>

<?php
include_once "./includes/_Footer.php";
?>

<!-- GSAP ANIMATION -->
<script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".contact-info li", {
        scrollTrigger: {
            trigger: ".contact-info",
            start: "top 80%",
        },
        opacity: 0,
        x: -40,
        duration: 1,
        stagger: 0.2,
        ease: "power2.out"
    });

    gsap.from(".contact-form", {
        scrollTrigger: {
            trigger: ".contact-form",
            start: "top 80%",
        },
        opacity: 0,
        y: 40,
        duration: 1,
        ease: "power2.out"
    });
</script>

</body>
</html>
