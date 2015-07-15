<?php $svr = $_SERVER['DOCUMENT_ROOT'].'/'; ?>

<!DOCTYPE html>

<?php include ($svr.'inc/ie.php'); ?>

<?php include ($svr.'inc/light/head_three.php'); ?>

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
                <li class="active"><a href="blog-post-2.php">Blog Post 2</a>
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
            <h2>Coming to fire - Botanicula</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->


    <div class="container fire-news fire-post">

      <!-- Left Side -->
      <div class="col-md-3">

        <!-- Side Search -->
        <div class="side-block ">
          <p>Search by News:</p>
          <form action="search.php">
            <div class="fire-input">
              <input type="text" name="search" placeholder="enter search term">
            </div>
          </form>
        </div>
        <!-- /Side Search -->

        <!-- Side Categories -->
        <div class="side-block ">
          <h4 class="block-title">Categories</h4>
          <ul class="block-content">
            <li><a href="#!">All</a>
            </li>
            <li><a href="#!">Announcements</a>
            </li>
            <li><a href="#!">Reviews</a>
            </li>
            <li><a href="#!">Releases</a>
            </li>
            <li><a href="#!">Updates</a>
            </li>
          </ul>
        </div>
        <!-- /Side Categories -->

        <!-- Side Popular News -->
        <div class="side-block ">
          <h4 class="block-title">Popular News</h4>
          <div class="block-content p-0">
            <!-- Single News Block -->
            <div class="row fire-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="blog-post-1.php" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-road-no-taken-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="blog-post-1.php" title="Road Not Taken - First Try!">Road Not Taken - First Try!</a></h4>
                <span class="date"><i class="fa fa-calendar"></i> Today</span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row fire-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="#!" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-dream-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="#!" title="Whats New in Dream">Whats New in Dream</a></h4>
                <span class="date"><i class="fa fa-calendar"></i> February 2, 2015</span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row fire-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="#!" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-journey-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="#!" title="Review Journey">Review Journey</a></h4>
                <span class="date"><i class="fa fa-calendar"></i> January 18, 2015</span>
              </div>
            </div>
            <!-- /Single News Block -->
          </div>
        </div>
        <!-- /Side Popular News -->
      </div>
      <!-- /Left Side -->

      <div class="col-md-9">
        <!-- Post Info -->
        <article class="news-one">

          <!-- Post Text -->
          <div class="description">
            <!-- Slider -->
            <div class="fire-slider gallery-popup pull-right">
              <a href="assets/images/game-botanicula-2-1920x1080.jpg" class="angled-img pull-left">
                <div class="img">
                  <img src="assets/images/game-botanicula-2-500x375.jpg" alt="">
                </div>
                <i class="fa fa-search-plus icon"></i>
              </a>
              <a href="assets/images/game-botanicula-3-1920x1080.jpg" class="angled-img pull-left">
                <div class="img">
                  <img src="assets/images/game-botanicula-3-500x375.jpg" alt="">
                </div>
                <i class="fa fa-search-plus icon"></i>
              </a>
              <a href="assets/images/game-botanicula-4-1920x1080.jpg" class="angled-img pull-left">
                <div class="img">
                  <img src="assets/images/game-botanicula-4-500x375.jpg" alt="">
                </div>
                <i class="fa fa-search-plus icon"></i>
              </a>
              <a href="assets/images/game-botanicula-5-1920x1080.jpg" class="angled-img pull-left">
                <div class="img">
                  <img src="assets/images/game-botanicula-5-500x375.jpg" alt="">
                </div>
                <i class="fa fa-search-plus icon"></i>
              </a>
            </div>
            <!-- /Slider -->

            <p>
              Sumus tam adultis. Non est enim tibi nescio fingunt. Confusio esse cupio. Scio te debeo meae. At etiam, ut caveant ab his eu. In tuo positum, idem fecissem. Constitutione, quam molesta est mihi tres menses nescio quid de contractu fines nostros. Scis
              quare hoc facere. Lorem satis quaesitum.
            </p>
            <p>
              Loquélæ. Brevis oratio. Hodie particeps tua perdideris. Quid sui nominis - Emilio? Emilio gradiens ad carcerem. Tulitque omnem pecuniam tuam in DEA tuus Lab. Vos got nihil. Quadratum unum. Et ego agnosco rem, nisi te scire elit. Cogito ... maybe vos possem
              socium ascendit.
            </p>
            <p>
              Paenitet me quod tu me rogas? Oh, sic, qui stultus plastic continentis rogavi te ut emas. Vides non manducare acidum hydrofluoric per plastic. Erit autem dissolvere metalli petram, vitrum, tellus. Ita quod illic '. Quam de aliquo cum aliqua interdum,
              maybe? Aliquid viride, huh? Quam vos sunt etiam vivere?
            </p>
            <p>
              Quinquaginta septem est - pars tua, triginta quinque millia. Est autem extra plus quindecim, tota tua est, quom meruisset. Fac nos fecit. SIC. Puto quia una res potest - venimus in cognitionem. Vide pretium in manibus. Sed finge iustum faciens quod qualibet
              septimana. SIC. Duis duas libras triginta quinque milia pondo.
            </p>
            <p>
              Respice ... Sentio sicut ego vobis exponam: sed vias breve iterum conabor. Fugere hoc maior difficultas est nobis. Perdet eam batch nostri. Et delebis eam ac omnia opus est vestigium, ut possimus coques. Sin id, quod morte morieris. Locus non est peccatum.
              Nec apud hos.
            </p>
          </div>
          <!-- /Post Text -->

          <!-- Post Tags -->
          <div class="tags">
            <i class="fa fa-tags"></i> Botanicula, coming soon, first review, sale date
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

          <ul class="comments-list">
            <li>No Comments ;(</li>
          </ul>

          <!-- Comments List
                <ul class="comments-list">
                    <li>
                        <article>
                            <div class="comment-avatar pull-left">
                                <img src="assets/images/avatar-user-1.png" alt="">
                            </div>
                            <div class="comment-cont clearfix">
                                <a class="comment-author h4" href="#!">Kristen Bradley</a>
                                <div class="date"><i class="fa fa-calendar"></i> 25 minutes ago</div>
                                <div class="comment-text">
                                    Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus. Qui curis! Modo nobis certamen est, qui non credunt at. 
                                </div>
                                <a href="#!" class="pull-right">Reply</a>
                            </div>
                        </article>
                    </li>
                </ul>
                Comments /List -->
        </div>
        <!-- /Post Comments -->
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