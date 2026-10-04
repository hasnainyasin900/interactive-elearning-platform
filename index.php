<!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Digital Media Marketing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    


  </head>

  


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.php">Digital Media Marketing</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#courses-section" class="nav-link">Courses</a></li>
                <li><a href="#programs-section" class="nav-link">Programs</a></li>
                <li><a href="#teachers-section" class="nav-link">Teachers</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact_section" class="nav-link"><span>Contact Us</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="sign">
                <!--sign-->
                <div class="container <?php echo (isset($_GET['errorp']) || isset($_GET['signup']))? 'right-panel-active':''; ?>" id="container">
                  <div class="form-container sign-up-container">
                    <form action="includes/signup1.inc.php" method="post" id="signup_form">
                      <h1 class="title">Sign Up</h1>
                      <br>
                      <?php
                      if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=="emptyfields"){
                          echo '<div style="color:red;">Fill in all fields !</div>';
                        }else if ($_GET['errorp']=="invalidmailuid"){
                          echo '<div style="color:red;">Invalid username and e-mail !</div>';
                        }else if ($_GET['errorp']=="invaliduid"){
                          echo '<div style="color:red;">Invalid username !</div>';
                        }else if ($_GET['errorp']=="invalidmail"){
                          echo '<div style="color:red;">Invalid e-mail !</div>';
                        }else if ($_GET['errorp']=="passwordcheck"){
                          echo '<div style="color:red;">Passwords don\'t match!</div>';
                        }else if ($_GET['errorp']=="usertaken"){
                          echo '<div style="color:red;">Username is already taken!</div>';
                        }
                      }elseif (isset($_GET['signup']) ) {
                        if ($_GET['signup']=="success")
                          echo '<div style="color:green;">Signup Successful ! Feel free to login !</div>';
                      }
                       ?>
                      <div id="error_signup_name"></div>
                      <input type="text" id="name_signup" name="uid" placeholder="Name" value="<?php if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=='invalidmail' || $_GET['errorp']=='passwordcheck' || $_GET['errorp']=='emptyfields'){
                          echo  isset($_GET['uid']) ? $_GET['uid']:'';
                        }else {
                          echo '';
                        }
                      }  ?>" />
                      <div id="error_signup_email"></div>
                      <input type="email" id="mail_signup" name="mail" placeholder="E-mail"
                        value="<?php if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=='invaliduid' || $_GET['errorp']=='passwordcheck' || $_GET['errorp']=='emptyfields' || $_GET['errorp']=='usertaken'){
                          echo  isset($_GET['mail']) ? $_GET['mail']:'';
                        }else {
                          echo '';
                        }
                      }  ?>" />
                      <div id="error_signup_pwd1"></div>
                      <input type="password" id="pwd1_signup" name="pwd" placeholder="Password" />
                      <div id="error_signup_pwd2"></div>
                      <input type="password" id="pwd2_signup" name="pwd-repeat" placeholder="Repeat Password" />
                      <button>Sign Up</button>
                    </form>

                  </div>
                  <div class="form-container sign-in-container">
                    <form action="includes/login.inc.php" method="post" id="signin_form">
                      <h1 class="title">Sign in</h1>
                      <br>
                      <?php
                      if (isset($_GET['error'])){
                        if ($_GET['error']=="emptyfields"){
                          echo '<div style="color:red;">Fill in all fields !</div>';
                        }else if ($_GET['error']=="wrongpwd"){
                          echo '<div style="color:red;">Wrong password!</div>';
                        }else if ($_GET['error']=="nomatch"){
                          echo '<div style="color:red;">There\'s no match for your email !</div>';

                      }elseif (isset($_GET['login']) ) {
                        if ($_GET['signup']=="success")
                          echo '<div style="color:green;">Sign in Successful !</div>';
                      }
                  }?>
                      <div id="error_signin_mail"></div>
                      <input type="email" id="mailsignin" placeholder="Email" name="mailuid" placeholder="Username/E-mail"
                        value="<?php if (isset($_GET['error'])){
                                        if ($_GET['error']=="wrongpwd" || $_GET['error']=="emptyfields"){
                                              echo  isset($_GET['mail'])?$_GET['mail']:'';
                                        }else {
                                              echo '';
                                             }
                    }  ?>" />
                      <div id="error_signin_pwd"></div>
                      <input type="password" id="pwdsignin" name="pwd" placeholder="Password" />
                      <a href="mail_input.php">Forgot your password?</a>
                      <button>Sign In</button>
                    </form>
                  </div>
                  <div class="overlay-container">
                    <div class="overlay">
                    <div id="overlay-left" class="overlay-panel overlay-left">
                          <h1>Welcome Back!</h1>
                          <p>To keep connected with us please login with your personal info</p>
                          <button class="ghost" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                          <h1>Hello, Learner!</h1>
                          <p>Enter your personal details and start journey with us</p>
                          <button class="ghost" id="signUp">Sign Up</button>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
            <!--end-->
          </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>
