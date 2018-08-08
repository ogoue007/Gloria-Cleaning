<?php
      $title = 'About Us';
      include 'templates/header.php';
      include 'templates/navigation.php';
?>

<div class="container pt-4">
  <div class="row">
    <div class="col-12 hero">
      <img src="img/about_us_02.jpg" class="img-fluid" />
      <h2 class="text-uppercase d-none d-md-block">About Us</h2>
    </div>
  </div>
</div>

<div class="container pt-4 pr-0">
  <div class="row">
    <main class="col-lg-8 main-content">
      <h2 class="d-block pb-3 pt-2 d-md-none text-uppercase text-center">About Us</h2>
      <p>
        <span class="text-uppercase glotiaStyle">Gloria Cleaining NY</span> offers a comprehensive eco-friendly professional apartment cleaning services in NYC.
        Just some of the ways we will make your apartment spotless include the following.
        We offer a comprehensive apartment cleaning services and can find the perfect cleaning schedule for you.
      </p>
      <p>
        Care of your house, furniture, and items like it's our own!
        Use quality cleaning tools and supplies of our own (vacuum cleaners, mops, etc.)
        Clean out major as well the smallest parts of a room. No "only surface" cleaning when it comes to Perfection!
        Cater to loyal/regular clients with discounts.
        Provide full customer service through various communication mediums.
        Only professional cleaners will be entering your home.
        Work by your requirements and special instructions. (Don't want that heirloom vase touched? No problem!)
        Cleaning services that will leave a smile on your face. :)
      </p>
      <p>
        Like what we offer? <span class="callUs"> Call Us at (934) - 444 - 5557</span> or you can easily book Maid Complete cleaning services based on the size of your home, hourly rate,
        or with add-ons, and make bookings online! Of course, you can also feel free to contact us, the information is present in the Contact Us tab.
        So go book our service online now and say hello to a beautiful, professionally cleaned home!
      </p>

      <div class="facilities-gallery no-gutters">

        <h3 class="text-center text-uppercase p-4"><span class="text-lowercase">checkout Our </span>Facilities</h3>

        <a class="about-picss-tyling" href="#" data-target="#image_1" data-toggle="modal">
          <img src="img/gallery_thumb_01.jpg" class="rounded" />
        </a>

        <a class="about-picss-tyling" href="#" data-target="#image_2" data-toggle="modal">
          <img src="img/gallery_thumb_02.jpg" class="rounded" />
        </a>

        <a class="about-picss-tyling" href="#" data-target="#image_3" data-toggle="modal">
          <img src="img/gallery_thumb_03.jpg" class="rounded" />
        </a>

        <div class="modal fade" id="image_1" tabindex="-1" role="dialog" aria-labelledby="image_1" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/gallery_large_01.jpg" class="img-fluid" />
              </div>
            </div><!--end-of-modal-content-->
          </div><!--end-of-modal-dialog-->
        </div><!--end-of-modal fade-->

        <div class="modal fade" id="image_2" tabindex="-1" role="dialog" aria-labelledby="image_2" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/gallery_large_02.jpg" class="img-fluid" />
              </div>
            </div><!--end-of-modal-content-->
          </div><!--end-of-modal-dialog-->
        </div><!--end-of-modal fade-->

        <div class="modal fade" id="image_3" tabindex="-1" role="dialog" aria-labelledby="image_3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/gallery_large_03.jpg" class="img-fluid" />
              </div>
            </div><!--end-of-modal-content-->
          </div><!--end-of-modal-dialog-->
        </div><!--end-of-modal fade-->

      </div><!--end-of-facilities-gallery-->

    </main>

    <aside class="col-lg-4 pt-4 pt-lg-0">
      <div class="sidebar hours p-3">
        <?php include 'templates/business_hours.php'; ?>
      </div>
    </aside>
  </div>
</div>

<?php
    include 'templates/footer.php';
?>
