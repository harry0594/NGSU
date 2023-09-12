<!DOCTYPE html>
<html lang="en">

<?php 
include("partials/head.php") 
?>

<body>

<?php 
include("partials/header.php")
?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Gallery Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li>Gallery Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Gallery Details Section ======= -->
    <section id="Gallery-details" class="Gallery-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="Gallery-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/Gallery/Gallery-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/Gallery/Gallery-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/Gallery/Gallery-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="Gallery-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Web design</li>
                <li><strong>Client</strong>: ASU Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
            <div class="Gallery-description">
              <h2>This is an example of Gallery detail</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Details Section -->

  </main><!-- End #main -->

  <?php 
  include("partials/footer.php")
  ?>


</body>

</html>