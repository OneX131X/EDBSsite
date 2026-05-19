<nav id="navbar"
    class="fixed top-0 left-1/2 -translate-x-1/2 w-[100%] max-w-[100%] bg-white shadow-[0_6px_20px_0_#312ECB33] z-100 transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] backdrop-blur-xl bg-white/80 ">

    <div id="navbar-inner" class="max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6 lg:px-8 py-2 sm:py-4">

        <!-- Logo -->
         <a href="{{route('front.index')}}">
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
         </a>

        <!-- Desktop Menu -->
        <ul class="hidden lg:flex items-center gap-12">
            <li
                class="{{request()->routeIs('front.index') ? 'text-cp-dark-blue' : ''}}
               font-semibold transition-all duration-300"
                data-aos="fade-in"
                data-aos-delay="100">
                <a href="{{route('front.index')}}"
                    class="group relative h-6 overflow-hidden inline-flex">
                    <span class="flex flex-col transition-transform duration-300 ease-out group-hover:-translate-y-6">
                        <span class="h-6 hover:text-cp-red">
                            Home
                        </span>
                        <span class="h-6 text-cp-red">
                            Home
                        </span>
                    </span>
                </a>
            </li>
            <li
                class="{{request()->routeIs('front.product') ? 'text-cp-dark-blue' : ''}}
               font-semibold transition-all duration-300"
                data-aos="fade-in"
                data-aos-delay="200">
                <a href="{{route('front.product')}}"
                    class="group relative h-6 overflow-hidden inline-flex">
                    <span class="flex flex-col transition-transform duration-300 ease-out group-hover:-translate-y-6">
                        <span class="h-6 hover:text-cp-red">
                            Projects
                        </span>
                        <span class="h-6 text-cp-red">
                            Projects
                        </span>
                    </span>
                </a>
            </li>
            <li
                class="{{request()->routeIs('front.team') ? 'text-cp-dark-blue' : ''}}
               font-semibold transition-all duration-300"
                data-aos="fade-in"
                data-aos-delay="300">
                <a href="{{route('front.team')}}"
                    class="group relative h-6 overflow-hidden inline-flex">
                    <span class="flex flex-col transition-transform duration-300 ease-out group-hover:-translate-y-6">
                        <span class="h-6 hover:text-cp-red">
                            Company
                        </span>
                        <span class="h-6 text-cp-red">
                            Company
                        </span>
                    </span>
                </a>
            </li>
            <li
                class="{{request()->routeIs('front.about') ? 'text-cp-dark-blue' : ''}}
               font-semibold transition-all duration-300"
                data-aos="fade-in"
                data-aos-delay="400">
                <a href="{{route('front.about')}}"
                    class="group relative h-6 overflow-hidden inline-flex">
                    <span class="flex flex-col transition-transform duration-300 ease-out group-hover:-translate-y-6">
                        <span class="h-6 hover:text-cp-red">
                            About
                        </span>
                        <span class="h-6 text-cp-red">
                            About
                        </span>
                    </span>
                </a>
            </li>
        </ul>

        <!-- Desktop CTA -->
        <a href="{{route('front.appointment')}}"
            class="hidden lg:flex bg-cp-dark-blue px-5 py-3 rounded-xl hover:shadow-[0_2px_20px_0_#312ECB66] transition-all duration-300 font-bold text-white">
            Get a Quote
        </a>

        <!-- Mobile Button -->
        <button id="menu-btn"
            class="lg:hidden w-10 h-4 sm:w-14 sm:h-14 flex items-center justify-center relative">

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