<nav id="navbar"
    class="fixed top-0 left-1/2 -translate-x-1/2 w-[100%] max-w-[100%] bg-white  shadow-[0_6px_20px_0_#312ECB33] z-50 transition-all duration-500 ease-in-out2">

    <!-- <div class="flex items-center justify-between px-4 sm:px-6 py-4"> -->
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6 lg:px-8 py-4">

        <!-- Logo -->
        <div class="flex items-center gap-3 min-w-0">
            <div class="flex shrink-0 h-[38px] sm:h-[43px] overflow-hidden" data-aos="fade-right" data-aos-delay="100">
                <img src="assets/logo/edbsicon.svg" class="object-contain w-full h-full" alt="logo">
            </div>

            <div class="flex flex-col leading-tight min-w-0">
                <p id="CompanyName" class="font-extrabold text-base sm:text-xl truncate" data-aos="fade-left" data-aos-delay="200">
                    EDBS
                </p>
                <p id="CompanyTagline" class="text-[11px] sm:text-sm text-cp-light-grey truncate" data-aos="fade-left" data-aos-delay="300">
                    PT. Etika Dharma Bangun Sarana
                </p>
            </div>
        </div>

        <!-- Desktop Menu -->
        <ul class="hidden lg:flex items-center gap-12">

            <li class="{{request()->routeIs('front.index') ? 'text-cp-dark-blue' : ''}} font-semibold hover:text-cp-red transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <a href="{{route('front.index')}}">Home</a>
            </li>

            <li class="{{request()->routeIs('front.product') ? 'text-cp-dark-blue' : ''}} font-semibold hover:text-cp-red transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <a href="{{route('front.product')}}">Projects</a>
            </li>

            <li class="{{request()->routeIs('front.team') ? 'text-cp-dark-blue' : ''}} font-semibold hover:text-cp-red transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <a href="{{route('front.team')}}">Company</a>
            </li>

            <li class="{{request()->routeIs('front.about') ? 'text-cp-dark-blue' : ''}} font-semibold hover:text-cp-red transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <a href="{{route('front.about')}}">About</a>
            </li>

        </ul>

        <!-- Desktop CTA -->
        <a href="{{route('front.appointment')}}"
            class="hidden lg:flex bg-cp-dark-blue px-5 py-3 rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">
            Get a Quote
        </a>

        <!-- Mobile Button -->
        <!-- <button id="menuBtn"
            class="lg:hidden w-11 h-11 flex items-center justify-center rounded-xl border border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button> -->

        <button id="menu-btn"
            class="lg:hidden w-14 h-14 rounded-2xl border border-gray-300 flex items-center justify-center relative">

            <div class="relative w-6 h-6">

                <span id="line1"
                    class="absolute left-0 top-1 w-6 h-0.5 bg-[#0B0B45] rounded transition-all duration-300">
                </span>

                <span id="line2"
                    class="absolute left-0 top-3 w-6 h-0.5 bg-[#0B0B45] rounded transition-all duration-300">
                </span>

                <span id="line3"
                    class="absolute left-0 top-5 w-6 h-0.5 bg-[#0B0B45] rounded transition-all duration-300">
                </span>

            </div>
        </button>

    </div>

    <!-- Mobile Menu -->
    <!-- <div id="mobile-menu"
        class="hidden lg:hidden px-4 pb-4 border-t border-gray-100"> -->
    <div
        id="mobile-menu"
        class="lg:hidden max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out px-6">
        <div class="flex flex-col gap-3 pt-4">

            <a href="{{route('front.index')}}"
                class="font-semibold py-2">Home</a>

            <a href="{{route('front.product')}}"
                class="font-semibold py-2">Projects</a>

            <a href="{{route('front.team')}}"
                class="font-semibold py-2">Company</a>

            <a href="{{route('front.about')}}"
                class="font-semibold py-2">About</a>

            <a href="{{route('front.appointment')}}"
                class="mt-2 bg-cp-dark-blue text-white font-bold rounded-xl px-5 py-3 text-center">
                Get a Quote
            </a>

        </div>

    </div>

</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const btn = document.getElementById("menuBtn");
        const menu = document.getElementById("mobileMenu");

        btn.addEventListener("click", function() {
            menu.classList.toggle("hidden");
        });
    });
</script>