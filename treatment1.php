<?php include 'config.php'; ?>

<!-- treatment section -->
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
      <?php foreach ($treatments as $treatment): ?>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/<?php echo $treatment['image']; ?>" alt="">
            </div>
            <div class="detail-box">
              <h4>
                <?php echo $treatment['name']; ?>
              </h4>
              <p>
                <?php echo $treatment['description']; ?>
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- end treatment section -->
