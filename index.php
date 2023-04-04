<?php
  $insert = false;
  if(isset($_POST['name'])){ 
    $server = "localhost"; 
    $username = "root"; 
    $password = ""; 

    $con = mysqli_connect($server, $username, $password);

    if(!$con){  
      die("connection to this database failed due to". mysqli_connect_error()); 
    }

    // echo "Success connecting to the db"; 

    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $message = $_POST['message']; 
  
    $sql = "INSERT INTO `Portfolio`.`form` (`name`, `email`, `phone`, `message`, `date`) VALUES ('$name', '$email', '$phone', '$message', current_timestamp());"; 
    // echo $sql; 
    if($con->query($sql) == true){ 
    // echo "Successfully inserted";
    $insert = true;
    }
    else{
      echo "Error: $sql <br> $con->error";
    }
    $con->close();
  }
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Personal PortFolio</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
    <a class="navbar-brand text-info font-weight-bold" href="#">PortFolio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-dark scrollto" href="#hero">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark scrollto" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark scrollto" href="#skills">Skills</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle scrollto" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu scrollto" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#services">Web Designer</a>
            <a class="dropdown-item" href="#services">Advertisement</a>
            <a class="dropdown-item" href="#services">Photography</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark scrollto" href="#contact">Contact</a>
        </li>
      </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
  </nav>

  <!-- Home -->
  <section id="hero" class="hero">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/bg.jpeg" alt="Not Found" height="600">
        <div class="carousel-caption d-none d-md-block text-justify">
          <h3>Hello, This is</h3>
          <h1>Pragati Shinde</h1>
          <h3>And I'm a CSE Student</h3>
          <br>
          <br>
          <a href="https://drive.google.com/file/d/1TO5juL7o8X8bn7ja7O546j5MMbl6WwYx/view?usp=drivesdk">
            <button type="button" class="btn btn-success">Download CV</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<br>

  <!-- About Section -->
  <section id="about" class="about">
    <div class="container ">
      <div class="section-title">
        <h2 class="mb-0">
          <a class="text-dark" href="#">About</a>
        </h2><br>
        <h4 class="text-secondary font-weight-bold">____who i am ?____</h4>
      </div>
      <div class=" box-shadow bg-light">
        <br>
        <div class="row row skills-content">
          <div class="col-lg-4">
            <img src="img/pic.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3 class="font-weight-bold">I am <a href="#">Coader</a></h3>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday :</strong> <span>16 March 2002</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone :</strong> <span>+91 9356518322</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City :</strong> <span>Akluj</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age :</strong> <span>20</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree :</strong> <span>B.tech</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email ID :</strong>
                    <span>pragatishinde491@gmail.com</span>
                  </li>
                </ul>
              </div>
            </div>
            <ul>
              <span class="nav">
                <a class="nav-link active" href="https://www.linkedin.com/in/pragati-shinde-500951221"><img
                    src="img/Linkdin Logo.jpeg" alt="Not found" width="28" height="28"></a>
                <a class="nav-link" href="https://github.com/PragatiShinde16"><img src="img/Github Logo.jpeg"
                    alt="Not found" width="35" height="35"></a>
                <a class="nav-link" href="https://www.hackerrank.com/pragatishinde491"><img
                    src="img/HackerRank Logo.jpeg" alt="Not found" width="28" height="28"></a>
                <a class="nav-link " href="https://twitter.com/Pragati16082002?t=e1w-5qjkqUF0UiXfBg01uw&s=09"><img
                    src="img/Twitter Logo.jpeg" alt="Not found" width="32" height="32"></a>
              </span>
            </ul>
            <div class="font-weight-bold ">
              <p>
                I am Pragati Shinde from Akluj. Currently I am pursuing B.tech in CSE engineering from SKN Sinhgad
                College
                Of
                Engineering Korti Pandharpur. I am learning web developement in languages like HTML, CSS, JavaScript.
              </p>
            </div>
          </div>
        </div>
        <br>
      </div>
  </section>
  <br>
  <br>
  <!-- About Section End -->
  <!-- Skills -->
  <section id="skills" class="skills">
    <div class="container ">
      <div class="section-title">
        <h2 class="mb-0">
          <a class="text-dark" href="#">Skills</a>
        </h2>
        <br>
        <p>HTML, CSS, JavaScript, BootStrap, Wordpress/CMS, Photoshoot this are the my skills. I have good knowledge about my skills. I have knowledge about how to use the BootStrap website.</p>
      </div>
      <br>

      <div class="row skills-content">
        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up">
          <span class="skill font-weight-bold text-uppercase">HTML <i class="val ">95%</i></span>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 95%" aria-valuenow="50" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
          <br>

          <span class="skill font-weight-bold text-uppercase">CSS <i class="val">90%</i></span>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div><br>

          <span class="skill font-weight-bold text-uppercase">JavaScript <i class="val">75%</i></span>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div><br>

        </div>

        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

          <span class="skill font-weight-bold text-uppercase">Bootstrap <i class="val">80%</i></span>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
          <br>

          <span class="skill font-weight-bold text-uppercase">WordPress/CMS <i class="val">90%</i></span>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 85%" aria-valuenow="50" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div><br>

          <span class="skill font-weight-bold text-uppercase">photoshot <i class="val">90%</i></span>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 55%" aria-valuenow="50" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
          <br>
        </div>
      </div>
    </div>
    <br>
    <br>
    <!-- Skills End -->
    <!-- Services Section -->
    <section id="services" class="services">
      <div class="container ">
        <div class="section-title">
          <h2 class="mb-0">
            <a class="text-dark" href="#">Services</a>
          </h2><br>
          <div class="section-title">
            <p>We are provides all kind of services related to Web designing, Advertisement and Photography.</p>
          </div>
          <div class="row">
            <div class="album py-5 bg-light">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top"
                        data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                        alt="Thumbnail [100%x225]" src="https://source.unsplash.com/random/40×40/?Web Services"
                        data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                      <div class="card-body">
                        <h4 class="title"><a href=" ">Web Designing</a></h4>
                        <p class="card-text">We make beautiful website designs with quality of work.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                           <a href ="https://p.paytm.me/xCTH/hekr684x">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
                           </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top"
                        data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                        alt="Thumbnail [100%x225]" src="https://source.unsplash.com/random/40×40/?online Advertisement Services"
                        data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                      <div class="card-body">
                        <h4 class="title"><a href=" ">Advertisement</a></h4>
                        <p class="card-text">We can create Video Advertising and Mobile Advertising.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href ="https://p.paytm.me/xCTH/hekr684x">
                              <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 ">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top"
                        data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                        alt="Thumbnail [100%x225]" src="https://source.unsplash.com/random/40×40/?Photography Services"
                        data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                      <div class="card-body">
                        <h4 class="title"><a href=" ">Photography</a></h4>
                        <p class="card-text">We are provide you creative and event photographs.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href ="https://p.paytm.me/xCTH/hekr684x">
                              <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now</button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- services End -->

    <!-- Contact -->
    <section id="contact" class="contact">
      <div class="container ">

        <div class="section-title">
          <h2 class="mb-0">
            <a class="text-dark" href="#">Contact</a>
          </h2><br>
          <p>If you want any service from us please contact us.</p>
        </div>
        <div class="container box-shadow bg-light">
          <br>
          <div class="row aos-init aos-animate" data-aos="fade-in">
            <div class="col-md-5">
              <div class="card flex-md-row mb-6 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <div class="info">
                    <div class="address">
                      <i class="bi bi-geo-alt"></i>
                      <h4>Location:</h4>
                      <p>At Post Akluj</p>
                    </div>
                    <div class="email">
                      <i class="bi bi-envelope"></i>
                      <h4>Email:</h4>
                      <p>pragatishinde491@gmail.com</p>
                    </div>
                    <div class="phone">
                      <i class="bi bi-phone"></i>
                      <h4>Call:</h4>
                      <p>+91 9356518322</p>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15208.637953938682!2d75.28289319999999!3d17.642603700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1672035729608!5m2!1sen!2sin" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div><br><br>
                </div>
              </div>
            </div>

            <div class="col-md-7">
              <div class="card flex-md-row mb-6 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                  <form  action="index.php" method="POST" role="form" class="php-email-form" onsubmit = "sendemail()">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" class="form-control" id="name" required="">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Your Email</label>
                        <input type="email" class="form-control" name="email" id="email" required="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="name">Phone No</label>
                      <input type="text" class="form-control" name="phone" id="subject" required="">
                    </div>
                    <div class="form-group">
                      <label for="name">Message</label>
                      <textarea class="form-control" name="message" rows="10" required=""></textarea>
                    </div>
                    <div class="my-3">
                      <!-- <div class="loading">Loading</div> -->
                      <div class="error-message"></div>
                      <?php
                      if($insert == true){
                        echo "<div class='sent-message'>Your message has been sent. Thank you!</div>";
                      }
                      ?>
                    </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-info">Send Message</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <br>
        </div>
      </div>
    </section>
    <br>
    <br>
    <!-- Contact End -->

    <!-- Footer -->
    <div class="box-shadow bg-light">
      <div class="py-md-3 text-center">
        <div class="mb-2 font-weight-bold">
          © Copyright PortFolio <br> Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
    <!-- Footer End-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src = " https://smtpjs.com/v3/smtp.js"></script>
    <script src = "script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
</body>

</html>