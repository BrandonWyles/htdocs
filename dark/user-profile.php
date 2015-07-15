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

  <!-- Magnific Popup -->
  <link rel="stylesheet" type="text/css" href="../assets/plugins/magnific-popup/magnific-popup.css" />
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
          <li class="dropdown dropdown-hover active">
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

                <li class="active"><a href="user-profile.php">Profile <span class="badge pull-right bg-warning">13</span></a>
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
    <div class="fire-banner banner-top small">
      <div class="image" style="background-image: url(assets/images/game-diablo-iii-1400x656.jpg)" data-top="background-position: 50% 0px;" data-top-bottom="background-position: 50% -200px;">
      </div>

      <div class="info" data-top="opacity: 1; transform: translate3d(0px,0px,0px);" data-top-bottom="opacity: 0; transform: translate3d(0px,150px,0px);" data-anchor-target=".fire-banner.banner-top">
        <div>
          <div class="container fire-user">
            <a href="assets/images/user-photo.jpg" class="angled-img image-popup">
              <div class="img">
                <img src="assets/images/user-avatar.jpg" alt="">
              </div>
              <i class="fa fa-search-plus icon"></i>
            </a>
            <!--
                    -->
            <div class="user-data">
              <h2>John Doe</h2>
              <div class="location"><i class="fa fa-map-marker"></i> Los Angeles</div>
              <div class="activity">
                <div>
                  <div class="num">69</div>
                  <div class="title">Posts</div>
                </div>
                <div>
                  <div class="num">12</div>
                  <div class="title">Games</div>
                </div>
                <div>
                  <div class="num">689</div>
                  <div class="title">Followers</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->


    <div class="container fire-content">

      <div class="row">

        <!-- Left Side -->
        <div class="col-md-4 pr-40">
          <div class="side-block">
            <a href="#!" class="btn btn-default btn-full">Follow Me</a>
          </div>
          <div class="side-block">
            <h4 class="block-title">About</h4>
            <div class="block-content">
              Ecce dabo Pinkman Isai OK? Sicut locutus est tibi, et datus est, et hic sine Semper consequat volumus ... et ille in urbe ista licet? Et infernus, ubi tu non Virginiae ornare vel ipsum. Ut enim Albuquerque et ille eum iure hic, et ego ducam te ad iustitiam.
            </div>
          </div>
          <div class="side-block">
            <h4 class="block-title">Location</h4>
            <div class="block-content pt-5">
              <div class="responsive-embed responsive-embed-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423284.59051352815!2d-118.41173249999999!3d34.0204989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z0JvQvtGBLdCQ0L3QtNC20LXQu9C10YEsINCa0LDQu9C40YTQvtGA0L3QuNGPLCDQodCo0JA!5e0!3m2!1sru!2sru!4v1430158354122"
                width="600" height="450"></iframe>
              </div>
            </div>
          </div>
        </div>
        <!-- Left Side -->

        <div class="col-md-8">

          <!-- Activity -->
          <h2 class="mt-0">Activity</h2>
          <div class="fire-timeline">

            <!-- Timeline Notification -->
            <div class="fire-timeline-block">
              <!-- icon -->
              <div class="fire-timeline-icon bg-warning">
                <i class="fa fa-bell"></i>
              </div>
              <!-- /icon -->

              <!-- content -->
              <div class="fire-timeline-content">
                <h3 class="mb-0">Notification</h3>
                <span class="fire-timeline-date pt-0">20 minutes ago</span>
                <p>We invite you to test-drive the new service <a href="#!">Lorem</a>. Confirm the invitation and we will send you notes and hints.</p>
                <a href="#!" class="btn">Confirm</a>
                <a href="#!">Cancel</a>
              </div>
              <!-- content -->
            </div>
            <!-- /Timeline Notification -->


            <!-- Timeline Message -->
            <div class="fire-timeline-block">
              <!-- icon -->
              <div class="fire-timeline-icon bg-primary">
                <img src="assets/images/avatar-user-2.png" alt="John Doe" title="John Doe">
              </div>
              <!-- /icon -->

              <!-- content -->
              <div class="fire-timeline-content">
                <h3 class="mb-0">Message</h3>
                <span class="fire-timeline-date pt-0">Saturday, March 8, 2015</span>
                Received a <a href="main-inbox.php">message</a> from <strong>Max Brooks</strong>
              </div>
              <!-- /content -->
            </div>
            <!-- /Timeline Message -->

            <!-- Timeline Video -->
            <div class="fire-timeline-block">
              <!-- icon -->
              <div class="fire-timeline-icon bg-success">
                <i class="fa fa-youtube-play"></i>
              </div>
              <!-- /icon -->

              <!-- content -->
              <div class="fire-timeline-content">
                <h3 class="mb-0">New Electro &amp; House</h3>
                2015 Party Music Collab Mix
                <span class="fire-timeline-date pt-0">Published on Jan 10, 2015</span>
                <div class="responsive-embed responsive-embed-16x9">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/aJNEbmFeFgg" allowfullscreen></iframe>
                </div>
              </div>
              <!-- /content -->
            </div>
            <!-- /Timeline Video -->

            <!-- Timeline Map -->
            <div class="fire-timeline-block">
              <!-- icon -->
              <div class="fire-timeline-icon">
                <i class="fa fa-map-marker"></i>
              </div>
              <!-- /icon -->

              <!-- content -->
              <div class="fire-timeline-content">
                <h3 class="mb-0">My New Location</h3>
                <span class="fire-timeline-date pt-0">Jan 24</span>

                <div class="responsive-embed responsive-embed-16x9">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423284.59051352815!2d-118.41173249999999!3d34.0204989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z0JvQvtGBLdCQ0L3QtNC20LXQu9C10YEsINCa0LDQu9C40YTQvtGA0L3QuNGPLCDQodCo0JA!5e0!3m2!1sru!2sru!4v1430158354122"
                  width="600" height="450"></iframe>
                </div>
              </div>
              <!-- /content -->
            </div>
            <!-- /Timeline Map -->

          </div>
          <!-- /Activity -->


          <!-- Skills -->
          <h2>Skills</h2>
          JS:
          <div class="progress fire-progress">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
              <span class="sr-only">40% Complete (success)</span>
            </div>
          </div>

          CSS:
          <div class="progress fire-progress">
            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
              <span class="sr-only">20% Complete</span>
            </div>
          </div>

          PHP:
          <div class="progress fire-progress">
            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
              <span class="sr-only">60% Complete (warning)</span>
            </div>
          </div>

          Photoshop:
          <div class="progress fire-progress">
            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
              <span class="sr-only">80% Complete (danger)</span>
            </div>
          </div>
          <!-- /Skills -->
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