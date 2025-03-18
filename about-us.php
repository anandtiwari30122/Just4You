<style>
  .aboutimage-container {
    position: relative;
    width: 375px;
    /* Adjust as needed */
    height: 250px;
    /* margin-left: 10%; */
  }

  .aboutimage-container img {
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

  #about_img2 {
    margin-left: 90%;
    margin-top: 70%;
    width: 50%;
    /* Adjust size */
    height: 50%;
  }

  #about_img1 {
    margin-left: 20% !important;
    margin-top: 20%;
  }

  #about_img3 {
    /* margin-right: 90%; */
    margin-top: 70%;
    width: 50%;
    /* Adjust size */
    height: 50%;
  }

  #about_img4 {
    margin-left: 90%;
    /* margin-top: 10%; */
    width: 50%;
    height: 50%;
  }

  #about_img5 {
    /* margin-right: 90%; */
    /* margin-top: 10%; */
    width: 50%;
    height: 50%;
  }

  @keyframes fadeSlide {
    from {
      opacity: 0;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  #about_img2,
  #about_img3,
  #about_img4,
  #about_img5 {
    animation: fadeSlide 5s ease-in-out forwards infinite alternate;
  }

  #about_img2 {
    animation-delay: 0.5s;
    /* Delay for staggered effect */
  }

  #about_img3 {
    animation-delay: 1.5s;
  }

  #about_img4 {
    animation-delay: 2.5s;
  }

  #about_img5 {
    animation-delay: 3s;
  }

  /* @keyframes bounce {
    0% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0); }
}

#about_img2, #about_img3, #about_img4, #about_img5{
    animation: bounce 0.8s ease-in-out infinite alternate;
} */

  @media (max-width: 767px) {
    .aboutimage-container {
      display: none;
    }
  }

  .typing-container {
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
    font-size: 24px;
    font-weight: bold;
    animation: typing 6s steps(12, end) forwards;
  }

  @keyframes typing {
    from {
      width: 0;
    }

    to {
      width: 100%;
    }
  }

  .about_mobile {
    display: none;
    /* Hide by default */
    opacity: 0;
  }

  @media screen and (max-width: 768px) {
    .about_mobile {
      display: block;
      /* Show only on mobile screens */
      animation: slideIn 1s ease-in-out forwards;
    }
  }

  @keyframes slideIn {
    from {
      transform: translateX(-100%);
      /* Start off-screen */
      opacity: 0;
    }

    to {
      transform: translateX(0);
      /* Move to original position */
      opacity: 1;
    }
  }
</style>
<!-- About 1  -->
<div class="about_mobile"><img src="./assets/0C7A1208.jpg" alt="" width="80%;" height="20%; margin-left:10%; margin-top:20px"></div>

<section class="py-3 py-md-5" style="width: 98vw; padding:0px;">
  <div class="container" style="margin: 0; min-width:90%;">
    <div class="row gy-3 gy-md-4 gy-lg-12 ">
      <div class="col-12 col-lg-6 col-xl-6" style="margin-left: 3%;">
        <div class="aboutimage-container">
          <img src="./assets/0C7A1205.jpg" alt="First Image" id="about_img1">
          <img src="./assets/0C7A1208.jpg" alt="Second Image" id="about_img2">
          <img src="./assets/0C7A1208.jpg" alt="Second Image" id="about_img3">
          <img src="./assets/0C7A1208.jpg" alt="Second Image" id="about_img4">
          <img src="./assets/0C7A1208.jpg" alt="Second Image" id="about_img5">
        </div>

        <!-- <img class="img-fluid rounded" loading="lazy" src="./assets/0C7A1207.jpg" alt="About 1"> -->
      </div>
      <div class="col-12 col-lg-6 col-xl-5">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <!-- <h2 class="mb-3" >Who Are We?</h2> -->
            <h2 class="mb-3">
              <span class="typing-container">Who Are We?</span>
            </h2>

            <p class="lead fs-4 text-secondary mb-3 ">We help people to build incredible brands and superior products. Our perspective is to furnish outstanding captivating services.</p>
            <p class="mb-5">We are a fast-growing company, but we have never lost sight of our core values. We believe in collaboration, innovation, and customer satisfaction. We are always looking for new ways to improve our products and services.</p>
            <div class="row gy-4 gy-md-0 gx-xxl-5X">
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                    </svg>
                  </div>
                  <div>
                    <h2 class="h4 mb-3">Versatile Brand</h2>
                    <p class="text-secondary mb-0">We are crafting a digital method that subsists life across all mediums.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                      <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                    </svg>
                  </div>
                  <div>
                    <h2 class="h4 mb-3">Digital Agency</h2>
                    <p class="text-secondary mb-0">We believe in innovation by merging primary with elaborate ideas.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>