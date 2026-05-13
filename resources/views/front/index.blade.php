@extends('front.layouts.app')
@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<div id="header"
  class="bg-[#F6F7FA] relative overflow-hidden
         pt-20 sm:pt-28 lg:pt-14">

  @forelse($hero_section as $hero)

  <input type="hidden" name="path_video" id="path_video" value="{{$hero->path_video}}">

  <div
    class="container max-w-[1130px] mx-auto
           relative z-10
           px-4 lg:px-0
           pt-0 lg:pt-10">

    <x-navbar />

    <!-- HERO -->
    <div id="Hero"
      class="relative flex flex-col
             gap-6 sm:gap-8 lg:gap-[30px]
             mt-20 sm:mt-14 lg:mt-20
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
        class="flex flex-col gap-3 sm:gap-4
               max-w-[92%]
               sm:max-w-[85%]
               lg:max-w-full">

        <h1
          class="font-extrabold
                 text-[32px] leading-[40px]
                 sm:text-[42px] sm:leading-[50px]
                 lg:text-[56px] lg:leading-[65px]
                 lg:max-w-[56%]"
          data-aos="fade-up"
          data-aos-delay="100">
          {{$hero->heading}}
        </h1>

        <p
          class="text-sm sm:text-base text-cp-light-grey
                 leading-[26px]
                 max-w-full
                 lg:leading-[30px]
                 lg:max-w-[50%]"
          data-aos="fade-up"
          data-aos-delay="200">
          {{$hero->subheading}}
        </p>
      </div>

      <!-- Buttons -->
      <div id="hero-buttons"
        class="flex flex-row items-center
         gap-3 sm:gap-4
         w-full sm:w-auto">

        <div data-aos="zoom-in" data-aos-delay="300">

          <a href=""
            class="bg-cp-dark-blue px-6 py-4
                   flex-1 sm:flex-none text-center
                   rounded-xl font-bold text-white
                   transition-all duration-300
                   hover:shadow-[0_12px_30px_0_#312ECB66]
                   hover:-translate-y-1 inline-block">
            View Projects
          </a>
        </div>

        <div data-aos="zoom-in" data-aos-delay="400">
          <button
            class="bg-cp-black px-6 py-4
                   flex-1 sm:flex-none rounded-xl
                   font-bold text-white
                   flex items-center justify-center gap-[10px]
                   transition-all duration-300
                   hover:shadow-[0_12px_30px_0_#312ECB66]
                   hover:-translate-y-1"
            onclick="{modal.show()}">

            <div class="w-6 h-6 flex shrink-0 overflow-hidden">
              <img
                src="{{asset('assets/icons/play-circle.svg')}}"
                class="w-full h-full object-contain"
                alt="icon">

            </div>
            <span>Company Profile</span>
          </button>
        </div>
      </div>

      <!-- MOBILE BANNER -->
      <div
        class="relative w-full h-[260px]
               sm:h-[380px]
               lg:hidden
               overflow-hidden rounded-[5px]
               border border-[blue]
               mt-2">

        <img
          src="{{Storage::url($hero->banner)}}"
          class="object-cover w-full h-full"
          alt="banner">

      </div>
    </div>
  </div>

  <!-- DESKTOP BANNER -->
  <div
    class="hidden lg:block
           absolute w-[43%] h-full
           top-0 right-0 overflow-hidden z-0">

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

      <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Fortis Primera</span>
      </div>

      <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Fortuna Kontraktor</span>
      </div>

      <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Imanuel Teknik Sentosa</span>
      </div>

      <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Surya Sukses Maju</span>
      </div>

      <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Tunggak Jati</span>
      </div>

      <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Bayanaka Karya</span>
      </div>

      <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. EPKS</span>
      </div>

      <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Duta Bangsa Mandiri</span>
      </div>

      <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">PT. Vava Enviro Utama Fiberglass</span>
      </div>

      <div class="logo-card min-h-[20px] w-fit shrink-0 flex items-center justify-center border border-[#E8EAF2] rounded-[18px] px-3 sm:px-4 py-3 bg-white hover:border-cp-red transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
        <span class="text-sm lg:text-lg text-black font-bold whitespace-nowrap">CV. Alghi Citra Kreasi</span>
      </div>

    </div>
  </div>
</div>

<div id="OurPrinciples" class="container max-w-[1130px] mx-auto px-4 lg:px-0 flex flex-col gap-[30px] mt-16 lg:mt-28">

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
      class="bg-cp-black px-[20px] py-[14px] w-full sm:w-fit text-center rounded-xl font-bold text-white transition-all duration-300 hover:shadow-[0_12px_30px_0_#312ECB66] hover:-translate-y-1 inline-block">
      Explore More
    </a>

  </div>

  <!-- Cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[20px] lg:gap-[30px]">

    @forelse($principles as $principle)
    <div
      class="card w-full flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300"
      data-aos="fade-up"
      data-aos-delay="{{ ($loop->index % 3) * 150 }}">

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
    @empty
    <p>Belum ada data terbaru</p>
    @endforelse

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

<div class="container max-w-full mx-auto flex flex-col mt-20"></div>

<div id="Products" class="max-w-screen mx-auto px-4 lg:px-0 flex flex-col gap-14 lg:gap-20 mt-16 lg:mt-28">

  @forelse($products as $product)
  <div
    class="product flex flex-col lg:flex-row flex-wrap justify-center items-center gap-[70px] lg:gap-[160px] even:lg:flex-row-reverse">

    <!-- Image -->
    <div class="w-full max-w-[470px] h-auto lg:h-[550px] flex shrink-0 overflow-hidden product-image">
      <img src="{{Storage::url($product->thumbnail)}}"
        class="w-full h-full object-contain"
        alt="thumbnail">
    </div>

    <!-- Content -->
    <div class="flex flex-col gap-[24px] lg:gap-[30px] py-0 lg:py-[50px] h-fit max-w-[500px] w-full text-center lg:text-left">

      <p class="badge w-fit mx-auto lg:mx-0 bg-cp-pale-blue text-cp-light-blue px-[16px] py-[8px] rounded-full uppercase font-bold text-sm">
        {{$product->tagline}}
      </p>

      <div class="flex flex-col gap-[10px]">

        <h2 class="font-bold text-3xl sm:text-4xl leading-tight lg:leading-[45px]">
          {{$product->name}}
        </h2>

        <p class="leading-[28px] lg:leading-[30px] text-cp-light-grey text-sm sm:text-base">
          {{$product->about}}
        </p>

      </div>

      <a href="{{route('front.appointment')}}"
        class="bg-cp-dark-blue px-[20px] py-[14px] w-full sm:w-fit mx-auto lg:mx-0 text-center rounded-xl font-bold text-white transition-all duration-300 hover:shadow-[0_12px_30px_0_#312ECB66] hover:-translate-y-1 inline-block">
        Book Appointment
      </a>

    </div>

  </div>
  @empty
  <p>Belum ada data terbaru</p>
  @endforelse

</div>
<div id="Teams" class="bg-[#F6F7FA] w-full py-16 lg:py-20 px-4 lg:px-[10px] mt-16 lg:mt-28">

  <div class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] items-center">

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
    <div class="teams-card-container grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-[30px] justify-center w-full">

      @forelse($teams as $team)

      <div
        class="{{ $loop->iteration > 3 ? 'hidden lg:block' : '' }}"
        data-aos="fade-up"
        data-aos-delay="{{ min($loop->iteration * 100, 400) }}">

        <div class="card bg-white flex flex-col min-h-[230px] lg:min-h-[320px] justify-center items-center p-4 lg:p-[30px] gap-4 lg:gap-[30px] rounded-[20px] border border-white transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-dark-blue hover:-translate-y-1">

          <!-- Avatar -->
          <div class="w-[80px] h-[80px] lg:w-[100px] lg:h-[100px] flex shrink-0 items-center justify-center rounded-full bg-[linear-gradient(150.55deg,_#007AFF_8.72%,_#312ECB_87.11%)]">

            <div class="w-[72px] h-[72px] lg:w-[90px] lg:h-[90px] rounded-full overflow-hidden">
              <img src="{{Storage::url($team->avatar)}}"
                class="object-cover w-full h-full object-center"
                alt="photo">
            </div>

          </div>

          <!-- Name -->
          <div class="flex flex-col gap-1 text-center">
            <p class="font-bold text-base lg:text-xl leading-tight">
              {{$team->name}}
            </p>
            <p class="text-cp-light-grey text-sm lg:text-base leading-tight">
              {{$team->occupation}}
            </p>
          </div>

          <!-- Location -->
          <div class="flex items-center justify-center gap-2">
            <div class="w-4 h-4 lg:w-6 lg:h-6 flex shrink-0">
              <img src="{{asset('assets/icons/global.svg')}}" alt="icon">
            </div>
            <p class="text-cp-dark-blue font-semibold text-xs lg:text-base text-center leading-tight">
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

        <div class="card bg-white flex flex-col min-h-[230px] lg:min-h-[320px] justify-center items-center p-4 lg:p-[30px] gap-4 lg:gap-[30px] rounded-[20px] border border-white hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-red transition-all duration-300">

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
            <img src="{{Storage::url($testimonial->client->logo)}}"
              class="object-contain h-full"
              alt="icon">
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
<div id="FAQ" class="bg-[#F6F7FA] w-full py-16 lg:py-20 px-4 sm:px-6 mt-20 -mb-20 lg:-mb-28">

  <div class="container max-w-[1000px] mx-auto">

    <div class="flex flex-col lg:flex-row gap-10 lg:gap-[70px] items-start lg:items-center">

      <!-- Left Content -->
      <div class="flex flex-col gap-6 lg:gap-[30px] w-full lg:w-auto text-center lg:text-left">

        <div class="flex flex-col gap-[10px]">
          <h2 class="font-bold text-2xl sm:text-3xl lg:text-4xl leading-snug lg:leading-[45px]">
            Common Questions From Our Clients
          </h2>
        </div>

        <a href="{{route('front.appointment')}}"
          class="px-5 py-4 bg-cp-black rounded-xl text-white w-full sm:w-fit mx-auto lg:mx-0 font-bold transition-all duration-300 hover:shadow-[0_12px_30px_0_#312ECB66] hover:-translate-y-1 inline-block text-center">
          Contact Us
        </a>

      </div>

      <!-- Right FAQ -->
      <div class="flex flex-col gap-4 lg:gap-[30px] w-full lg:w-[603px] shrink-0">

        <!-- FAQ 1 -->
        <div class="flex flex-col p-4 sm:p-5 rounded-2xl bg-white w-full">
          <button class="accordion-button flex justify-between gap-3 items-center" data-accordion="accordion-faq-1">
            <span class="font-bold text-base sm:text-lg leading-snug text-left">
              What services does EDBS provide?
            </span>
            <div class="arrow w-8 h-8 sm:w-9 sm:h-9 flex shrink-0">
              <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
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
              <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
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
              <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
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
              <img src="{{asset('assets/icons/arrow-circle-down.svg')}}" class="transition-all duration-300" alt="icon">
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

  <div class="text-center text-xs sm:text-sm text-gray-500">
    <p class="text-center text-[11px] text-gray-400/50 mt-3 transition hover:text-gray-400">
      © 2026 PT. Etika Dharma Bangun Sarana <br>
    </p>
    <p class="text-center text-xs sm:text-sm text-gray-500">
      Website developed by Kurniawan Rasyidi
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