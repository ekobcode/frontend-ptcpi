<?php 
require_once "view/navbar.php";
?>
  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li><a href="blog.html">Galeri</a></li>
        </ol>
       
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">
            <div class="section-title">
              <h2 data-aos="fade-up">Galeri</h2>
              <p  data-aos="fade-up">Hasil-hasil demplot maupun kebun percobaan.</p>
            </div>

             <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"> <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"> <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"> <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></i></a>
                </div>
              </div>
            </div>
            

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">
              <h3 class="sidebar-title">Galeri</h3>
              <div class="sidebar-item categories">
                <ul>
                  <hr>
                  <li><a href="depot-jawabarat.php">Depot Padi Jawa Barat</a></li>
                  <hr>
                  <li><a href="#">Depot Timun Sukabumi</a></li>
                  <hr>
                  <li><a href="#">Proyek Hydrosering</a></li>
                  <hr>
                </ul>

              </div><!-- End sidebar categories-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <?php 
require_once "view/footer.php";
?>