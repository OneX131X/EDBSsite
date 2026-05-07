<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('css/output.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <!-- CSS for carousel/flickity-->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="https://unpkg.com/flickity-fade@2/flickity-fade.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  <!-- CSS for modal/flowbite -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" /> -->
</head>

<body class="font-poppins text-cp-black">

  @yield('content')

  @stack('before-scripts')
  <!-- // file js di sini... khusus semua halaman -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- AOS Initialization -->
  <script>
    AOS.init({
      duration: 800,
      easing: 'ease-out-cubic',
      once: false,
      mirror: true,
      offset: 80
    });
  </script>

  <!-- Navbar Scroll Effect -->
  <script>
    const navbar = document.getElementById('navbar');
    let lastScroll = 0;

    // Hide when scrolling down, show when scrolling up
    window.addEventListener('scroll', function() {
      <script>
document.addEventListener("DOMContentLoaded", function () {

    const navbar = document.getElementById("navbar");
    const btn = document.getElementById("menuBtn");
    const menu = document.getElementById("mobileMenu");

    let lastScroll = 0;

    // MOBILE MENU TOGGLE
    btn.addEventListener("click", function () {
        menu.classList.toggle("hidden");
    });

    // NAVBAR HIDE ON SCROLL
    window.addEventListener("scroll", function () {

        const currentScroll = window.pageYOffset;

        if (currentScroll > lastScroll && currentScroll > 100) {

            // scrolling down
            navbar.style.transform =
                `translate(-50%, -${navbar.offsetHeight + 20}px)`;

        } else {

            // scrolling up
            navbar.style.transform =
                "translate(-50%, 0)";

        }

        lastScroll = currentScroll;
    });

});
</script>

  <!-- Back to Top Button -->
  <script>
    const btn = document.getElementById('toTop');

    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
        btn.classList.remove('hidden');
      } else {
        btn.classList.add('hidden');
      }
    });

    btn.onclick = () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    };
  </script>

  @stack('after-scripts')

</body>

</html>