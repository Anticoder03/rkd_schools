<nav class="w-full  border-t-2 border-0 border-yellow-300 bg-[#062645] text-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-20">

            <!-- Logo + Name -->
            <div class="flex items-center gap-3">
                <img src="assets/images/logo.png" alt="RK Desai College" class="h-12 w-auto">
                <span class="text-xl font-semibold tracking-wide">
                    R K Desai College
                </span>
            </div>

            <!-- Navigation Links -->
            <ul class="hidden md:flex items-center gap-8 font-medium">
                <li class="hover:text-yellow-400 cursor-pointer">
                   <a href="./about.php"> About Us </a>
                </li>
                <!-- <li class="hover:text-yellow-400 cursor-pointer">
                    Admission
                </li> -->

              <li class="relative group cursor-pointer" style="z-index: 1000;">
    <span class="hover:text-yellow-400 flex items-center gap-1">
        Classes <i class="fa-solid fa-chevron-down text-xs"></i>
    </span>

    <!-- Dropdown -->
    <ul class="absolute left-0 top-full mt-3 w-48 bg-white text-gray-800 rounded-md shadow-lg
               opacity-0 invisible group-hover:opacity-100 group-hover:visible
               transition-all duration-200">

        <li>
            <a href="./classes/11-science.php" 
               class="block px-4 py-2 hover:bg-gray-100">
                11th Science
            </a>
        </li>

        <li>
            <a href="./classes/11-comm.php" 
               class="block px-4 py-2 hover:bg-gray-100">
                11th Commerce
            </a>
        </li>

        <li>
            <a href="./classes/12-science.php" 
               class="block px-4 py-2 hover:bg-gray-100">
                12th Science
            </a>
        </li>

        <li>
            <a href="./classes/12-comm.php" 
               class="block px-4 py-2 hover:bg-gray-100">
                12th Commerce
            </a>
        </li>
    </ul>
</li>

                <li class="hover:text-yellow-400 cursor-pointer">
                    <a href="#">Staff Profile</a>
                </li>
                <li class="hover:text-yellow-400 cursor-pointer">
                    Gallery
                </li>
                <li class="hover:text-yellow-400 cursor-pointer">
                    <a href="./contact.php">Contact Us</a>
                </li>
            </ul>

            <!-- Social Icons -->
            <div class="hidden md:flex items-center gap-3">
                <a href="#" class="w-9 h-9 flex items-center justify-center rounded-full bg-[#0b3a66] hover:bg-yellow-400 hover:text-black transition">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="#" class="w-9 h-9 flex items-center justify-center rounded-full bg-[#0b3a66] hover:bg-yellow-400 hover:text-black transition">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#" class="w-9 h-9 flex items-center justify-center rounded-full bg-[#0b3a66] hover:bg-yellow-400 hover:text-black transition">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>

            <!-- Mobile Menu Icon (later) -->
            <button class="md:hidden text-2xl">
                <i class="fa-solid fa-bars"></i>
            </button>

        </div>
    </div>
</nav>
