<?php include "include/config.php";

$sql="SELECT * FROM users WHERE id=1";
$query=mysqli_query($connect,$sql);
$data=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $data["name"]?>-<?php echo $data["title"]; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $data["fav_img"]; ?>" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

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

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a  href="index.php"><?php echo $data["name"]; ?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span><?php echo $data["title"]; ?></span> from <?php echo $data["place"]; ?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <?php 
        if($data["facebook"]){
        ?>
         <a href="<?php echo $data["facebook"]; ?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <?php 
        }
        ?>
        <?php 
        if($data["twitter"]){
        ?>
         <a href="<?php echo $data["twitter"]; ?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <?php 
        }
        ?>
        <?php 
        if($data["linkedin"]){
        ?>
        <a href="<?php echo $data["linkedin"]; ?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <?php 
        }
        ?>
        <?php 
        if($data["instagram"]){
        ?>
        <a href="<?php echo $data["instagram"]; ?>" target="_blank" class="twitter"><i class="bi bi-instagram"></i></a>
        <?php 
        }
        ?>
          <?php 
        if($data["github"]){
        ?>
        <a href="<?php echo $data["github"]; ?>" target="_blank" class="instagram"><i class="bi bi-github"></i></a>
        <?php 
        }
        ?>
          <?php 
        if($data["youtube"]){
        ?>
         <a href="<?php echo $data["youtube"]; ?>" target="_blank" class="twitter"><i class="bi bi-youtube"></i></a>
        <?php 
        }
        ?>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <?php include "include/config.php";
    $aboutSql="SELECT * FROM about WHERE id=1";
    $aboutQuery=mysqli_query($connect,$aboutSql);
    $aboutData=mysqli_fetch_assoc($aboutQuery);
  ?>
  <section id="about" class="about">
    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="<?php echo $aboutData['image'] ?>" class="img-fluid" alt="me">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php echo $aboutData["title"]; ?></h3>
          <p class="fst-italic"><?php echo $aboutData["subtitle"]; ?></p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo $aboutData["birthday"]; ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo $aboutData["website"]; ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $aboutData["phone"]; ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $aboutData["city"]; ?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $aboutData["age"]; ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo $aboutData["degree"]; ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span><?php echo $data["email"]; ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>
                <?php 
                if($aboutData["freelance"]==1){
                  echo "Available";
                }else{
                  echo "Not Available";
                }
                ?>
                </span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <?php include "include/config.php";
    $countSql="SELECT * FROM counter";
    $countQuery=mysqli_query($connect,$countSql);
    $countData=mysqli_fetch_assoc($countQuery);
    ?>          
    <div class="counts container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $countData['happy_count']; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $countData['project_count']; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Project Complete</p>
          </div>
        </div>
      </div>
    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">
      <?php include "include/config.php";
    $skillSql="SELECT * FROM skill";
    $skillQuery=mysqli_query($connect,$skillSql);
    if($skillQuery -> num_rows >0){
      while($skillData= $skillQuery -> fetch_assoc()){
        ?>
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill"><?php echo $skillData['title'] ?><i class="val"><?php echo $skillData['value'] ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skillData['value'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        <?php 
      }
    }
    ?>
      </div>

    </div><!-- End Skills -->

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <?php include "include/config.php";
            $testimonialsSql="SELECT * FROM testimonials";
            $testimonialsQuery=mysqli_query($connect,$testimonialsSql);
            if($testimonialsQuery -> num_rows >0){
            while($testimonialsData= $testimonialsQuery -> fetch_assoc()){
          ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo $testimonialsData['quote'] ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?php echo $testimonialsData['image'] ?>" class="testimonial-img" alt="">
                <h3><?php echo $testimonialsData['name'] ?></h3>
                <h4><?php echo $testimonialsData['designation'] ?></h4>
              </div>
            </div>
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
          <h3 class="resume-title">Education</h3>
          <?php include "include/config.php";
            $educationSql="SELECT * FROM education";
            $educationQuery=mysqli_query($connect,$educationSql);
            if($educationQuery -> num_rows >0){
            while($educationData= $educationQuery -> fetch_assoc()){
          ?>
            <div class="resume-item">
            <h4><?php echo $educationData['degree'] ?></h4>
            <h5><?php echo $educationData['duration'] ?></h5>
            <p><em><?php echo $educationData['institute'] ?></em></p>
            <p><?php echo $educationData['result'] ?></p>
          </div>
          <?php 
          }
          }
          ?>
          <h3 class="resume-title">Course</h3>
          <?php include "include/config.php";
            $courseSql="SELECT * FROM course";
            $courseQuery=mysqli_query($connect,$courseSql);
            if($courseQuery -> num_rows >0){
            while($courseData= $courseQuery -> fetch_assoc()){
          ?>
            <div class="resume-item pb-0">
            <h4> <?php echo $courseData['course_name'] ?></h4>
            <p><em>- <?php echo $courseData['company_name'] ?></em></p>
            <p>
            </p>
          </div>
          <?php 
          }
          }
          ?>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <?php include "include/config.php";
            $experienceSql="SELECT * FROM experience";
            $experienceQuery=mysqli_query($connect,$experienceSql);
            if($experienceQuery -> num_rows >0){
            while($experienceData= $experienceQuery -> fetch_assoc()){
          ?>
          <div class="resume-item">
            <h4><?php echo $experienceData['designation'] ?></h4>
            <h5><?php echo $experienceData['duration'] ?></h5>
            <p><em><?php echo $experienceData['company_name'] ?></em></p>
            <p>
            <ul>
              <li><?php echo $experienceData['description'] ?></li>
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
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      <div class="row">
      <?php include "include/config.php";
            $servicesSql="SELECT * FROM services";
            $servicesQuery=mysqli_query($connect,$servicesSql);
            if($servicesQuery -> num_rows >0){
            while($servicesData= $servicesQuery -> fetch_assoc()){
          ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="<?php echo $servicesData['icon'] ?>"></i></div>
                <h4><a href=""><?php echo $servicesData['title'] ?></a></h4>
                <p><?php echo $servicesData['description'] ?></p>
              </div>
            </div>
          <?php 
          }
          }
          ?>
      </div><!--row end -->

    </div>
  </section><!-- End Services Section -->



  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Awesome Works</p>
      </div>
      <div class="row portfolio-container">
      <?php include "include/config.php";
            $portfolioSql="SELECT * FROM portfolio";
            $portfolioQuery=mysqli_query($connect,$portfolioSql);
            if($portfolioQuery -> num_rows > 0){
            while($portfolioData= $portfolioQuery -> fetch_assoc()){
            //  $id=$portfolioData['id'];
          ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo $portfolioData['image'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <p><?php echo $portfolioData['title'] ?></p>
                <div class="portfolio-links">
                  <a href="<?php echo $portfolioData['image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $portfolioData['title'] ?>"><i class="bx bx-plus"></i></a>
                  <a href="portfoliodetails.php?id=<?php echo $portfolioData['id'] ?>" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php 
        }
        }
        ?> 
      </div><!-- row end -->

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
            <p><?php echo $data["address"]; ?> </p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <?php 
              if($data["facebook"]){
              ?>
              <a href="<?php echo $data["facebook"]; ?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <?php 
              }
              ?>
              <?php 
              if($data["twitter"]){
              ?>
              <a href="<?php echo $data["twitter"]; ?>" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
              <?php 
              }
              ?>
              <?php 
              if($data["linkedin"]){
              ?>
              <a href="<?php echo $data["linkedin"]; ?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <?php 
              }
              ?>
              <?php 
              if($data["instagram"]){
              ?>
              <a href="<?php echo $data["instagram"]; ?>" target="_blank" class="twitter"><i class="bi bi-instagram"></i></a>
              <?php 
              }
              ?>
              <?php 
              if($data["github"]){
              ?>
              <a href="<?php echo $data["github"]; ?>" target="_blank" class="instagram"><i class="bi bi-github"></i></a>
              <?php 
              }
              ?>
                <?php 
              if($data["youtube"]){
              ?>
              <a href="<?php echo $data["youtube"]; ?>" target="_blank" class="twitter"><i class="bi bi-youtube"></i></a>
              <?php 
              }
              ?>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?php echo $data["email"]; ?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?php echo $data["phone"]; ?></p>
          </div>
        </div>
      </div>
      <?php
        include "include/config.php";
        if(isset($_POST["submit"])){
        $contactName=$_POST["name"];
        $contactEmail=$_POST["email"];
        $contactSub=$_POST["subject"];
        $contactMsg=$_POST["message"];

        $contactSql="INSERT INTO contact (name,email,subject,message) VALUES ('$contactName','$contactEmail','$contactSub','$contactMsg')";
        $contactQuery=mysqli_query($connect,$contactSql);
        }
      ?>
      <form action="" method="post"   class="form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input style="background-color:rgba(170,170,170);" type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input style="background-color:rgba(170,170,170);" type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input style="background-color:rgba(170,170,170);" type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea style="background-color:rgba(170,170,170);" class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="text-center mt-3">
          <button class="btn text-dark" style="background: #18d26e;" type="submit" name="submit">Send Message</button>
        </div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    Designed by <a href="#"><?php echo $data["name"]; ?></a>
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
      