<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    Dapy Waitlist
  </title>
  <link rel="shortcut icon" href="./image/png/favicon.png" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./fonts/icon-font/css/style.css">
  <link rel="stylesheet" href="./fonts/typography-font/typo.css">
  <link rel="stylesheet" href="./fonts/fontawesome-5/css/all.css">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="./plugins/aos/aos.min.css">
  <link rel="stylesheet" href="./plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="./plugins/nice-select/nice-select.min.css">
  <link rel="stylesheet" href="./plugins/slick/slick.min.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="./plugins/theme-mode-switcher/switcher-panel.css">
  <link rel="stylesheet" href="./css/main.css">
  <!-- Custom stylesheet -->
</head>
<style>
  html {
      scroll-behavior: smooth; /* Enables smooth scrolling */
  }
  .rounded-35 {
    border-radius: 35px !important;
  }
  .text-danger {
    color: #ff1414 !important;
  }
  .promo--l6-select {
    height: 60px;
  }
  .newsletter-form input.employment {
    width: 0;
    border-radius: 10px;
    border: 2px solid rgba(128, 138, 142, 0.2);
    color: rgba(37, 55, 63, 0.7);
    font-size: 16px;
    font-weight: 400;
    letter-spacing: normal;
    line-height: 28px;
    padding: 0; 
    margin-bottom: 10px;
    height: 0;
  }
  @media (min-width: 480px) {
    .newsletter-form input {
        margin-right: 0; 
        margin-bottom: 0; 
    }
  }
  .footer-social-share ul li a {
    color: #1e1a6c;
  }
  .footer-social-share ul li a:hover {
    color: #0378ff;
  }
</style>
<body data-theme-mode-panel-active data-theme="light">
    {{ $slot }}
    
  <!-- Plugin's Scripts -->
  <script src="./plugins/jquery/jquery.min.js"></script>
  <script src="./plugins/jquery/jquery-migrate.min.js"></script>
  <script src="./js/bootstrap.bundle.js"></script>
  <script src="./plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="./plugins/nice-select/jquery.nice-select.min.js"></script>
  <script src="./plugins/aos/aos.min.js"></script>
  <script src="./plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="./plugins/counter-up/waypoints.min.js"></script>
  <script src="./plugins/slick/slick.min.js"></script>
  <script src="./plugins/skill-bar/skill.bars.jquery.js"></script>
  <script src="./plugins/isotope/isotope.pkgd.min.js"></script>
  <!--<script src="./plugins/theme-mode-switcher/gr-theme-mode-switcher.js"></script>-->
  <!-- Activation Script -->
  <script src="js/menu.js"></script>
  <script src="js/custom.js"></script>
</body>

@livewireScripts

@stack('scripts')
@yield('js')
</html>