<?php
include('./header.php');
include('./menu.php');
?>
<!-- Hero -->
<section class="py-4 py-md-5" style="padding: 0px !important;min-width:99%;" >
  <div class="container" style="margin: 0px; min-width:100%;padding: 0px !important;">
    <div class="row" style="margin: 0px; min-width:100%;padding: 0px !important;">
      <div class="col-12" style="margin: 0px; min-width:100%;padding: 0px !important;">
        <div class="container-fluid bsb-hero-6 bsb-overlay border border-dark" style="--bsb-overlay-opacity: 0.5; --bsb-overlay-bg-color: var(--bs-light-rgb); background-image: url('./assets/0C7A1207.jpg'); max-height:562px !important;">
          <div class="row justify-content-md-center" style="padding-top: 10%">
            <div class="col-12 col-md-11 col-xl-10">
              <h2 class="display-1 text-center text-md-start text-shadow-head fw-bold mb-4">Welcome to Jusst4You</h2>
              <p class="lead text-center text-md-start text-shadow-body mb-5 d-flex justify-content-sm-center justify-content-md-start">
                <span class="col-12 col-sm-10 col-md-8 col-xxl-7">Where every squeak, every rattle, and every wobble finds its solution, ensuring your ride is always smooth and worry-free.</span>
              </p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center justify-content-md-start">
                <a href="#!" class="btn bsb-btn-2xl btn-outline-dark">Explore More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<h1>who we are?</h1>
<?php
include('./services.php');
include('./about-us.php');
include('./testimonals.php');
include('./our_team.php');
include('./gallery.php');
?>

<!-- Call To Action 2 -->
<section class="bsb-cta-1 py-5">
    <div class="container">
        <div class="card border-0 rounded-3 overflow-hidden text-center bsb-overlay" style="background-image: url('./assets/0C7A7217-Pano.jpg'); --bsb-overlay-opacity: .4; --bsb-overlay-bg-color:var(--bs-primary-rgb);">
            <div class="card-body">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-10 col-xl-8 col-xxl-7">
                        <h2 class="h5 mb-4 text-white text-uppercase">Our Services & Expertise</h2>
                        <h2 class="display-4 text-white mb-5">We are a design agency studio delivering custom creative & unique websites.</h2>
                        <a href="#!" class="btn btn-light bsb-btn-3xl rounded mb-0 text-nowrap">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('./footer.php');
?>