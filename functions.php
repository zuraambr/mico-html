<?php include 'config.php'; ?>
<!-- header -->
<?php

  
function setHeader($phone_number, $email, $location, $nav_links, $logo_image) {
    ?>
    <header class="header_section hero_area">
        <div class="header_top">
            <div class="container">
                <div class="contact_nav">
                    <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>Call : <?php echo $phone_number; ?></span>
                    </a>
                    <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>Email : <?php echo $email; ?></span>
                    </a>
                    <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span><?php echo $location; ?></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="<?php echo $nav_links['home']; ?>">
                        <img src="<?php echo $logo_image; ?>" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                        <span class=""> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav">
                                <?php foreach ($nav_links as $name => $link): ?>
                                    <li class="nav-item <?php echo basename($_SERVER['PHP_SELF'], ".php") === $name ? 'active' : ''; ?>">
                                        <a class="nav-link" href="<?php echo $link; ?>"><?php echo ucfirst($name); ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="quote_btn-container">
                            <a href="">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span>Login</span>
                            </a>
                            <a href="">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span>Sign Up</span>
                            </a>
                            <form class="form-inline">
                                <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <?php
}
?>





<!-- slider -->
<?php

function setSlider($slider_items) {
    ?>
    <section class="slider_section hero_area ">
      <div class="dot_design">
        <img src="images/dots.png" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php foreach ($slider_items as $index => $item): ?>
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div class="play_btn">
                        <button>
                          <i class="fa fa-play" aria-hidden="true"></i>
                        </button>
                      </div>
                      <h1>
                        <?php echo $item['title']; ?> <br>
                        <span><?php echo $item['subtitle']; ?></span>
                      </h1>
                      <p><?php echo $item['description']; ?></p>
                      <a href="<?php echo $item['link']; ?>">Contact Us</a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="<?php echo $item['image']; ?>" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <img src="images/prev.png" alt="">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <img src="images/next.png" alt="">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <?php
}
?>



<!-- booking -->
<?php

function getBookingForm($doctorss, $departments) {
    ?>
    <section class="book_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col">
            <form action="booking.php" method="POST">
              <h4>BOOK <span>APPOINTMENT</span></h4>
              <div class="form-row">
                <div class="form-group col-lg-4">
                  <label for="inputPatientName">Patient Name</label>
                  <input type="text" class="form-control" id="inputPatientName" name="patient_name" required>
                </div>
                <div class="form-group col-lg-4">
                  <label for="inputDoctorName">Doctor's Name</label>
                  <select name="doctor_name" class="form-control wide" id="inputDoctorName" required>
                    <option value="" disabled selected>Select Doctor</option>
                    <?php if (!empty($doctorss)): ?>
                      <?php foreach ($doctorss as $doctor): ?>
                        <option value="<?php echo htmlspecialchars($doctor); ?>"><?php echo htmlspecialchars($doctor); ?></option>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <option value="" disabled>No doctors available</option>
                    <?php endif; ?>
                  </select>
                </div>
                <div class="form-group col-lg-4">
                  <label for="inputDepartmentName">Department's Name</label>
                  <select name="department_name" class="form-control wide" id="inputDepartmentName" required> 
                    <option value="" disabled selected>Select Department</option>
                    <?php if (!empty($departments)): ?>
                      <?php foreach ($departments as $department): ?>
                        <option value="<?php echo htmlspecialchars($department); ?>"><?php echo htmlspecialchars($department); ?></option>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <option value="" disabled>No departments available</option>
                    <?php endif; ?>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-4">
                  <label for="inputPhone">Phone Number</label>
                  <input type="tel" class="form-control" id="inputPhone" name="phone" required pattern="[0-9]{10}" placeholder="Enter 10-digit number">
                </div>
                <div class="form-group col-lg-4">
                  <label for="inputSymptoms">Symptoms</label>
                  <input type="text" class="form-control" id="inputSymptoms" name="symptoms">
                </div>
                <div class="form-group col-lg-4">
                      <label for="inputDate">Choose Date</label>
                           <input type="text" class="form-control" id="inputDate" name="appointment_date" placeholder="dd.mm.yyyy" required>
                            </div>


              </div>
              <div class="btn-box">
                <button type="submit" class="btn">Submit Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php
}
?>


<!-- treat -->
<?php

function getTreatmentSection($treatments) {
    ?>
    <section class="treatment_section layout_padding">
      <div class="side_img">
        <img src="images/treatment-side-img.jpg" alt="">
      </div>
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Hospital <span>Treatment</span>
          </h2>
        </div>
        <div class="row">
          <?php if (!empty($treatments)): ?>
            <?php foreach ($treatments as $treatment): ?>
              <div class="col-md-6 col-lg-3">
                <div class="box">
                  <div class="img-box">
                    <img src="images/<?php echo htmlspecialchars($treatment['image']); ?>" alt="">
                  </div>
                  <div class="detail-box">
                    <h4>
                      <?php echo htmlspecialchars($treatment['name']); ?>
                    </h4>
                    <p>
                      <?php echo htmlspecialchars($treatment['description']); ?>
                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <p class="text-center">No treatments available at the moment.</p>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <?php
}
?>


