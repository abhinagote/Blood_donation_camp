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

    <script>
    function calculateAge() {
      // Get the input value of the date of birth
      var dob = document.getElementById('dob').value;

      // Create a Date object for the current date
      var currentDate = new Date();

      // Create a Date object for the entered date of birth
      var birthDate = new Date(dob);

      // Calculate the difference in milliseconds
      var difference = currentDate - birthDate;

      // Calculate the age in years
      var age = Math.floor(difference / (1000 * 60 * 60 * 24 * 365.25));

      // Set the calculated age in the age field
      document.getElementById('age').value = age;
    }
  </script>

  </head>
<body class="goto-here">
<!-- Nav Bar --> 
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.html">Blood Donation Camp</a>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="donate.php" class="nav-link">Donate</a></li>
        <li class="nav-item"><a href="detail.php" class="nav-link">Blood Detail</a></li>
        <li class="nav-item"><a href="requirement.php" class="nav-link">Requirement</a></li>
      </ul>
    </div>
  </div>
</nav>


    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Blood Donation Form</h1>
          </div>
        </div>
      </div>
    </div>

<!-- Form -->
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
						<form method="post">
							<h3 class="mb-4 billing-heading">Fill The Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">First Name</label>
	                  <input type="text" class="form-control" placeholder="" name="first_name">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" placeholder="" name="last_name">
	                </div>
                </div>
               
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="birth_date">Date Of Birth</label>
                        <input type="date" class="form-control" placeholder="" id="dob" name="dob" onchange="calculateAge()">
	                </div>
		            </div>
                    <div class="col-md-6">
	                <div class="form-group">
	                	<label for="town_city">Town/City</label>
	                  <input type="textarea" class="form-control" placeholder="" name="city">
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-6">
	                <div class="form-group">
	                	<label for="age">Age</label>
	                  <input type="text" class="form-control" placeholder="" id="age" name="age">
	                </div>
                </div>
		            
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="weight">Weight</label>
	                  <input type="number" class="form-control" placeholder="" name="weight">
	                </div>
	              </div>

                <div class="w-100"></div>
                <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="emailaddress" class="form-control" placeholder="" name="email">
	                </div>
                </div>
                       
                <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone Number</label>
	                  <input type="number" class="form-control" placeholder="" name="phone">
	                </div>
                </div>

                <div class="w-100"></div>
                <div class="col-md-12">
	                <div class="form-group"><center>
                  <label for="blood_group">Select Blood Group:</label>
                  <select id="blood_group" name="blood_group">
                    <option value="" disabled selected>Select a blood group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                  </select></center>
	                </div>
                </div>
              </div>
                <div class="form-group"><center>
                <input type="submit" value="Submit" class="btn btn-primary py-3 px-5" name="submit_btn"></center>
              </div>
            </div>
	          </form>
          </div> 
        </div>
        
    </section> 
		
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

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>
<?php
include "config_blood.php";

if (isset($_POST["submit_btn"])) {
  extract($_POST);

  $insert = mysqli_query($connect, "insert into donate(first_name, last_name, dob, city, age, weight, email, phone, blood_group) values('$first_name','$last_name','$dob','$city','$age','$weight','$email','$phone','$blood_group')") or die(mysqli_error($connect));

  if ($insert) {
    echo "window.alert('data inserted sucessfully')";
  } else {
    echo "window.alert('data error')";
  }
}
?>