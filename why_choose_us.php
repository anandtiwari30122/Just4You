<style>
  .image-container {
    position: relative;
    width: 375px;
    /* Adjust as needed */
    height: 250px;
    margin-left: 10%;
  }

  .image-container img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    /* Adjust size */
    height: 100%;
  }

  .image-container img:nth-child(3) {
    opacity: 0.8;
    /* Adjust transparency */
    z-index: 2;
    /* Ensure it is above the first image */
  }
  @keyframes bounce {
    0% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0); }
}

#why_img2, #why_img3 {
    animation: bounce 0.8s ease-in-out infinite alternate;
}

  #why_img2 {
    margin-left: 90%;
    margin-top: 40%;
    width: 50%;
    /* Adjust size */
    height: 50%;
  }

  #why_img1 {
    margin-left: 20% !important;
    margin-top: 20%;
  }

  #why_img3 {
    margin-right: 90%;
    margin-top: 40%;
    width: 50%;
    /* Adjust size */
    height: 50%;
  }


  @media (max-width: 767px) {
    .image-container {
      display: none;
    }
  }
</style>
<!-- why choose us -->
<section class="py-3 py-md-5">
  <div class="container" style="margin: 0;">
    <div class="row gy-3 gy-md-4 gy-lg-0 " style="min-width: 100vw;">
      <div class="col-12 col-lg-6">
        <!-- <img class="img-fluid rounded" loading="lazy" src="./assets/0C7A9097.jpg" alt="About 2"> -->
        <div class="image-container">
          <img src="./assets/0C7A1205.jpg" alt="First Image" id="why_img1">
          <img src="./assets/0C7A1208.jpg" alt="Second Image" id="why_img2">
          <img src="./assets/0C7A1208.jpg" alt="Second Image" id="why_img3">
        </div>

      </div>
      <div class="col-12 col-lg-6">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-10">
            <h2 class="mb-3" style="text-align:center;">Why Choose Us?</h2>
            <p class="lead fs-4 mb-3 mb-xl-5">With years of experience and deep industry knowledge, we have a proven track record of success and are constantly pushing ourselves to stay ahead of the curve.</p>
            <div class="d-flex align-items-center mb-3">
              <div class="me-3 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
              </div>
              <div>
                <p class="fs-5 m-0">Our evolution procedure is super intelligent.</p>
              </div>
            </div>
            <div class="d-flex align-items-center mb-3">
              <div class="me-3 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
              </div>
              <div>
                <p class="fs-5 m-0">We deliver services beyond expectations.</p>
              </div>
            </div>
            <div class="d-flex align-items-center mb-4 mb-xl-5">
              <div class="me-3 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
              </div>
              <div>
                <p class="fs-5 m-0">Let's hire us to reach your objectives.</p>
              </div>
            </div>
            <button type="button" class="btn bsb-btn-xl btn-outline-primary rounded-pill" style="margin-left:30%;">Connect Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
