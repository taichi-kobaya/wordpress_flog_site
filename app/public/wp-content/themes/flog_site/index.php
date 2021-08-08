<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body>
  <div id="wrapper">
    <?php get_template_part('includes/header'); ?>

    <!--Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="http://wordpressflogsite.local/wp-content/themes/flog_site/img/aizome_yadoku.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="http://wordpressflogsite.local/wp-content/themes/flog_site/img/akame.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="http://wordpressflogsite.local/wp-content/themes/flog_site/img/ichigo_yadoku.jpg" class="d-block w-100" alt="">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>

    <!--新着記事-->
    <div id="new-articles"><img src="http://wordpressflogsite.local/wp-content/themes/flog_site/img/new_articles.jpg" class="img-fluid" alt="..."></div>

    <!--main-feature-->
    <div id="main-feature">
      <h2>〜キレイな色のカエルの魅力〜</h2>
      <p class="">これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。</p>
    </div>

    <!--Ranking-->
    <div id="ranking"><img src="http://wordpressflogsite.local/wp-content/themes/flog_site/img/ranking.jpg" class="img-fluid" alt="..."></div>
  </div>

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>