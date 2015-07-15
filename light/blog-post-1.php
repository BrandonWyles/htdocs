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
                <li class="active"><a href="blog-post-1.php">Blog Post 1</a>
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
            <h2>Road Not Taken - First Try!</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->


    <div class="container fire-news fire-post">

      <div class="col-md-9">
        <!-- Post Info -->
        <article class="news-one">

          <!-- Post Text -->
          <div class="description">
            <a href="http://www.youtube.com/watch?v=70urej3SQUo" class="angled-img pull-left video-popup">
              <div class="img">
                <img src="assets/images/game-road-no-taken-500x375.jpg" alt="">
              </div>
              <i class="fa fa-play icon"></i>
            </a>
            <p>
              Ut sibi fuerat socius sagittis. Ego intervenerit. Vere quia a te nuper iratus occidit illos undecim annorum puer. Deinde, si hoc forte qui fuit imperavit.
            </p>
            <p>
              Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum
              duo te mihi videtur.
            </p>
            <p>
              Mauris a nunc occideritis me rectum. Videtur quod Ive facillimum, qui fecit vos. Potes me interficere, sine testibus et tunc manere in pauci weeks vel mensis vestigia Isai Pinkman et vos quoque illum occidere. Exercitium inutili option A. Videtur mihi
              quod autem est.
            </p>
            <p>
              Pergo coctione, et ego, et tu oblivisci Pinkman. Obliviscendum hoc unquam factum. Intelligamus hoc in sola SINGULTO multo aliter atque fructuosa negotium structura. Malo B. Option.
            </p>
            <p>
              Ille vivere. Ut ad te quaerebam ... purgare caeli. Sunt uh ... nonnullus propter errorem qui de rebus inter nos et iacere puto suus in causa, id est in mensa. Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium.
            </p>
            <p>
              His duobus, sicariorum. Et orci aetate erat, sed nescio quo modo se gerendo levir meus aufert a me. Propter hoc 'interventu 'vivere me scito. Et tamen hoc quod multo altius est eget arcu. Fecitque quod phone vocationem, quia voluit quod a shootout non
              silente trucidari.
            </p>
          </div>
          <!-- /Post Text -->

          <!-- Post Tags -->
          <div class="tags">
            <i class="fa fa-tags"></i> Road Not Taken, first try, newbie game
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
          <h3>Comments <small>(2)</small></h3>

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
            <!-- Kristen Bradley comment -->
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

              <ul class="child-comment">
                <!-- Mike Pearson comment -->
                <li>
                  <article>
                    <div class="comment-avatar pull-left">
                      <img src="assets/images/avatar.png" alt="">
                    </div>
                    <div class="comment-cont clearfix">
                      <a class="comment-author h4" href="#!">Mike Pearson</a>
                      <div class="date"><i class="fa fa-calendar"></i> 5 minutes ago</div>
                      <div class="comment-text">
                        Yeah!
                      </div>
                      <a href="#!" class="pull-right">Reply</a>
                    </div>
                  </article>
                </li>
                <!-- /Mike Pearson comment -->
              </ul>
            </li>
            <!-- /Kristen Bradley comment -->
          </ul>
          <!-- /Comments List -->
        </div>
        <!-- /Post Comments -->
      </div>

      <!-- Right Side -->
      <div class="col-md-3">

        <!-- Side Search -->
        <div class="side-block right-side">
          <p>Search by News:</p>
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
        <div class="side-block right-side">
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