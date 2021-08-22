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
      <p class="main-feature">カエルなんて嫌い、気持ち悪い…と言う人も世の中にはいますが、</p>
      <p class="main-feature">私は色鮮やかで美しいカエルたちを見ていると心が和みます。</p>
      <p class="main-feature">人工的に着色、彩色された美しさではなく、自然が育んだ天然の色彩の美しさ。</p>
      <p class="main-feature">先入観やこだわりを捨てて彼らの姿を見てみると、自然ってすごい！と思いませんか？</p>
      <p class="main-feature">また、キレイなバラには棘がある…ではないですが、キレイな色のカエルたちには毒を持つものも多いです。</p>
      <p class="main-feature">彼らはその鮮やかな色彩で捕食者たちに警告しているのです。</p>
      <p class="main-feature">一見するとか弱そうなその体にゾウをも倒す猛毒を持つそのギャップ。</p>
      <p class="main-feature">まるで華奢な体で大男をバンバン投げる柔ちゃんみたいですね。</p>
      <p class="main-feature">さあ、キレイな色のカエルたちの魅力を存分に味わってください。</p>
    </div>

    <!--Ranking-->
    <div id="ranking"><img src="http://wordpressflogsite.local/wp-content/themes/flog_site/img/ranking.jpg" class="img-fluid" alt="..."></div>
  </div>

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>