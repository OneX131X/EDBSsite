@extends('front.layouts.app')
@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<div id="page-content" class="relative z-10 bg-[#FFFFFF] mb-[100vh] lg:mb-[506px] min-h-screen">
  <div id="header" class="bg-[#F6F7FA] relative h-[420px] sm:h-[520px] lg:h-[670px] -mb-[300px] sm:-mb-[320px] lg:-mb-[490px] border-b border-[#312ECB]">
    <div class="container max-w-[1130px] mx-auto relative pt-6 sm:pt-10 px-4 lg:px-0 z-10">
      <x-navbar />
    </div>
  </div>

  <div id="Contact" class="container max-w-[1130px] mx-auto flex flex-col xl:flex-row justify-between gap-10 lg:gap-[50px] relative z-5 px-4 lg:px-0">

    <!-- LEFT CONTENT -->
    <div class="flex flex-col lg:mt-20 gap-8 lg:gap-[50px] w-full">

      <div class="breadcrumb flex flex-wrap items-center justify-center text-center gap-3 sm:gap-[30px] text-sm sm:text-base">
        <a href="{{ route('front.index') }}" class="text-cp-light-grey hover:text-white transition-all duration-300">Home</a>
        <span class="text-cp-light-grey">/</span>
        <a href="{{ route('front.product') }}" class="text-cp-light-grey hover:text-white transition-all duration-300">Project</a>
        <span class="text-cp-light-grey">/</span>
        <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Appointment</p>
      </div>

      <div data-aos="fade-in" data-aos-delay="100">
        <h1 class="font-extrabold text-3xl sm:text-4xl leading-tight sm:leading-[45px]">
          We Help You to Build Awesome Project
        </h1>
      </div>

      <div class="flex flex-col gap-4 sm:gap-5" data-aos="fade-in" data-aos-delay="150">

        <div class="flex items-start gap-[10px]">
          <div class="w-6 h-6 flex shrink-0 mt-1">
            <img src="assets/icons/global.svg" alt="icon">
          </div>
          <p class="text-cp-dark-blue font-semibold text-sm sm:text-base leading-relaxed">
            Wisma Nugra Santana Lt. 8 Jl. Jenderal Sudirman Kav. 7-8 Jakarta 10220, Indonesia
          </p>
        </div>

        <div class="flex items-center gap-[10px]">
          <div class="w-6 h-6 flex shrink-0">
            <img src="assets/icons/call.svg" alt="icon">
          </div>
          <p class="text-cp-dark-blue font-semibold text-sm sm:text-base">
            (021) 51000066
          </p>
        </div>

      </div>
    </div>

    <!-- FORM -->
    <form action="{{route('front.appointment_store')}}"
      method="POST"
      class="flex flex-col p-5 sm:p-[30px] rounded-[20px] gap-[18px] bg-white shadow-[0_10px_30px_0_#D1D4DF40] w-full xl:max-w-[700px] shrink-0"
      data-aos="zoom-in-up"
      data-aos-delay="300">

      @csrf

      <!-- ROW 1 -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-[18px]">

        <div class="flex flex-col gap-2 w-full">
          <p class="font-semibold">Complete Name</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue rounded-xl bg-white transition-all duration-300">
            <div class="w-[18px] h-[18px] shrink-0">
              <img src="assets/icons/profile.svg" alt="icon">
            </div>
            <input type="text" name="name"
              class="appearance-none outline-none bg-white w-full font-semibold placeholder:font-normal placeholder:text-cp-black"
              placeholder="Write your complete name" required>
          </div>
        </div>

        <div class="flex flex-col gap-2 w-full">
          <p class="font-semibold">Email Address</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue rounded-xl bg-white transition-all duration-300">
            <div class="w-[18px] h-[18px] shrink-0">
              <img src="assets/icons/sms.svg" alt="icon">
            </div>
            <input type="email" name="email"
              class="appearance-none outline-none bg-white w-full font-semibold placeholder:font-normal placeholder:text-cp-black"
              placeholder="Write your email address" required>
          </div>
        </div>

      </div>

      <!-- ROW 2 -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-[18px]">

        <div class="flex flex-col gap-2 w-full">
          <p class="font-semibold">Phone Number</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue rounded-xl bg-white transition-all duration-300">
            <div class="w-[18px] h-[18px] shrink-0">
              <img src="assets/icons/call-black.svg" alt="icon">
            </div>
            <input type="tel" name="phone_number"
              class="appearance-none outline-none bg-white w-full font-semibold placeholder:font-normal placeholder:text-cp-black"
              placeholder="Write your phone number" required>
          </div>
        </div>

        <div class="flex flex-col gap-2 w-full">
          <p class="font-semibold">Meeting Date</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue rounded-xl bg-white relative transition-all duration-300">
            <div class="w-[18px] h-[18px] shrink-0">
              <img src="assets/icons/calendar.svg" alt="icon">
            </div>
            <button type="button" id="dateButton" class="bg-transparent border-none outline-none text-left w-full">
              Choose the date
            </button>
            <input type="date" name="meeting_at" id="dateInput" class="absolute opacity-0 -z-10">
          </div>
        </div>

      </div>

      <!-- ROW 3 -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-[18px]">

        <div class="flex flex-col gap-2 w-full">
          <p class="font-semibold">Your Interest</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue rounded-xl bg-white transition-all duration-300">
            <div class="w-[18px] h-[18px] shrink-0">
              <img src="assets/icons/building-4-black.svg" alt="icon">
            </div>
            <select name="product_id"
              class="appearance-none outline-none bg-white w-full font-semibold placeholder:font-normal placeholder:text-cp-black"
              required>
              <option value="" hidden>Choose a project</option>
              @foreach($products as $product)
              <option value="{{$product->id}}">{{$product->name}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="flex flex-col gap-2 w-full">
          <p class="font-semibold">Budget Available</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue rounded-xl bg-white transition-all duration-300">
            <div class="w-[18px] h-[18px] shrink-0 font-bold text-cp-black">
              <!-- <img src="assets/icons/dollar-square.svg" alt="icon"> -->
               Rp
            </div>
            <input type="number" name="budget"
              class="appearance-none outline-none bg-white w-full font-semibold placeholder:font-normal placeholder:text-cp-black"
              placeholder="What is your budget" required>
          </div>
        </div>

      </div>

      <!-- TEXTAREA -->
      <div class="flex flex-col gap-2 w-full">
        <p class="font-semibold">Project Brief</p>
        <div class="flex gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue rounded-xl bg-white transition-all duration-300">
          <div class="w-[18px] h-[18px] shrink-0 mt-[3px]">
            <img src="assets/icons/message-text.svg" alt="icon">
          </div>
          <textarea name="brief" rows="6"
            class="appearance-none outline-none bg-white w-full resize-none font-semibold placeholder:font-normal placeholder:text-cp-black"
            placeholder="Tell us the project brief"></textarea>
        </div>
      </div>

      <button type="submit"
        class="bg-cp-dark-blue p-4 sm:p-5 w-full rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">
        Book Appointment
      </button>

    </form>

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
      Website developed by Kurniawan Rasyidi [onex131x]
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
@push('after-scripts')
<script src="js/contact-form.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
<script src="js/carousel.js"></script>
@endpush