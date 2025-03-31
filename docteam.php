<?php include 'config.php'; ?>

<!-- team section -->
<section class="team_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Our <span>Doctors</span>
      </h2>
    </div>
    <div class="carousel-wrap">
      <div class="owl-carousel team_carousel">
        <?php foreach ($doctors as $doctor): ?>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/<?php echo $doctor['image']; ?>" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  <?php echo $doctor['name']; ?>
                </h5>
                <h6>
                  <?php echo $doctor['degree']; ?>
                </h6>
                <div class="social_box">
                  <a href="<?php echo $doctor['social_links']['facebook']; ?>">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="<?php echo $doctor['social_links']['twitter']; ?>">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="<?php echo $doctor['social_links']['linkedin']; ?>">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="<?php echo $doctor['social_links']['instagram']; ?>">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<!-- end team section -->