<!-- doc-->

<?php

function getDoctorsSection($doctors) {
    ?>
    <section class="team_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Our <span>Doctors</span>
          </h2>
        </div>
        <div class="carousel-wrap">
          <div class="owl-carousel team_carousel">
            <?php if (!empty($doctors)): ?>
              <?php foreach ($doctors as $doctor): ?>
                <div class="item">
                  <div class="box">
                    <div class="img-box">
                      <img src="images/<?php echo htmlspecialchars($doctor['image']); ?>" alt="" />
                    </div>
                    <div class="detail-box">
                      <h5>
                        <?php echo htmlspecialchars($doctor['name']); ?>
                      </h5>
                      <h6>
                        <?php echo htmlspecialchars($doctor['degree']); ?>
                      </h6>
                      <div class="social_box">
                        <?php foreach ($doctor['social_links'] as $platform => $link): ?>
                          <?php if (!empty($link)): ?>
                            <a href="<?php echo htmlspecialchars($link); ?>">
                              <i class="fa fa-<?php echo htmlspecialchars($platform); ?>" aria-hidden="true"></i>
                            </a>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <p class="text-center">No doctors available at the moment.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <?php
}
?>



<!-- testi -->
<?php

function getClientSection($testimonials) {
    ?>
    <section class="client_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            <span>Testimonial</span>
          </h2>
        </div>
      </div>
      <div class="container px-0">
        <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <?php if (!empty($testimonials)): ?>
              <?php foreach ($testimonials as $index => $testimonial): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                  <div class="box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5><?php echo htmlspecialchars($testimonial['name']); ?></h5>
                        <h6><?php echo htmlspecialchars($testimonial['title']); ?></h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      <?php echo htmlspecialchars($testimonial['text']); ?>
                    </p>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <p class="text-center">No testimonials available at the moment.</p>
            <?php endif; ?>
          </div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
              <i class="fa fa-angle-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <?php
}
?>




<!-- about section -->
<?php
function about_section() {
    ?>
    
    <section class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/about-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About <span>Hospital</span>
                            </h2>
                        </div>
                        <p>
                            has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->
    <?php
}
?>


<?php
function contact_section() {
    ?>
    <!-- contact section -->
    <section class="contact_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Get In Touch
                </h2>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form_container">
                        <!-- Form starts here -->
                        <form action="success.php" method="POST">
                            <div>
                                <input type="text" name="name" placeholder="Full Name" required />
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Email" required />
                            </div>
                            <div>
                                <input type="text" name="phone" placeholder="Phone Number" required />
                            </div>
                            <div>
                                <textarea name="message" class="message-box" placeholder="Message" required></textarea>
                            </div>
                            <div class="btn_box">
                                <button href="success.php" type="submit">SEND</button>
                            </div>
                        </form>
                        <!-- Form ends here -->
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="img-box">
                        <img src="images/contact-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
    <?php
}
?>




<!-- info section -->
<?php
function info_section($contact_info, $social_links, $useful_links, $posts) {
    ?>
    
    <section class="info_section">
        <div class="container">
            <div class="info_top">
                <div class="info_logo">
                    <a href="">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="info_form">
                    <form action="">
                        <input type="email" placeholder="Your email">
                        <button>
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            <div class="info_bottom layout_padding2">
                <div class="row info_main_row">
                    <div class="col-md-6 col-lg-3">
                        <h5>Address</h5>
                        <div class="info_contact">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span><?php echo $contact_info['address']; ?></span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span><?php echo $contact_info['phone']; ?></span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope"></i>
                                <span><?php echo $contact_info['email']; ?></span>
                            </a>
                        </div>
                        <div class="social_box">
                            <a href="<?php echo $social_links['facebook']; ?>">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="<?php echo $social_links['twitter']; ?>">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="<?php echo $social_links['linkedin']; ?>">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="<?php echo $social_links['instagram']; ?>">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_links">
                            <h5>Useful link</h5>
                            <div class="info_links_menu">
                                <?php foreach ($useful_links as $key => $link): ?>
                                    <a href="<?php echo $link; ?>" class="<?php echo $key === 'home' ? 'active' : ''; ?>">
                                        <?php echo ucfirst($key); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_post">
                            <h5>LATEST POSTS</h5>
                            <?php foreach ($posts as $post): ?>
                                <div class="post_box">
                                    <div class="img-box">
                                        <img src="<?php echo $post['image']; ?>" alt="">
                                    </div>
                                    <p><?php echo $post['title']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end info_section -->
    <?php
}
?>


<!-- footer section -->
<?php
function footer_section() {
    ?>
    
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQuery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.js"></script>
    <!-- Nice Select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- Owl Slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
    <?php
}
?>



           