<?php
      $title = 'Services';
      include 'templates/header.php';
      include 'templates/navigation.php';
?>

<div class="container pt-4">
  <div class="row">
    <div class="col-12 hero">
      <img src="img/services_01.jpg" class="img-fluid" />
      <h2 class="text-uppercase d-none d-md-block">Services</h2>
    </div>
  </div>
</div>

<div class="container pt-4 pr-0">
  <div class="row">
    <main class="col-lg-8 main-content">

      <h2 class="d-block pb-3 pt-2 d-md-none text-uppercase text-center">Services</h2>

      <div id="services" role="tablist" aria-multiselectable="true">

        <div class="card">
          <div class="card-header py-2" role="tab" id="service_1">
            <h3 class="mb-0">
              <a data-toggle="collapse" data-parent="#services" href="#service_1desc" aria-expanded="true" aria-controls="service_1desc">Residential Cleaning</a>
            </h3>
          </div>

          <div id="service_1desc" class="collapse show" role="tabpanel" aria-labelledby="service_1">
            <div class="card-block p-3 text-center">
              Deep Cleaning: Generally for first time customers or those who have not had their house cleaned within the past month.
              Our residential cleaning services ensure that you return to a spotlessly clean home.
              We work around your schedule and honor any special requests to make your space immaculate.
            </div><!--end-of-card-block-->
          </div><!--end-of-service_1desc-->

        </div><!--end-of-card-->

        <div class="card pt-1">
          <div class="card-header py-2" role="tab" id="service_2">
            <h3 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#services" href="#service_2desc" aria-expanded="false" aria-controls="service_1desc">Commmercial Cleaning</a>
            </h3>
          </div>

          <div id="service_2desc" class="collapse" role="tabpanel" aria-labelledby="service_2">
            <div class="card-block p-3 text-center">
              We provide a consistently thorough and detailed cleaning of your office, which includes:
              All surfaces, vacuuming under furniture, moving furniture around to get to the hard to reach places,
              emptying trash receptacles, and cleaning restrooms. Attention to detail is important for us.
              We are conscientious of your need for a clean work space. We use low- impact products,
              always being cognizant of the environment without using harsh chemicals or strong scents.
            </div><!--end-of-card-block-->
          </div><!--end-of-service_1desc-->

        </div><!--end-of-card-->

        <div class="card pt-1">
          <div class="card-header py-2" role="tab" id="service_3">
            <h3 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#services" href="#service_3desc" aria-expanded="false" aria-controls="service_3desc">Home Organization</a>
            </h3>
          </div>

          <div id="service_3desc" class="collapse" role="tabpanel" aria-labelledby="service_3">
            <div class="card-block p-3">
              We all live busy, stressful lives, and organization is the key to making everything go more smoothly and feel calmer.
              As a professional organizer, I can help you identify areas where you would benefit from extra organization, and maximize your space.
            </div><!--end-of-card-block-->
          </div><!--end-of-service_1desc-->

        </div><!--end-of-card-->

      </div><!--end-of-services-->

    </main>

    <aside class="col-lg-4 pt-4 pt-lg-0 discount">

      <div class="p-3">
        <h3 class="text-center text-uppercase mt-4">First Time Customers</h3>
        <p class="lead text-center mt-4">Get 10% off in any service, with this coupon:</p>

        <div class="coupon p-1">
          <p class="text-center text-uppercase">
            <span class="display-4 pt-3">10% off</span> services
          </p>
        </div>

      </div>

    </aside>

  </div>
</div>

<?php
    include 'templates/appointment.php';
    include 'templates/footer.php';
?>
