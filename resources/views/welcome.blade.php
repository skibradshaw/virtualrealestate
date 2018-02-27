<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Site Title -->
    <title>Virtual Reality Real Estate Tours</title>

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Frontend Design CSS -->
    <link href="css/front.css" rel="stylesheet">
    <!-- App Specific CSS -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

  </head>

<body data-spy="scroll" data-target="#navbar-menu">

  <div class="navbar navbar-custom navbar-fixed-top sticky" role="navigation">
      <div class="container">

        <!-- Navbar-header -->
        <div class="navbar-header">
          <!-- Responsive menu button -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="zmdi zmdi-menu"></i>
          </button>

          <!-- LOGO -->
          <a class="navbar-brand logo" href="index.html">
            <i class="zmdi zmdi-navigation"></i> <span>Virtual Tour Co.</span>
          </a>

        </div>
        <!-- end navbar-header -->

        <!-- menu -->
        <div class="navbar-collapse collapse" id="navbar-menu">

          <!-- Navbar left -->
          <ul class="nav navbar-nav nav-custom-left">
            <li class="active">
              <a href="#home">Home</a>
            </li>
            <li>
              <a href="#features">Features</a>
            </li>
            <li>
              <a href="#">Examples</a>
            </li>
            <li>
              <a href="#pricing">Pricing</a>
            </li>
            <li>
              <a href="#team">Testimonials</a>
            </li>
            <li>
              <a href="#faq">FAQ</a>
            </li>
