<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {

    $uid=$_SESSION['bpmsuid'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $msg=$_POST['message'];
    $services=$_POST['services'];
    $staff=$_POST['staff'];
    $aptnumber = mt_rand(100000000, 999999999);
  
    $query=mysqli_query($con,"insert into tblbook(UserID,AptNumber,AptDate,AptTime,Message,Servicename,staff) value('$uid','$aptnumber','$adate','$atime','$msg','$services','$staff')");

    if ($query) {
         $email = "nareshupadhayay74@gmail.com";
            $subject = "New Appointment";
            $message = "Hello Sandy's Threading,\n\n You have new threading Appointment.\n\nService: $services:\n\nDate:$adate\n\n Time:$atime ";
            $from = "Sandy Threading";
            $headers = "From:" . $from;

            mail($email,$subject,$message,$headers);
$ret=mysqli_query($con,"select AptNumber from tblbook where tblbook.UserID='$uid' order by ID desc limit 1;");
$result=mysqli_fetch_array($ret);
$_SESSION['aptno']=$result['AptNumber'];
 
           
         echo "<script>window.location.href='thank-you.php'</script>";  

  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
?>
<!doctype html>
<html lang="en">
  <head>
 

    <title>Sandy's Threading</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
     <link rel="icon" href="assets/images/logo1.ico" type="image/x-icon">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- <style>
        .profile-pic {
    width: 80px;
    height: 80px;
  display: inline;
  margin: 0 auto;
  margin-left: -25%; //centers the image;
  width: 100%;
}
    </style> -->
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

<div class="breadcrumbs-sub">
<div class="container">   
<ul class="breadcrumbs-custom-path">
    <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
    <li class="active ">
        Book Appointment</li>
        <p>Ready to experience the benefits of professional threading and henna tattoo art? Schedule your appointment at Sandy’s Threading today. Our friendly staff is ready to assist you in selecting the right service and time slot that suits your convenience. Get ready to reveal your best self with our top-notch threading services and henna tattoo art services.
</p>
</ul>
</div>
</div>
    </div>
</section>
<!-- breadcrumbs //-->
<section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	">
        <div class="container">

            <div class="d-grid contact-view">
                <div class="cont-details">
                    <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Call Us</h6>
                            <p class="para"><a href="tel:(909)712-2101">+<?php  echo $row['MobileNumber'];?></a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Email Us</h6>
                            <p class="para"><a href="sandythreadingredlands@gmail.com" class="mail"><?php  echo $row['Email'];?></a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Address</h6>
                            <p class="para"> <?php  echo $row['PageDescription'];?></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Time</h6>
                            <p class="para"> <?php  echo $row['Timing'];?></p>
                        </div>
                    </div>
               <?php } ?> </div>
                <div class="map-content-9 mt-lg-0 mt-4">
                    <form method="post">


                     <div class="col-md-6">
                                        <label class="control-label" for="Subject">Services</label>
                                        <select name="services" id="services" required="true" class="form-control">
                                <option value="">Select Services</option>
                                <?php $query=mysqli_query($con,"select * from tblservices");
              while($row=mysqli_fetch_array($query))
              {
              ?>
                               <option value="<?php echo $row['ServiceName'];?>"><?php echo $row['ServiceName'];?></option>
                               <?php } ?> 
                              </select>
                                    </div>


<!-- staff -->
<div class="map-content-9 mt-lg-0 mt-4">
                   


                     <div class="col-md-6">
                                        <label class="control-label" for="Subject">Services</label>
                                        <select name="staff" id="staff" required="true" class="form-control">
                                <option value="">Select Staff</option>
                                <?php $query=mysqli_query($con,"select * from tblstaff");
              while($row=mysqli_fetch_array($query))
              {
              ?>
                               <option value="<?php echo $row['fullname'];?>"><?php echo $row['fullname'];?></option>
                               <?php } ?> 
                              </select>
                                    </div>




                        <div style="padding-top: 30px;">
                            <label>Appointment Date</label>
                            
                            <input type="date" class="form-control appointment_date" placeholder="Date" name="adate" id='adate' required="true"></div>
                        <div style="padding-top: 30px;">
                            <label>Appointment Time</label>
                            
                            <input type="time" class="form-control appointment_time" placeholder="Time" name="atime" id='atime' required="true"></div>

                    



                     




                        <div style="padding-top: 30px;">
                        <textarea class="form-control" id="message" name="message" placeholder="Message" required=""></textarea></div>
                        <button type="submit" class="btn btn-contact" name="submit">Make an Appointmen</button>
                    </form>
                </div>
    </div>
   
    </div></div>
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
$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    $('#adate').attr('min', maxDate);
});</script>
<!-- /move top -->
</body>

</html><?php } ?>