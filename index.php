<?php include 'include/config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $data['name']?> - <?php echo $data['title']?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?php echo $data['name']?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span><?php echo $data['title']?></span> from <?php echo $data['place']?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <!--<li><a class="nav-link" href="#services">Services</a></li>-->
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <?php
          if($data['github']){
        ?>  
          <a href="<?php echo $data['github']?>" target="_blank" class="github"><i class="bi bi-github"></i></a>
        <?php
          }
        ?>

        <?php
          if($data['youtube']){
        ?>  
          <a href="<?php echo $data['youtube']?>" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
        <?php
          }
        ?>
        
        <?php
          if($data['instagram']){
        ?>
        <a href="<?php echo $data['instagram']?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <?php
          }
        ?>

        <?php
          if($data['linkedin']){
        ?>
        <a href="<?php echo $data['linkedin']?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <?php
          }
        ?>
        
        <?php
          if($data['twitter']){
        ?>
        <a href="<?php echo $data['twitter']?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <?php
          }
        ?>
        
        <?php
          if($data['facebook']){
        ?>
        <a href="<?php echo $data['facebook']?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <?php
          }
        ?>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 mt-5 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php echo $data['title']?></h3>
          <p class="fst-italic mt-4">
            <?php echo $data['slogan']?>
          </p>
          <div class="row">
            <div class="col-lg-6 mt-3">
              <ul>
                <!--<li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo $data['birthday']?></span></li>-->
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $data['city']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $data['phone']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><a href="<?php echo $data['website']?>" target="_blank"><?php echo $data['website']?></a></span></li>
              </ul>
            </div>
            <div class="col-lg-6 mt-3">
              <ul>
                <!--<li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $data['city']?></span></li>-->
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo $data['degree']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $data['email']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Certification:</strong> <span><?php echo $data['certification']?></span></li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>

    </div><!-- End About Me -->

<!-- ======= Counts ======= -->
    <?php
    $counter = "SELECT * FROM  `counter`";
    $counter_result =mysqli_query($con, $counter);

?>

<div class="counts container">

<div class="row">
<?php

    if($counter_result -> num_rows > 0){
      while($row = $counter_result -> fetch_assoc()){
?>
<div class="col-lg-3 col-md-6 mt-5">
          <div class="count-box">
            <h5 class="my-3"><?php echo $row['stack']?></h5>
            <i class="<?php echo $row['icon']?>"></i>
            <!--<span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>-->
            <h6 class="my-3"><?php echo $row['skills']?></h6>
          </div>
        </div>
<?php

      }
    }
    
    ?>
    

      </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <?php
    $language_skill = "SELECT * FROM  `skills`";
    $skill_result =mysqli_query($con, $language_skill);
    $skills = mysqli_fetch_all($skill_result, MYSQLI_ASSOC);
