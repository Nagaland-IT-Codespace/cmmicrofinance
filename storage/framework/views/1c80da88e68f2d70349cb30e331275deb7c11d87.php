<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CMMFI: Nagaland</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Dewi - v4.8.1
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo"><img src="<?php echo e(asset('assets/img/cmmfi-logo.png')); ?>"/></a>
      <?php echo $__env->make('frontendPartials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </header><!-- End Header -->
  <div class="header" style="background:#15222b;height:130px">

  </div>

  <main id="main">

    <?php echo $__env->yieldContent('content'); ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Chief Minister's Micro Finance Initiative</h3>
              <p>
                Office of the Agriculture Production Commissioner <br>
                New Secretariate Complex<br>
                Kohima, Nagaland<br><br>
                <strong>Phone:</strong> <br>
                <strong>Email:</strong> cmmfi@nagaland.gov.in<br>
              </p>
              <!-- <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div> -->
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Related links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.nabard.org/content.aspx?id=76" target="_blank">NABARD</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://nagafarmer.nagaland.gov.in/node/38" target="_blank">Agriculture Department</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://hortidept.nagaland.gov.in" target="_blank">Horticulture Department</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://fisheries.nagaland.gov.in" target="_blank">Fisheries Department</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://industry.nagaland.gov.in" target="_blank">Industry Department</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://nsrlm.nagaland.gov.in" target="_blank">NSRLM Nagaland</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://nagaland.gov.in" target="_blank">Nagaland State Portal</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://india.gov.in" target="_blank">National Portal</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter text-center">
            <img src="<?php echo e(asset('assets/img/gon-logo.png')); ?>" height="120"/> <br><br>
            <b><a href="https://nagaland.gov.in" style="color:#f2f2f2"/>nagaland.gov.in</a></b>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CMMFI: Nagaland</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/ -->
        Developed by the <a href="https://ditc.nagaland.gov.in">Department of Information Technology &amp; Communication: Nagaland</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('assets/vendor/purecounter/purecounter_vanilla.j')); ?>s"></script>
  <script src="<?php echo e(asset('assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

</body>

</html>
<?php /**PATH /Users/mozhui/Personal/playground/cmmicrofinance/resources/views/layouts/page.blade.php ENDPATH**/ ?>