<!-- <nav class="flex flex-wrap items-center justify-between bg-white p-[20px_30px] rounded-[20px] gap-y-3 ring-1 ring-red-500 shadow-[0_6px_20px_0_#312ECB66]"> -->
<nav id="navbar"
class="fixed top-4 left-1/2 -translate-x-1/2 w-[95%] max-w-[1130px] flex flex-wrap items-center justify-between bg-white p-[20px_30px] rounded-[20px] gap-y-3 shadow-[0_6px_20px_0_#312ECB33] z-50 transition-all duration-500 ease-in-out">
    <div class="flex items-center gap-3">
        <div class="flex shrink-0 h-[43px] overflow-hidden">
            <img src="assets/logo/edbsicon.svg" class="object-contain w-full h-full" alt="logo">
        </div>
        <div class="flex flex-col">
            <p id="CompanyName" class="font-extrabold text-xl leading-[30px]">EDBS</p>
            <p id="CompanyTagline" class="text-sm text-cp-light-grey">PT. Etika Dharma Bangun Sarana</p>
        </div>
    </div>
    <ul class="flex flex-wrap items-center gap-[30px]">
        <li class="{{request()->routeIs('front.index') ? 'text-cp-dark-blue' : ''}} font-semibold hover:text-cp-dark-blue transition-all duration-300">
            <a href="{{route('front.index')}}">Home</a>
        </li>
        <li class="{{request()->routeIs('front.product') ? 'text-cp-dark-blue' : ''}} font-semibold hover:text-cp-dark-blue transition-all duration-300">
            <a href="{{route('front.product')}}">Products</a>
        </li>
        <li class="{{request()->routeIs('front.team') ? 'text-cp-dark-blue' : ''}} font-semibold hover:text-cp-dark-blue transition-all duration-300">
            <a href="{{route('front.team')}}">Company</a>
        </li>
        <!-- <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
            <a href="">Blog</a>
        </li> -->
        <li class="{{request()->routeIs('front.about') ? 'text-cp-dark-blue' : ''}} font-semibold hover:text-cp-dark-blue transition-all duration-300">
            <a href="{{route('front.about')}}">About</a>
        </li>
    </ul>
    <a href="{{route('front.appointment')}}" class="bg-cp-dark-blue p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Get a Quote</a>
</nav>