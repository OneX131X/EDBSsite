@extends('front.layouts.app')
@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- HEADER SECTION: Background banner with navigation -->
<div id="header" class="bg-[#F6F7FA] relative h-[600px] -mb-[388px]">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
        <x-navbar />
    </div>
</div>

<!-- TEAMS SECTION: Displays team members in a grid with breadcrumb and description -->
<div id="Teams" class="w-full px-[10px] relative z-10">
    <div class="container max-w-[1130px] mx-auto flex flex-col gap-[50px] items-center">
        <!-- Breadcrumb and Section Title -->
        <div class="flex flex-col gap-[50px] items-center">
            <div class="breadcrumb flex items-center justify-center gap-[30px]">
                <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
                <span class="text-cp-light-grey">/</span>
                <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Team</p>
            </div>
            <h2 class="font-bold text-4xl leading-[45px] text-center">Meet the Team Behind <br> Every Successful Project</h2>
            <p class="text-cp-light-grey text-center">
                Our engineers, supervisors, and project specialists work together to <br> deliver safe, efficient, and high-quality construction solutions across every project.
            </p>
        </div>

        <!-- Team Cards Grid: Loops through team members and displays their info -->
        <div class="teams-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px] justify-center">
            @forelse($teams as $team)
            <div class="card bg-white flex flex-col h-full justify-center items-center p-[30px] px-[29px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-dark-blue transition-all duration-300">
                <!-- Team Member Avatar -->
                <div class="w-[100px] h-[100px] flex shrink-0 items-center justify-center rounded-full bg-[linear-gradient(150.55deg,_#007AFF_8.72%,_#312ECB_87.11%)]">
                    <div class="w-[90px] h-[90px] rounded-full overflow-hidden">
                        <img src="{{Storage::url($team->avatar)}}" class="object-cover w-full h-full object-center" alt="photo">
                    </div>
                </div>
                <!-- Team Member Name and Occupation -->
                <div class="flex flex-col gap-1 text-center">
                    <p class="font-bold text-xl leading-[30px]">{{$team->name}}</p>
                    <p class="text-cp-light-grey">{{$team->occupation}}</p>
                </div>
                <!-- Team Member Location -->
                <div class="flex items-center justify-center gap-[10px]">
                    <div class="w-6 h-6 flex shrink-0">
                        <img src="assets/icons/global.svg" alt="icon">
                    </div>
                    <p class="text-cp-dark-blue font-semibold">{{$team->location}}</p>
                </div>
            </div>
            @empty
            <p>belum ada data team terbaru</p>
            @endforelse
        </div>
    </div>
</div>

<!-- STATISTICS SECTION: Dark background showing company achievements/metrics -->
<div id="Stats" class="bg-cp-black w-full mt-20">
    <div class="container max-w-[1000px] mx-auto py-10">
        <div class="flex flex-wrap items-center justify-between p-[10px]">
            <!-- Stat Cards: Displays achievements like projects, years, etc -->
            @forelse($statistics as $statistic)
            <div class="card w-[200px] flex flex-col items-center gap-[10px] text-center">
                <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
                    <img src="{{Storage::url($statistic->icon)}}" class="object-contain w-full h-full" alt="icon">
                </div>
                <p class="text-cp-pale-orange font-bold text-4xl leading-[54px]">
                    {{$statistic->goal}}
                </p>
                <p class="text-cp-light-grey">
                    {{$statistic->name}}
                </p>
            </div>
            @empty
            <p>belum ada data terbaru</p>
            @endforelse
        </div>
    </div>
</div>

<!-- STRENGTHS SECTION: Showcases company strengths with 4 feature cards -->
<div id="Strengths" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
    <!-- Section Header with Badge and Title -->
    <div class="flex items-center justify-between">
        <div class="flex flex-col gap-[14px]">
            <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR STRENGTHS</p>
            <h2 class="font-bold text-4xl leading-[45px]">Why Clients Trust<br>Our Team Performance</h2>
        </div>
    </div>

    <!-- Strengths Cards Grid: 4 cards showing key strengths -->
    <div class="awards-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px] justify-center">
        <!-- Strength Card 1: Certified & Skilled Workforce -->
        <div class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue hover:shadow-md transition-all duration-300">
            <div class="w-[55px] h-[55px] flex shrink-0">
                <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
            </div>
            <hr class="border-[#E8EAF2]">
            <p class="font-bold text-xl leading-[30px]">Certified & Skilled Workforce</p>
            <hr class="border-[#E8EAF2]">
            <p class="text-cp-light-grey">Experienced field team with strong technical capability.</p>
        </div>

        <!-- Strength Card 2: On-Time Project Delivery -->
        <div class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue hover:shadow-md transition-all duration-300">
            <div class="w-[55px] h-[55px] flex shrink-0">
                <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
            </div>
            <hr class="border-[#E8EAF2]">
            <p class="font-bold text-xl leading-[30px]">On-Time Project Delivery</p>
            <hr class="border-[#E8EAF2]">
            <p class="text-cp-light-grey">Efficient planning and execution to meet deadlines.</p>
        </div>

        <!-- Strength Card 3: Safety First Culture -->
        <div class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue hover:shadow-md transition-all duration-300">
            <div class="w-[55px] h-[55px] flex shrink-0">
                <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
            </div>
            <hr class="border-[#E8EAF2]">
            <p class="font-bold text-xl leading-[30px]">Safety First Culture</p>
            <hr class="border-[#E8EAF2]">
            <p class="text-cp-light-grey">Committed to workplace safety in every operation.</p>
        </div>

        <!-- Strength Card 4: Quality Control Standards -->
        <div class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue hover:shadow-md transition-all duration-300">
            <div class="w-[55px] h-[55px] flex shrink-0">
                <img src="{{asset('assets/icons/cup-blue.svg')}}" alt="icon">
            </div>
            <hr class="border-[#E8EAF2]">
            <p class="font-bold text-xl leading-[30px]">Quality Control Standards</p>
            <hr class="border-[#E8EAF2]">
            <p class="text-cp-light-grey">Consistent supervision to ensure high-quality results.</p>
        </div>
    </div>
