 <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS -->
    <link href="dist/css/main.css" rel="stylesheet">

    <!-- Your page title -->
    <title>Hope City Church</title>

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

            <li class="header__list active"><a href="index.php">Home</a></li>
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

      <!-- HERO SECTION STARTS -->
      <section class="hero full-width">

        <div class="hero__carousel owl-carousel" id="hero-carousel">
          <!-- Homepage slider -->

          <div class="slide display-flex-column justify-align-center" id="first-slide">

            <div class="container">

              <div class="hero__content text-center">

                <span class="hero__intro">We are glad you are here</span>
                <h1>Welcome to Hope City Church</h1>
                <p class="leading">Learn more about God and how your life can be impacted by Him through Christ.</p>

                <div class="hero__cta">
                  <a href="" class="button">Learn more</a>
                </div>

              </div><!-- .hero__content -->

            </div><!-- .container ends -->

          </div><!-- #first-slide ends -->

          <div class="slide display-flex-column justify-align-center" id="second-slide">

            <div class="container">

              <div class="hero__content text-center">

                <span class="hero__intro">We are glad you are here</span>
                <h1>Come fellowship with us</h1>
                <p class="leading">We have varied sermon ideas and topics ranging from faith,family,fasting,fear and finances.</p>

                <div class="hero__cta">
                  <a href="" class="button">Learn more</a>
                </div>

              </div><!-- .hero__content -->

            </div><!-- .container ends -->

          </div><!-- #second-slide ends -->

        </div> <!-- #hero-carousel ends -->

      </section><!-- .hero ends -->
      <!-- HERO SECTION ENDS -->


      <!-- NEXT EVENT STARTS -->
      <div class="next-event default-section-spacing background-primary">

        <div class="container">

          <div class="row align-items-center">

            <div class="flex-md-9">

              <div class="intro fancy-font">Next event</div>
              <div class="event">
                <div class="event__metas horizontal">
                  <div class="event__meta--date meta"><i class="ri-calendar-event-line"></i> <span>03/28/2022</span>
                  </div>
                  <div class="event__meta--time meta"><i class="ri-time-line"></i> <span>11:45 AM - 12:45 PM</span>
                  </div>
                  <div class="event__meta--location meta"><i class="ri-map-pin-line"></i> <span>167-50406 FUNYULA</span></div>
                </div><!-- .event__metas -->

                <div class="event__title">
                  <h2>Scholarship fundraiser @GLC</h2>
                </div>
              </div><!-- .event ends -->

            </div><!-- .flex-* ends -->


          </div><!-- .row ends -->

        </div><!-- .container ends -->

      </div><!-- .next-event ends -->
      <!-- NEXT EVENT ENDS -->


      <!-- LAST SERMON SECTION STARTS -->
      <section class="last-sermon default-section-spacing">

        <div class="container">

          <div class="row align-items-center">

            <div class="flex-md-6 flex-lg-5">

              <!-- Using Animate On Scroll (AOS) plugin on the card -->
              <div class="card sermon" data-aos="fade-up" data-aos-offset="400">

                <div class="card__header">
                  <img src="images/sermon-1@1.5x.jpg" alt="A man reading the Holy Bible"
                    class="card__image sermon__image">
                </div><!-- .card__header ends -->

                <div class="card__footer">
                  <div class="sermon__download">
                    <span class="text-white">Download</span>
                    <a href=""><i class="ri-video-line"></i></a>
                    <a href=""><i class="ri-headphone-line"></i></a>
                    <a href=""><i class="ri-file-pdf-line"></i></a>
                  </div>
                </div><!-- .card__footer ends -->

              </div><!-- .card ends -->

            </div><!-- .flex-* ends -->

            <div class="flex-md-6 flex-lg-7">

              <!-- Using Animate On Scroll (AOS) plugin again here -->
              <div class="last-sermon__content" data-aos="fade-up" data-aos-offset="300" data-aos-delay="300">

                <div class="section-heading">
                  <span>Sermons</span>
                  <h2>Last week sermon</h2>
                </div><!-- .section-heading ends -->

                <div class="sermon__metas">
                  <div class="sermon__meta--date meta"><i class="ri-calendar-event-line"></i> <span>02/03/2022</span>
                  </div>
                  <div class="sermon__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Timothy Wangira</span>
                  </div>
                </div><!-- .sermon__metas -->

                <div class="sermon__content">
                  <div class="title">
                    <h3>Loving Jesus with all your heart, mind, and soul</h3>
                  </div>
                  <div class="excerpt">
                    <p>Loving the Lord with all our soul means loving the Lord on good ,bad and all days in between.
                        It means having an eternal afair with him because of his extravagant love for us.
                        Loving God with all our is not a wishy wash love.It is not controlled by our feelings (Mark 12:29-31)</p>
                  </div>
                </div>


              </div><!-- .last-sermon__content ends -->

            </div><!-- .flex-* ends -->

          </div><!-- .row ends -->

        </div><!-- .container ends -->

      </section><!-- .last-sermon ends -->
      <!-- LAST SERMON SECTION ENDS -->


      <!-- OUR MINISTRIES SECTION STARTS -->
      <section class="our-ministries default-section-spacing background-lighter-gray">

        <div class="container">

          <div class="section-heading text-center">
            <span>Our ministries</span>
            <h2>Check out some of our ministries</h2>
          </div><!-- .section-heading ends -->

          <div class="row">

            <div class="flex-lg-6">

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

            <div class="flex-lg-6">

              <div class="row mar-b-sm">

                <div class="flex-lg-12">

                  <div class="card ministry custom-height">

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
                          <p>This ministry helps the church's biological growth because it teaches children about their savior.</p>

                        </div>
                      </div><!-- .ministry__content ends -->

                    </div><!-- .card__footer ends -->

                  </div><!-- .card ends -->

                </div><!-- .flex-* ends -->

              </div><!-- .rows -->

              <div class="row">

                <div class="flex-lg-12">

                  <div class="card ministry custom-height">

                    <div class="card__header">
                      <img src="images/ministry-2@1.5x.jpg" alt="Young women praying"
                        class="card__image ministry__image">
                    </div><!-- .card__header ends -->

                    <div class="card__footer">

                      <div class="ministry__title">
                        <h3>Women's ministry</h3>
                      </div>

                      <div class="ministry__meta"><i class="ri-group-line"></i> <span>72 Sisters</span></div>

                      <div class="ministry__content">
                        <div class="excerpt">
                          <p>The ministry allows women focus on Bible studies, support groups and events for
                              women besides the pastor's wife,which many times will fall to her if this ministry never existed.</p>
                        </div>
                      </div><!-- .ministry__content ends -->

                    </div><!-- .card__footer ends -->

                  </div><!-- .card ends -->

                </div><!-- .flex-* ends -->

              </div><!-- .rows -->

            </div><!-- .flex-* ends -->

          </div><!-- .row ends -->

        </div><!-- .container ends -->

      </section><!-- .our-ministries ends -->
      <!-- OUR MINISTRIES SECTION ENDS -->


      <!-- OUR GALLERY STARTS -->
      <section class="our-gallery gallery gallery--equal-grid default-section-spacing text-center">

        <div class="section-heading">
          <span>Our gallery</span>
          <h2>Explore our church</h2>
        </div><!-- .section-heading ends -->

        <div class="row">

          <div class="flex-md-6 flex-lg-3 no-padding no-margin">

            <a href="images/gallery-1@2x.jpg" class="gallery-link" data-lightbox="church-picture"
              data-title="Picture of the Holy Bible">

              <div class="card gallery__card">

                <div class="card__header">
                  <img src="images/gallery-1@1.5x.jpg" alt="Picture of the Holy Bible" class="card__image">
                </div>

              </div><!-- .card ends -->

            </a><!-- .gallery-link -->

          </div><!-- .flex-* ends -->

          <div class="flex-md-6 flex-lg-3 no-padding no-margin">

            <a href="images/gallery-2@2x.jpg" class="gallery-link" data-lightbox="church-picture"
              data-title="Picture of Jesus on a medal cross">

              <div class="card gallery__card">

                <div class="card__header">
                  <img src="images/gallery-2@1.5x.jpg" alt="Picture of Jesus on a medal cross" class="card__image">
                </div>

              </div><!-- .card ends -->

            </a><!-- .gallery-link -->

          </div><!-- .flex-* ends -->

          <div class="flex-md-6 flex-lg-3 no-padding no-margin">

            <a href="images/gallery-3@2x.jpg" class="gallery-link" data-lightbox="church-picture"
              data-title="Bible study">

              <div class="card gallery__card">

                <div class="card__header">
                  <img src="images/gallery-3@1.5x.jpg" alt="Bible study" class="card__image">
                </div>

              </div><!-- .card ends -->

            </a><!-- .gallery-link -->

          </div><!-- .flex-* ends -->

          <div class="flex-md-6 flex-lg-3 no-padding no-margin">

            <a href="images/gallery-4@2x.jpg" class="gallery-link" data-lightbox="church-picture"
              data-title="Inside of a church">

              <div class="card gallery__card">

                <div class="card__header">
                  <img src="images/gallery-4@1.5x.jpg" alt="Inside of a church" class="card__image">
                </div>

              </div><!-- .card ends -->

            </a><!-- .gallery-link -->

          </div><!-- .flex-* ends -->

          <div class="flex-md-6 flex-lg-3 no-padding no-margin">

            <a href="images/gallery-5@2x.jpg" class="gallery-link" data-lightbox="church-picture"
              data-title="Picture of people worshiping in church">

              <div class="card gallery__card">

                <div class="card__header">
                  <img src="images/gallery-5@1.5x.jpg" alt="Picture of people worshiping in church" class="card__image">
                </div>

              </div><!-- .card ends -->

            </a><!-- .gallery-link -->

          </div><!-- .flex-* ends -->

          <div class="flex-md-6 flex-lg-3 no-padding no-margin">

            <a href="images/gallery-6@2x.jpg" class="gallery-link" data-lightbox="church-picture"
              data-title="Picture of women laughing">

              <div class="card gallery__card">

                <div class="card__header">
                  <img src="images/gallery-6@1.5x.jpg" alt="Picture of women laughing" class="card__image">
                </div>

              </div><!-- .card ends -->

            </a><!-- .gallery-link -->

          </div><!-- .flex-* ends -->

          <div class="flex-md-6 flex-lg-3 no-padding no-margin">

            <a href="images/gallery-7@2x.jpg" class="gallery-link" data-lightbox="church-picture"
              data-title="Picture of a worship leader singing">

              <div class="card gallery__card">

                <div class="card__header">
                  <img src="images/gallery-7@1.5x.jpg" alt="Picture of a worship leader singing" class="card__image">
                </div>

              </div><!-- .card ends -->

            </a><!-- .gallery-link -->

          </div><!-- .flex-* ends -->

          <div class="flex-md-6 flex-lg-3 no-padding no-margin">

            <a href="images/gallery-8@2x.jpg" class="gallery-link" data-lightbox="church-picture"
              data-title="Picture of a smart kid at school">

              <div class="card gallery__card">

                <div class="card__header">
                  <img src="images/gallery-8@1.5x.jpg" alt="Picture of a smart kid at school" class="card__image">
                </div>

              </div><!-- .card ends -->

            </a><!-- .gallery-link -->

          </div><!-- .flex-* ends -->

        </div><!-- .row ends -->

      </section><!-- .our-gallery ends -->
      <!-- OUR GALLERY ENDS -->


      <!-- OUR TESTIMONIALS SECTION STARTS -->
      <section class="our-testimonial default-section-spacing background-secondary">

        <div class="our-testimonial__background--cover"></div>
        <!-- .our-testimonial__background--cover ends -->

        <div class="our-testimonial__content">

          <div class="container">

            <div class="row align-items-center">

              <div class="flex-lg-5"></div>

              <div class="flex-lg-7">

                <div class="section-heading text-white">
                  <span>Testimonials</span>
                  <h2>What people are saying...</h2>
                </div><!-- .section-heading ends -->

                <div class="row">

                  <div class="flex-md-6 flex-lg-12 mar-b-sm">

                    <div class="testimonial">

                      <div class="testimonial__avatar">
                        <div class="card card--picture card--square testimonial__user">

                          <div class="card__header">
                            <img src="images/user-1.jpg" alt="A man" class="card__image">
                          </div><!-- .card__header ends -->

                          <div class="card__footer">
                            <div class="testimonial__author">Peter Mutheu</div>
                          </div><!-- .card__footer ends -->

                        </div><!-- .card -->
                      </div><!-- .testimonial__avatar ends -->

                      <div class="testimonial__text text-white">
                        I joined this congregation in 2015 and our pastor is friendly, loving and truly cares for all people .
                          This church has helped me understand the Bible teachings with such clarity and purpose.
                      </div>

                    </div><!-- .testimonial -->

                  </div><!-- .flex-* ends -->

                  <div class="flex-md-6 flex-lg-12 mar-b-sm">

                    <div class="testimonial">

                      <div class="testimonial__avatar">
                        <div class="card card--picture card--square testimonial__user">

                          <div class="card__header">
                            <img src="images/user-3.jpg" alt="A woman" class="card__image">
                          </div><!-- .card__header ends -->

                          <div class="card__footer">
                            <div class="testimonial__author">Nancy Akoth</div>
                          </div><!-- .card__footer ends -->

                        </div><!-- .card -->
                      </div><!-- .testimonial__avatar ends -->

                      <div class="testimonial__text text-white">
                        Am greateful to everyone in this church especially our women ministry which has natured me ,
                          helped me overcome fear and control my anger. Am soo happy that i became who I am today because of this church.
                      </div>

                    </div><!-- .testimonial -->

                  </div><!-- .flex-* ends -->

                  <div class="flex-md-12 flex-lg-12">

                    <div class="testimonial">

                      <div class="testimonial__avatar">
                        <div class="card card--picture card--square testimonial__user">

                          <div class="card__header">
                            <img src="images/user-2.jpg" alt="A man" class="card__image">
                          </div><!-- .card__header ends -->

                          <div class="card__footer">
                            <div class="testimonial__author">Joyley Musila</div>
                          </div><!-- .card__footer ends -->

                        </div><!-- .card -->
                      </div><!-- .testimonial__avatar ends -->

                      <div class="testimonial__text text-white">
                        2019 was a tough year, i lost my job, the love of my life,the bank auctioned my mansion too.
                          I thought i had lost it all and i made up my mind to commit suicide because nothing had been left for me on this unfair world.
                          When I joined Hope City Church i got alot of reasons to live again and i thank God for all of you who walked this painful
                          path with me..
                      </div>

                    </div><!-- .testimonial -->

                  </div><!-- .flex-* ends -->

                </div><!-- .row ends -->

              </div><!-- .flex-* ends -->

            </div><!-- .row ends -->

          </div><!-- .container ends -->

        </div><!-- .our-testimonial__content ends -->

      </section><!-- .our-testimonial ends -->
      <!-- OUR TESTIMONIALS SECTION ENDS -->


      <!-- RECENT ARTICLES STARTS -->
      <section class="recent-articles default-section-spacing text-center">

        <div class="container">

          <div class="section-heading">
            <span>Our blog</span>
            <h2>Fresh articles from our blog</h2>
          </div><!-- .section-heading ends -->

          <div class="row">

            <div class="flex-md-6 flex-lg-4">

              <div class="card blog">

                <div class="card__header">
                  <img src="images/post-1@1.5x.jpg" alt="A man praying standing" class="card__image blog__image">
                </div><!-- .card__header ends -->

                <div class="card__footer">

                  <div class="blog__metas">
                    <div class="blog__meta--date meta"><i class="ri-calendar-event-line"></i> <span>02/4/2022</span>
                    </div>
                    <div class="blog__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Antony Bwire</span>
                    </div>
                  </div><!-- .blog__metas -->

                  <div class="blog__title">
                    <h3>Living for Christ </h3>
                  </div>

                  <div class="blog__content">
                    <div class="excerpt">
                      <p>(Phillipians 1:19-26) Today christians are faced with challenges in their attempt to lead a holy life.
                          For any christian to remain vigilant they have to undertand various ways to nurture their spiritual life;
                        Know your intentions, set you intentions high, see yourself in the light, forgive yourself,
                          learn to let go and revere what is holy.</p>
                    </div>
                  </div><!-- .blog__content ends -->

                </div><!-- .card__footer ends -->

              </div><!-- .card ends -->

            </div><!-- .flex-* ends -->

            <div class="flex-md-6 flex-lg-4">

              <div class="card blog">

                <div class="card__header">
                  <img src="images/post-2@1.5x.jpg" alt="Women praying" class="card__image blog__image">
                </div><!-- .card__header ends -->

                <div class="card__footer">

                  <div class="blog__metas">
                    <div class="blog__meta--date meta"><i class="ri-calendar-event-line"></i> <span>14/4/2022</span>
                    </div>
                    <div class="blog__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Paulina Oje</span>
                    </div>
                  </div><!-- .blog__metas -->

                  <div class="blog__title">
                    <h3>Living in the last days as Christians</h3>
                  </div>

                  <div class="blog__content">
                    <div class="excerpt">
                      <p>1 John 2:18-29 The days are growing gloriusly dark;
                          the time is ripe for the second coming of christ</p>
                    </div>

                  </div><!-- .blog__content ends -->

                </div><!-- .card__footer ends -->

              </div><!-- .card ends -->

            </div><!-- .flex-* ends -->

            <div class="flex-md-12 flex-lg-4">

              <div class="card blog">

                <div class="card__header">
                  <img src="images/sermon-1@1.5x.jpg" alt="A man reading the Holy Bible"
                    class="card__image blog__image">
                </div><!-- .card__header ends -->

                <div class="card__footer">

                  <div class="blog__metas">
                    <div class="blog__meta--date meta"><i class="ri-calendar-event-line"></i> <span>28/4/2022</span>
                    </div>
                    <div class="blog__meta--speaker meta"><i class="ri-user-star-line"></i> <span>Pastor Steward Wanyama</span>
                    </div>
                  </div><!-- .blog__metas -->

                  <div class="blog__title">
                    <h3>Understanding the Bible requires dedication</h3>
                  </div>

                  <div class="blog__content">
                    <div class="excerpt">
                      <p>Few tips to go deeper into God's word;
                          prayer, dont toss out any books of the Bible,park yourself in one book,search out the context,
                          hold off using a commentary until the end, use different translations,
                          define words and be patient with yourself.</p>
                    </div>

                  </div><!-- .blog__content ends -->

                </div><!-- .card__footer ends -->

              </div><!-- .card ends -->

            </div><!-- .flex-* ends -->

          </div><!-- .row ends -->

        </div><!-- .container ends -->

      </section><!-- .recent-articles ends -->
      <!-- RECENT ARTICLES ENDS -->


      <!-- SUBSCRIPTION SECTION STARTS -->
      <div class="subscription default-section-spacing background-lighter-gray">

        <div class="container">

          <div class="section-heading">
            <span>Stay in touch</span>
            <h2>Join our mailing list</h2>
          </div><!-- .section-heading ends -->

          <form action="#" class="form">

            <div class="row">

              <div class="flex-md-9">
                <div class="form__group">
                  <input type="email" class="form__input" placeholder="Enter your valid email address">
                </div>
              </div><!-- .flex-* ends -->

              <div class="flex-md-3">
                <button type="submit" class="button button-block-sm form__submit">Subscribe today</button>
              </div><!-- .flex-* ends -->

            </div><!-- .row ends -->

          </form><!-- .form ends -->

        </div><!-- .container ends -->

      </div><!-- .subscription ends -->
      <!-- SUBSCRIPTION SECTION ENDS -->


      <!-- TIME AND LOCATION STARTS -->
      <section class="time-location">

        <div class="container">

          <div class="row">

            <div class="flex-lg-6">

              <div class="time-location__content default-section-spacing">

                <div class="section-heading">
                  <span>Time </span>
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
    <!-- Main (custom) script -->
    <script src="dist/js/main.min.js"></script>

  </body>

</html>