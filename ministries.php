<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS -->
    <link href="dist/css/main.css" rel="stylesheet">

    <!-- Your page title -->
    <title>Ministries </title>

    <!-- Place Custom Favicon here -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">


  </head>

  <body>

    <div class="page-loader">
      <div class="loader"><img src="images/logo-sm.svg" alt=""></div>
    </div>

    <!-- =================== SITE HEADER BEGINS ============================= -->

    <header class="header transparent fixed light-text" data-onscroll-classes="dark-text white-bg"
      data-onscroll-logo="images/logo-dark.png">

      <div class="container">

        <nav class="header__nav bottom-nav">

          <div class="header__logo brand--logo">
            <a href="index.php"><img src="images/logo-light.png" alt="Greater Love Church"></a>
          </div>

          <div class="header__mobile--opener hide-on-lg">
            <button class="header__mobile--icon" aria-expanded="false" aria-controls="mobile-menu"
              data-toggle="mobile-menu">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </button>
          </div>

          <ul class="header__navitems show-on-lg" id="mobile-menu">

            <!-- Contains donation button for mobile and tablet devices -->
            <li class="header__extra">
              <div class="cta">
                <a href="donations.php" class="button button-block-sm">Donate</a>
              </div>
            </li><!-- .header__extra ends -->

            <li class="header__list"><a href="index.php">Home</a></li>
            <!-- .header__list ends -->

            <li class="header__list"><a href="about.php">About</a></li><!-- .header__list ends -->

            <li class="header__list">
              <a href="" class="dropdown-link">Sermons</a>

              <div class="header__submenu">
                <ul>

                  <li class="header__list"><a href="sermons.php">Sermons</a></li>

                </ul>

              </div><!-- .header__submenu ends -->
            </li><!-- .header__list ends -->

            <li class="header__list active">
              <a href="" class="dropdown-link">Ministries</a>

              <div class="header__submenu">
                <ul>

                  <li class="header__list active"><a href="ministries.php">Ministries</a></li>

                </ul>
              </div><!-- .header__submenu ends -->
            </li><!-- .header__list ends -->

            <li class="header__list">
              <a href="" class="dropdown-link">Events</a>

              <div class="header__submenu">
                <ul>

                  <li class="header__list"><a href="events.php">Events</a></li>


                </ul>
              </div><!-- .header__submenu ends -->
            </li><!-- .header__list ends -->

            <li class="header__list">
              <a href="" class="dropdown-link">Pages</a>

              <div class="header__submenu">
                <ul>

                  <li class="header__list"><a href="donations.php">Donations</a></li>

                </ul>
              </div><!-- .header__submenu ends -->
            </li><!-- .header__list ends -->

            <li class="header__list"><a href="contact.php">Contact</a></li>
            <!-- .header__list ends -->

          </ul><!-- .header__navitems ends -->

          <!-- Contains Shopping cart and donation button -->
          <div class="header__extra desktop-version">
            <div class="cta hide-on-sm show-on-lg">
              <a href="donations.php" class="button">Donate</a>
            </div>
          </div><!-- .header__extra ends -->

        </nav><!-- .header__nav ends -->

      </div><!-- .container ends -->

    </header><!-- .header ends -->

    <!-- =================== SITE HEADER ENDS ============================= -->



    <!-- =================== MAIN SECTION BEGINS ============================= -->

    <main>

      <!-- BANNER SECTION STARTS -->
      <section class="banner full-width">

        <div class="container">

          <div class="banner__content">

            <div class="banner__heading">
              <h1>Ministries</h1>
              <p>Every member has a specific group they belong to and grow together.</p>
            </div>

            <div class="breadcrumb">
              <div class="breadcrumb__home--link"><a href="index.php">Home</a></div>
              <span></span>
              <div class="breadcrumb__current--page-link">Ministries</div>
            </div><!-- .breadcrumb ends -->

          </div><!-- .banner__content ends -->

        </div><!-- .container ends -->

      </section><!-- .banner ends -->
      <!-- BANNER SECTION ENDS -->


      <!-- ALL MINISTRIES SECTION STARTS -->
      <div class="all-ministries default-section-spacing">

        <div class="container">

          <div class="section-heading text-center no-margin">
            <span>Ministries</span>
            <h2>Our ministries</h2>
          </div><!-- .section-heading ends -->

          <div class="search search-header default-section-spacing">

            <div class="row">

              <div class="flex-md-3 flex-lg-4">

                <div class="search__result">
                  <div class="text leading uppercase bold">Results</div>
                  <p>Showing 6 out of 24 ministries</p>
                </div>

              </div><!-- .flex-* ends -->

              <div class="flex-md-9 flex-lg-8">

                <div class="search__search">
                  <div class="text leading uppercase bold">Search</div>
                </div>

                <form action="#" class="form search__form">

                  <div class="display-flex">

                    <div class="form__group">

                      <input type="text" class="form__input" placeholder="Search for ministries...">

                    </div><!-- .form__group ends -->

                    <div>
                      <button type="submit" class="button">Search</button>
                    </div>

                  </div><!-- .display-flex ends -->

                </form><!-- .form ends -->

              </div><!-- .flex-* ends -->

            </div><!-- .row ends -->

          </div>

          <div class="all-ministries__ministries">

            <div class="row">

              <div class="flex-md-6 flex-lg-4 mar-b-sm">

                <div class="card ministry">

                  <div class="card__header">
                    <img src="images/ministry-1@1.5x.jpg" alt="A man holding and reading the Holy Bible"
                      class="card__image ministry__image">
                  </div><!-- .card__header ends -->

                  <div class="card__footer">

                    <div class="ministry__title">
                      <h3>Men's ministry</h3>
                    </div>

                    <div class="ministry__meta"><i class="ri-group-line"></i> <span>34 Brothers</span></div>

                    <div class="ministry__content">
                      <div class="excerpt">
                        <p>Men play a big role in church and activities set aside for them will help them walk in faith.</p>
                      </div>
                    </div><!-- .ministry__content ends -->

                  </div><!-- .card__footer ends -->

                </div><!-- .card ends -->

              </div><!-- .flex-* ends -->

              <div class="flex-md-6 flex-lg-4 mar-b-sm">

                <div class="card ministry">

                  <div class="card__header">
                    <img src="images/ministry-3@1.5x.jpg" alt="A little boy laughing while reading the Holy Bible"
                      class="card__image ministry__image">
                  </div><!-- .card__header ends -->

                  <div class="card__footer">

                    <div class="ministry__title">
                      <h3>Children's ministry</h3>
                    </div>

                    <div class="ministry__meta"><i class="ri-group-line"></i> <span>67 Children</span></div>

                    <div class="ministry__content">
                      <div class="excerpt">
                        <p>This ministry helps the church's biological growth because it teaches children about their savior .</p>
                      </div>
                    </div><!-- .ministry__content ends -->

                  </div><!-- .card__footer ends -->

                </div><!-- .card ends -->

              </div><!-- .flex-* ends -->

              <div class="flex-md-6 flex-lg-4 mar-b-sm">

                <div class="card ministry">

                  <div class="card__header">
                    <img src="images/ministry-2@1.5x.jpg" alt="Young women praying" class="card__image ministry__image">
                  </div><!-- .card__header ends -->

                  <div class="card__footer">

                    <div class="ministry__title">
                      <h3>Women's ministry</h3>
                    </div>

                    <div class="ministry__meta"><i class="ri-group-line"></i> <span>12 Sisters</span></div>

                    <div class="ministry__content">
                      <div class="excerpt">
                        <p>The ministry allows women focus on Bible studies, support groups and events for women besides
                            the pastor's wife, which many times will fallto her if this ministry never existed.</p>
                      </div>
                    </div><!-- .ministry__content ends -->

                  </div><!-- .card__footer ends -->

                </div><!-- .card ends -->

              </div><!-- .flex-* ends -->

              <div class="flex-md-6 flex-lg-4">

                <div class="card ministry">

                  <div class="card__header">
                    <img src="images/ministry-4@1.5x.jpg" alt="Church event" class="card__image ministry__image">
                  </div><!-- .card__header ends -->

                  <div class="card__footer">

                    <div class="ministry__title">
                      <h3>Homeless outreach ministry</h3>
                    </div>

                    <div class="ministry__meta"><i class="ri-group-line"></i> <span>14 Members</span></div>

                    <div class="ministry__content">
                      <div class="excerpt">
                        <p>This ministry is intentionally set to provide support to homeless people around.
                            From the donations we offer accommodation, food.</p>
                      </div>
                    </div><!-- .ministry__content ends -->

                  </div><!-- .card__footer ends -->

                </div><!-- .card ends -->

              </div><!-- .flex-* ends -->

              <div class="flex-md-6 flex-lg-4">

                <div class="card ministry">

                  <div class="card__header">
                    <img src="images/ministry-5@1.5x.jpg" alt="Women laughing" class="card__image ministry__image">
                  </div><!-- .card__header ends -->

                  <div class="card__footer">

                    <div class="ministry__title">
                      <h3>Women's choir</h3>
                    </div>

                    <div class="ministry__meta"><i class="ri-group-line"></i> <span>12 Sisters</span></div>

                    <div class="ministry__content">
                      <div class="excerpt">
                        <p>Women choir is comprised of  praise and worshippers.</p>
                      </div>

                    </div><!-- .ministry__content ends -->

                  </div><!-- .card__footer ends -->

                </div><!-- .card ends -->

              </div><!-- .flex-* ends -->

              <div class="flex-md-6 flex-lg-4">

                <div class="card ministry">

                  <div class="card__header">
                    <img src="images/ministry-6@1.5x.jpg" alt="Man singing" class="card__image ministry__image">
                  </div><!-- .card__header ends -->

                  <div class="card__footer">

                    <div class="ministry__title">
                      <h3>Men's choir</h3>
                    </div>

                    <div class="ministry__meta"><i class="ri-group-line"></i> <span>10 Brothers</span></div>

                    <div class="ministry__content">
                      <div class="excerpt">
                        <p>This is the church band.</p>
                      </div>

                    </div><!-- .ministry__content ends -->

                  </div><!-- .card__footer ends -->

                </div><!-- .card ends -->

              </div><!-- .flex-* ends -->

            </div><!-- .row ends -->

          </div><!-- .all-sermons__sermons ends -->

          <div class="pagination">

            <span class="pagination__arrow"><a href=""><i class="ri-arrow-left-s-line"></i></a></span>
            <span class="pagination__number"><a href="">1</a></span>
            <span class="pagination__number active"><a href="">2</a></span>
            <span class="pagination__number"><a href="">3</a></span>
            <span class="pagination__arrow"><a href=""><i class="ri-arrow-right-s-line"></i></a></span>

          </div><!-- .pagination ends -->

        </div><!-- .container ends -->

      </div><!-- .all-ministries ends -->
      <!-- ALL MINISTRIES SECTION ENDS -->


      <!-- TIME AND LOCATION STARTS -->
      <section class="time-location background-lighter-gray">

        <div class="container">

          <div class="row">

            <div class="flex-lg-6">

              <div class="time-location__content default-section-spacing">

                <div class="section-heading">
                  <span>Time and location</span>
                  <h2>Come and worship with us</h2>
                </div><!-- .section-heading ends -->

                <div class="time-location__time">

                  <div class="info">
                    <div class="day bold">Sunday:</div>
                    <div class="time">
                      <span>9:00 am - 10:30 am (Sunday school)</span>
                      <span>11:00 am - 1:30 pm (Morning service)</span>
                      <span>4:00 pm - 5:30 pm (Evening service)</span>
                    </div>
                  </div>

                  <div class="info">
                    <div class="location bold">Location:</div>
                    <div class="location-info"><span>167-50406 FUNYULA</span></div>
                  </div>

                </div><!-- .time-location__time ends -->

              </div>

            </div><!-- .flex-* ends -->

          </div><!-- .row ends -->

        </div><!-- .container ends -->

      </section><!-- .time-location ends -->
      <!-- TIME AND LOCATION ENDS -->


    </main><!-- main ends -->

    <!-- =================== MAIN SECTION ENDS ============================= -->


    <!-- SCROLL BACK TO TOP BEGINS -->
    <div class="scroll-to-top"><i class="ri-arrow-up-line"></i></div>
    <!-- SCROLL BACK TO TOP ENDS -->


    <!-- =================== SITE FOOTER BEGINS ============================= -->

    <footer class="footer">

      <div class="container">

        <div class="footer__top display-flex justify-align-center">

          <div class="footer__logo">
            <div class="logo-wrapper">
              <img src="images/logo-sm.svg" alt="Small logo">
            </div>
          </div>

        </div><!-- .footer__top ends -->

        <div class="footer__bottom">

          <div class="row align-items-center">

            <div class="flex-md-6 flex-lg-4">

              <div class="footer__info copyright">&copy; 2020 - Greater Love Church - All Rights Reserved</div>

            </div><!-- .flex-* ends -->

            <div class="flex-md-6 flex-lg-4">

              <div class="footer__info credit">Template designed and developed by Blazythemes</div>

            </div><!-- .flex-* ends -->

            <div class="flex-md-6 flex-lg-4">

              <div class="footer__info social">
                <span>Follow us on social medias</span>
                <div class="social__icons">
                  <a href=""><i class="ri-facebook-line"></i></a>
                  <a href=""><i class="ri-twitter-line"></i></a>
                  <a href=""><i class="ri-linkedin-line"></i></a>
                </div>
              </div>

            </div><!-- .flex-* ends -->

          </div><!-- .row ends -->

        </div><!-- .footer__top ends -->

      </div><!-- .container ends -->

    </footer><!-- footer ends -->

    <!-- =================== SITE FOOTER ENDS ============================= -->


    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- loading in JQuery locally if CDN failed -->
    <script>window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')</script>
    <!-- Owl Carousel script -->
    <script src="js/plugins/owl.carousel.js"></script>

    <!-- JQuery Credit Card script -->
    <script src="js/plugins/jquery.card.js"></script>
    <!-- Animate On Scroll script -->
    <script src="js/plugins/aos.js"></script>
    <!-- Lightbox script -->
    <script src="js/plugins/lightbox.min.js"></script>
    <!-- Main script -->
    <script src="dist/js/main.min.js"></script>

  </body>

</html>