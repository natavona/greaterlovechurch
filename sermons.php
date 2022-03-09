<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS -->
    <link href="dist/css/main.css" rel="stylesheet">

    <!-- Your page title -->
    <title>Sermons</title>

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

            <li class="header__list active">
              <a href="" class="dropdown-link">Sermons</a>

              <div class="header__submenu">
                <ul>

                  <li class="header__list active"><a href="sermons.php">Sermons</a></li>

                </ul>

              </div><!-- .header__submenu ends -->
            </li><!-- .header__list ends -->

            <li class="header__list">
              <a href="" class="dropdown-link">Ministries</a>

              <div class="header__submenu">
                <ul>

                  <li class="header__list"><a href="ministries.php">Ministries</a></li>

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
              <h1>Sermons</h1>
            </div>

            <div class="breadcrumb">
              <div class="breadcrumb__home--link"><a href="index.php">Home</a></div>
              <span></span>
              <div class="breadcrumb__current--page-link">Sermons</div>
            </div><!-- .breadcrumb ends -->

          </div><!-- .banner__content ends -->

        </div><!-- .container ends -->

      </section><!-- .banner ends -->
      <!-- BANNER SECTION ENDS -->


      <!-- ALL SERMONS SECTION STARTS -->
      <div class="all-sermons default-section-spacing">

        <div class="container">

          <div class="section-heading text-center no-margin">
            <span>Sermons</span>
            <h2>Our sermons</h2>
          </div><!-- .section-heading ends -->

          <div class="search search-header default-section-spacing">

            <div class="row">

              <div class="flex-md-3 flex-lg-4">

                <div class="search__result">
                  <div class="text leading uppercase bold">Results</div>
                  <p>Showing 6 out of 24 sermons</p>
                </div>

              </div><!-- .flex-* ends -->

              <div class="flex-md-9 flex-lg-8">

                <div class="search__search">
                  <div class="text leading uppercase bold">Search</div>
                </div>

                <form action="#" class="form search__form">

                  <div class="display-flex">

                    <div class="form__group">

                      <input type="text" class="form__input" placeholder="Search for sermons...">

                    </div><!-- .form__group ends -->

                    <div>
                      <button type="submit" class="button">Search</button>
                    </div>

                  </div><!-- .display-flex ends -->

                </form><!-- .form ends -->

              </div><!-- .flex-* ends -->

            </div><!-- .row ends -->

          </div>

          <div class="all-sermons__sermons">

            <div class="row">

              <div class="flex-md-6 flex-lg-4 mar-b-sm">

                <div class="card sermon">

                  <div class="card__header">
                    <img src="images/sermon-1@1.5x.jpg" alt="A man reading the Holy Bible"
                      class="card__image sermon__image">
                  </div><!-- .card__header ends -->

                  <div class="card__footer">

                    <div class="sermon__metas">
                      <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i>
                        <span>21/2/2022</span>
                      </div>
                      <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Zilpah Akinyi</span>
                      </div>
                    </div><!-- .sermon__metas -->

                    <div class="sermon__content">
                      <div class="title">
                        <h3>Loving Jesus with all your heart, mind, and soul</h3>
                      </div>
                      <div class="excerpt">
                        <p>Loving the Lord with all our soul means loving the Lord on good ,bad and all days in between.
                          It means having an eternal afair with him because of his extravagant love for us.
                          Loving God with all our is not a wishy wash love.It is not controlled by our feelings (Mark 12:29-31)
                      </p>
                      </div>
                    </div>

                    <div class="sermon__download">
                      <span class="text-white">Download</span>
                      <a href=""><i class="ri-video-line"></i></a>
                      <a href=""><i class="ri-headphone-line"></i></a>
                      <a href=""><i class="ri-file-pdf-line"></i></a>
                    </div>
                  </div><!-- .card__footer ends -->

                </div><!-- .card ends -->

              </div><!-- .flex-* ends -->

              <div class="flex-md-6 flex-lg-4 mar-b-sm">

                <div class="card sermon">

                  <div class="card__header">
                    <img src="images/sermon-2@1.5x.jpg" alt="A man reading the Holy Bible"
                      class="card__image sermon__image">
                  </div><!-- .card__header ends -->

                  <div class="card__footer">

                    <div class="sermon__metas">
                      <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i>
                        <span>14/02/2022</span>
                      </div>
                      <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Austin Okumu</span>
                      </div>
                    </div><!-- .sermon__metas -->

                    <div class="sermon__content">
                      <div class="title">
                        <h3>Living the Christian life</h3>
                      </div>

                      <div class="excerpt">
                        <p>Christians can live their christian lives with fulfillment and not become defeated by sin.
                          This begins when we recognise that we are weak and we need God's help.
                        Paul gives three simple steps to how to live the christian life;seek Christ, think Christ and live Christ.
                        </p>
                      </div>
                    </div>

                    <div class="sermon__download">
                      <span class="text-white">Download</span>
                      <a href=""><i class="ri-video-line"></i></a>
                      <a href=""><i class="ri-headphone-line"></i></a>
                      <a href=""><i class="ri-file-pdf-line"></i></a>
                    </div>
                  </div><!-- .card__footer ends -->

                </div><!-- .card ends -->

              </div><!-- .flex-* ends -->

              <div class="flex-md-6 flex-lg-4 mar-b-sm">

                <div class="card sermon">

                  <div class="card__header">
                    <img src="images/sermon-3@1.5x.jpg" alt="" class="card__image sermon__image">
                  </div><!-- .card__header ends -->

                  <div class="card__footer">

                    <div class="sermon__metas">
                      <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i>
                        <span>07/02/2022</span>
                      </div>
                      <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Elisha Richards</span>
                      </div>
                    </div><!-- .sermon__metas -->

                    <div class="sermon__content">
                      <div class="title">
                        <h3>Jesus is the Hope and Future</h3>
                      </div>

                      <div class="excerpt">
                        <p>2 Thessalonians 1- Because Jesus has risen ,there is hope.The glory of God shines through the love of Jesus.
                        The holiness,compasion,humility,power,authority are shown too.
                        For the believers there is hope beyond the grave,
                          because Jesus Christ has opened the door to heaven for us by His death and resurrection.</p>
                      </div>
                    </div>

                    <div class="sermon__download">
                      <span class="text-white">Download</span>
                      <a href=""><i class="ri-video-line"></i></a>
                      <a href=""><i class="ri-headphone-line"></i></a>
                      <a href=""><i class="ri-file-pdf-line"></i></a>
                    </div>
                  </div><!-- .card__footer ends -->

                </div><!-- .card ends -->

              </div><!-- .flex-* ends -->

              <div class="flex-md-6 flex-lg-4">

                <div class="card sermon">

                  <div class="card__header">
                    <img src="images/sermon-5@1.5x.jpg" alt="" class="card__image sermon__image">
                  </div><!-- .card__header ends -->

                  <div class="card__footer">

                    <div class="sermon__metas">
                      <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i>
                        <span>31/01/2022</span>
                      </div>
                      <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Erik B.
                          Hogan</span>
                      </div>
                    </div><!-- .sermon__metas -->

                    <div class="sermon__content">
                      <div class="title">
                        <h3>Are you truly born again?</h3>
                      </div>

                      <div class="excerpt">
                        <p>Being born again is an experience when everything they have been taught as
                          christians becomes real and they develop a direct and personal relationship with God.
                             [John 3]</p>
                      </div>
                    </div>

                    <div class="sermon__download">
                      <span class="text-white">Download</span>
                      <a href=""><i class="ri-video-line"></i></a>
                      <a href=""><i class="ri-headphone-line"></i></a>
                      <a href=""><i class="ri-file-pdf-line"></i></a>
                    </div>
                  </div><!-- .card__footer ends -->

                </div><!-- .card ends -->

              </div><!-- .flex-* ends -->

              <div class="flex-md-6 flex-lg-4">

                <div class="card sermon">

                  <div class="card__header">
                    <img src="images/sermon-4@1.5x.jpg" alt="" class="card__image sermon__image">
                  </div><!-- .card__header ends -->

                  <div class="card__footer">

                    <div class="sermon__metas">
                      <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i>
                        <span>24/01/2022</span>
                      </div>
                      <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Everlyn Juma</span>
                      </div>
                    </div><!-- .sermon__metas -->

                    <div class="sermon__content">
                      <div class="title">
                        <h3>Understanding God's Grace and Justice</h3>
                      </div>

                      <div class="excerpt">
                        <p>Isaiah 1:15-17 ,James 2:14-26
                          The seven works of grace include feeding the hungry, giving water to the thirsty, clothing the naked,
                          shelter the homeless visit the sick, visiting the imprisoned or ransom the captives and burying the dead.
                          The three principles that ourjustice system seeks to reflect are:equality,fairnessand access.
                        </p>
                      </div>
                    </div>

                    <div class="sermon__download">
                      <span class="text-white">Download</span>
                      <a href=""><i class="ri-video-line"></i></a>
                      <a href=""><i class="ri-headphone-line"></i></a>
                      <a href=""><i class="ri-file-pdf-line"></i></a>
                    </div>
                  </div><!-- .card__footer ends -->

                </div><!-- .card ends -->

              </div><!-- .flex-* ends -->

              <div class="flex-md-6 flex-lg-4">

                <div class="card sermon">

                  <div class="card__header">
                    <img src="images/sermon-6@1.5x.jpg" alt="" class="card__image sermon__image">
                  </div><!-- .card__header ends -->

                  <div class="card__footer">

                    <div class="sermon__metas">
                      <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i>
                        <span>14/1/2022</span>
                      </div>
                      <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Stephen Onyango</span>
                      </div>
                    </div><!-- .sermon__metas -->

                    <div class="sermon__content">
                      <div class="title">
                        <h3>Understanding the Bible and its prophecies</h3>
                      </div>

                      <div class="excerpt">
                        <p>Few tips to go deeper into God's word;
                          prayer, dont toss out any books of the Bible,park yourself in one book,search out the context,
                          hold off using a commentary until the end, use different translations,
                          define words and be patient with yourself. </p>
                      </div>
                    </div>

                    <div class="sermon__download">
                      <span class="text-white">Download</span>
                      <a href=""><i class="ri-video-line"></i></a>
                      <a href=""><i class="ri-headphone-line"></i></a>
                      <a href=""><i class="ri-file-pdf-line"></i></a>
                    </div>
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

      </div><!-- .all-sermons ends -->
      <!-- ALL SERMONS SECTION ENDS -->


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