</div>

<!-- CTA (CALL-TO-ACTION) SECTION: Encourages users to contact for services -->
<div class="w-full bg-cp-pale-blue mt-20">
    <div class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] py-20">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-between gap-20 w-full">
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
                <!-- CTA Button: Links to appointment booking -->
                <div class="flex-shrink-0 ml-auto">
                    <a href="{{route('front.appointment')}}" class="bg-cp-dark-blue hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 hover:border-cp-red p-[30px] px-[29px] gap-[30px] w-fit rounded-xl font-bold text-white">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER SECTION: Company info, links, and social media -->
<footer class="bg-cp-black w-full relative overflow-hidden mt-20">
    <div class="container max-w-[1130px] mx-auto flex flex-wrap gap-y-4 items-center justify-between pt-[100px] pb-[220px] relative z-10">
        <!-- Footer Left: Company Logo and Social Links -->
        <div class="flex flex-col gap-10">
            <!-- Company Branding -->
            <div class="flex items-center gap-3">
                <div class="flex shrink-0 h-[43px] overflow-hidden">
                    <img src="assets/logo/edbsicon.svg" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex flex-col">
                    <p id="CompanyName" class="font-extrabold text-xl leading-[30px] text-white">EDBS</p>
                    <p id="CompanyTagline" class="text-sm text-cp-light-grey">PT. Etika Dharma Bangun Sarana</p>
                </div>
            </div>
            <!-- Social Media Links -->
            <div class="flex items-center gap-4">
                <a href="">
                    <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                        <img src="assets/icons/youtube.svg" class="w-full h-full object-contain" alt="youtube">
                    </div>
                </a>
                <a href="">
                    <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                        <img src="assets/icons/whatsapp.svg" class="w-full h-full object-contain" alt="whatsapp">
                    </div>
                </a>
                <a href="">
                    <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                        <img src="assets/icons/facebook.svg" class="w-full h-full object-contain" alt="facebook">
                    </div>
                </a>
                <a href="">
                    <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                        <img src="assets/icons/instagram.svg" class="w-full h-full object-contain" alt="instagram">
                    </div>
                </a>
            </div>
        </div>

        <!-- Footer Right: Navigation Links (Products, Company, Useful Links) -->
        <div class="flex flex-wrap gap-[50px]">
            <!-- Products Column -->
            <div class="flex flex-col w-[200px] gap-3">
                <p class="font-bold text-lg text-white">Products</p>
                <a href="general-contract.html" class="text-cp-light-grey hover:text-white transition-all duration-300">General Contract</a>
                <a href="building-assessment.html" class="text-cp-light-grey hover:text-white transition-all duration-300">Building Assessment</a>
                <a href="3d-paper-builder.html" class="text-cp-light-grey hover:text-white transition-all duration-300">3D Paper Builder</a>
                <a href="legal-constructions.html" class="text-cp-light-grey hover:text-white transition-all duration-300">Legal Constructions</a>
            </div>

            <!-- Company Column -->
            <div class="flex flex-col w-[200px] gap-3">
                <p class="font-bold text-lg text-white">Company</p>
                <a href="{{route('front.about')}}" class="text-cp-light-grey hover:text-white transition-all duration-300">About Us</a>
                <a href="{{route('front.team')}}" class="text-cp-light-grey hover:text-white transition-all duration-300">Our Team</a>
                <a href="{{route('front.product')}}" class="text-cp-light-grey hover:text-white transition-all duration-300">Projects</a>
                <a href="{{route('front.appointment')}}" class="text-cp-light-grey hover:text-white transition-all duration-300">Contact</a>
            </div>

            <!-- Useful Links Column -->
            <div class="flex flex-col w-[200px] gap-3">
                <p class="font-bold text-lg text-white">Useful Links</p>
                <a href="privacy-policy.html" class="text-cp-light-grey hover:text-white transition-all duration-300">Privacy & Policy</a>
                <a href="terms-conditions.html" class="text-cp-light-grey hover:text-white transition-all duration-300">Terms & Conditions</a>
                <a href="{{route('front.appointment')}}" class="text-cp-light-grey hover:text-white transition-all duration-300">Contact Us</a>
            </div>
        </div>
    </div>

    <!-- Footer Background Watermark: Large "EDBS" text in background -->
    <div class="absolute -bottom-[135px] w-full">
        <p class="font-extrabold text-[250px] leading-[375px] text-center text-white opacity-5">EDBS</p>
    </div>
</footer>

@endsection