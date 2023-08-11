<html>
</style>
<section class=" w3l-header-4 header-sticky">
    <header class="absolute-top">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h5><a class="profile-pic" href="index.php"> <!--<span class="fa fa-line-chart" aria-hidden="true"></span> -->
            <img class="profile-pic" src="includes/images/logo.jpg" width="80" height="50"/>

            </a></h5>
            <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
        <span class="fa icon-close fa-times"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    
                     
                     <?php if (strlen($_SESSION['bpmsuid']==0)) {?>
                   <!--  <li class="nav-item">
                        <a class="nav-link" href="admin/index.php">Admin</a>
                    </li> -->
                     <li class="nav-item">
                        <a class="nav-link" href="signup.php">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                     <li class="nav-item">
                         <a class="nav-link" href="book-appointment.php">Book Now</a></a>
                    </li>
                    <!-- <li class="nav-item">
                         <a class="nav-link" href="reward.php">Rewards</a></a>
                    </li> -->
                <?php }?>
                    <?php if (strlen($_SESSION['bpmsuid']>0)) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="book-appointment.php">Book Salon</a>
                    </li>
                    <!-- <li class="nav-item">
                         <a class="nav-link" href="reward.php">Rewards</a></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="booking-history.php">Booking History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="invoice-history.php">Invoice History</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="change-password.php">Setting</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                  <?php }?>
                  
                </ul>
                
            </div>
        </div>

        </nav>
    </div>
      </header>
</section>
