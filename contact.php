<?php include("header.php") ?>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/event-6.jpg');" data-stellar-background-ratio="0.5">

      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

    
   <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>

          <!-- DRC Head Office -->
          <div class="col-md-3">
            <p><span>Address:</span> Avenue General Kasongo, Q. Dipeta, Commune Fungurume, DRC</p>
          </div>

          <!-- Zambia Branch Office -->
          <div class="col-md-3">
            <p><span>Address:</span> Plot 4144, Jambo Drive, Mufuchane Riverside, Kitwe, Copperbelt, Zambia</p>
          </div>

          <!-- Phones -->
          <div class="col-md-3">
            <p><span>Phones:</span>
              <a href="tel:+243976034725">+243 976 034 725</a> /
              <a href="tel:+260973899509">+260 973 899 509</a>
            </p>
          </div>

          <!-- Email & Website -->
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@pulsebyte.org">info@pulsebyte.org</a></p>
            <p><span>Website:</span> <a href="#">Under construction</a></p>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <h4 class="mb-4">Do you have any questions?</h4>
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>

          <!-- Map placeholder (can integrate Google Maps or custom map) -->
          <div class="col-md-6" id="map"></div>
        </div>
      </div>
    </section>

<?php include("footer.php") ?>