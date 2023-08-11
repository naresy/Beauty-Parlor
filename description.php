<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    
    <title>Sandy's Threading | About us Page</title>

    <!-- Template CSS -->
   <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:300,500,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/logo1.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">



    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="assets/images/logo1.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300i,400,400i,700%7CMontserrat:400,500,600,700%7CPlayfair+Display:400,700,700i%7COswald:400,700,700i">
    <link rel="stylesheet" href="new_asset/css/bootstrap.css">
    <link rel="stylesheet" href="new_asset/css/fonts.css">
    <link rel="stylesheet" href="new_asset/css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
    .text_div {
  text-align: justify;
  text-justify: inter-word;
  margin-left: 10px;
  margin-right: 10px;
  font-size: 14px;
}
  </style>
  </head>
  <body id="home">
<?php include_once('includes/header.php');?>





<section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 align-items-lg-center justify-content-xl-between">
            <div class="col-lg-6">
              <div class="block-xs">
                <h4 class="heading-decorate">Decription of <br><span class="divider"></span>Henna Design
                </h4>
                <p class="big text-gray-800 text_div">Henna tattoos, also known as Mehndi, are an ancient form of temporary body art crafted using natural henna paste derived from the leaves of the henna plant. These intricate and elaborate designs, featuring floral patterns, geometric shapes, and ornamental motifs, are meticulously applied to the skin by skilled artists using cones or brushes. The henna's warm reddish-brown hues create an enchanting allure, making it a beloved adornment for weddings, festivals, and special occasions across various cultures in South Asia, the Middle East, and Africa. Embrace the allure of henna tattoos and experience the joy of exploring different designs without a long-term commitment, as they gracefully fade over one to three weeks. They are appreciated for their beauty, cultural significance, and the fact that they are temporary, allowing people to try different designs without a long-term commitment.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-images-classic">
                <div class="row row-30">
                  <div class="col-6">
                    <div class="box-image-item" data-parallax-scroll="{&quot;y&quot;: 0, &quot;x&quot;: -20,  &quot;smoothness&quot;: 30 }"><img src="images/henna1.jpg" alt="" width="270" height="458"/>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="box-image-item" data-parallax-scroll="{&quot;y&quot;: 0, &quot;x&quot;: 20,  &quot;smoothness&quot;: 30 }"><img src="images/henna2.jpeg" alt="" width="270" height="458"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php include_once('includes/footer.php');?>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
 <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>

<!-- /move top -->
</body>

</html>