<?php
include('./header.php');
?>

<!-- Hero Section -->
<header class="hero-section text-center text-white section-header">
    <video autoplay loop muted playsinline>
        <source src="./First draft - Hot air balloon proposal.mov" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <h1>Welcome to My Website</h1>
</header>

<!-- About Us -->
<section id="about" class="container my-5 text-center">

    <?php
    include('./about_us.php');
    ?>

</section>

<!-- Services Section -->
<?php
include('./services.php');
?>

<!-- gallery -->
<?php
include('./gallery.php');
?>
 

<!-- Inquiry Form -->

<?php
include('./contact.php');
?>
<!-- testionials -->

<?php
include('./testimonals.php');
?>

<?php
include('./faq.php');
?>

<?php
include('./footer.php');
?>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/jquery@3.6.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/isotope-packery@2.0.1/packery-mode.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/bs-brain@2.0.4/components/projects/project-1/assets/controller/project-1.js"></script>
<script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>