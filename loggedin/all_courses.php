<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../styleloggedin.css">
<title>Digital Media Marketing</title>
</head>

 <body>
   <div class="topnav" id="myTopnav">
   <a href="../loggedin.php" class="active">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="profile.php" name="profile">Profile</a>
               <a href="../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
       }
        ?>
      </div>
 </header>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">All Courses</li>

  </ol>
</nav>

<div class="java-container">

  <div class="card" >
      <img src="img4.jpeg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Digital Marketing</p>

        <p class="card-text details" >Language : English Urdu</p>
        <p class="card-text details" >Tutor : Hasnain Yasin</p>

      </div>
      <a href="digital marketing/markeitng/description_formationvideo.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="digital marketing/markeitng/digital.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img5.jpeg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" > Paid Advertising | Video Tutorial for Beginners</p>

        <p class="card-text details" >Language : English Urdu</p>
        <p class="card-text details" >Tutor : Hasnain </p>
      </div>
      <a href="digital marketing/markeitng/description_learninglad.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="digital marketing/markeitng/ads.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img6.jpeg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text"> Email Marketing</p>
        <p class="card-text details">Language : English Urdu</p>
        <p class="card-text details ">Tutor : Hasnain yasin </p>
      </div>
      <a href="digital marketing/markeitng/description_thenewboston.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="digital marketing/markeitng/em.php" class="btn btn-primary">View Course !</a>
  </div>
  <div class="card" >
      <img src="img20.jpeg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Blogging</p>

        <p class="card-text details">Language : Urdu</p>
        <p class="card-text details">Tutor : Abdul Mateen</p>

      </div>
      <a href="blogging/blog/description_stanford.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="blogging/blog/blogging.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img21.jpeg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Gust Posting</p>

        <p class="card-text details" >Language : Urdu</p>
        <p class="card-text details" >Tutor : Abdull Mateen </p>
      </div>
      <a href="blogging/blog/description_lund.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="blogging/blog/gustposting.php" class="btn btn-primary">View Course !</a>
  </div>
  <div class="card" >
      <img src="img14.jpeg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">Search Engine Optimization</p>
        <p class="card-text details" >Language : Urdu & English </p>
        <p class="card-text details" >Tutor : Hasnain</p>

      </div>
      <a href="seo/seomaster/description_lingoni.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="seo/seomaster/s_e_o.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="onpage.jpeg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">On Page SEO</p>
        <p class="card-text details" >Language : Urdu</p>
        <p class="card-text details" >Tutor : LEARN ON Page SEO WITH VINCENT</p>
      </div>
      <a href="seo/seomaster/description_vincent.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="seo/seomaster/onpage.php" class="btn btn-primary">View Course !</a>
  </div>
  <div class="card" >
      <img src="img1.jpeg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Affiliate Marketing</p>

        <p class="card-text details" >Language : Urdu</p>
        <p class="card-text details" >Tutor : Dominique Liard</p>

      </div>
      <a href="digital marketing/Affiliate_Marketing/description_dominique.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="digital marketing/Affiliate_Marketing/AffiliateM.php" class="btn btn-primary">View Course !</a>
  </div>

  
  <div class="card" >
      <img src="img15.jpeg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >OFF-Page SEO</p>

        <p class="card-text details" >Language :  Urdu</p>
        <p class="card-text details" >Tutor :Khatawaat</p>

      </div>
      <a href="seo/offpage/description_khatawaat1.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="seo/offpage/offpageseo.php" class="btn btn-primary">View Course !</a>
  </div>

 
</div>
