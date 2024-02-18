<html lang="en" ng-app='calendarApp' ng-cloak='true'>
<?php require_once('../../private/initialize.php'); ?>

<head>
    <meta charset="utf-8">
    <title>Lluniau / Pictures</title>
    <link href="Home.css" rel="stylesheet">
    <link href="Pictures.css" rel="stylesheet">
  </head>


  <?php include(SHARED_PATH . '/public_navigation.php'); ?>
    <div id="wrapper">
    <div class="full-img" id="fullImgBox">
      <img src="SaithSerenPictures/img1.jpg" id="fullImg">
      <span onclick="closeFullImg()">X</span>
    </div>
    <section>
    <div class="img-grid">
      <img src="SaithSerenPictures/img1.jfif" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img2.jfif" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img3.jfif" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img4.jfif" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img5.jfif" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img6.PNG" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img7.jpeg" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img8.jpg" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img9.jpg" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img10.PNG" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img11.JPG" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img12.jpg" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img13.jpg" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img14.jpg" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img15.PNG" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img16.jpeg" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img17.jpg" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img18.jpg" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img19.jpg" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img20.jpg" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img21.JPG" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img22.jpg" width="200" height="200" onclick="openFullImg(this.src)">
      <img src="SaithSerenPictures/img23.jpg" width="200" height="200" onclick="openFullImg(this.src)"> 
    </div>
    </section>
    <script>
      var fullImgBox = document.getElementById("fullImgBox");
      var fullImg = document.getElementById("fullImg");
      function openFullImg(pic)
      {
        fullImgBox.style.display = "flex";
        fullImg.src = pic;
      }
      function closeFullImg()
      {
        fullImgBox.style.display = "none";
      }
      </script>
      </div>
    <!--Copyright-->
    <footer>
      Copyright &copy; 2022 Thomas Fernex, Agnès R. Gauthier & Guillaume Mathieu
    </footer>
  </body>
</html>