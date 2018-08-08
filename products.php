<?php
      $title = 'Products | Store';
      include 'templates/header.php';
      include 'templates/navigation.php';
?>

<div class="container pt-4 pr-0">
  <div class="row">
    <div class="col-12 hero">
      <img src="img/store.jpg" class="img-fluid" />
      <h2 class="text-uppercase d-none d-md-block">Products</h2>
    </div>
  </div>
</div>

<div class="container pt-4 pr-0">
  <div class="row">

    <main class="col-lg-12 main-content">

      <h2 class="d-block pb-3 pt-2 d-md-none text-uppercase text-center">Products</h2>

      <div class="row products py-4">

          <?php
            try {
              require_once 'inc/db.php';
              $sql = 'SELECT `id`, `name`,`image_thumb`, `price`, `short_description` FROM `products` limit 4';
              $result = $db->query($sql);
            } catch (Exception $e) {
              $error = $e->getMessage();
            }

            $rows = $result->num_rows;

            if(!$rows) {
              echo "NO Result Was Found";
            }else {
              while($products = $result->fetch_assoc()) { ?>

                <div class="col-md-6 col-lg-3 text-center mb-4 mb-md-4">
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

       </div><!--end-of-row-procucts-->


    </main>

  </div>
</div>

<?php
    include 'templates/footer.php';
?>
