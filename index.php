<?php
      $title = 'Home';
      include 'templates/header.php';
      include 'templates/navigation.php';
?>


    <div class="container">
      <div id="main-slider" class="carousel slide mt-5" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#main-slider" data-slide-to="0" class="active"></li>
          <li data-target="#main-slider" data-slide-to="1"></li>
          <li data-target="#main-slider" data-slide-to="2"></li>
        </ol><!--end-of-carousel-indicator-->

        <div class="carousel-inner img-fluid" role="listbox">
          <div class="carousel-item active">
            <img src="img/slide_04.jpg" class="d-block img-fluid" alt="our facilities" />
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-uppercase">Contact us now for a free estimate.</h3>
            </div>
          </div><!--end-of-carousel-item-->

          <div class="carousel-item">
            <img src="img/slide_05.jpg" class="d-block img-fluid" alt="our facilities" />
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-uppercase">Call US (934) - 444 - 5557</h3>
            </div>
          </div><!--end-of-carousel-item-->

          <div class="carousel-item">
            <img src="img/slide_03.jpg" class="d-block img-fluid" alt="our facilities" />
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-uppercase">Learn About Our Services</h3>
            </div>
          </div><!--end-of-carousel-item-->

        </div><!--end-of-carousel-inner-->

        <a href="#main-slider" class="carousel-control-prev" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a href="#main-slider" class="carousel-control-next" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div><!--end-of-main-slider-carousel-->
    </div>

    <section class="new-website py-5">
      <h2 class="text-center text-uppercase"><span class="text-lowercase text-reduced">Welcome To </span><span class=" no-style mt-4"> Gloria Cleaning Ny</span></h2>
      <p class="text-center mt-4">We create tranquil spaces with chemical-free cleaning products.</p>
    </section>

    <div class="container pb-5 pr-0">
      <div class="row">

        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <div class="image-links">
            <img class="img-fluid" src="img/service_01.jpg" />
            <div class="row no-gutters">
              <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                <h3 class="text-center text-uppercase"><span class="text-lowercase">learn more</span> About Us</h3>
                <a href="about.php" class="btn btn-success text-uppercase btn-block mt-4 py-3">Read more</a>
              </div>
            </div>
          </div>
        </div><!--end-of-md4-column-->
        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <div class="image-links">
            <img class="img-fluid" src="img/service_04.jpg" />
            <div class="row no-gutters">
              <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                <h3 class="text-center text-uppercase"><span class="text-lowercase">About Our</span> Services</h3>
                <a href="services.php" class="btn btn-success text-uppercase btn-block mt-4 py-3">Read more</a>
              </div>
            </div>
          </div>
        </div><!--end-of-md4-column-->
        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <div class="image-links">
            <img class="img-fluid" src="img/service_03.jpg" />
            <div class="row no-gutters">
              <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                <h3 class="text-center text-uppercase"><span class="text-lowercase">Visit Our</span> Products</h3>
                <a href="products.php" class="btn btn-success text-uppercase btn-block mt-4 py-3">Read more</a>
              </div>
            </div>
          </div>
        </div><!--end-of-md4-column-->

      </div>
    </div>

    <div class="business-hours">
      <div class="container pr-0">
        <div class="row">

          <div class="col-md-6 py-4">
             <?php include 'templates/business_hours.php'; ?>
          </div>

          <div class="col-md-6 bg-hours">


          </div>

        </div>
      </div>
    </div>

    <div class="container products py-5 pr-0">
      <h2 class="text-center text-uppercase"><span class="text-lowercase">checkout our</span><span class=" no-style mt-4 mb-4"> products</span></h2>

      <div class="row py-4">

        <?php
          try {
            require_once 'inc/db.php';
            $sql = 'SELECT `id`, `name`,`image_thumb`, `price`, `short_description` FROM `products` limit 3';
            $result = $db->query($sql);
          } catch (Exception $e) {
            $error = $e->getMessage();
          }

          $rows = $result->num_rows;

          if(!$rows) {
            echo "NO Result Was Found";
          }else {
            while($products = $result->fetch_assoc()) { ?>

              <div class="col-md-4 col-12 text-center mb-4 mb-lg-4  mb-md-4 mb-sm-0">
                <div class="card">
                  <a href="product.php?product=<?php echo $products['id']; ?>">
                    <img src="img/<?php echo $products['image_thumb']; ?>" class="card-img-top img-fluid" />
                    <div class="card-block">
                      <h3 class="card-title text-center text-uppercase mb-0"><?php echo $products['name']; ?></h3>
                      <p class="card-text text-center text-uppercase"><?php echo $products['short_description']; ?>.</p>
                      <p class="price text-center mb-0 pb-3">$ <?php echo $products['price']; ?></p>
                    </div>
                  </a>
                </div><!--end-of-card-->
              </div><!--end-of-col-6 col-md-3-->

              <?php

            }
          }

        ?>

        <?php
           $db->close();
         ?>

      </div><!--end-of-row py-4-->

    </div><!--end-of-container products py-5-->

    <?php
        include 'templates/appointment.php';
        include 'templates/footer.php';
    ?>