<!--courses-section-->
<!--contact-section-->
    <div class="site-section courses-title" id="courses-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Courses</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <!--courses-->
        <div class="row">

          <div class="owl-carousel col-12 nonloop-block-14">
<!--Social Media Marketing-->
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/sem.jpeg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$0</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 3 week</div>
                <h3><a href="#">Social Media Marketing</a></h3>
                <p>Learn Social Media Marketing to make you Identity. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>


<!-- Digital Marketing-->
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/dg.jpeg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$0</span>
                <div class="meta"><span class="icon-clock-o"></span>2 Lessons / 5 week</div>
                <h3><a href="#">Digital Marketing</a></h3>
                <p>Let's Move In Digital World </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 1,523 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 6</div>
              </div>
            </div>
<!-- SEO-->
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/seo.jpeg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$0</span>
                <div class="meta"><span class="icon-clock-o"></span>5 Lessons / 7 week</div>
                <h3><a href="#">Search Engine Optimization</a></h3>
                <p>Begin your journey in the world of Digital Marketing. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,453 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 5</div>
              </div>
            </div>
<!--Blogging-->
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/img5.jpeg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$0</span>
                <div class="meta"><span class="icon-clock-o"></span>20 Lessons / 4 week</div>
                <h3><a href="#">Blogging</a></h3>
                <p>Discover the world of Blogging </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,100 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 9</div>
              </div>
            </div>
<!--Email Marketing-->
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/img6.jpeg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$0</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Email Marketing</a></h3>
                <p>Learn the basics of the Email Marketing . </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 3,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>
<!--Influencer marketing-->
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <img src="images/inf.jpeg" alt="Image" class="img-fluid">
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$0</span>
                <div class="meta"><span class="icon-clock-o"></span>3 Lessons / 9 week</div>
                <h3><a href="#">Influencer marketing</a></h3>
                <p>Learn most usefull Influencer marketing. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 1,123 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 8</div>
              </div>
            </div>
          </div>
<!--move-->
        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Prev</button>
            <button class="customNextBtn btn btn-primary m-1">Next</button>
          </div>
        </div>
      </div>
    </div>

<!--our programs-->
    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Programs</h2>
            <p>We aim to make studying SIMPLE, EASY and ACCESSIBLE to EVERYONE thus we collected the BEST COURSES in the world in one place.</p>
          </div>
        </div>

        <!-- Programs Section-->
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">We Are Excellent In Education and Working</h2>
            <p class="mb-4">Digital Marketing is the need of this modern age.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">2,931 Yearly Students</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">Worldwide Identity</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_teaching.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Strive for Excellent</h2>
            <p class="mb-4">our goal is your success.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">2,931 Yearly Students</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">Worldwide  Identity </h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_teacher.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Education is life</h2>
            <p class="mb-4">Beginning of a never ending journey of learning.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">2,931 Yearly Students</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">Worldwide  Identity</h3></div>
            </div>

          </div>
        </div>

      </div>
    </div>
    <!--Our Teacher-->

    <div class="site-section" id="teachers-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Teachers</h2>
            <p class="mb-5">The best we promise the best we are !</p>
          </div>
        </div>
        <!--Our Teacher Section-->

        <div class="row">
<!--1st teacher-->
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="images/cp1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Hasnain Yasin</h3>
                <p class="position">Digital Marketing Expert</p>
                <p>Work with more then 1000 Clint's with 6 years of experience, taught over 500 students.</p>
              </div>
            </div>
          </div>
          <!--1st teacher-->
<!--2nd teacher-->
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="images/abdul.jpeg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Abdul Mateen</h3>
                <p class="position"> SEO Expert</p>
                <p>Over 20 years of experience Worked at JB Tech and done so many projects .</p>
              </div>
            </div>
          </div>
          <!--2nd teacher-->
<!--3rd teacher-->
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="images/balaj.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Balaj Hussain</h3>
                <p class="position">Affiliate Marketing Expert</p>
                <p>Leading expert in the domain of Affiliate Marketing, taught many students over the years.</p>
              </div>
            </div>
          </div>
