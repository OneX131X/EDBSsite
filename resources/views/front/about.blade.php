@extends('front.layouts.app')
@section('content')

@vite(['resources/css/app.css', 'resources/js/app.js'])

<div id="page-content" class="relative z-10 bg-[#FFFFFF] mb-[100vh] lg:mb-[506px] min-h-screen">
  <div id="header" class="bg-[#F6F7FA] relative pt-20">

    <div class="container max-w-[1130px] mx-auto px-4 lg:px-0 relative pt-10 z-10">

      <x-navbar />

      <div class="flex flex-col gap-8 lg:gap-[50px] items-center py-14 lg:py-20">

        <!-- Breadcrumb -->
        <div class="breadcrumb flex flex-wrap items-center justify-center gap-3 lg:gap-[30px] text-sm sm:text-base text-center">

          <a href="{{ route('front.index') }}" class="text-cp-light-grey hover:text-white transition-all duration-300">
            Home
          </a>

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

  <div id="Abouts" class="max-w-screen mx-auto px-4 lg:px-0 flex flex-col gap-14 lg:gap-20 mt-16 lg:mt-28">

    @forelse($abouts as $about)
    <div class="product flex flex-col lg:flex-row
              items-center
              gap-[70px] lg:gap-[70px]
              even:lg:flex-row-reverse
              lg:w-fit
              lg:odd:mr-auto lg:odd:ml-20
              lg:even:ml-auto lg:even:mr-20">

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

  <div id="Clients" class="max-w-screen mx-auto px-4 lg:px-0 flex flex-col justify-center text-center gap-5 mt-16 lg:mt-20 pt-6 lg:pt-10">

    <!-- Heading -->
    <h2 class="font-bold text-lg sm:text-xl">
      Trusted by Clients & Project Partners
    </h2>

    <!-- Logos Slider -->
    <div class="overflow-hidden relative w-full">

      <div class="logo-track flex items-center gap-4 lg:gap-5 w-max">


        <div data-aos="fade-up" data-aos-delay="100">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Fortis Primera</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="200">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Fortuna Kontraktor</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="300">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Imanuel Teknik Sentosa</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="400">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Surya Sukses Maju</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="500">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Tunggak Jati</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="600">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Bayanaka Karya</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="700">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. EPKS</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="800">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Duta Bangsa Mandiri</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="900">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Vava Enviro Utama Fiberglass</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">CV. Alghi Citra Kreasi</span>
          </div>
        </div>

        <!-- DUPLICATE ITEMS FOR INFINITE LOOP -->

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Fortis Primera</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Fortuna Kontraktor</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Imanuel Teknik Sentosa</span>
          </div>
        </div>


        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Surya Sukses Maju</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Tunggak Jati</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Bayanaka Karya</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. EPKS</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Duta Bangsa Mandiri</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Vava Enviro Utama Fiberglass</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">CV. Alghi Citra Kreasi</span>
          </div>
        </div>

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

  <div class="w-full py-16 lg:py-2 px-4 sm:px-6 mt-4 relative border-b border-[#df4846]"></div>
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
      Website developed by Kurniawan Rasyidi
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