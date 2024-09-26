<html>
  <head>
    <title>Blood Donation </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
    table {
        width: 70%;
        border: 2px solid white;
        border-collapse: collapse;
        margin: 20px;
        font-size: 18px;
    }

    th, td {
        border: 2px solid white;
        padding: 12px;
        text-align: center;
    }

    th {
        background-color: #4CAF50; /* Dark Green */
        color: white;
    }

    td {
        background-color: #B2EBF2; /* Light Blue */
    }
    </style>
  </head>

  <body class="goto-here">
<!-- Nav Bar --> 
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.html">Blood Donation Camp</a>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="admin.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="donation_record.php" class="nav-link">Donation Record</a></li>
        <li class="nav-item"><a href="requirement_record.php" class="nav-link">Requirement Record</a></li>
        <li class="nav-item"><a href="log.php" class="nav-link">Logs</a></li>
      </ul>
    </div>
  </div>
</nav>


    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Admin Page</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="overlay"></div>
   <div class="text py-3 pb-4 px-3"><center>
     <h2>Blood Requirement Record</h2>
    <table class="table table-striped" style="width:90%">
    <thead>
            <tr class="warning">
              <th>Id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Date Of Birth</th>
              <th>City</th>
              <th>Age</th>
              <th>Weight</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Blood Group</th>
              <th>Action</th>
            </tr>
          </thead>
          <?php
          include "config_blood.php";
          $query = mysqli_query($connect, "select * from requirement") or die(mysqli_error($connect));
          $counter = 0;
          while ($row = mysqli_fetch_array($query)) {
            extract($row);
          ?>
            <tbody>
              <tr>
                <td><center><?php echo ++$counter; ?></center></td>
                <td><center><?php echo $first_name; ?></center></td>
                <td><center><?php echo $last_name; ?></center></td>
                <td><center><?php echo $dob; ?></center></td>
                <td><center><?php echo $city; ?></center></td>
                <td><center><?php echo $age; ?></center></td>
                <td><center><?php echo $weight; ?></center></td>
                <td><center><?php echo $email; ?></center></td>
                <td><center><?php echo $phone; ?></center></td>
                <td><center><?php echo $blood_group; ?></center></td>
                <td><center>
                  <a href="update.php?ID=<?php echo $id; ?>">Update</a>
                  <a href="delete_requirement.php?ID=<?php echo $id; ?>">Delete</a></center>
                </td>
              </tr>
            </tbody>
          <?php
          }
          ?>
        </table>

        <!-- Footer --> 
<footer class="ftco-footer ftco-section">
  <div class="container">
    <div class="row">
      <div class="mouse">
        <a href="#" class="mouse-icon">
          <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
        </a>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Blood Donation</h2>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="https://www.instagram.com/abhi_nagote_080/?igshid=NjNlMDhmYTc%3D"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Menu</h2>
          <ul class="list-unstyled">
            <li><a href="#" class="py-2 d-block">About</a></li>
            <li><a href="#" class="py-2 d-block">Journal</a></li>
            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Help</h2>
          <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
            <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
            <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
            <li><a href="#" class="py-2 d-block">FAQs</a></li>
            <li><a href="#" class="py-2 d-block">Contact</a></li>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Have a Questions?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">Pune</span></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 8275871601</span></a></li>
              <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Blooddonation@gmail.com</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p class="text-center text-md-end text-xl-start">@All Rights Reserved</p>
      </div>
    </div> 
  </div>
</footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>