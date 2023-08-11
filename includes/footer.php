<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);

if(isset($_POST['sub']))
  {
   
    $email=$_POST['email'];
 
     
    $query=mysqli_query($con, "insert into tblsubscriber(Email) value('$email')");
    if ($query) {
   echo "<script>alert('Your subscribe successfully!.');</script>";
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
  ?>
<div class="footer">
        <!-- footer-->
        <div class="container">
            <div class="footer-block">
                <!-- footer block -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget">
                            <h4 class="widget-title">Threading Address</h4>
                            <ul class="listnone contact">
                                <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <li><i class="fa fa-map-marker"></i> <?php  echo $row['PageDescription'];?> </li>
                                <li><i class="fa fa-phone"></i> +<?php  echo $row['MobileNumber'];?></li>
                               
                                <li><i class="fa fa-envelope-o"></i>  <?php  echo $row['Email'];?></li><?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget footer-social">
                            <!-- social block -->
                            <h4 class="widget-title">Social Feed</h4>
                            <ul class="listnone">
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100083117307338"> <i class="fa fa-facebook"></i> Facebook </a>
                                </li>
                                
                                <li><a href="https://g.co/kgs/2ERm7e"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                                
                            </ul>
                        </div>
                        <!-- /.social block -->
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="footer-widget widget-newsletter">
                            <!-- newsletter block -->
                            <h4 class="widget-title">Newsletters</h4>
                            <p>Enter your email address to receive new service and offer  information and other useful information right to your inbox.</p>
                            <form method="post">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your email address" name="email" required="">
                                
                            <button style=background-color="blue"  type="submit" value="submit" name="sub">Subscribe</button>
                           
                            </div></form>
                            <!-- /input-group -->
                        </div>
                        <!-- newsletter block -->
                    </div>
                </div>
                <div class="tiny-footer">
                    <!-- tiny footer block -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="copyright-content">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tiny footer block -->
            </div>
            <!-- /.footer block -->
        </div>
    </div>