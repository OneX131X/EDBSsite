@extends('front.layouts.app')
@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div id="header" class="bg-[#F6F7FA] relative h-[420px] sm:h-[520px] lg:h-[700px] -mb-[220px] sm:-mb-[320px] lg:-mb-[488px]">
  <div class="container max-w-[1130px] mx-auto relative pt-6 sm:pt-10 px-4 lg:px-0 z-10">
    <x-navbar />
  </div>
</div>

<div id="Contact" class="container max-w-[1130px] mx-auto flex flex-col xl:flex-row justify-between gap-10 lg:gap-[50px] relative z-5 px-4 lg:px-0">

  <!-- LEFT CONTENT -->
  <div class="flex flex-col lg:mt-14 gap-8 lg:gap-[50px] w-full">

    <div class="breadcrumb flex flex-wrap items-center justify-center text-center gap-3 sm:gap-[30px] text-sm sm:text-base">
      <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
      <span class="text-cp-light-grey">/</span>
      <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Project</p>
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
            class="appearance-none outline-none w-full font-semibold invalid:font-normal px-[10px] -mx-[10px]"
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
          <div class="w-[18px] h-[18px] shrink-0">
            <img src="assets/icons/dollar-square.svg" alt="icon">
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
@push('after-scripts')
<script src="js/contact-form.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
<script src="js/carousel.js"></script>
@endpush