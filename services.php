
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
  ?>
<!doctype html>
<html lang="en">
  <head>
    

    <title>Sandy's Threading| service Page </title>

    <!-- Template CSS -->
   <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
     
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="assets/images/logo1.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    
     <style>

        .text_div {
  text-align: justify;
  text-justify: inter-word;
  margin-left: 10px;
  margin-right: 10px;
}
        .circular_image {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  align:center;
  overflow: hidden;
  background-color: blue;
  /* commented for demo
  float: left;
  margin-left: 125px;
  margin-top: 20px;
  */
  
  /*for demo*/
  display:inline-block;
  vertical-align:middle;
}
.circular_image img{
  width:100%;
}
        }

/* for card view        */
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;

}
.book_button {
  background-color: #FFA500; /* Green */
  border: none;
  color: white;
  padding: 15px;

  text-align: center;
  text-decoration: none;
  margin-bottom: 10px;
  font-size: 12px;
 
  cursor: pointer;
}


.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 12px;}
.button5 {border-radius: 50%;}


.image-cropper {
    width: 100px;
    height: 100px;
    position: relative;
    overflow: hidden;
    border-radius: 50%;
}
/*.profile-pic {
    width: 80px;
    height: 80px;
  display: inline;
  margin: 0 auto;
  margin-left: -25%; //centers the image;
  width: 100%;
}*/
</style>
    </style>
  </head>
  <body id="home">
<?php include_once('includes/header.php');?>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<!-- breadcrumbs -->
<section class="w3l-inner-banner-main">
</div>
</div>
<div class="breadcrumbs-sub">
<div class="container">   
<ul class="breadcrumbs-custom-path">
    <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
    <li class="active ">Services</li>
</ul>
</div>
</div>
    </div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-recent-work-hobbies" > 
    <div class="recent-work ">
        <div class="container">
            <div class="row about-about">
                <?php
                

$ret=mysqli_query($con,"select * from  tblservices");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <div class="col-lg-4 col-md-6 col-sm-6 propClone">
                    <div class="card" >
                        
                 <img src="admin/images/<?php echo $row['Image']?>" alt="product" height="200" width="400">
                    <div class="about-grids ">
                        <div class="text_div">

                        <hr>
                        <h5 class="para center" style="color:red;font-size: 16px";><?php  echo $row['ServiceName'];?></h5>
                        <p class="para text_div" style="color:black; font-size:15px"><?php  echo $row['ServiceDescription'];?> </p>
                        <p class="para center " style="color: darkred;"> Cost of Service: $<?php  echo $row['Cost'];?> </p>
                        <button class="book_button button4 center"  href="book-appointment.php">Book Now</p>
                           
                    </div>
                    </div>
                    </div>
                </div>
                <br><?php 
$cnt=$cnt+1;
}?>
            
            </div>
        </div>
    </div>
</section>


<?php include_once('includes/footer.php');?>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->
</body>

</html>