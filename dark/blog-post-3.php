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

  <!-- Owl Catousel -->
  <link rel="stylesheet" type="text/css" href="../assets/plugins/owl.carousel/owl.carousel.css" />

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
          <li class="dropdown dropdown-hover active">
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
                <li class="active"><a href="blog-post-3.php">Blog Post 3</a>
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
  <section class="content-wrap no-banner">

    <h1 class="container">Review Kingdoms of Amalur</h1>

    <div class="container fire-news fire-post">

      <!-- Post Info -->
      <article class="news-one">

        <!-- Post Text -->
        <div class="description">

          <h3>Prohibere</h3>
          <p>
            Striga! Ut custodiant te sermonem dicens - periculi ... periculo! Non ego illud numquam. Dixi sunt implicatae. Elatus deinde manubrio! Gus sit amet suum motum. Nescio quando, aut quomodo, nescio quo. Illud scio, amet tortor. Suarum impotens prohibere
            eum.
          </p>

          <div class="align-center">
            <a href="assets/images/game-kingdoms-of-amalur-reckoning-1440x900.jpg" class="angled-img image-popup">
              <div class="img">
                <img src="assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
              </div>
              <i class="fa fa-search-plus icon"></i>
            </a>
          </div>

          <h3>Ego hodie</h3>
          <p>
            Sum expectantes. Ego hodie expectantes. Expectantes, et misit unum de pueris Gus interficere. Et suus vos. Nescio quis, qui est bonus usus liberi ad Isai? Qui nosti ... Quis dimisit filios ad necem ... hmm? Gus! Est, ante me factus singulis decem gradibus.
            Et nunc ad aliud opus mihi tandem tollendum est puer ille consensus et nunc fugit. Ipse suus obtinuit eam. Non solum autem illa, sed te tractantur in se trahens felis.
          </p>

          <p>
            No! Hoc non credant? Gus habet cameras ubique placet. Audire te! Non, omnia novit, omnia simul. Ubi eras hodie? In Lab! Et vos nolite cogitare suus 'possible ut Tyrus de cigarette elevaverunt CAPSA vestris? Age! Tu non vides? Pompeius extrema partem es.
            Tu omne quod ille voluit.
          </p>

          <p>
            Tu nunc coci ejus. Tu autem cocus Lab et probavimus liceat mihi sine causa est nunc coci interficere. Reputo it! Suus egregie. Ut antecedat. Quod si putas me posse facere, ergo ante. Pone aute in caput, et nunc interficere. Faciat! Fac. Fac. Fac.
          </p>

          <div class="align-center">
            <!-- Slider -->
            <div class="fire-slider gallery-popup">
              <a href="assets/images/game-kingdoms-of-amalur-reckoning-2-1940x1185.jpg" class="angled-img pull-left">
                <div class="img">
                  <img src="assets/images/game-kingdoms-of-amalur-reckoning-2-500x375.jpg" alt="">
                </div>
                <i class="fa fa-search-plus icon"></i>
              </a>
              <a href="assets/images/game-kingdoms-of-amalur-reckoning-3-1920x1080.jpg" class="angled-img pull-left">
                <div class="img">
                  <img src="assets/images/game-kingdoms-of-amalur-reckoning-3-500x375.jpg" alt="">
                </div>
                <i class="fa fa-search-plus icon"></i>
              </a>
            </div>
            <!-- /Slider -->
          </div>

          <h3>Saule</h3>
          <p>
            Saule ... , ostendit quod hoc quidem ... hoc quod dixit, ... potuit adiutorium mihi, et educat me in tota vita nova facio certus ut Im 'non invenit. Ego quidem illius memini Saul. Gus sit amet interfíciat mei tota familia. Nunc opus est mihi iste. Saul
            ... nunc Saule.
          </p>

          <p>
            Suspicio? Bene ... tunc ibimus? Quis uh ... CONEXUS locus his diebus? Quisque semper aliquid videtur, in volutpat mauris. Nolo enim dicere. Vobis neque ab aliis. Ego feci memetipsum explicans. Gus mortuus est. Lorem opus habeo.
          </p>

          <p>
            Jackson Isai? Tu quoque ... A te quidem a ante. Vos scitis quod blinking res Ive 'been vocans super vos? Et conteram illud, et conteram hoc. Maledicant druggie excors. Iam hoc tu facere conatus sum ad te in omni tempore?
          </p>

          <div class="align-center">
            <a href="assets/images/game-kingdoms-of-amalur-reckoning-4-1920x1080.jpg" class="angled-img image-popup mr-0">
              <div class="img">
                <img src="assets/images/game-kingdoms-of-amalur-reckoning-4-500x375.jpg" alt="">
              </div>
              <i class="fa fa-search-plus icon"></i>
            </a>
            <a href="assets/images/game-kingdoms-of-amalur-reckoning-5-1280x800.jpg" class="angled-img image-popup">
              <div class="img">
                <img src="assets/images/game-kingdoms-of-amalur-reckoning-5-500x375.jpg" alt="">
              </div>
              <i class="fa fa-search-plus icon"></i>
            </a>
          </div>

          <h3>Ludum mutavit</h3>
          <p>
            Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus. Qui curis! Modo nobis certamen est, qui non credunt at.
          </p>

          <p>
            Nonne vides quid sit? Tu es ... Jesse me respice. Tu ... blowfish sunt. A blowfish! Cogitare. Statura pusillus, nec sapientium panem, nec artificum. Sed predators facile prædam blowfish secretum telum non se habet. Non ille? Quid faciam blowfish, Isai.
            Blowfish quid faciat? In blowfish inflat, purus?
          </p>
        </div>
        <!-- /Post Text -->

        <!-- Post Tags -->
        <div class="tags">
          <i class="fa fa-tags"></i> Kingdoms of Amalur, game, review
        </div>
        <!-- /Post Tags -->

        <!-- Post Meta -->
        <div class="meta">
          <div class="item">
            <i class="fa fa-user meta-icon"></i>
            Author <a href="#!">nK</a>
          </div>
          <div class="item">
            <i class="fa fa-calendar meta-icon"></i>
            Published <a href="#!">Today</a>
          </div>
          <div class="item">
            <i class="fa fa-bookmark meta-icon"></i>
            Categories <a href="#!">First Try</a>
          </div>
          <div class="item">
            <i class="fa fa-eye meta-icon"></i>
            Views 384
          </div>
        </div>
        <!-- /Post Meta -->

        <!-- Post Share -->
        <div class="btn-group social-list">
          <a class="btn btn-default" title="Share on Facebook" href="#!"><i class="fa fa-facebook"></i></a>
          <a class="btn btn-default" href="#!" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
          <a class="btn btn-default" href="#!" title="Share on Google Plus"><i class="fa fa-google-plus"></i></a>
          <a class="btn btn-default" href="#!" title="Share on LinkedIn"><i class="fa fa-linkedin"></i></a>
          <a class="btn btn-default" href="#!" title="Share on Tumblr"><i class="fa fa-tumblr"></i></a>
        </div>
        <!-- /Post Share -->
      </article>
      <!-- /Post Info -->

      <!-- Post Comments -->
      <div class="comments-block">
        <h3>Comments <small>(0)</small></h3>

        <!-- Comment Form -->
        <form action="#!" class="comment-form">
          <div class="comment-avatar pull-left">
            <img src="assets/images/avatar.png" alt="">
          </div>
          <div class="comment-cont clearfix">
            <div class="fire-input">
              <input type="text" name="username" placeholder="Your Name *">
            </div>
            <div class="fire-input">
              <input type="email" name="email" placeholder="Your Email *">
            </div>
            <div class="fire-textarea">
              <textarea name="message" rows="5" placeholder="Your Comment..."></textarea>
            </div>
            <button class="btn btn-default pull-right">Submit</button>
          </div>
        </form>
        <!-- /Comment Form -->

        <!-- Comments List -->
        <ul class="comments-list">
          <!-- John Doe comment -->
          <li>
            <article>
              <div class="comment-avatar pull-left">
                <img src="assets/images/avatar-user-2.png" alt="">
              </div>
              <div class="comment-cont clearfix">
                <a class="comment-author h4" href="#!">Timmothy Stevens</a>
                <div class="date"><i class="fa fa-calendar"></i> December 23, 2014</div>
                <div class="comment-text">
                  Ut sibi fuerat socius sagittis. Ego intervenerit. Vere quia a te nuper iratus occidit illos undecim annorum puer?
                </div>
                <a href="#!" class="pull-right">Reply</a>
              </div>
            </article>

            <ul class="child-comment">
              <!-- Mike Pearson comment -->
              <li>
                <article>
                  <div class="comment-avatar pull-left">
                    <img src="assets/images/avatar-user-3.png" alt="">
                  </div>
                  <div class="comment-cont clearfix">
                    <a class="comment-author h4" href="#!">Richard Lambert</a>
                    <div class="date"><i class="fa fa-calendar"></i> January 12, 2015</div>
                    <div class="comment-text">
                      Prohibere. Striga! Ut custodiant te sermonem dicens - periculi ... periculo!
                    </div>
                    <a href="#!" class="pull-right">Reply</a>
                  </div>
                </article>

                <ul class="child-comment">
                  <!-- Mike Pearson comment -->
                  <li>
                    <article>
                      <div class="comment-avatar pull-left">
                        <img src="assets/images/avatar-user-4.png" alt="">
                      </div>
                      <div class="comment-cont clearfix">
                        <a class="comment-author h4" href="#!">Clyde Fields</a>
                        <div class="date"><i class="fa fa-calendar"></i> January 30, 2015</div>
                        <div class="comment-text">
                          Suarum impotens prohibere eum.
                        </div>
                        <a href="#!" class="pull-right">Reply</a>
                      </div>
                    </article>
                  </li>
                  <!-- /Mike Pearson comment -->
                </ul>
              </li>
              <!-- /Mike Pearson comment -->
            </ul>
          </li>
          <!-- /John Doe comment -->

          <!-- Mike Pearson comment -->
          <li>
            <article>
              <div class="comment-avatar pull-left">
                <img src="assets/images/avatar.png" alt="">
              </div>
              <div class="comment-cont clearfix">
                <a class="comment-author h4" href="#!">Scott Sutton</a>
                <div class="date"><i class="fa fa-calendar"></i> December 24, 2014</div>
                <div class="comment-text">
                  Gus! Est, ante me factus singulis decem gradibus. Et nunc ad aliud opus mihi tandem tollendum est puer ille consensus et nunc fugit.
                </div>
                <a href="#!" class="pull-right">Reply</a>
              </div>
            </article>
          </li>
          <!-- /Mike Pearson comment -->
        </ul>
        <!-- /Comments List -->
      </div>
      <!-- /Post Comments -->

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

  <!-- Owl Carousel -->
  <script type="text/javascript" src="../assets/plugins/owl.carousel/owl.carousel.min.js"></script>

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