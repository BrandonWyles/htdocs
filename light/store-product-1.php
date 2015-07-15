<?php $svr = $_SERVER['DOCUMENT_ROOT'].'/'; ?>

<!DOCTYPE html>

<?php include ($svr.'inc/ie.php'); ?>

<?php include ($svr.'inc/light/sp.php'); ?>

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
                <li><a href="cart.php">Cart</a>
                </li>
              </ul>
              <!--
                        -->
              <ul role="menu">
                <li class="active"><a href="store-product-1.php">Product Style 1</a>
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
    <div class="fire-banner banner-top">
      <div class="image" style="background-image: url(assets/images/game-road-no-taken-1400x788.jpg)" data-top="background-position: 50% 0px;" data-top-bottom="background-position: 50% -200px;">
      </div>

      <div class="info" data-top="opacity: 1; transform: translate3d(0px,0px,0px);" data-top-bottom="opacity: 0; transform: translate3d(0px,150px,0px);" data-anchor-target=".fire-banner.banner-top">
        <div>
          <div class="container">
            <h2>Road Not Taken</h2>
            <br>
            <a href="#!" class="btn btn-lg" title="Add to Cart">$50.00</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->


    <!-- Images With Text -->
    <div class="fire-carousel gallery-popup">
      <a class="angled-img" href="http://www.youtube.com/watch?v=_VNV78nLV5Q">
        <div class="img">
          <img src="assets/images/game-road-no-taken-500x375.jpg" alt="">
        </div>
        <i class="fa fa-play icon"></i>
      </a>
      <a class="angled-img" href="assets/images/game-road-no-taken-2-1920x1080.jpg">
        <div class="img">
          <img src="assets/images/game-road-no-taken-2-500x375.jpg" alt="">
        </div>
        <i class="fa fa-search-plus icon"></i>
      </a>
      <a class="angled-img" href="assets/images/game-road-no-taken-3-1920x1080.jpg">
        <div class="img">
          <img src="assets/images/game-road-no-taken-3-500x375.jpg" alt="">
        </div>
        <i class="fa fa-search-plus icon"></i>
      </a>
      <a class="angled-img" href="assets/images/game-road-no-taken-4-1920x1080.jpg">
        <div class="img">
          <img src="assets/images/game-road-no-taken-4-500x375.jpg" alt="">
        </div>
        <i class="fa fa-search-plus icon"></i>
      </a>
      <a class="angled-img" href="assets/images/game-road-no-taken-5-1920x1080.jpg">
        <div class="img">
          <img src="assets/images/game-road-no-taken-5-500x375.jpg" alt="">
        </div>
        <i class="fa fa-search-plus icon"></i>
      </a>
      <a class="angled-img" href="assets/images/game-road-no-taken-6-1920x1080.jpg">
        <div class="img">
          <img src="assets/images/game-road-no-taken-6-500x375.jpg" alt="">
        </div>
        <i class="fa fa-search-plus icon"></i>
      </a>
      <a class="angled-img" href="assets/images/game-road-no-taken-7-1920x1080.jpg">
        <div class="img">
          <img src="assets/images/game-road-no-taken-7-500x375.jpg" alt="">
        </div>
        <i class="fa fa-search-plus icon"></i>
      </a>
    </div>
    <!-- /Images With Text -->


    <div class="container fire-store">

      <div class="col-md-9">
        <!-- Post Info -->
        <article>

          <!-- Description -->
          <h2 class="mt-0">Description</h2>
          <div class="description">
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
              Suspicio? Bene ... tunc ibimus? Quis uh ... CONEXUS locus his diebus? Quisque semper aliquid videtur, in volutpat mauris. Nolo enim dicere. Vobis neque ab aliis. Ego feci memetipsum explicans. Gus mortuus est. Lorem opus habeo.
            </p>
          </div>
          <!-- /Description -->

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


        <!-- Information -->
        <div class="requirements-block">
          <h2>System Requirements</h2>
          <div>
            <strong>OS:</strong> Windows 7
          </div>
          <div>
            <strong>Processor:</strong> Dual core from Intel or AMD at 2.8 GHz
          </div>
          <div>
            <strong>Memory:</strong> 4 GB RAM
          </div>
          <div>
            <strong>Graphics:</strong> nVidia GeForce 8600/9600GT, ATI/AMD Radeon HD2600/3600
          </div>
          <div>
            <strong>DirectX:</strong> Version 9.0c
          </div>
          <div>
            <strong>Network:</strong> Broadband Internet connection
          </div>
          <div>
            <strong>Hard Drive:</strong> 8 GB available space
          </div>
          <div>
            <strong>Sound Card:</strong> DirectX Compatible
          </div>
        </div>
        <!-- /Information -->


        <!-- Reviews -->
        <div class="reviews-block mb-0">
          <h2>Reviews <small>(3)</small></h2>

          <!-- Reviews List -->
          <ul class="reviews-list">
            <!-- Kristen Bradley review -->
            <li>
              <article>
                <div class="review-avatar pull-left">
                  <img src="assets/images/avatar-user-1.png" alt="">
                </div>
                <div class="review-cont clearfix">
                  <div class="rating pull-right">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                  <a class="review-author h4" href="#!">Kristen Bradley</a>
                  <div class="date"><i class="fa fa-calendar"></i> April 3, 2015</div>
                  <div class="review-text">
                    <p>
                      Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum
                      duo te mihi videtur.
                    </p>
                    <p>
                      Mauris a nunc occideritis me rectum. Videtur quod Ive facillimum, qui fecit vos. Potes me interficere, sine testibus et tunc manere in pauci weeks vel mensis vestigia Isai Pinkman et vos quoque illum occidere. Exercitium inutili option A. Videtur mihi
                      quod autem est.
                    </p>
                  </div>
                  <div class="pull-right review-like">
                    <a href="#!" class="text-success"><i class="fa fa-thumbs-up"></i> 12</a>
                    <a href="#!" class="text-danger"><i class="fa fa-thumbs-down"></i> 1</a>
                  </div>
                </div>
              </article>
            </li>
            <!-- /Kristen Bradley review -->
            <!-- Clyde Fields review -->
            <li>
              <article>
                <div class="review-avatar pull-left">
                  <img src="assets/images/avatar-user-4.png" alt="">
                </div>
                <div class="review-cont clearfix">
                  <div class="rating pull-right">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <a class="review-author h4" href="#!">Clyde Fields</a>
                  <div class="date"><i class="fa fa-calendar"></i> March 13, 2015</div>
                  <div class="review-text">
                    <p>
                      Uno ictu cruentus ille utrimque - statuit American Mexicanus gubernationes contra CONEXUS, et amputavit auriculam eius generis copia methamphetamine ad Africum. Quo facto suo, si huius huc termini velit vitae ipsum. Praemia essent ... ingentibus.
                    </p>
                    <p>
                      Sumus tam adultis. Non est enim tibi nescio fingunt. Confusio esse cupio. Scio te debeo meae. At etiam, ut caveant ab his eu. In tuo positum, idem fecissem. Constitutione, quam molesta est mihi tres menses nescio quid de contractu fines nostros. Scis
                      quare hoc facere. Lorem satis quaesitum.
                    </p>
                    <p>
                      Loquélæ. Brevis oratio. Hodie particeps tua perdideris. Quid sui nominis - Emilio? Emilio gradiens ad carcerem. Tulitque omnem pecuniam tuam in DEA tuus Lab. Vos got nihil. Quadratum unum. Et ego agnosco rem, nisi te scire elit. Cogito ... maybe vos possem
                      socium ascendit.
                    </p>
                  </div>
                  <div class="pull-right review-like">
                    <a href="#!" class="text-success"><i class="fa fa-thumbs-up"></i> 32</a>
                    <a href="#!" class="text-danger"><i class="fa fa-thumbs-down"></i> 9</a>
                  </div>
                </div>
              </article>
            </li>
            <!-- /Clyde Fields review -->
            <!-- Scott Sutton review -->
            <li>
              <article>
                <div class="review-avatar pull-left">
                  <img src="assets/images/avatar.png" alt="">
                </div>
                <div class="review-cont clearfix">
                  <div class="rating pull-right">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                  <a class="review-author h4" href="#!">Scott Sutton</a>
                  <div class="date"><i class="fa fa-calendar"></i> March 2, 2015</div>
                  <div class="review-text">
                    Perdet eam batch nostri.
                  </div>
                  <div class="pull-right review-like">
                    <a href="#!" class="text-success"><i class="fa fa-thumbs-up"></i> 2</a>
                    <a href="#!" class="text-danger"><i class="fa fa-thumbs-down"></i> 59</a>
                  </div>
                </div>
              </article>
            </li>
            <!-- /Scott Sutton review -->
          </ul>
          <!-- /Reviews List -->

          <!-- Review Form -->
          <form action="#!" class="review-form mb-0">
            <div class="review-avatar pull-left">
              <img src="assets/images/avatar.png" alt="">
            </div>
            <div class="review-cont clearfix">
              <div class="fire-input">
                <input type="text" name="username" placeholder="Your Name *">
              </div>
              <div class="fire-input">
                <input type="email" name="email" placeholder="Your Email *">
              </div>
              <div class="fire-textarea">
                <textarea name="message" rows="5" placeholder="Your Review..."></textarea>
              </div>
              <div class="fire-rating pull-right">
                <input type="radio" id="review-rate-5" name="review-rate" value="5">
                <label for="review-rate-5"><i class="fa fa-star"></i>
                </label>
                <input type="radio" id="review-rate-4" name="review-rate" value="4">
                <label for="review-rate-4"><i class="fa fa-star"></i>
                </label>
                <input type="radio" id="review-rate-3" name="review-rate" value="3">
                <label for="review-rate-3"><i class="fa fa-star"></i>
                </label>
                <input type="radio" id="review-rate-2" name="review-rate" value="2">
                <label for="review-rate-2"><i class="fa fa-star"></i>
                </label>
                <input type="radio" id="review-rate-1" name="review-rate" value="1">
                <label for="review-rate-1"><i class="fa fa-star"></i>
                </label>
              </div>
              <div class="clearfix"></div>
              <button class="btn btn-default pull-right">Submit</button>
            </div>
          </form>
          <!-- /Review Form -->
        </div>
        <!-- /Reviews -->
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
                    <img src="assets/images/game-road-no-taken-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="store-product-1.php" title="Road Not Taken">Road Not Taken</a></h4>
                <span class="price">$50.00</span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row fire-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="#!" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-botanicula-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="#!" title="Botanicula">Botanicula</a></h4>
                <span class="price">$39.99 <sup><del>$49.99</del></sup></span>
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
                <h4 class="ellipsis"><a href="#!" title="Journey">Journey</a></h4>
                <span class="price">$20.00</span>
              </div>
            </div>
            <!-- /Single News Block -->

            <!-- Single News Block -->
            <div class="row fire-side-news">
              <div class="col-xs-3 col-md-4">
                <a href="#!" class="angled-img">
                  <div class="img">
                    <img src="assets/images/game-world-of-goo-500x375.jpg" alt="">
                  </div>
                </a>
              </div>
              <div class="col-xs-9 col-md-8">
                <h4 class="ellipsis"><a href="#!" title="World of Goo">World of Goo</a></h4>
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

    <!-- Related -->
    <h2 class="container">Related</h2>
    <br>
    <div class="fire-carousel">
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-machinarium-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Machinarium</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-broken-age-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Broken Age</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-dream-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>Dream</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a class="angled-img" href="#!">
        <div class="img">
          <img src="assets/images/game-world-of-goo-500x375.jpg" alt="">
        </div>
        <div class="over-info">
          <div>
            <div>
              <h4>World of Goo</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <!-- /Related -->

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