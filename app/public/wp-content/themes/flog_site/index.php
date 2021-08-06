<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>キレイな色のカエルずかん</title>

    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <img src="img/kaeru_site_logo.jpg" class="img-fluid" alt="...">
        <div class="container" id="global-navi" >
            <div class="box"><a href="#"><img src="img/menu_top.jpg" class="img-fluid" alt="..."></a></div>
            <div class="box"><a href="#"><img src="img/menu_zukan.jpg" class="img-fluid" alt="..."></a></div>
            <div class="box"><a href="#"><img src="img/menu_sakusya.jpg" class="img-fluid" alt="..."></a></div>
            <div class="box"><a href="#"><img src="img/menu_contact.jpg" class="img-fluid" alt="..."></a></div>
        </div>
      </div>

      <!--Carousel-->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/aizome_yadoku.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="img/akame.jpg" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="img/ichigo_yadoku.jpg" class="d-block w-100" alt="">
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
      <div id="new-articles"><img src="img/new_articles.jpg" class="img-fluid" alt="..."></div>

      <!--main-feature-->
      <div id="main-feature">
        <h2>〜キレイな色のカエルの魅力〜</h2>
        <p class="">これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。これはテストです。</p>
      </div>

      <!--Ranking-->
      <div id="ranking"><img src="img/ranking.jpg" class="img-fluid" alt="..."></div>

      <!--Footer-->
      <div id="footer">
        <ul id="footer-container">
          <li><a href="#">TOP</a></li>
          <li><a href="#">ずかん</a></li>
          <li><a href="#">さくしゃ</a></li>
          <li><a href="#">おといあわせ</a></li>
        </ul>
        <p class="copyright text-muted">Copyright &copy; Taichi Kobayashi 2021</p>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>