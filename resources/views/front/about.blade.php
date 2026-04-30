@extends('front.layouts.app')
@section('content')

@vite(['resources/css/app.css', 'resources/js/app.js'])

<div id="header" class="bg-[#F6F7FA] relative pt-20">

  <div class="container max-w-[1130px] mx-auto px-4 lg:px-0 relative pt-10 z-10">

    <x-navbar />

    <div class="flex flex-col gap-8 lg:gap-[50px] items-center py-14 lg:py-20">

      <!-- Breadcrumb -->
      <div class="breadcrumb flex flex-wrap items-center justify-center gap-3 lg:gap-[30px] text-sm sm:text-base text-center">

        <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">
          Home
        </p>

        <span class="text-cp-light-grey">/</span>

        <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">
          About Us
        </p>

      </div>

      <!-- Heading -->
      <h2 class="font-bold text-3xl sm:text-4xl lg:text-4xl leading-tight lg:leading-[45px] text-center max-w-[850px]">
        Since Beginning We Only <br class="hidden sm:block">
        Want to Make World Better
      </h2>

    </div>

  </div>

</div>

<div id="Abouts" class="container max-w-[1130px] mx-auto px-4 lg:px-0 flex flex-col gap-14 lg:gap-20 mt-16 lg:mt-20">

  @forelse($abouts as $about)

  <div class="about flex flex-col lg:flex-row flex-wrap justify-center items-center gap-8 lg:gap-[60px] even:lg:flex-row-reverse"
    data-aos="zoom-in-up"
    data-aos-delay="{{ ($loop->index % 4) * 200 }}">

    <!-- Image -->
    <div class="w-full max-w-[470px] h-[320px] sm:h-[420px] lg:h-[550px] flex shrink-0 overflow-hidden">

      <img src="{{Storage::url($about->thumbnail)}}"
        class="w-full h-full object-contain"
        alt="thumbnail">

    </div>

    <!-- Content -->
    <div class="flex flex-col gap-6 lg:gap-[30px] py-0 lg:py-[50px] h-fit max-w-[500px] w-full">

      <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue px-[16px] py-[8px] rounded-full uppercase font-bold text-xs lg:text-sm">
        OUR VISIONS
      </p>

      <div class="flex flex-col gap-[10px]">

        <h2 class="font-bold text-3xl sm:text-4xl leading-tight lg:leading-[45px]">
          {{$about->name}}
        </h2>

        <div class="flex flex-col gap-4 lg:gap-5 mt-2">

          @forelse($about->keypoints as $keypoint)

          <div class="flex items-start gap-[10px]">

            <div class="w-5 h-5 lg:w-6 lg:h-6 flex shrink-0 mt-1">
              <img src="assets/icons/tick-circle.svg" alt="icon">
            </div>

            <p class="leading-[24px] lg:leading-[26px] text-sm sm:text-base font-semibold">
              Commit to delivering the highest quality in every project. Set the standard for excellence world
            </p>

          </div>

          @empty
          @endforelse

        </div>

      </div>

    </div>

  </div>

  @empty
  <p>belum ada data terbaru</p>
  @endforelse

</div>
<div id="Clients" class="container max-w-[1130px] mx-auto px-4 lg:px-0 flex flex-col justify-center text-center gap-5 mt-16 lg:mt-20 pt-6 lg:pt-10">

  <!-- Heading -->
  <h2 class="font-bold text-lg sm:text-xl">
    Trusted by Clients & Project Partners
  </h2>

  <!-- Logos -->
  <div class="logo-container grid grid-cols-2 lg:flex lg:flex-wrap gap-4 lg:gap-5 justify-center">

    <div data-aos="fade-up" data-aos-delay="100">
      <div class="logo-card min-h-[68px] w-full lg:w-fit flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center">PT. Fortis Primera</span>
      </div>
    </div>

    <div data-aos="fade-up" data-aos-delay="200">
      <div class="logo-card min-h-[68px] w-full lg:w-fit flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center">PT. Fortuna Kontraktor</span>
      </div>
    </div>

    <div data-aos="fade-up" data-aos-delay="300">
      <div class="logo-card min-h-[68px] w-full lg:w-fit flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center">PT. Imanuel Teknik Sentosa</span>
      </div>
    </div>

    <div data-aos="fade-up" data-aos-delay="400">
      <div class="logo-card min-h-[68px] w-full lg:w-fit flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center">PT. Surya Sukses Maju</span>
      </div>
    </div>

    <div data-aos="fade-up" data-aos-delay="500">
      <div class="logo-card min-h-[68px] w-full lg:w-fit flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center">PT. Tunggak Jati</span>
      </div>
    </div>

    <div data-aos="fade-up" data-aos-delay="600">
      <div class="logo-card min-h-[68px] w-full lg:w-fit flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center">PT. Bayanaka Karya</span>
      </div>
    </div>

    <div data-aos="fade-up" data-aos-delay="700">
      <div class="logo-card min-h-[68px] w-full lg:w-fit flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center">PT. EPKS</span>
      </div>
    </div>

    <div data-aos="fade-up" data-aos-delay="800">
      <div class="logo-card min-h-[68px] w-full lg:w-fit flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center">PT. Duta Bangsa Mandiri</span>
      </div>
    </div>

    <div data-aos="fade-up" data-aos-delay="900">
      <div class="logo-card min-h-[68px] w-full lg:w-fit flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center">PT. Vava Enviro Utama Fiberglass</span>
      </div>
    </div>

    <div data-aos="fade-up" data-aos-delay="1000">
      <div class="logo-card min-h-[68px] w-full lg:w-fit flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center">CV. Alghi Citra Kreasi</span>
      </div>
    </div>

  </div>

</div>
<div id="Stats" class="bg-cp-black w-full mt-16 lg:mt-24">

  <div class="container max-w-[1000px] mx-auto px-4 lg:px-0 py-10">

    <div class="grid grid-cols-2 lg:flex lg:flex-wrap items-center justify-between gap-y-8 gap-x-4 p-[10px]">

      @forelse($statistics as $statistic)
      <div
        class="card w-full lg:w-[200px] flex flex-col items-center gap-[10px] text-center"
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
<div id="Strengths" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20 lg:mt-32 px-4 sm:px-6">

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
      class="bg-cp-black px-5 py-4 w-full sm:w-fit text-center rounded-xl font-bold text-white transition-all duration-300 hover:shadow-[0_12px_30px_0_#312ECB66] hover:-translate-y-1 inline-block">
      Contact Us
    </a>

  </div>

  <div class="awards-card-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-[30px] justify-center">

    <!-- <div data-aos="fade-up" data-aos-delay="50"> -->
    <div class="card bg-white flex flex-col h-full p-6 lg:p-[30px] gap-5 lg:gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue hover:shadow-md transition-all duration-300">
      <div class="w-[55px] h-[55px] flex shrink-0">
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
    <div class="card bg-white flex flex-col h-full p-6 lg:p-[30px] gap-5 lg:gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue hover:shadow-md transition-all duration-300">
      <div class="w-[55px] h-[55px] flex shrink-0">
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
    <div class="card bg-white flex flex-col h-full p-6 lg:p-[30px] gap-5 lg:gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue hover:shadow-md transition-all duration-300">
      <div class="w-[55px] h-[55px] flex shrink-0">
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
    <div class="card bg-white flex flex-col h-full p-6 lg:p-[30px] gap-5 lg:gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue hover:shadow-md transition-all duration-300">
      <div class="w-[55px] h-[55px] flex shrink-0">
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
</div>
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