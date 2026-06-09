@extends('front.layouts.app')
@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<div id="page-content" class="relative z-10 bg-[#FFFFFF] mb-[100vh] lg:mb-[506px] min-h-screen">
  <div id="header"
    class="bg-[#F6F7FA] relative overflow-hidden
           h-[100vh] flex items-center pt-5 sm:pt-28 lg:pt-14 lg:pb-20">

    @forelse($hero_section as $hero)

    <input type="hidden" name="path_video" id="path_video" value="{{$hero->path_video}}">

    <div
      class="container max-w-[1130px] mx-auto
             relative
             px-4 lg:px-0
             pt-0 lg:pt-10">

      <x-navbar />

      <!-- HERO -->
      <div id="Hero"
        class="relative flex flex-col
               gap-6 sm:gap-8 lg:gap-[40px]
               mt-10 sm:mt-14 lg:mt-20
               pb-4 sm:pb-14 lg:pb-20">

        <!-- Achievement Badge -->
        <div
          class="hidden sm:flex items-center
                 bg-white/90 backdrop-blur-sm
                 p-[8px_16px]
                 gap-[10px]
                 rounded-full
                 w-fit max-w-full
                 shadow-sm border border-white/50">

          <div class="w-5 h-5 flex shrink-0 overflow-hidden">

            <img
              src="{{asset('assets/icons/crown.svg')}}"
              class="object-contain"
              alt="icon">

          </div>

          <p class="font-semibold text-xs sm:text-sm leading-tight">

            {{$hero->achievement}}

          </p>

        </div>

        <!-- Heading + Subheading -->
        <div
          class="flex flex-col gap-5 sm:gap-4
                 max-w-full
                 sm:max-w-[85%]
                 lg:max-w-full">

          <h1
            class="font-extrabold
                   text-[42px] leading-[48px]
                   sm:text-[42px] sm:leading-[50px]
                   lg:text-[56px] lg:leading-[80px]
                   lg:max-w-[56%]"
            data-aos="fade-up"
            data-aos-delay="100">
            <div data-scroll data-scroll-speed="-0.05">
              {{$hero->heading}}
            </div>
          </h1>

          <div
            class="text-sm sm:text-base text-cp-light-grey
                   leading-[22px]
                   max-w-full
                   lg:leading-[30px]
                   lg:max-w-[50%]"
            data-aos="fade-up"
            data-aos-delay="200">
            <p data-scroll data-scroll-speed="-0.08">
              {{$hero->subheading}}
            </p>
          </div>
        </div>

        <!-- Buttons -->
        <div id="hero-buttons"
          class="flex flex-row justify-center lg:justify-start items-center
           gap-4 sm:gap-4
           w-full sm:w-full"
          data-scroll data-scroll-speed="-0.08">

          <div class="flex items-center gap-0">
            <div data-aos="zoom-in" data-aos-delay="300">
              <a href=""
                class="bg-cp-dark-blue px-4 py-4
                       flex-none text-center
                        font-bold text-white
                       text-sm sm:text-base
                       transition-all duration-300
                       hover:shadow-[0_0_2 q0px_0_#312ECB66]
                        inline-block">
                View Projects
              </a>
            </div>

            <div data-aos="zoom-in" data-aos-delay="400">
              <button
                class="bg-cp-black px-2 py-3 backdrop-blur-xl bg-white/80
                       flex-none
                       font-bold text-[#9897df]
                       text-xs sm:text-base
                       flex items-center justify-center gap-[10px]
                       transition-all duration-300
                       hover:shadow-[0_0px_10px_0_#312ECB66] hover:border-[#312ECB]
                       bg-transparent border border-[#9897df] hover:text-[#312ECB]"
                onclick="{modal.show()}">

                <div class="w-6 h-6 flex shrink-0 overflow-hidden">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-play-icon lucide-circle-play">
                    <path d="M9 9.003a1 1 0 0 1 1.517-.859l4.997 2.997a1 1 0 0 1 0 1.718l-4.997 2.997A1 1 0 0 1 9 14.996z" />
                    <circle cx="12" cy="12" r="10" />
                  </svg>
                </div>
                <span>Company Profile</span>
              </button>
            </div>
          </div>
        </div>

        <!-- MOBILE BANNER -->
        <div
          class="relative w-full h-[20vh]
                 sm:h-[10vh]
                 lg:hidden
                 overflow-hidden rounded-[5px]
                 border border-[blue]
                 -z-4">

          <img
            src="{{Storage::url($hero->banner)}}"
            class="object-cover object-center w-full h-full"
            alt="banner">

        </div>
      </div>
    </div>

    <!-- DESKTOP BANNER -->
    <div
      data-scroll
      data-scroll-speed="-0.3"
      class="hidden lg:block
             absolute w-[43%] h-full
             top-0 right-0 overflow-hidden">

      <img
        src="{{Storage::url($hero->banner)}}"
        class="object-cover w-full h-full"
        alt="banner">

    </div>
    @empty
    <p>belum ada update data terbaru</p>
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
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Fortis Primera</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="200">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Fortuna Kontraktor</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="300">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Imanuel Teknik Sentosa</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="400">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Surya Sukses Maju</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="500">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Tunggak Jati</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="600">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Bayanaka Karya</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="700">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. EPKS</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="800">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Duta Bangsa Mandiri</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="900">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">PT. Vava Enviro Utama Fiberglass</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-xs sm:text-sm lg:text-lg text-black font-bold text-center whitespace-nowrap">CV. Alghi Citra Kreasi</span>
          </div>
        </div>

        <!-- DUPLICATE ITEMS FOR INFINITE LOOP -->

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Fortis Primera</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Fortuna Kontraktor</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Imanuel Teknik Sentosa</span>
          </div>
        </div>


        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Surya Sukses Maju</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Tunggak Jati</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Bayanaka Karya</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. EPKS</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Duta Bangsa Mandiri</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Vava Enviro Utama Fiberglass</span>
          </div>
        </div>

        <div data-aos="fade-up" data-aos-delay="1000">
          <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#FFFFFF] rounded-[8px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
            <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">CV. Alghi Citra Kreasi</span>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div id="OurPrinciples" class="container max-w-[90%] mx-auto px-4 lg:px-0 flex flex-col gap-[30px] mt-16 lg:mt-28">

    <!-- Heading -->
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

      <div class="flex flex-col gap-[14px] text-center lg:text-left">
        <p class="badge w-fit mx-auto lg:mx-0 bg-cp-pale-blue text-cp-light-blue px-[16px] py-[8px] rounded-full uppercase font-bold text-sm">
          OUR PRINCIPLES
        </p>

        <h2 class="font-bold text-3xl sm:text-4xl leading-tight lg:leading-[45px]">
          Our Commitment to Every Project
        </h2>
      </div>

      <a href=""
        class="bg-cp-black px-[20px] py-[14px] w-full sm:w-fit text-center rounded-lg font-bold text-white transition-all duration-300 hover:shadow-[0_12px_30px_0_#312ECB66] hover:-translate-y-1 inline-block">
        Explore More
      </a>

    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[20px] lg:gap-[40px]">

      @forelse($principles as $principle)
      <div data-aos="fade-up" data-aos-delay="{{ ($loop->index % 3) * 150 }}">
        <div class="card w-full lg:h-[500px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <div class="thumbnail h-[200px] flex shrink-0 overflow-hidden">
            <img src="{{Storage::url($principle->thumbnail)}}"
              class="object-cover object-center w-full h-full"
              alt="thumbnails">
          </div>

          <div class="flex flex-col px-[24px] pb-[24px] lg:px-[30px] lg:pb-[30px] gap-5">

            <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
              <img src="{{Storage::url($principle->icon)}}"
                class="w-full h-full object-contain"
                alt="icon">
            </div>

            <div class="flex flex-col gap-1">
              <p class="title font-bold text-xl leading-[30px]">
                {{$principle->name}}
              </p>

              <p class="leading-[28px] lg:leading-[30px] text-cp-light-grey text-sm sm:text-base">
                {{$principle->subtitle}}
              </p>
            </div>

            <a href="" class="font-semibold text-cp-dark-blue">
              Learn More
            </a>

          </div>
        </div>
      </div>
      @empty
      <p>Belum ada data terbaru</p>
      @endforelse

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

  <div class="container max-w-full mx-auto flex flex-col mt-20"></div>

  <div id="Products" class="max-w-screen mx-auto px-4 lg:px-0 flex flex-col gap-14 lg:gap-20 mt-16 lg:mt-28">

    @forelse($products as $product)
    <div class="product flex flex-col lg:flex-row
              items-center
              gap-[70px] lg:gap-[70px]
              even:lg:flex-row-reverse
              lg:w-fit
              lg:odd:mr-auto lg:odd:ml-20
              lg:even:ml-auto lg:even:mr-20">

      <!-- Image -->
      <div class="w-full max-w-[470px] h-auto lg:h-[550px] flex shrink-0 overflow-hidden product-image">
        <img src="{{Storage::url($product->thumbnail)}}"
          class="w-full h-full object-contain"
          alt="thumbnail">
      </div>

      <!-- Content -->
      <div class="flex flex-col gap-[24px] lg:gap-[30px] py-0 lg:py-[50px] h-fit max-w-[620px] w-full text-center lg:text-left">

        <p class="badge w-fit mx-auto lg:mx-0 bg-cp-pale-blue text-cp-light-blue px-[16px] py-[8px] rounded-full uppercase font-bold text-sm">
          {{$product->tagline}}
        </p>

        <div class="flex flex-col gap-[10px]">

          <h2 class="font-bold text-3xl sm:text-4xl lg:text-[3rem] leading-tight lg:leading-[55px]">
            {{$product->name}}
          </h2>

          <p class="leading-[28px] lg:leading-[30px] text-cp-light-grey text-sm sm:text-base">
            {{$product->about}}
          </p>

        </div>

        <a href="{{route('front.appointment')}}"
          class="bg-cp-dark-blue px-[20px] py-[14px] w-[50%] sm:w-fit mx-auto lg:mx-0 text-center rounded-lg font-bold text-white transition-all duration-300 hover:shadow-[0_12px_30px_0_#312ECB66] hover:-translate-y-1 inline-block">
          Book Appointment
        </a>

      </div>

    </div>
    @empty
    <p>Belum ada data terbaru</p>
    @endforelse
  </div>

  <div id="Teams" class="bg-[#F6F7FA] w-full py-16 lg:py-20 px-4 lg:px-[10px] mt-16 lg:mt-28">

    <div class="container max-w-[95%] mx-auto flex flex-col gap-[30px] items-center">

      <!-- Heading -->
      <div class="flex flex-col gap-[14px] items-center text-center">

        <p class="badge w-fit bg-cp-light-blue text-white px-[16px] py-[8px] rounded-full uppercase font-bold text-sm">
          OUR PROFESSIONAL TEAM
        </p>

        <h2 class="font-bold text-3xl sm:text-4xl leading-tight lg:leading-[45px] text-center">
          Meet the Team Behind <br class="hidden sm:block">
          Every Successful Project
        </h2>

      </div>

      <!-- Cards -->
      <div class="teams-card-container grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-[30px] justify-center w-full">

        @forelse($teams as $team)

        <div
          class="{{ $loop->iteration > 3 ? 'hidden lg:block' : '' }}"
          data-aos="fade-up"
          data-aos-delay="{{ min($loop->iteration * 100, 400) }}">

          <div class="card bg-white flex flex-col h-[220px] lg:h-[300px] items-center p-4 lg:p-[10px] gap-4 lg:gap-[10px] rounded-[20px] transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-dark-blue border pt-6 lg:pt-8">

            <!-- Avatar -->
            <div class="w-[80px] h-[80px] lg:w-[100px] lg:h-[100px] flex shrink-0 items-center justify-center rounded-full bg-[linear-gradient(150.55deg,_#007AFF_8.72%,_#312ECB_87.11%)]">

              <div class="w-[72px] h-[72px] lg:w-[90px] lg:h-[90px] rounded-full overflow-hidden">
                <img src="{{Storage::url($team->avatar)}}"
                  class="object-cover w-full h-full object-center"
                  alt="photo">
              </div>

            </div>

            <!-- Name -->
            <div class="flex flex-col gap-1 text-center w-full items-bottom mt-auto">
              <p class="font-bold text-base lg:text-xl leading-tight">
                {{$team->name}}
              </p>
              <p class="text-cp-light-grey text-sm lg:text-base leading-tight">
                {{$team->occupation}}
              </p>
            </div>

            <!-- Location -->
            <div class="flex items-center justify-center gap-1 lg:gap-1 w-full items-bottom mt-auto mb-10 lg:mb-2">
              <div class="w-4 h-4 lg:w-5 lg:h-6 flex shrink-0">
                <img src="{{asset('assets/icons/global.svg')}}" alt="icon">
              </div>
              <p class="text-cp-dark-blue font-semibold text-xs lg:text-xs text-center leading-tight">
                {{$team->location}}
              </p>
            </div>

          </div>

        </div>

        @empty
        <p>Belum ada data terbaru</p>
        @endforelse

        <!-- View All -->
        <a href="{{route('front.team')}}"
          class="view-all-card"
          data-aos="zoom-in"
          data-aos-delay="500">

          <div class="card bg-white flex flex-col min-h-[250px] lg:min-h-[300px] justify-center items-center p-4 lg:p-[30px] gap-4 lg:gap-[30px] rounded-[20px] border border-white hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-red transition-all duration-300  hover:-translate-y-1">

            <div class="w-[50px] h-[50px] lg:w-[60px] lg:h-[60px] flex shrink-0">
              <img src="{{asset('assets/icons/profile-2user.svg')}}" alt="icon">
            </div>

            <div class="flex flex-col gap-1 text-center">
              <p class="font-bold text-base lg:text-xl leading-tight">
                View Full Team
              </p>
              <p class="text-cp-light-grey text-sm lg:text-base leading-tight">
                Meet More <br> Team Members
              </p>
            </div>

          </div>

        </a>

      </div>

    </div>

  </div>

  <div id="Testimonials" class="w-full flex flex-col gap-[40px] lg:gap-[50px] items-center mt-16 lg:mt-28">

    <!-- Heading -->
    <div class="flex flex-col gap-[14px] items-center text-center px-4">

      <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue px-[16px] py-[8px] rounded-full uppercase font-bold text-sm">
        SUCCESS CLIENTS
      </p>

      <h2 class="font-bold text-3xl sm:text-4xl leading-tight lg:leading-[45px] text-center">
        Our Satisfied Clients<br class="hidden sm:block">
        From Worldwide Company
      </h2>

    </div>

    <div class="main-carousel w-full">

      @forelse($testimonials as $testimonial)

      <div class="carousel-card container max-w-[1130px] w-full px-4 lg:px-0 flex flex-col lg:flex-row flex-wrap justify-between items-center gap-[30px] lg:gap-0 lg:mx-[calc((100vw-1130px)/2)]">

        <!-- Left Content -->
        <div class="testimonial-container flex flex-col gap-[40px] lg:gap-[112px] w-full lg:w-[565px] order-2 lg:order-1">

          <div class="flex flex-col gap-[24px] lg:gap-[30px]">

            <!-- Logo -->
            <div class="h-8 lg:h-9 overflow-hidden flex justify-center lg:justify-start">
              <!-- <img src="{{Storage::url($testimonial->client->logo)}}"
                class="object-contain h-full"
                alt="icon"> -->
            </div>

            <!-- Quote -->
            <div class="relative pt-[20px] lg:pt-[27px] pl-[0] lg:pl-[30px]">

              <div class="absolute top-0 left-0 lg:left-0">
                <img src="{{asset('assets/icons/quote.svg')}}"
                  class="w-8 lg:w-auto"
                  alt="icon">
              </div>

              <p class="font-semibold text-lg sm:text-xl lg:text-2xl leading-[34px] lg:leading-[46px] relative z-10 text-center lg:text-left pt-4 lg:pt-0">
                {{$testimonial->message}}
              </p>

            </div>

            <!-- Client Info -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-5 lg:pl-[30px]">

              <div class="flex items-center gap-4 lg:gap-6">

                <div class="w-[55px] h-[55px] lg:w-[60px] lg:h-[60px] flex shrink-0 rounded-full overflow-hidden">
                  <img src="{{Storage::url($testimonial->client->avatar)}}"
                    class="w-full h-full object-cover"
                    alt="photo">
                </div>

                <div class="flex flex-col justify-center gap-1 text-center sm:text-left">
                  <p class="font-bold">{{$testimonial->client->name}}</p>
                  <p class="text-sm text-cp-light-grey">{{$testimonial->client->occupation}}</p>
                </div>

              </div>

              <!-- Stars -->
              <div class="flex flex-nowrap">
                <div class="w-5 h-5 lg:w-6 lg:h-6 flex shrink-0"><img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star"></div>
                <div class="w-5 h-5 lg:w-6 lg:h-6 flex shrink-0"><img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star"></div>
                <div class="w-5 h-5 lg:w-6 lg:h-6 flex shrink-0"><img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star"></div>
                <div class="w-5 h-5 lg:w-6 lg:h-6 flex shrink-0"><img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star"></div>
                <div class="w-5 h-5 lg:w-6 lg:h-6 flex shrink-0"><img src="{{asset('assets/icons/Star-rating.svg')}}" alt="star"></div>
              </div>

            </div>

          </div>

          <!-- Indicator -->
          <div class="carousel-indicator flex items-center justify-center lg:justify-start gap-2 h-4 shrink-0">
          </div>

        </div>

        <!-- Right Image -->
        <div class="testimonial-thumbnail w-full max-w-[470px] h-[320px] sm:h-[420px] lg:w-[470px] lg:h-[550px] rounded-[20px] overflow-hidden bg-[#D9D9D9] order-1 lg:order-2">
          <img src="{{Storage::url($testimonial->thumbnail)}}"
            class="w-full h-full object-cover object-center"
            alt="thumbnail">
        </div>

      </div>

      @empty
      <p>Belum ada data terbaru</p>
      @endforelse

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

  <div id="FAQ" class="bg-[#F6F7FA] w-full py-16 lg:py-20 px-4 sm:px-6 mt-20 relative border-b border-[#df4846]">

    <div class="container max-w-[80%] mx-auto">

      <div class="flex flex-col lg:flex-row gap-10 lg:gap-[70px] items-center justify-center">

        <!-- Left Content -->
        <div class="flex flex-col gap-6 lg:gap-[30px] lg:w-[30%] text-center lg:text-left items-center lg:items-start">

          <div class="flex flex-col gap-[10px]">
            <h2 class="font-bold text-2xl sm:text-3xl lg:text-4xl leading-snug lg:leading-[45px]">
              Common Questions From Our Clients
            </h2>
          </div>

          <a href="{{route('front.appointment')}}"
            class="px-5 py-4 bg-cp-black rounded-lg text-white w-[50%] sm:w-fit mx-auto lg:mx-0 font-bold transition-all duration-300 hover:shadow-[0_12px_30px_0_#312ECB66] hover:-translate-y-1 inline-block text-center mx-auto sm:mx-0">
            Contact Us
          </a>

        </div>

        <!-- Right FAQ -->
        <div class="flex flex-col gap-4 lg:gap-[30px] w-[92vw] lg:w-[600px] shrink-0">

          <!-- FAQ 1 -->
          <div class="flex flex-col p-4 sm:p-5 rounded-2xl bg-white w-full">
            <button class="accordion-button flex justify-between gap-3 items-center" data-accordion="accordion-faq-1">
              <span class="font-bold text-base sm:text-lg leading-snug text-left">
                What services does EDBS provide?
              </span>
              <div class="arrow w-8 h-8 sm:w-9 sm:h-9 flex shrink-0">
                <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300 hover:-translate-y-1" alt="icon">
              </div>
            </button>

            <div id="accordion-faq-1" class="accordion-content hide">
              <p class="leading-relaxed sm:leading-[30px] text-sm sm:text-base text-cp-light-grey pt-3">
                EDBS provides civil construction, building construction, industrial projects, renovation works, infrastructure support, and project management services tailored to client needs.
              </p>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="flex flex-col p-4 sm:p-5 rounded-2xl bg-white w-full">
            <button class="accordion-button flex justify-between gap-3 items-center" data-accordion="accordion-faq-2">
              <span class="font-bold text-base sm:text-lg leading-snug text-left">
                Can you handle custom projects?
              </span>
              <div class="arrow w-8 h-8 sm:w-9 sm:h-9 flex shrink-0">
                <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300 hover:-translate-y-1" alt="icon">
              </div>
            </button>

            <div id="accordion-faq-2" class="accordion-content hide">
              <p class="leading-relaxed sm:leading-[30px] text-sm sm:text-base text-cp-light-grey pt-3">
                Yes. Every project has unique requirements, and our team can develop customized construction solutions based on your scope, budget, timeline, and technical needs.
              </p>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="flex flex-col p-4 sm:p-5 rounded-2xl bg-white w-full">
            <button class="accordion-button flex justify-between gap-3 items-center" data-accordion="accordion-faq-3">
              <span class="font-bold text-base sm:text-lg leading-snug text-left">
                How do you ensure quality and safety?
              </span>
              <div class="arrow w-8 h-8 sm:w-9 sm:h-9 flex shrink-0">
                <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300 hover:-translate-y-1" alt="icon">
              </div>
            </button>

            <div id="accordion-faq-3" class="accordion-content hide">
              <p class="leading-relaxed sm:leading-[30px] text-sm sm:text-base text-cp-light-grey pt-3">
                We apply structured supervision, quality control procedures, and workplace safety standards throughout every stage of the project to deliver reliable results.
              </p>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="flex flex-col p-4 sm:p-5 rounded-2xl bg-white w-full">
            <button class="accordion-button flex justify-between gap-3 items-center" data-accordion="accordion-faq-4">
              <span class="font-bold text-base sm:text-lg leading-snug text-left">
                How can I request a quotation?
              </span>
              <div class="arrow w-8 h-8 sm:w-9 sm:h-9 flex shrink-0">
                <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300 hover:-translate-y-1" alt="icon">
              </div>
            </button>

            <div id="accordion-faq-4" class="accordion-content hide">
              <p class="leading-relaxed sm:leading-[30px] text-sm sm:text-base text-cp-light-grey pt-3">
                You can contact our team through the Contact Us page, phone, WhatsApp, or email to discuss your project needs and receive an initial consultation.
              </p>
            </div>
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
  class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 hidden w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-white text-cp-red border border-gray-200 shadow-xl z-50 hover:-translate-y-1 hover:scale-110 transition-all duration-300 flex items-center justify-center backdrop-blur-lg bg-white/80">

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

@push('after-scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
<script src="{{asset('js/carousel.js')}}"></script>
<script src="{{asset('js/accordion.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="{{asset('js/modal-video.js')}}"></script>
@endpush