$total_skills = count($skills);
$half_skills = ceil($total_skills / 2);
    ?>

    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">
        <?php
      for ($i = 0; $i < $half_skills; $i++) {
        ?>
        <div class="progress">
            <span class="skill"><?php echo $skills[$i]['title']?> <i class="val"><?php echo $skills[$i]['value']?>%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skills[$i]['value']?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <?php
      }
      ?>
        </div>

        <div class="col-lg-6">
        <?php
      for ($i = $half_skills; $i < $total_skills; $i++) {
        ?>
        <div class="progress">
            <span class="skill"><?php echo $skills[$i]['title']?> <i class="val"><?php echo $skills[$i]['value']?>%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skills[$i]['value']?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <?php
      }
      
      ?>
        </div>

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Knowledge</h2>
      </div>

      <div class="row">
      <?php
      $knowledges = "SELECT * FROM  `knowledge`";
      $knowledges_result = mysqli_query($con, $knowledges);

      if($knowledges_result -> num_rows > 0){
        while($knowledge_row = $knowledges_result -> fetch_assoc()){
          ?>
          <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="<?php echo $knowledge_row['icon']?>" style="color: <?php echo $knowledge_row['color']?>;"></i>
            <h3><?php echo $knowledge_row['title']?></h3>
          </div>
        </div>
          <?php
        }
      }
      ?>
        
      </div>

    </div><!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <!--<div class="swiper-wrapper">-->
            <?php
            $quates ="SELECT * FROM `testimonials`";
            $quates_result=mysqli_query($con, $quates);

            if($quates_result -> num_rows >0){
              while($quates_row =$quates_result -> fetch_assoc()){
                ?>
                <div class="swiper-slide">
                <div class="testimonial-item mt-3">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?php echo $quates_row['quates']?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <!--<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
              <h3><?php echo $quates_row['name']?></h3>
              <h4><?php echo $quates_row['title']?></h4>
            </div>
          </div><!-- End testimonial item -->
                <?php
              }
            }
            ?>
          

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      

      <div class="row">
      
        <div class="col-lg-6">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4><?php echo $data['name']?></h4>
            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
            <p>
            <ul>
              <li><?php echo $data['address']?></li>
              <li><?php echo $data['phone']?></li>
              <li><?php echo $data['email']?></li>
            </ul>
            </p>
          </div>
          
          
      <h3 class="resume-title">Education</h3>

          <?php
      $education = "SELECT * FROM `education`";
      $education_result = mysqli_query($con, $education);

      if($education_result -> num_rows > 0){
        while($education_row = $education_result -> fetch_assoc()){
          ?>
            <div class="resume-item">
            <h4><?php echo $education_row['major']?></h4>
            <h5><?php echo $education_row['year']?> - <?php echo $education_row['year-end']?></h5>
            <p><em><?php echo $education_row['school']?></em></p>
            <p>
              <ul>
              <?php
            if($education_row['comment']){
            ?>  
            <li><?php echo $education_row['comment']?></li>
            <?php
            }
            ?>

            <?php
            if($education_row['comment2']){
            ?>  
            <li><?php echo $education_row['comment2']?></li>
            <?php
            }
            ?>
              
            </ul>
          </p>
          </div>
          <?php
        }
      }
      ?>
      
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Experience</h3>

          <?php
          $exprience = "SELECT * FROM `experience`";
          $exprience_result = mysqli_query($con, $exprience);

          if($exprience_result -> num_rows > 0){
            while($exprience_row = $exprience_result -> fetch_assoc()){
            ?>

          <div class="resume-item">
            <h4><?php echo $exprience_row['company']?></h4>
            <h5><?php echo $exprience_row['year']?> - <?php echo $exprience_row['year-end']?></h5>
            <!--<p><em></em></p>-->
            <p>
            <ul>
            <?php
            if($exprience_row['description']){
            ?>  
            <li><?php echo $exprience_row['description']?></li>
            <?php
            }
            ?>
              
              <?php
            if($exprience_row['description2']){
            ?>  
            <li><?php echo $exprience_row['description2']?></li>
            <?php
            }
            ?>

            <?php
            if($exprience_row['description3']){
            ?>  
            <li><?php echo $exprience_row['description3']?></li>
            <?php
            }
            ?>
              
            </ul>
            </p>
          </div>
          <?php
        }
      }
      ?>
          
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <!--<section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">Lorem Ipsum</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Sed ut perspiciatis</a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">Magni Dolores</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4><a href="">Nemo Enim</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-slideshow"></i></div>
            <h4><a href="">Dele cardo</a></h4>
            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="">Divera don</a></h4>
            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
          </div>
        </div>

      </div>

    </div>
  </section>-->
  <!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            
            <li data-filter=".front-end">Front-end</li>
            <li data-filter=".back-end">Back-end</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

      <?php
        $portfolio ="SELECT * FROM `portfolio`";
        $portfolio_result = mysqli_query($con, $portfolio);

        if($portfolio_result -> num_rows > 0){
          while($portfolio_data = $portfolio_result ->fetch_assoc()){
            $category = $portfolio_data['category'];
            $category_sql ="SELECT * FROM `category` WHERE `category`.`id`='$category'";
            $category_result = mysqli_query($con, $category_sql);
            $category_data = mysqli_fetch_assoc($category_result);
            ?>
              <div class="col-lg-4 col-md-6 portfolio-item <?php echo $category_data['name']?>">
          <div class="portfolio-wrap">
            <img src="<?php echo $portfolio_data['image']?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo $portfolio_data['title']?></h4>
              <p><?php echo $portfolio_data['language']?></p>
              <div class="portfolio-links">
                <!--<a href="<?php echo $portfolio_data['image']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $portfolio_data['title']?>"><i class="bx bx-plus"></i></a>-->
                <a href="portfolio-details.php?id=<?php echo $portfolio_data['id']?>" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

            <?php
          }
        }
        else{
          echo "No Portfolio Found";
        }
      ?>

        


      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?php echo $data['address']?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="<?php echo $data['github']?>" class="github"><i class="bi bi-github"></i></a>
              <a href="<?php echo $data['linkedin']?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?php echo $data['email']?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?php echo $data['phone']?></p>
          </div>
        </div>
      </div>

      <?php
       if(isset($_POST['send_message'])){
        $name =mysqli_real_escape_string($con, $_POST['name']);
        $email =mysqli_real_escape_string($con, $_POST['email']);
        $subject =mysqli_real_escape_string($con, $_POST['subject']);
        $message =mysqli_real_escape_string($con, $_POST['message']);

        $contact = "INSERT INTO `contact` (`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')";
        mysqli_query($con, $contact);
       }
      ?>
      <form action="#" method="post" role="form" class="mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <!--<div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>-->
        <div class="text-center php-email-form"><button type="submit" name="send_message">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <?php 
    
    $details = "SELECT * FROM `details` WHERE `details`.`id` = 1";
    $details_result =mysqli_query($con, $details);
    $details_data = mysqli_fetch_assoc($details_result);
    
    ?>
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="<?php echo $details_data['url']?>" target="_blank"><?php echo $data['name']?></a> using BootstrapMade Template
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>