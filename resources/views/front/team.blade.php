@extends('front.layouts.app')
@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- HEADER SECTION: Background banner with navigation -->
<div id="header" class="bg-[#F6F7FA] relative h-[420px] sm:h-[500px] lg:h-[600px] -mb-[250px] sm:-mb-[320px] lg:-mb-[388px]">
    <div class="container max-w-[1130px] mx-auto px-4 sm:px-6 lg:px-0 relative pt-6 sm:pt-10 z-60">
        <x-navbar />
    </div>
</div>

<!-- TEAMS SECTION -->
<div id="Teams" class="w-full px-4 sm:px-6 lg:px-[10px] relative z-10">
    <div class="container max-w-[1130px] mx-auto flex flex-col gap-[40px] lg:gap-[50px] items-center">

        <!-- Heading -->
        <div class="flex flex-col gap-[30px] lg:gap-[50px] items-center text-center">

            <div class="breadcrumb flex flex-wrap items-center justify-center gap-3 sm:gap-[30px] text-sm sm:text-base">
                <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
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

<!-- STATISTICS SECTION -->
<div id="Stats" class="bg-cp-black w-full mt-16 lg:mt-20">

    <div class="container max-w-[1000px] mx-auto px-4 lg:px-0 py-8 lg:py-10">

        <div class="grid grid-cols-2 lg:flex lg:flex-wrap items-center justify-between gap-y-8 gap-x-4 p-[10px]">

            @forelse($statistics as $statistic)

            <div class="card w-full lg:w-[200px] flex flex-col items-center gap-[10px] text-center">

                <div class="w-[45px] h-[45px] lg:w-[55px] lg:h-[55px] flex shrink-0 overflow-hidden">
                    <img src="{{Storage::url($statistic->icon)}}" class="object-contain w-full h-full" alt="icon">
                </div>

                <p class="text-cp-pale-orange font-bold text-2xl sm:text-3xl lg:text-4xl leading-tight lg:leading-[54px]">
                    {{$statistic->goal}}
                </p>

                <p class="text-cp-light-grey text-sm lg:text-base leading-tight">
                    {{$statistic->name}}
                </p>

            </div>

            @empty
            <p>belum ada data terbaru</p>
            @endforelse

        </div>

    </div>

</div>



<!-- STRENGTHS SECTION -->
<div id="Strengths" class="container max-w-[1130px] mx-auto px-4 lg:px-0 flex flex-col gap-[24px] lg:gap-[30px] mt-16 lg:mt-20">

    <!-- Header -->
    <div class="flex flex-col gap-4">

        <div class="flex flex-col gap-[14px]">

            <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue px-[16px] py-[8px] rounded-full uppercase font-bold text-xs lg:text-sm">
                OUR STRENGTHS
            </p>

            <h2 class="font-bold text-3xl sm:text-4xl leading-tight lg:leading-[45px]">
                Why Clients Trust<br>
                Our Team Performance
            </h2>

        </div>

    </div>

    <!-- Cards -->
    <div class="awards-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-[30px] justify-center">

        <!-- Card 1 -->
        <div class="card bg-white flex flex-col h-full p-5 lg:p-[30px] gap-5 lg:gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue hover:shadow-md transition-all duration-300">

            <div class="w-[45px] h-[45px] lg:w-[55px] lg:h-[55px] flex shrink-0">
                <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
            </div>

            <hr class="border-[#E8EAF2]">

            <p class="font-bold text-lg lg:text-xl leading-tight lg:leading-[30px]">
                Certified & Skilled Workforce
            </p>

            <hr class="border-[#E8EAF2]">

            <p class="text-cp-light-grey text-sm lg:text-base">
                Experienced field team with strong technical capability.
            </p>

        </div>

        <!-- Card 2 -->
        <div class="card bg-white flex flex-col h-full p-5 lg:p-[30px] gap-5 lg:gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue hover:shadow-md transition-all duration-300">

            <div class="w-[45px] h-[45px] lg:w-[55px] lg:h-[55px] flex shrink-0">
                <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
            </div>

            <hr class="border-[#E8EAF2]">

            <p class="font-bold text-lg lg:text-xl leading-tight lg:leading-[30px]">
                On-Time Project Delivery
            </p>

            <hr class="border-[#E8EAF2]">

            <p class="text-cp-light-grey text-sm lg:text-base">
                Efficient planning and execution to meet deadlines.
            </p>

        </div>

        <!-- Card 3 -->
        <div class="card bg-white flex flex-col h-full p-5 lg:p-[30px] gap-5 lg:gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue hover:shadow-md transition-all duration-300">

            <div class="w-[45px] h-[45px] lg:w-[55px] lg:h-[55px] flex shrink-0">
                <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
            </div>

            <hr class="border-[#E8EAF2]">

            <p class="font-bold text-lg lg:text-xl leading-tight lg:leading-[30px]">
                Safety First Culture
            </p>

            <hr class="border-[#E8EAF2]">

            <p class="text-cp-light-grey text-sm lg:text-base">
                Committed to workplace safety in every operation.
            </p>

        </div>

        <!-- Card 4 -->
        <div class="card bg-white flex flex-col h-full p-5 lg:p-[30px] gap-5 lg:gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue hover:shadow-md transition-all duration-300">

            <div class="w-[45px] h-[45px] lg:w-[55px] lg:h-[55px] flex shrink-0">
                <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
            </div>

            <hr class="border-[#E8EAF2]">

            <p class="font-bold text-lg lg:text-xl leading-tight lg:leading-[30px]">
                Quality Control Standards
            </p>

            <hr class="border-[#E8EAF2]">

            <p class="text-cp-light-grey text-sm lg:text-base">
                Consistent supervision to ensure high-quality results.
            </p>

        </div>

    </div>

