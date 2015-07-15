<?php $svr = $_SERVER['DOCUMENT_ROOT'].'/'; ?>

<!DOCTYPE html>

<?php include ($svr.'inc/ie.php'); ?>

<?php include ($svr.'inc/head_splash.php'); ?>

<body>

  <!-- Main Content -->
  <div class="content-wrap">
    <a href="dark/index.php" class="dark-side">
      <div>
        <div class="image" style="background-image: url(dark/assets/images/banner-bg.jpg)"></div>
        <img src="assets/images/logo-light1.png" alt="" class="logo">
        <img src="assets/images/whose-side-light.png" alt="" class="descr">
      </div>
    </a>

    <a href="light/index.php" class="light-side">
      <div>
        <div class="image" style="background-image: url(light/assets/images/banner-bg.jpg)"></div>
        <img src="assets/images/logo-dark1.png" alt="" class="logo">
        <img src="assets/images/whose-side-dark.png" alt="" class="descr">
      </div>
    </a>

    <span class="dark-side-name">CT Side</span>
    <span class="light-side-name">T Side</span>
  </div>
  <!-- /Main Content -->

  <!-- init fire -->
  <script>
    if(typeof fire !== 'undefined') {
        fire.init({
            smoothscroll: false,
        });
    }
  </script>

</body>

</php>