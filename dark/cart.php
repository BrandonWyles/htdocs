<!DOCTYPE html>

<?php include ('inc/ie.php'); ?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>fire</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Icon -->
  <link rel="icon" type="image/png" href="assets/images/icon.png">
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>


  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="../assets/plugins/bootstrap/css/bootstrap.min.css" />

  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="../assets/plugins/fontawesome/css/font-awesome.min.css" />
  <!-- fire -->

  <link rel="stylesheet" type="text/css" href="../assets/fire/css/fire.min.css" />
  <!--[if lt IE 9]>
      <script src="../assets/plugins/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>

  <!-- Preloader -->
  <div class="page-preloader preloader-wrapp">
    <img src="assets/images/logo.png" alt="">
    <div class="preloader"></div>
  </div>
  <!-- /Preloader -->

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
          <li class="dropdown dropdown-hover active">
            <a href="#!" class="dropdown-toggle" role="button" aria-expanded="false">
                      Store <span class="caret"></span> <span class="label">games</span>
                    </a>
            <div class="dropdown-menu" style="width: 320px;">
              <ul role="menu">
                <li><a href="store-1.php">Store Style 1</a>
                </li>
                <li><a href="store-2.php">Store Style 2</a>
                </li>
                <li class="active"><a href="cart.php">Cart</a>
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
          <li class="dropdown dropdown-hover ">
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
                <li><a href="search.php">Search</a>
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
            <h2>Cart</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->


    <div class="container fire-content">

      <div class="col-md-9">

        <h2 class="mt-0">Your Games in Cart</h2>

        <!-- Single Product Block -->
        <div class="item angled-bg">
          <div class="row">
            <div class="col-lg-2 col-md-3 col-xs-4">
              <div class="angled-img">
                <div class="img">
                  <img src="assets/images/game-skyrim-500x375.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="col-lg-10 col-md-9 col-xs-8">
              <div class="row">
                <div class="col-xs-6 col-md-9">
                  <h4>Skyrim</h4>
                  <div class="rating hidden-xs">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="col-xs-6 col-md-3 align-right">
                  <div class="price">
                    $11.99
                  </div>
                  <a href="#!" class="remove glyphicon glyphicon-remove"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Single Product Block -->

        <!-- Single Product Block -->
        <div class="item angled-bg">
          <div class="row">
            <div class="col-lg-2 col-md-3 col-xs-4">
              <div class="angled-img">
                <div class="img">
                  <img src="assets/images/game-dragons-dogma-500x375.jpg" alt="">
                  <div class="badge show bg-default">-30%</div>
                </div>
              </div>
            </div>
            <div class="col-lg-10 col-md-9 col-xs-8">
              <div class="row">
                <div class="col-xs-6 col-md-9">
                  <h4>Dragons Dogma</h4>
                  <div class="rating hidden-xs">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                  </div>
                </div>
                <div class="col-xs-6 col-md-3 align-right">
                  <div class="price">
                    $34.99 <sup><del>$49.99</del></sup>
                  </div>
                  <a href="#!" class="remove glyphicon glyphicon-remove"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Single Product Block -->

        <!-- Single Product Block -->
        <div class="item angled-bg">
          <div class="row">
            <div class="col-lg-2 col-md-3 col-xs-4">
              <div class="angled-img">
                <div class="img">
                  <img src="assets/images/game-the-witcher-500x375.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="col-lg-10 col-md-9 col-xs-8">
              <div class="row">
                <div class="col-xs-6 col-md-9">
                  <h4>The Witcher</h4>
                  <div class="rating hidden-xs">
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
                  <a href="#!" class="remove glyphicon glyphicon-remove"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Single Product Block -->

        <div class="align-right h3 mr-20 mb-20">
          Total: <strong>$46.88</strong>
        </div>
        <div class="align-right">
          <a href="checkout.php" class="btn btn-lg">Proceed to Checkout</a>
        </div>
      </div>

      <!-- Right Side -->
      <div class="col-md-3">

        <!-- Side Search -->
        <div class="side-block right-side">
          <p>Search by Games:</p>
          <form action="search.php">
            <div class="fire-input">
              <input type="text" name="search" placeholder="enter search term">
            </div>
          </form>
        </div>
        <!-- /Side Search -->

        <!-- Side Categories -->
        <div class="side-block right-side">
          <h4 class="block-title">Categories</h4>
          <ul class="block-content">
            <li><a href="#!">All</a>
            </li>
            <li><a href="#!">Action</a>
            </li>
            <li><a href="#!">Adventure</a>
            </li>
            <li><a href="#!">Casual</a>
            </li>
            <li><a href="#!">Indie</a>
            </li>
            <li><a href="#!">Racing</a>
            </li>
            <li><a href="#!">RPG</a>
            </li>
            <li><a href="#!">Simulation</a>
            </li>
            <li><a href="#!">Strategy</a>
            </li>
          </ul>
        </div>
        <!-- /Side Categories -->

        <!-- Side Popular News -->
        <div class="side-block right-side">
          <h4 class="block-title">Popular Games</h4>
          <div class="block-content p-0">
            <!-- Single News Block -->
            <div class="row fire-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="store-product-1.php" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-bloodborne-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="store-product-1.php" title="Bloodborne">Bloodborne</a></h4>
                <span class="price">$50.00</span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row fire-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="#!" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-dark-souls-ii-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="#!" title="Dark Souls II">Dark Souls II</a></h4>
                <span class="price">$39.99 <sup><del>$49.99</del></sup></span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row fire-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="#!" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="#!" title="Kingdoms of Amalur">Kingdoms of Amalur</a></h4>
                <span class="price">$20.00</span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row fire-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="#!" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-diablo-iii-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="#!" title="Let's Grind Diablo III">Diablo III</a></h4>
                <span class="price">$10.00</span>
              </div>
            </div>
            <!-- /Single News Block -->
          </div>
        </div>
        <!-- /Side Popular News -->
      </div>
      <!-- /Right Side -->

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