<?php
/**
 * Template Name: Home Page
 */

// custom fields
$slider_2_label    = get_post_meta(15, 'slider_2_label', true);
$slider_2_description    = get_post_meta(15, 'slider_2_description', true);
$slider_3_label    = get_post_meta(15, 'slider_3_label', true);
$slider_3_description    = get_post_meta(15, 'slider_3_description', true);
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
      <div class="carousel-bg d-block w-100" style="position: relative; background-image: url('https://s3.amazonaws.com/StartupStockPhotos/uploads/13.jpg')"></div>
      <div style="background: #00000070; z-index: 99; position: absolute; width: 100%; top:0; height: 400px">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php bloginfo('name');?></h5>
          <p><?php bloginfo('description');?>, Show what I can do with WordPress</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-bg d-block w-100" style="position: relative; background-image: url('<?php bloginfo('stylesheet_directory');?>/assets/img/29.jpg')"></div>
      <div style="background: #00000030; z-index: 99; position: absolute; width: 100%; top:0; height: 400px">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $slider_2_label?></h5>
          <p><?php echo $slider_2_description?></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-bg d-block w-100" style="position: relative; background-image: url('<?php bloginfo('stylesheet_directory');?>/assets/img/26.jpg')"></div>
      <div style="background: #00000040; z-index: 99; position: absolute; width: 100%; top:0; height: 400px">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $slider_3_label?></h5>
          <p><?php echo $slider_3_description?></p>
        </div>
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
