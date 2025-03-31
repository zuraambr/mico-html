<?php include 'config.php'; ?>

<!-- slider section -->
<section class="slider_section">
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
                    <span>
                      <?php echo $item['subtitle']; ?>
                    </span>
                  </h1>
                  <p>
                    <?php echo $item['description']; ?>
                  </p>
                  <a href="<?php echo $item['link']; ?>">
                    Contact Us
                  </a>
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
<!-- end slider section -->