</div>

<!-- CTA (CALL-TO-ACTION) SECTION: Encourages users to contact for services -->
<div class="w-full bg-cp-pale-blue mt-16 lg:mt-20">

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

<!-- FOOTER SECTION: Company info, links, and social media -->
<footer class="bg-cp-black w-full relative overflow-hidden mt-20">

    <div class="container max-w-[1130px] mx-auto flex flex-col lg:flex-row gap-10 lg:gap-y-4 lg:items-center lg:justify-between px-4 sm:px-6 pt-16 lg:pt-[100px] pb-16 lg:pb-[220px] relative z-60">

        <!-- Left Side -->
        <div class="flex flex-col gap-8 lg:gap-10 items-center lg:items-start text-center lg:text-left">

            <div class="flex items-center gap-3 justify-center lg:justify-start">
                <div class="flex shrink-0 h-[43px] overflow-hidden">
                    <img src="{{asset('assets/logo/edbsicon.svg')}}" class="object-contain w-full h-full" alt="logo">
                </div>

                <div class="flex flex-col">
                    <p id="CompanyName" class="font-extrabold text-xl leading-[30px] text-white">
                        EDBS
                    </p>
                    <p id="CompanyTagline" class="text-sm text-cp-light-grey">
                        PT. Etika Dharma Bangun Sarana
                    </p>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <a href="https://www.youtube.com/">
                    <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                        <img src="{{asset('assets/icons/youtube.svg')}}" class="w-full h-full object-contain" alt="youtube">
                    </div>
                </a>

                <a href="https://wa.me/">
                    <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                        <img src="{{asset('assets/icons/whatsapp.svg')}}" class="w-full h-full object-contain" alt="whatsapp">
                    </div>
                </a>

                <a href="https://www.facebook.com/">
                    <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                        <img src="{{asset('assets/icons/facebook.svg')}}" class="w-full h-full object-contain" alt="facebook">
                    </div>
                </a>

                <a href="https://www.instagram.com/">
                    <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                        <img src="{{asset('assets/icons/instagram.svg')}}" class="w-full h-full object-contain" alt="instagram">
                    </div>
                </a>
            </div>

        </div>

        <!-- Right Side Links -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-[50px] w-full lg:w-auto text-center sm:text-left">

            <!-- Products -->
            <div class="flex flex-col sm:w-[200px] gap-3">
                <p class="font-bold text-lg text-white">Products</p>
                <a href="general-contract.html" class="text-cp-light-grey hover:text-white transition-all duration-300">General Contract</a>
                <a href="building-assessment.html" class="text-cp-light-grey hover:text-white transition-all duration-300">Building Assessment</a>
                <a href="3d-paper-builder.html" class="text-cp-light-grey hover:text-white transition-all duration-300">3D Paper Builder</a>
                <a href="legal-constructions.html" class="text-cp-light-grey hover:text-white transition-all duration-300">Legal Constructions</a>
            </div>

            <!-- Company -->
            <div class="flex flex-col sm:w-[200px] gap-3">
                <p class="font-bold text-lg text-white">Company</p>
                <a href="{{route('front.about')}}" class="text-cp-light-grey hover:text-white transition-all duration-300">About Us</a>
                <a href="{{route('front.team')}}" class="text-cp-light-grey hover:text-white transition-all duration-300">Our Team</a>
                <a href="{{route('front.product')}}" class="text-cp-light-grey hover:text-white transition-all duration-300">Projects</a>
                <a href="{{route('front.appointment')}}" class="text-cp-light-grey hover:text-white transition-all duration-300">Contact</a>
            </div>

            <!-- Useful Links -->
            <div class="flex flex-col sm:w-[200px] gap-3 sm:col-span-2 lg:col-span-1">
                <p class="font-bold text-lg text-white">Useful Links</p>
                <a href="privacy-policy.html" class="text-cp-light-grey hover:text-white transition-all duration-300">Privacy & Policy</a>
                <a href="terms-conditions.html" class="text-cp-light-grey hover:text-white transition-all duration-300">Terms & Conditions</a>
                <a href="{{route('front.appointment')}}" class="text-cp-light-grey hover:text-white transition-all duration-300">Contact Us</a>
            </div>

        </div>

    </div>

    <!-- Background Text -->
    <div class="absolute bottom-0 w-full pointer-events-none">
        <p class="font-extrabold text-[70px] sm:text-[110px] lg:text-[250px] leading-none lg:leading-[375px] text-center text-white opacity-5">
            EDBS
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