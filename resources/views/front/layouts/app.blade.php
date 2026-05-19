<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Main CSS -->
  <link href="{{ asset('css/output.css') }}" rel="stylesheet">

  <!-- Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />

  <!-- Libraries -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="https://unpkg.com/flickity-fade@2/flickity-fade.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  <!-- Burger Menu Animation -->
  <style>
    .burger-line {
      position: absolute;
      left: 0;
      width: 100%;
      height: 2px;
      background: #0b0b4f;
      border-radius: 9999px;
      transition: all .35s ease;
    }

    .top-line {
      top: 4px;
    }

    .middle-line {
      top: 11px;
    }

    .bottom-line {
      top: 18px;
    }

    /* Active State */
    .menu-open .top-line {
      transform: translateY(7px) rotate(45deg);
    }

    .menu-open .middle-line {
      opacity: 0;
      transform: scaleX(0);
    }

    .menu-open .bottom-line {
      transform: translateY(-7px) rotate(-45deg);
    }

    /* clients logo carousel aniamtion */
    .logo-slider {
      width: 100%;
      position: relative;
    }

    .logo-track {
      animation: scrollLogos 35s linear infinite;
    }

    .logo-slider:hover .logo-track {
      animation-play-state: paused;
    }

    @keyframes scrollLogos {
      from {
        transform: translateX(0);
      }

      to {
        transform: translateX(-50%);
      }
    }
  </style>
</head>

<body class="font-poppins text-cp-black">

  @yield('content')

  @stack('before-scripts')

  <!-- Navbar Animation -->
  <script>
    const navbar = document.getElementById('navbar');
    const navbarInner = document.getElementById('navbar-inner');

    let lastScroll = 0;

    window.addEventListener('scroll', () => {

      const currentScroll = window.pageYOffset;

      // SCROLL DOWN
      if (currentScroll > lastScroll && currentScroll > 120) {

        navbar.classList.add(
          '-translate-y-full',
          'opacity-0',
          'scale-[0.98]'
        );

        navbarInner.classList.remove('py-4');
        navbarInner.classList.add('py-2');

      }

      // SCROLL UP
      else {

        navbar.classList.remove(
          '-translate-y-full',
          'opacity-0',
          'scale-[0.98]'
        );

        navbarInner.classList.remove('py-2');
        navbarInner.classList.add('py-4');

      }

      lastScroll = currentScroll;

    });
  </script>

  <!-- Locomotive Scroll -->
  <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll/bundled/locomotive-scroll.min.js"></script>
  <script>
    const locomotiveScroll = new LocomotiveScroll();
  </script>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    /*
    |--------------------------------------------------------------------------
    | AOS Initialization
    |--------------------------------------------------------------------------
    */
    AOS.init({
      duration: 800,
      easing: 'ease-out-cubic',
      once: false,
      mirror: true,
      offset: 80
    });


    /*
    |--------------------------------------------------------------------------
    | Mobile Navbar
    |--------------------------------------------------------------------------
    */
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    const line1 = document.getElementById('line1');
    const line2 = document.getElementById('line2');
    const line3 = document.getElementById('line3');

    if (menuBtn && mobileMenu) {

      menuBtn.addEventListener('click', () => {

        const isOpen = mobileMenu.classList.contains('max-h-96');

        if (isOpen) {

          // CLOSE MENU
          mobileMenu.classList.remove(
            'max-h-96',
            'opacity-100',
            'pt-4',
            'pb-6'
          );

          mobileMenu.classList.add(
            'max-h-0',
            'opacity-0'
          );

          // BURGER ICON
          line1.classList.remove(
            'rotate-45',
            'translate-y-2'
          );

          line2.classList.remove('opacity-0');

          line3.classList.remove(
            '-rotate-45',
            '-translate-y-2'
          );

        } else {

          // OPEN MENU
          mobileMenu.classList.remove(
            'max-h-0',
            'opacity-0'
          );

          mobileMenu.classList.add(
            'max-h-96',
            'opacity-100',
            'pt-4',
            'pb-6'
          );

          // X ICON
          line1.classList.add(
            'rotate-45',
            'translate-y-2'
          );

          line2.classList.add('opacity-0');

          line3.classList.add(
            '-rotate-45',
            '-translate-y-2'
          );
        }
      });
    }


    /*
    |--------------------------------------------------------------------------
    | Back To Top Button
    |--------------------------------------------------------------------------
    */
    const toTopBtn = document.getElementById('toTop');

    if (toTopBtn) {

      window.addEventListener('scroll', () => {

        if (window.scrollY > 300) {
          toTopBtn.classList.remove('hidden');
        } else {
          toTopBtn.classList.add('hidden');
        }
      });

      toTopBtn.addEventListener('click', () => {

        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    }
  </script>

  <script>
    gsap.utils.toArray(".product-image").forEach((img) => {

      gsap.from(img, {
        scrollTrigger: {
          trigger: img,
          start: "top 85%",
        },

        scale: 1.15,
        opacity: 0,
        duration: 1.4,
        ease: "power3.out"
      });

    });
  </script>

  @stack('after-scripts')

</body>

</html>