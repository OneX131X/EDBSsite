@extends('front.layouts.app')
@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<div id="page-content" class="relative z-10 bg-[#FFFFFF] mb-[100vh] lg:mb-[506px] min-h-screen">
    <div id="header" class="bg-[#F6F7FA] relative pt-10 lg:pt-20 border-b border-[#312ECB]">
        <div class="container max-w-[1130px] mx-auto px-4 sm:px-6 lg:px-0 relative pt-6 sm:pt-10">
            <x-navbar />

            <div class="flex flex-col gap-8 sm:gap-[50px] items-center py-14 sm:py-20">

                <!-- Heading -->
                <div class="flex flex-col gap-[30px] lg:gap-[50px] items-center text-center">

                    <div class="breadcrumb flex flex-wrap items-center justify-center gap-3 sm:gap-[30px] text-sm sm:text-base">
                        <a href="{{ route('front.index') }}" class="text-cp-light-grey hover:text-white transition-all duration-300">Home</a>
                        <span class="text-cp-light-grey">/</span>
                        <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Team</p>
                    </div>

                    <h2 class="font-bold text-3xl sm:text-4xl leading-tight lg:leading-[45px]">
                        Meet the Team Behind <br class="hidden sm:block">
                        Every Successful Project
                    </h2>

                    <p class="text-cp-light-grey text-sm sm:text-base leading-7 sm:leading-[30px] max-w-[800px]">
                        Our engineers, supervisors, and project specialists work together to
                        <br class="hidden sm:block">
                        deliver safe, efficient, and high-quality construction solutions across every project.
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div id="Teams" class="w-full py-10 lg:py-10 px-4 lg:px-[10px] mt-10 lg:mt-20">
        <div class="container max-w-[1130px] mx-auto flex flex-col gap-[40px] lg:gap-[50px] items-center">


            <!-- Team Cards -->
            <div class="teams-card-container grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-[30px] justify-center w-full">

                @forelse($teams as $team)
                <div
                    data-aos="fade-up"
                    data-aos-delay="{{ min($loop->iteration * 100, 400) }}">

                    <div class="card bg-white flex flex-col h-full justify-center items-center p-4 sm:p-5 lg:p-[30px] gap-4 lg:gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-dark-blue transition-all duration-300">

                        <!-- Avatar -->
                        <div class="w-[72px] h-[72px] sm:w-[85px] sm:h-[85px] lg:w-[100px] lg:h-[100px] flex shrink-0 items-center justify-center rounded-full bg-[linear-gradient(150.55deg,_#007AFF_8.72%,_#312ECB_87.11%)]">
                            <div class="w-[64px] h-[64px] sm:w-[76px] sm:h-[76px] lg:w-[90px] lg:h-[90px] rounded-full overflow-hidden">
                                <img src="{{Storage::url($team->avatar)}}"
                                    class="object-cover w-full h-full object-center"
                                    alt="photo">
                            </div>
                        </div>

                        <!-- Info -->
                        <div class="flex flex-col gap-1 text-center">
                            <p class="font-bold text-base sm:text-lg lg:text-xl leading-tight">
                                {{$team->name}}
                            </p>
                            <p class="text-cp-light-grey text-xs sm:text-sm lg:text-base">
                                {{$team->occupation}}
                            </p>
                        </div>

                        <!-- Location -->
                        <div class="flex items-center justify-center gap-2 text-center">
                            <div class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 flex shrink-0">
                                <img src="assets/icons/global.svg" alt="icon">
                            </div>
                            <p class="text-cp-dark-blue font-semibold text-xs sm:text-sm lg:text-base break-words">
                                {{$team->location}}
                            </p>
                        </div>

                    </div>
                </div>
                @empty
                <p>belum ada data team terbaru</p>
                @endforelse

            </div>
        </div>
    </div>

    <div id="Stats" class="bg-cp-black w-full mt-16 lg:mt-24">

        <div class="container max-w-[1000px] mx-auto px-4 lg:px-0 py-10">

            <div class="grid grid-cols-2 place-items-center lg:flex lg:flex-wrap items-center justify-between gap-y-8 gap-x-6 p-[10px]">

                @forelse($statistics as $statistic)
                @php
                $isLastOdd = $loop->last && $loop->count % 2 !== 0;
                @endphp
                <div
                    class="card flex flex-col items-center gap-[10px] text-center w-fit
             {{ $isLastOdd ? 'col-span-2 justify-self-center' : '' }}"
                    data-aos="zoom-in"
                    data-aos-delay="{{ min($loop->iteration * 100, 400) }}">

                    <div class="w-[50px] h-[50px] lg:w-[55px] lg:h-[55px] flex shrink-0 overflow-hidden">
                        <img src="{{Storage::url($statistic->icon)}}"
                            class="object-contain w-full h-full"
                            alt="icon">
                    </div>

                    <p class="text-cp-pale-orange font-bold text-2xl sm:text-3xl lg:text-4xl leading-tight lg:leading-[54px]">
                        {{$statistic->goal}}
                    </p>

                    <p class="text-cp-light-grey text-sm sm:text-base leading-relaxed">
                        {{$statistic->name}}
                    </p>

                </div>
                @empty
                <p class="text-white text-center col-span-full">belum ada data terbaru</p>
                @endforelse

            </div>

        </div>

    </div>

    <div id="Strengths" class="container w-full mx-auto flex flex-col gap-[30px] mt-20 lg:mt-32 px-4 sm:px-6">

        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

            <div class="flex flex-col gap-[14px] text-center lg:text-left">
                <p class="badge w-fit mx-auto lg:mx-0 bg-cp-pale-blue text-cp-light-blue px-4 py-2 rounded-full uppercase font-bold text-xs sm:text-sm">
                    OUR STRENGTHS
                </p>

                <h2 class="font-bold text-2xl sm:text-3xl lg:text-4xl leading-snug lg:leading-[45px]">
                    Why Clients Trust<br class="hidden lg:block">
                    Our Team Performance
                </h2>
            </div>

            <a href="{{route('front.appointment')}}"
                class="bg-cp-black px-5 py-4 w-[50%] sm:w-fit text-center rounded-lg font-bold text-white transition-all duration-300 hover:shadow-[0_12px_30px_0_#312ECB66] hover:-translate-y-1 inline-block mx-auto sm:mx-0">
                Contact Us
            </a>

        </div>

        <!-- Awards Card Container -->
        <!-- <div data-aos="fade-up" data-aos-delay="50"> -->
        <div class="awards-card-container 
                grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 
                gap-2 lg:gap-[60px] 
                mt-10 lg:mt-16 
                items-start">

            <!-- <div data-aos="fade-up" data-aos-delay="50"> -->
            <div class="card 
                bg-white flex flex-col h-full 
                p-6 lg:p-[30px] 
                gap-5 lg:gap-[30px] 
                rounded-[10px] 
                border border-[#FFFFFF]
                hover:border-cp-dark-blue 
                transition-all duration-500">
                <div class="w-[55px] h-[55px] flex shrink-0 mx-auto items-center justify-center rounded-2xl bg-cp-pale-blue/30">
                    <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-lg lg:text-xl leading-snug lg:leading-[30px]">
                    Certified & Skilled Workforce
                </p>
                <hr class="border-[#E8EAF2]">
                <p class="text-sm sm:text-base text-cp-light-grey leading-relaxed">
                    Experienced field team with strong technical capability.
                </p>
            </div>
            <!-- </div> -->

            <!-- <div data-aos="fade-up" data-aos-delay="100"> -->
            <div class="card 
                bg-white flex flex-col h-full 
                p-6 lg:p-[30px] 
                gap-5 lg:gap-[30px] 
                rounded-[10px] 
                border border-[#FFFFFF]
                hover:border-cp-dark-blue 
                transition-all duration-500">
                <div class="w-[55px] h-[55px] flex shrink-0 mx-auto items-center justify-center rounded-2xl bg-cp-pale-blue/30">
                    <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-lg lg:text-xl leading-snug lg:leading-[30px]">
                    On-Time Project Delivery
                </p>
                <hr class="border-[#E8EAF2]">
                <p class="text-sm sm:text-base text-cp-light-grey leading-relaxed">
                    Efficient planning and execution to meet deadlines.
                </p>
            </div>
            <!-- </div> -->

            <!-- <div data-aos="fade-up" data-aos-delay="150"> -->
            <div class="card 
                bg-white flex flex-col h-full 
                p-6 lg:p-[30px] 
                gap-5 lg:gap-[30px] 
                rounded-[10px] 
                border border-[#FFFFFF]
                hover:border-cp-dark-blue 
                transition-all duration-500">
                <div class="w-[55px] h-[55px] flex shrink-0 mx-auto items-center justify-center rounded-2xl bg-cp-pale-blue/30">
                    <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-lg lg:text-xl leading-snug lg:leading-[30px]">
                    Safety First Culture
                </p>
                <hr class="border-[#E8EAF2]">
                <p class="text-sm sm:text-base text-cp-light-grey leading-relaxed">
                    Committed to workplace safety in every operation.
                </p>
            </div>
            <!-- </div> -->

            <!-- <div data-aos="fade-up" data-aos-delay="200"> -->
            <div class="card 
                bg-white flex flex-col h-full 
                p-6 lg:p-[30px] 
                gap-5 lg:gap-[30px] 
                rounded-[10px] 
                border border-[#FFFFFF]
                hover:border-cp-dark-blue 
                transition-all duration-500">
                <div class="w-[55px] h-[55px] flex shrink-0 mx-auto items-center justify-center rounded-2xl bg-cp-pale-blue/30">
                    <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-lg lg:text-xl leading-snug lg:leading-[30px]">
                    Quality Control Standards
                </p>
                <hr class="border-[#E8EAF2]">
                <p class="text-sm sm:text-base text-cp-light-grey leading-relaxed">
                    Consistent supervision to ensure high-quality results.
                </p>
            </div>
            <!-- </div> -->

        </div>
        <!-- </div> -->
    </div>

    <div id="Cta" class="w-full bg-cp-pale-blue mt-16 lg:mt-20 relative border-b border-[#df4846]">

        <div class="container max-w-[1130px] mx-auto px-4 lg:px-0 py-12 lg:py-20">

            <div class="flex flex-col gap-[30px]">

                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8 lg:gap-20 w-full">

                    <!-- CTA Text Content -->
                    <div class="text-cp-dark-blue max-w-[720px]">

                        <p class="text-xs sm:text-sm font-bold uppercase tracking-wider">
                            Ready To Start?
                        </p>

                        <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold leading-tight mt-2">
                            Need a Reliable Team for Your Next Project?
                        </h3>

                        <p class="text-sm sm:text-base leading-relaxed mt-3">
                            Contact PT. Etika Dharma Bangun Sarana for trusted civil,
                            building, and industrial construction solutions.
                        </p>

                    </div>

                    <!-- CTA Button -->
                    <div class="w-full lg:w-auto">

                        <a href="{{route('front.appointment')}}"
                            class="bg-cp-dark-blue px-6 py-4 lg:p-[30px] lg:px-[29px] w-full lg:w-fit text-center rounded-xl font-bold text-white transition-all duration-300 hover:shadow-[0_12px_30px_0_#312ECB66] hover:-translate-y-1 inline-block">

                            Contact Us

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<footer
    class="fixed bottom-0 left-0
       z-0 bg-cp-black
       w-full h-full lg:h-[515px] overflow-hidden">

    <div class="container max-w-screen mx-auto px-3 sm:px-6 pt-10 lg:pt-24 pb-4 lg:pb-24 relative">

        <div class="grid grid-cols-1 lg:grid-cols-[1.5fr_0.4fr_1fr] gap-5 lg:gap-20">

            <!-- LEFT -->
            <div class="flex flex-col items-center lg:items-start text-center lg:text-left">

                <!-- Logo -->
                <div class="flex items-center gap-3">

                    <div class="flex shrink-0 h-[45px] overflow-hidden">
                        <img
                            src="{{asset('assets/logo/edbsicon.svg')}}"
                            class="object-contain w-full h-full"
                            alt="logo">
                    </div>

                    <div class="flex flex-col leading-tight">
                        <p
                            id="CompanyName"
                            class="font-extrabold text-xl text-white text-left">
                            EDBS
                        </p>

                        <p
                            id="CompanyTagline"
                            class="text-sm text-white/60">
                            PT. Etika Dharma Bangun Sarana
                        </p>
                    </div>
                </div>

                <!-- Description -->
                <p class="mt-6 text-sm leading-7 text-white/60 max-w-[420px]">
                    PT. Etika Dharma Bangun Sarana provides reliable civil,
                    industrial, and infrastructure construction solutions with
                    strong commitment to quality, safety, and professionalism.
                </p>

                <!-- Social -->
                <div class="flex items-center gap-4 mt-4">
                    <a href="https://www.youtube.com/"
                        class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-white/10 transition-all duration-300">
                        <div class="w-5 h-5 flex shrink-0 overflow-hidden">
                            <img
                                src="{{asset('assets/icons/youtube.svg')}}"
                                class="w-full h-full object-contain"
                                alt="youtube">
                        </div>
                    </a>

                    <a href="https://wa.me/"
                        class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-white/10 transition-all duration-300">

                        <div class="w-5 h-5 flex shrink-0 overflow-hidden">
                            <img
                                src="{{asset('assets/icons/whatsapp.svg')}}"
                                class="w-full h-full object-contain"
                                alt="whatsapp">
                        </div>
                    </a>

                    <a href="https://www.facebook.com/"
                        class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-white/10 transition-all duration-300">
                        <div class="w-5 h-5 flex shrink-0 overflow-hidden">
                            <img
                                src="{{asset('assets/icons/facebook.svg')}}"
                                class="w-full h-full object-contain"
                                alt="facebook">
                        </div>
                    </a>

                    <a href="https://www.instagram.com/"
                        class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-white/10 transition-all duration-300">
                        <div class="w-5 h-5 flex shrink-0 overflow-hidden">
                            <img
                                src="{{asset('assets/icons/instagram.svg')}}"
                                class="w-full h-full object-contain"
                                alt="instagram">
                        </div>
                    </a>
                </div>
            </div>

            <!-- QUICK LINKS -->
            <div class="flex flex-col items-center lg:items-start text-center lg:text-left mb-2">
                <p class="font-bold text-lg text-white mb-3 lg:mb-5">
                    Quick Links
                </p>

                <div class="flex flex-col gap-1 lg:gap-4">

                    <a href="{{route('front.index')}}"
                        class="group relative h-6 overflow-hidden lg:inline-flex">
                        <span class="flex flex-col transition-all duration-300 ease-out group-hover:-translate-y-6">
                            <span class="h-6 text-white/60">
                                Home
                            </span>
                            <span class="h-6 text-cp-pale-orange">
                                Home
                            </span>
                        </span>
                    </a>

                    <a href="{{route('front.product')}}"
                        class="group relative h-6 overflow-hidden lg:inline-flex">
                        <span class="flex flex-col transition-all duration-300 ease-out group-hover:-translate-y-6">
                            <span class="h-6 text-white/60">
                                Projects
                            </span>
                            <span class="h-6 text-cp-pale-orange">
                                Projects
                            </span>
                        </span>
                    </a>

                    <a href="{{route('front.team')}}"
                        class="group relative h-6 overflow-hidden lg:inline-flex">
                        <span class="flex flex-col transition-all duration-300 ease-out group-hover:-translate-y-6">
                            <span class="h-6 text-white/60">
                                Company
                            </span>
                            <span class="h-6 text-cp-pale-orange">
                                Company
                            </span>
                        </span>
                    </a>

                    <a href="{{route('front.about')}}"
                        class="group relative h-6 overflow-hidden lg:inline-flex">
                        <span class="flex flex-col transition-all duration-300 ease-out group-hover:-translate-y-6">
                            <span class="h-6 text-white/60">
                                About Us
                            </span>
                            <span class="h-6 text-cp-pale-orange">
                                About Us
                            </span>
                        </span>
                    </a>

                </div>
            </div>

            <!-- CONTACT -->
            <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
                <p class="font-bold text-lg text-white mb-3 lg:mb-5">
                    Contact
                </p>

                <div class="flex flex-col gap-1 lg:gap-4 text-white/60 leading-7">
                    <p>
                        Surabaya, Indonesia
                    </p>
                    <p>
                        info@edbs.co.id
                    </p>
                    <p>
                        +62 812-3456-7890
                    </p>
                    <a
                        href="{{route('front.appointment')}}"
                        class="text-cp-pale-orange hover:text-white transition-all duration-300">
                        Get a Quote →
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Background Watermark -->
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 pointer-events-none select-none">
        <p class="font-extrabold text-[150px] sm:text-[150px] lg:text-[260px] leading-none text-white/[0.03]">
            EDBS
        </p>
    </div>

    <!-- Bottom -->
    <!-- Divider -->
    <div class="container w-[100%] h-px bg-white/10 mb-8 mt-4"></div>
    <div class="flex flex-col items-center justify-center gap-1 lg:gap-2 text-center">

        <p class="text-[11px] sm:text-xs text-white/35">
            © 2026 PT. Etika Dharma Bangun Sarana
        </p>

        <p class="text-[10px] sm:text-xs text-white/20 hover:text-white/40 transition-all duration-300">
            Website developed by Kurniawan Rasyidi [onex131x]
        </p>
    </div>

</footer>

<div id="video-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full inset-0 px-4 py-6">

    <div class="relative w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-2xl overflow-hidden shadow-lg">

            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 sm:p-5 border-b">
                <h3 class="text-base sm:text-xl font-semibold text-cp-black pr-4">
                    Company Profile Video
                </h3>

                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center shrink-0"
                    onclick="{modal.hide()}">

                    <svg class="w-3 h-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>

                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <!-- Modal body -->
            <div class="w-full">
                <iframe id="videoFrame"
                    class="w-full aspect-video"
                    src=""
                    title="Company Profile Video"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            </div>

        </div>
    </div>
</div>

<button id="toTop"
    class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 hidden w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-white text-cp-red border border-gray-200 shadow-xl z-50 hover:-translate-y-1 hover:scale-110 transition-all duration-300 flex items-center justify-center">

    <svg xmlns="http://www.w3.org/2000/svg"
        class="w-5 h-5 sm:w-6 sm:h-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M5 15l7-7 7 7" />
    </svg>

</button>

@endsection