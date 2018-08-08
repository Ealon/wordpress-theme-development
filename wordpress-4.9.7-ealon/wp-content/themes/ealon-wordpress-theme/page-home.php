<?php
/**
 * Template Name: Home Page
 */
get_header();
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/26.jpg" alt="First slide">
			<div class="carousel-caption d-none d-md-block">
				<h5>First slide label</h5>
				<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/03.jpg" alt="Second slide">
			<div class="carousel-caption d-none d-md-block">
				<h5>2nd Slide Title</h5>
				<p>This is the 2nd one</p>
			</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory');?>/assets/img/29.jpg" alt="Third slide">
			<div class="carousel-caption d-none d-md-block">
				<h5>3rd Slide label</h5>
				<p>Here comes the 3rd!</p>
			</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php
get_footer();