<!--3rd teacher-->
        </div>
      </div>
    </div>
<!--comment Section-->
    <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Jimmy</h3>
            <blockquote>
              <p>&ldquo; I was struggling with my studies but it all changed when I learned about Digital Media Marketing, I'm now a senior Marketing Manager making a 6 figure salary per year.This website is a real game changer. &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <!-- End comment Section-->

    <!--Why Us section-->
    <div class="site-section pb-0">

      <div class="future-blobs">
        <div class="blob_2">
          <img src="images/blob_2.svg" alt="Image">
        </div>
        <div class="blob_1">
          <img src="images/blob_1.svg" alt="Image">
        </div>
      </div>
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">Why Choose Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto align-self-start"  data-aos="fade-up" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">2,931 Yearly Graduates</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Worldwide Identity</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Top Professionals in The World</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Expand Your Knowledge</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Best Online Teaching Assistant Courses</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Best Teachers</h3></div>
              </div>

            </div>


          </div>
          <div class="col-lg-7 align-self-end"  data-aos="fade-left" data-aos-delay="200">
            <img src="images/person_transparent.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <!--End why us Section-->


  <!--contact section-->


<style>

.contact{
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .c_card {
            display: flex;
            width: 80%;
            height: 70%;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .c_card:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
        }

        .c_content {
            flex: 1;
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .c_content h1 {
            color: #0056b3;
            margin-bottom: 10px;
            font-size: 24px;
        }

        .c_content p {
            color: #777;
            margin-bottom: 20px;
            line-height: 1;
        }

        .c_contact-details p {
            margin-bottom: 15px;
            color: black;
        }

        .c_contact-details strong {
            display: block;
            margin-bottom: 5px;
        }

        .c_send-email {
            display: inline-block;
            background-color: #7971ea;
            color: #fff;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        

        .c_map {
            flex: 1;
            position: relative;
            background: url('images/map.png') no-repeat center center;
            background-size: cover;
        }

        .c_social-icons {
            position: absolute;
            bottom: 20px;
            right: 20px;
            display: flex;
        }

        .c_social-icons a {
            margin-right: 10px;
            color: #fff;
            background-color: #7971ea;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            font-size: 20px;
            transition: background-color 0.3s;
        }

        .c_social-icons a:hover {
            background-color: #004494;
        }

        .c_social-icons a:last-child {
            margin-right: 0;
        }
    </style>

<div class="contact" id="contact_section">

    <div class="c_card">
        <div class="c_content">
            <h1>LET'S TALK!</h1>
            <p>We are here to answer any questions you may have about our Digital Marketing.</p>
            <div class="c_contact-details">
                <p><strong ><b>Address :</b></strong><br>Green Twon Bahwalpur</p>
                <p><strong><b>Phone :</b></strong><br>+92 320-6644654 | +92 320-6644569 </p>
                <p><strong><b>Email :</b></strong><br>hasnainyasin900@gmail.com</p>
                <a href="https://mail.google.com/" class="c_send-email">SEND EMAIL</a>
                
            </div>
        </div>
        <div class="c_map">
        <div class="c_social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Google"><i class="fab fa-google"></i></a>
                </div>
        </div>
    </div>
    </div>





<!--let's Tlak-->

    
<!--Footer Start-->
    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About Digital Media Marketing</h3>
            <p>Get access to high-quality digital marketing courses without any cost. Sign up now and start your journey towards becoming a digital marketing expert.</p>
          </div>
<!--Footer links-->
          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#home-section" class="nav-link">Home</a></li>
              <li><a href="#courses-section" class="nav-link">Courses</a></li>
              <li><a href="#programs-section" class="nav-link">Programs</a></li>
              <li><a href="#teachers-section" class="nav-link">Teachers</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>Subscribe</h3>
            <p>Keep yourself up to date and receive all kind of news about Digital Media Marketing.</p>
            <form action="404.html" target="_blank" class="footer-subscribe">
              <div class="d-flex mb-5">

                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div>

        </div>
<!--copy write text-->
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
    <!--Copy write code in that its will auto update the year int the text-->
        Copyright  &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
        
      </p>
            </div>
          </div>

        </div>
        <!--copy write text-->
      </div>
    </footer>
<!-- Footer End-->


  </div> 
  <!-- script file  js -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
 <script src="js/main.js"></script>

  </body>
</html>