<!--             <li class="dropdown">
            <a href="#" data-toggle="dropdown">
              Pages
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu arrow">
              <li><a href="about.html">About Us</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="blog-post.html">Blog Post</a></li>
            </ul>
          </li> -->
          </ul>

          <!-- Navbar right -->
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="/photographers/dashboard">Login</a>
            </li>
            <li>
              <a href="" class="btn btn-inverse btn-bordered navbar-btn">Signup</a>
            </li>
          </ul>

        </div>
        <!--/Menu -->
      </div>
      <!-- end container -->
  </div>
  <!-- End navbar-custom -->

  <!-- HOME -->
  <section class="home  video-container" id="home">
    <!-- <div class="bg-overlay"></div> -->
    <div class="container">
          <!--  Video is muted & autoplays, placed after major DOM elements for performance & has an image fallback  -->
          <video autoplay loop id="video-background" muted plays-inline>
            <source src="/images/vrtourheader.mp4" type="video/mp4">
          </video>
      <div class="row">
        <div class="col-sm-12">

          <div class="home-wrapper video-wrapper text-center">

            <div class="header-text">
              <h2 class="animated fadeInDown wow" data-wow-delay=".1s">
                Virtual Reality <span class="text-colored">Real Estate Tours </span>
              </h2>
              <p class="animated fadeInDown wow" data-wow-delay=".2s">
                Are you an agent, agency, brokerage, or property owner? Show property to anyone, any time, anywhere.
              </p>
              <a href="" class="btn btn-primary btn-shadow btn-rounded w-lg animated fadeInDown wow" data-wow-delay=".4s">Get Started</a>
              <div class="clearfix"></div>              
            </div>

          </div><!-- home wrapper -->

        </div> <!-- end col -->
      </div> <!-- end row -->
    </div> <!-- end container -->
  </section>
  <!-- END HOME -->

  <!-- FEATURES -->
  <section class="section" id="features">
    <div class="container">

      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="title-box">
            <p class="title-alt">Turnkey Solutions</p>
            <h3 class="fadeIn animated wow" data-wow-delay=".1s">Virtual Tour Features</h3>
            <div class="border"></div>
          </div>
        </div> 
      </div> <!-- end row -->

      <div class="row text-center">
        <div class="col-sm-4">
          <div class="service-item animated fadeInLeft wow" data-wow-delay=".1s">
            <img src="images/icons/panorama.svg" width="48" alt="img">
            <div class="service-detail">
              <h4>Virtual Reality Ready</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sine ea igitur iucunde negat posse se vivere? Et ille ridens: Video, inquit, quid agas;</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInDown wow" data-wow-delay=".3s">
            <img src="images/icons/owl.svg" width="48" alt="img">
            <div class="service-detail">
              <h4>360&#176; Interactive Viewing</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sine ea igitur iucunde negat posse se vivere? Et ille ridens: Video, inquit, quid agas;</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInRight wow" data-wow-delay=".5s">
            <img src="images/icons/globe.svg" width="48" alt="img">
            <div class="service-detail">
              <h4>Google Map</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sine ea igitur iucunde negat posse se vivere? Et ille ridens: Video, inquit, quid agas;</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->       
      </div> <!--end row -->


      <div class="row text-center">
        <div class="col-sm-4">
          <div class="service-item animated fadeInLeft wow" data-wow-delay=".1s">
            <img src="images/icons/stack_of_photos.svg" width="48" alt="img">
            <div class="service-detail">
              <h4>Includes Still Photos</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sine ea igitur iucunde negat posse se vivere? Et ille ridens: Video, inquit, quid agas;</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInDown wow" data-wow-delay=".3s">
            <img src="images/icons/start.svg" width="48" alt="img">
            <div class="service-detail">
              <h4>Link & Embed Media</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sine ea igitur iucunde negat posse se vivere? Et ille ridens: Video, inquit, quid agas;</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->

        <div class="col-sm-4">
          <div class="service-item animated fadeInRight wow" data-wow-delay=".5s">
            <img src="images/icons/touchscreen_smartphone.svg" width="48" alt="img">
            <div class="service-detail">
              <h4>Mobile Friendly Tours</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sine ea igitur iucunde negat posse se vivere? Et ille ridens: Video, inquit, quid agas;</p>
            </div> <!-- /service-detail -->
          </div> <!-- /service-item -->
        </div> <!-- /col -->       
      </div> <!--end row -->


    </div> <!-- end container -->
  </section>
  <!-- END FEATURES -->


  <!-- FEATURES-ALT -->
  <section class="section bg-gray" id="features">
    <div class="container">

      <div class="row">
        <div class="col-sm-6">
          <div class="feature-detail">

            <div class="title-box">
              <p class="title-alt">Dashboard</p>
              <h3 class="fadeIn animated wow" data-wow-delay=".1s">Manage Your Tours</h3>
              <div class="border"></div>
            </div>

            <ul class="zmdi-hc-ul">
              <li class="fadeIn animated wow" data-wow-delay=".1s"><i class="zmdi-hc-li zmdi zmdi-caret-right-circle text-colored"></i><span class="text-muted">View, Share and Embed Your Tours</span></li>

              <li class="fadeIn animated wow" data-wow-delay=".2s"><i class="zmdi-hc-li zmdi zmdi-caret-right-circle text-colored"></i><span class="text-muted">Create New Tours</span></li>

              <li class="fadeIn animated wow" data-wow-delay=".3s"><i class="zmdi-hc-li zmdi zmdi-caret-right-circle text-colored"></i><span class="text-muted">View Activity</span></li>

            </ul>

            <a href="" class="btn btn-primary btn-shadow btn-rounded w-lg animated fadeInDown wow" data-wow-delay=".4s">Get Started</a>
          </div>
        </div>

        <div class="col-sm-6">
          <img src="images/macbook.png" class="img-responsive fadeIn animated wow" data-wow-delay=".2s">
        </div>

      </div>
    </div>
  </section>
  <!-- END FEATURES-ALT -->



  <!-- PRICING -->
  <section class="section" id="pricing">
    <div class="container">

      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="title-box">
            <p class="title-alt fadeIn animated wow" data-wow-delay=".1s">Pricing</p>
            <h3 class="fadeIn animated wow" data-wow-delay=".2s">Select a Plan</h3>
            <div class="border"></div>
          </div>
        </div> 
      </div> <!-- end row -->

      <div class="row text-center">

        <!--Pricing Column-->
        <article class="pricing-column col-lg-3 col-sm-6 col-lg-offset-3">
            <div class="inner-box fadeIn animated wow" data-wow-delay=".1s">
                <div class="plan-header text-center">
                    <h3 class="plan-title">Basic</h3>
                    <h2 class="plan-price">$19</h2>
                    <div class="plan-duration">Per Month</div>
                </div>
                <ul class="plan-stats list-unstyled text-center">
                    <li>5 Tours</li>
                    <li>10 Still Photos</li>
                    <li>No Additional Photos</li>
                    <li>24x7 Support</li>
                </ul>

                <div class="text-center">
                    <a href="#" class="btn btn-primary btn-shadow w-md btn-rounded">Buy Now</a>
                </div>
            </div>
        </article>

        <!--Pricing Column-->
        <article class="pricing-column col-lg-3 col-sm-6">
            <div class="inner-box fadeIn animated wow" data-wow-delay=".2s">
                <div class="plan-header text-center">
                    <h3 class="plan-title">Premium</h3>
                    <h2 class="plan-price">$29</h2>
                    <div class="plan-duration">Per Month</div>
                </div>
                <ul class="plan-stats list-unstyled text-center">
                    <li>Unlimited Tours</li>
                    <li>100 GB Storage</li>
                    <li>$20 Additional Photos</li>
                    <li>24x7 Support</li>
                </ul>

                <div class="text-center">
                    <a href="#" class="btn btn-primary btn-shadow w-md btn-rounded">Buy Now</a>
                </div>
            </div>
        </article>


      </div><!-- end row -->

    </div> <!-- end container -->
  </section>
  <!-- END PRICING -->



  <!-- TEAM -->
  <section class="section bg-gray" id="team">
    <div class="container">

      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="title-box">
            <p class="title-alt">Testimonials</p>
            <h3 class="fadeIn animated wow" data-wow-delay=".1s">Happy Clients</h3>
            <div class="border"></div>
          </div>
        </div> 
      </div> <!-- end row -->

      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="row team text-center">
            <!-- team-member -->
            <div class="col-sm-4">
              <div class="team-member animated fadeInDown wow" data-wow-delay=".1s">
                <img src="images/team/team-1.jpg" alt="team-member" class="img-responsive img-circle">
                <h4>Adrian Rider</h4>
                <p class="text-muted">Berkshire Hathaway Home Services<br>Los Angeles, CA</p>
                <blockquote>"Lorem ipsum dolor sit amet."</blockquote>
              </div>
            </div>

            <!-- team-member -->
            <div class="col-sm-4">
              <div class="team-member animated fadeInDown wow" data-wow-delay=".3s">
                <img src="images/team/team-2.jpg" alt="team-member" class="img-responsive img-circle">
                <h4>Joe Willman</h4>
                <p class="text-muted">Sotheby's International<br>Seattle, WA</p>
                <blockquote>"Certe nihil nisi quod possit ipsum propter se iure laudari. Duo Reges: constructio interrete. "</blockquote>
              </div>
            </div>

            <!-- team-member -->
            <div class="col-sm-4">
              <div class="team-member animated fadeInDown wow" data-wow-delay=".5s">
                <img src="images/team/team-3.jpg" alt="team-member" class="img-responsive img-circle">
                <h4>Jeff Schneider</h4>
                <p class="text-muted">Coldwell Banker<br>Richmond, VA</p>
                <blockquote>"Tamen aberramus a proposito, et, ne longius, prorsus, inquam, Piso, si ista mala sunt, placet. Maximas vero virtutes iacere omnis necesse est voluptate dominante."</blockquote>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-sm-12">
          <div class="">
            <div class="brand-item animated fadeInLeft wow" data-wow-delay=".1s">
              <a href="#"><img alt="01 brand" src="images/clients/a3.png"></a>
            </div>
            <div class="brand-item animated fadeInLeft wow" data-wow-delay=".2s">
              <a href="#"><img alt="02 brand" src="images/clients/a6.png"></a>
            </div>
            <div class="brand-item animated fadeInLeft wow" data-wow-delay=".3s">
              <a href="#"><img alt="03 brand" src="images/clients/a7.png"></a>
            </div>
            <div class="brand-item animated fadeInLeft wow" data-wow-delay=".4s">
              <a href="#"><img alt="04 brand" src="images/clients/a13.png"></a>
            </div>
            <div class="brand-item animated fadeInLeft wow" data-wow-delay=".5s">
              <a href="#"><img alt="05 brand" src="images/clients/a11.png"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END TEAM -->
  


  <!-- FAQ -->
  <section class="section" id="faq">
    <div class="container">

      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="title-box">
            <p class="title-alt">Faq</p>
            <h3 class="fadeIn animated wow" data-wow-delay=".1s">Simple Questions</h3>
            <div class="border"></div>
          </div>
        </div> 
      </div> <!-- end row -->

      <div class="row m-t-30">
        <div class="col-md-5 col-md-offset-1">
          <!-- Question/Answer -->
          <div class="question-q-box">Q.</div>
          <div class="animated fadeInLeft wow" data-wow-delay=".1s">
            <h4 class="question" data-wow-delay=".1s">What is Lorem Ipsum?</h4>
            <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>

          <!-- Question/Answer -->
          <div class="question-q-box">Q.</div>
          <div class="animated fadeInLeft wow" data-wow-delay=".3s">
            <h4 class="question">Why use Lorem Ipsum?</h4>
            <p class="answer">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
          </div>

          <!-- Question/Answer -->
          <div class="question-q-box">Q.</div>
          <div class="animated fadeInLeft wow" data-wow-delay=".5s">
            <h4 class="question">How many variations exist?</h4>
            <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>

        </div>
        <!--/col-md-5 -->

        <div class="col-md-5">
          <!-- Question/Answer -->
          <div class="question-q-box">Q.</div>
          <div class="animated fadeInRight wow" data-wow-delay=".2s">
            <h4 class="question">Is safe use Lorem Ipsum?</h4>
            <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>

          <!-- Question/Answer -->
          <div class="question-q-box">Q.</div>
          <div class="animated fadeInRight wow" data-wow-delay=".4s">
            <h4 class="question">When can be used?</h4>
            <p class="answer">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
          </div>

          <!-- Question/Answer -->
          <div class="question-q-box">Q.</div>
          <div class="animated fadeInRight wow" data-wow-delay=".6s">
            <h4 class="question">License &amp; Copyright</h4>
            <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>

        </div>
        <!--/col-md-5-->
      </div>

    </div>
  </section>
  <!-- END FAQ -->

  
  <!-- FOOTER -->
  <footer class="section bg-gray footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <h5>Virtual Tour Co.</h5>
          <ul class="list-unstyled">
            <li><a href="">Home</a></li>
            <li><a href="">Features</a></li>
            <li><a href="">Team</a></li>
            <li><a href="">FAQ</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-6">
          <h5>Social</h5>
          <ul class="list-unstyled">
            <li><a href="">Facebook</a></li>
            <li><a href="">Twitter</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-6">
          <h5>Support</h5>
          <ul class="list-unstyled">
            <li><a href="">Help & Support</a></li>
            <li><a href="">Privacy Policy</a></li>
            <li><a href="">Terms & Conditions</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-6">
          <h5>Contact</h5>
          <address>
            1 Alpine Way<br>
            Jackson Hole, WY 83001<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890<br/>
            E: <a href="mailto:">info@smarttour.co</a>
          </address>
        </div>

      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="footer-alt">
            <p class="pull-right text-muted m-b-0">{{\Carbon\Carbon::now()->year}} © Virtual Tour Co.</p>
            <a class="navbar-brand logo" href="index.html">
              <i class="zmdi zmdi-navigation"></i> <span>Virtual Tour Co.</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- END FOOTER -->


  <!-- Back to top -->
  <a href="#" class="back-to-top"> <i class="zmdi zmdi-chevron-up"> </i> </a>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/frontapp.js"></script>
  </body>
</html>
