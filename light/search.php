<?php $svr = $_SERVER['DOCUMENT_ROOT'].'/'; ?>

<!DOCTYPE html>

<?php include ($svr.'inc/ie.php'); ?>

<?php include ($svr.'inc/light/head_one.php'); ?>

<body>

  <?php include ($svr.'inc/pre.php'); ?>

  <!-- Navbar -->
  <nav class="navbar-fire navbar navbar-default navbar-fixed-top ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          <img src="assets/images/logo.png" alt="">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown dropdown-hover ">
            <a href="#!" class="dropdown-toggle" role="button" aria-expanded="false">
                      Store <span class="caret"></span> <span class="label">games</span>
                    </a>
            <div class="dropdown-menu" style="width: 320px;">
              <ul role="menu">
                <li><a href="store-1.php">Store Style 1</a>
                </li>
                <li><a href="store-2.php">Store Style 2</a>
                </li>
                <li><a href="cart.php">Cart</a>
                </li>
              </ul>
              <!--
                        -->
              <ul role="menu">
                <li><a href="store-product-1.php">Product Style 1</a>
                </li>
                <li><a href="store-product-2.php">Product Style 2</a>
                </li>
                <li><a href="checkout.php">Checkout</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dropdown dropdown-hover ">
            <a href="#!" class="dropdown-toggle" role="button" aria-expanded="false">
                      Blog <span class="caret"></span> <span class="label">news</span>
                    </a>
            <div class="dropdown-menu" style="width: 320px;">
              <ul role="menu">
                <li><a href="blog-1.php">Blog Style 1</a>
                </li>
                <li><a href="blog-2.php">Blog Style 2</a>
                </li>
                <li><a href="blog-3.php">Blog Style 3</a>
                </li>
              </ul>
              <!--
                        -->
              <ul role="menu">
                <li><a href="blog-post-1.php">Blog Post 1</a>
                </li>
                <li><a href="blog-post-2.php">Blog Post 2</a>
                </li>
                <li><a href="blog-post-3.php">Blog Post 3</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dropdown dropdown-hover active">
            <a href="#!" class="dropdown-toggle" role="button" aria-expanded="false">
                      Features <span class="caret"></span> <span class="label">full list</span>
                    </a>
            <div class="dropdown-menu" style="width: 320px;">
              <ul role="menu">
                <li><a href="components.php">Components</a>
                </li>
                <li><a href="user-profile.php">User Profile</a>
                </li>
                <li><a href="forums.php">Forums</a>
                </li>
                <li><a href="forums-topics.php">Forums Topics</a>
                </li>
                <li><a href="forums-single-topic.php">Single Topic</a>
                </li>
              </ul>
              <!--
                        -->
              <ul role="menu">
                <li><a href="coming-soon.php">Coming Soon</a>
                </li>
                <li class="active"><a href="search.php">Search</a>
                </li>
                <li><a href="login.php">Login</a>
                </li>
                <li><a href="404.php">404</a>
                </li>
                <li><a href="blank.php">Blank</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown dropdown-hover ">
            <a href="#!" class="dropdown-toggle" role="button" aria-expanded="false">
                      John Doe <span class="badge bg-default">2</span> <span class="caret"></span> <span class="label">it is you</span>
                    </a>
            <div class="dropdown-menu">
              <ul role="menu">
                <li><a href="../documentation">Documentation</a>
                </li>
                <li><a href="http://themeforest.net/item/fire-game-template-based-on-bootstrap/11306207?ref=nKdev">Purchase</a>
                </li>
                <li class="divider"></li>

                <li><a href="user-profile.php">Profile <span class="badge pull-right bg-warning">13</span></a>
                </li>
                <li><a href="cart.php">My Cart <span class="badge pull-right bg-default">3</span></a>
                </li>
                <li class="divider"></li>

                <li><a href="login.php">Log Out</a>
                </li>
                <li class="dropdown-submenu pull-left">
                  <a href="#!">More..</a>
                  <div class="dropdown-menu">
                    <ul role="menu">
                      <li><a href="#!">3rd level</a>
                      </li>
                      <li><a href="#!">3rd level</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a class="search-toggle" href="search.php">
              <i class="fa fa-search"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->

  <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <div class="fire-banner banner-top xsmall">
      <div class="image" style="background-image: url(assets/images/banner-blog-bg.jpg)" data-top="background-position: 50% 0px;" data-top-bottom="background-position: 50% -200px;">
      </div>

      <div class="info" data-top="opacity: 1; transform: translate3d(0px,0px,0px);" data-top-bottom="opacity: 0; transform: translate3d(0px,150px,0px);" data-anchor-target=".fire-banner.banner-top">
        <div>
          <div class="container">
            <h2>Search</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->


    <div class="container fire-search">

      <form action="search.php">
        <div class="fire-input">
          <input type="text" name="search" placeholder="Search..." autofocus>
        </div>
      </form>

      <div class="row">
        <div class="col-md-6">
          <h2>Games</h2>

          <!-- Single Product Block -->
          <a href="store-product-1.php" class="angled-bg">
            <div class="row">
              <div class="col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-road-no-taken-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Road Not Taken</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $50.00
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="angled-bg">
            <div class="row">
              <div class="col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-botanicula-500x375.jpg" alt="">
                    <div class="badge show-half bg-default">-20%</div>
                  </div>
                </div>
              </div>
              <div class="col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Botanicula</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $39.99 <sup><del>$49.99</del></sup>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="angled-bg">
            <div class="row">
              <div class="col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-journey-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Journey</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $20.00
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->

          <!-- Single Product Block -->
          <a href="#!" class="angled-bg">
            <div class="row">
              <div class="col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-broken-age-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Broken Age</h4>
                    <div class="rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="price">
                      $14.99
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single Product Block -->
        </div>
        <div class="col-md-6">
          <h2>News</h2>

          <!-- Single News -->
          <a href="#!" class="angled-bg">
            <div class="row">
              <div class="col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-road-no-taken-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Road Not Taken - First Try!</h4>
                    <div class="tags">
                      <i class="fa fa-tags"></i> Road Not Taken, first try, newbie game
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="date">
                      <i class="fa fa-calendar"></i> Today
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single News -->

          <!-- Single News -->
          <a href="#!" class="angled-bg">
            <div class="row">
              <div class="col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-broken-age-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Broken Age, 60% Off</h4>
                    <div class="tags">
                      <i class="fa fa-tags"></i> Broken Age, special offer, discount, 60% off
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="date">
                      <i class="fa fa-calendar"></i> February 19, 2015
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single News -->

          <!-- Single News -->
          <a href="#!" class="angled-bg">
            <div class="row">
              <div class="col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-dream-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Whats New in Dream</h4>
                    <div class="tags">
                      <i class="fa fa-tags"></i> Dream, new features, update
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="date">
                      <i class="fa fa-calendar"></i> February 2, 2015
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single News -->

          <!-- Single News -->
          <a href="#!" class="angled-bg">
            <div class="row">
              <div class="col-md-3 col-xs-4">
                <div class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-flower-500x375.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-md-9 col-xs-8">
                <div class="row">
                  <div class="col-xs-6 col-md-9">
                    <h4>Flower Review</h4>
                    <div class="tags">
                      <i class="fa fa-tags"></i> Flower, review, game
                    </div>
                  </div>
                  <div class="col-xs-6 col-md-3 align-right">
                    <div class="date">
                      <i class="fa fa-calendar"></i> January 27, 2015
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <!-- /Single News -->
        </div>
      </div>


    </div>

    <!-- Footer -->
    <footer>
      <div class="wrapper" style="background-image: url(assets/images/footer-bg.jpg)" data-bottom="transform:translate3d(0px,0px,0px);" data-bottom-top="transform:translate3d(0px,-200px,0px);" data-anchor-target="footer">

        <!-- Social Buttons -->
        <div class="social">
          <div class="container" data-bottom-top="opacity: 0;" data-bottom="opacity: 1;">
            <h3>Connect socially with <strong>fire</strong></h3>

            <div class="row icons">
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-facebook-square"></i>
                  <span>Like on Facebook</span>
                </a>
              </div>
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-twitter-square"></i>
                  <span>Follow on Twitter</span>
                </a>
              </div>
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-google-plus-square"></i>
                  <span>Follow on Google+</span>
                </a>
              </div>
              <div class="col-xs-6 col-sm-3">
                <a href="#!">
                  <i class="fa fa-youtube-square"></i>
                  <span>Watch on Youtube</span>
                </a>
              </div>
            </div>

          </div>
        </div>
        <!-- /Social Buttons -->

        <!-- Copyright -->
        <div class="copyright">
          <div class="container">
            <strong>nK</strong> &copy; 2015. All rights reserved
          </div>
        </div>
        <!-- /Copyright -->

      </div>
    </footer>
    <!-- /Footer -->

  </section>
  <!-- /Main Content -->

  <!-- Search Block -->
  <div class="search-block">
    <a href="#!" class="search-toggle glyphicon glyphicon-remove"></a>
    <form action="search.php">
      <div class="fire-input">
        <input type="text" name="search" placeholder="Search...">
      </div>
    </form>
  </div>
  <!-- /Search Block -->


  <!-- jQuery -->
  <script type="text/javascript" src="../assets/plugins/jquery/jquery.min.js"></script>

  <!-- CSS Shapes Polyfill -->
  <script type="text/javascript" src="../assets/plugins/css-shapes-polyfill/shapes-polyfill.min.js"></script>

  <!-- Bootstrap -->
  <script type="text/javascript" src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

  <!-- Skrollr -->
  <script type="text/javascript" src="../assets/plugins/skrollr/skrollr.min.js"></script>

  <!-- Smooth Scroll -->
  <script type="text/javascript" src="../assets/plugins/smoothscroll/smoothscroll.js"></script>

  <!-- Magnific Popup -->
  <script type="text/javascript" src="../assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- fire -->
  <script type="text/javascript" src="../assets/fire/js/fire.min.js"></script>
  <!-- init fire -->
  <script>
    if(typeof fire !== 'undefined') {
        fire.init({
            smoothscroll: false,
        });
    }
  </script>

</body>

</html>