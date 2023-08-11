 <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['inquery']))
  {
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $query=mysqli_query($con, "insert into tblcontact(Fullname,Subject,Email,Message) value('$name','$subject','$email','$message')");
    if ($query) {
    	 $subject = "Sandy's Threading";
           $message_value = "Hello \nSandy's Threading,Customer send you message\n Name: $name\nEmail:$email\nMessage: $message\n";
            $from = "Sandy";
            $headers = "From:" . $from;

            mail($to,$subject,$message_value,$headers);
   echo "<script>alert('Your message was sent successfully!.');</script>";
echo "<script>window.location.href ='contact.php'</script>";
  }
  else
    {
       
    }

  
}
?>
<!doctype html>
<html lang="en">
  <head>
 

    <title>Sandy's Threading | Contact us Page</title>

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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
<!-- <style>.profile-pic {
    width: 80px;
    height: 80px;
  display: inline;
  margin: 0 auto;
  margin-left: -25%; //centers the image;
  width: 100%;
}</style> -->
  </head>
  <body>
<?php include_once('includes/header.php');?>
<body>
	<section class="ftco-section" margin_top="10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Contact US</h2>
                    
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Contact Us</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="post">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label  for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label  for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label  for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" required=""></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit"  id="inquery" name="inquery" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.756223903579!2d-117.18451852528824!3d34.07576287314815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcab465079a2e7%3A0xa3d66caaa42dd252!2sSandy%E2%80%99s%20Threading!5e0!3m2!1sen!2sus!4v1690997820252!5m2!1sen!2sus" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			          </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-map-marker"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Address:</span>1548 Orange ST. Redlands,CA,92374</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-phone"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Phone:</span> <a href="tel:(909)712-2101">(909)712-2101</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-paper-plane"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Email:</span> <a href="mailto:sandythreadingredlands@gmail.com">sandythreadingredlands@gmail.com</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-globe"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Website</span> <a href="https://sandythreading.com/">sandythreading.com</a></p>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoQhFrLBovhNebWjch7-chQzY5QIwWCb8&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

	</body>
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