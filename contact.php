<?php 
require_once "view/navbar.php";
?>



  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Kontak</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

     <!-- ======= Contact Section ======= -->
     <section id="contact hero" class="contact">
        <div class="container">
  
          <div class="section-title">
            <h2 data-aos="fade-up">Kontak</h2>
            <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row justify-content-center">
  
            <div class="col-xl-4 col-lg-4 mt-4" data-aos="fade-up">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Alamat</h3>
                <p>Treasury Tower Lt.7 Unit F District 8, Jakarta Selatan 12190</p>
              </div>
            </div>
  
            <div class="col-xl-4 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
              <div class="info-box">
                <i class="bx bx-envelope"></i>
                <h3>Email</h3>
                <p>info@cahayaintanprima.co.id<br>
                <p>contact@cahayaintanprima.co.id</p>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
              <div class="info-box">
                <i class="bx bx-phone-call"></i>
                <h3>Telpon</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
          </div>
  
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
            <div class="col-xl-9 col-lg-12 mt-4">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->

  </main><!-- End #main -->

    


  <!-- ======= Footer ======= -->
  <?php 
require_once "view/footer.php";
?>