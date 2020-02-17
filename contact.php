<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Top Roofers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>

<!-- Info Banner -->
<?php include 'sections/info-banner.sec.php';?>

<!-- Navigation -->
<?php include 'sections/navigation.sec.php';?>

<!-- Succesful alert -->
<?php if(isset($_GET['contact-submit'])){
        echo '<div class="container mt-3 alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="alert-heading">Well done!</h4>
                <p>Aww yeah, you successfully sent your inquiry. This means that we got your message and we will be in contact with you shortly.</p>
                <hr>
                <p class="mb-0">However, if you need to contact us as soon as possible, then <a href="tel:+4475 960 92240">call us</a>.</p>
              </div>';
            } ?>

<div class="container my-5">
  <div class="shadow-lg p-3 bg-white border-top border-danger rounded">
    <h1 class="display-5 text-center">Welcome to <b>Top</b>RoofersLtd</h1>
  </div>
</div>

<!-- Main body -->
<div class="container my-5">
	<div class="shadow-lg p-3 bg-white rounded">
	<section id="contactForm">	
	<h1 class="display-5 text-center">Contact <b>Top</b>RoofersLtd</h1><hr>
  <p>Please do not hesitate to get in touch with us for a no-obligation quote, or with any inquires you may have. You can contact us via <a href="mailto:info@toproofersltd.com">email</a>, or <a href="tel:+4475 960 92240">phone</a>, or by using our <a href="#contactForm">contact form</a> bellow.</p>
	</section>

<!-- contact form -->
	<form action="includes/contact.inc.php" method="post">
  		<div class="form-row">
    		<div class="form-group col-md-6">
 		    	<label for="firstName">Your Name:</label>
      			<input type="text" class="form-control" name="fn" id="firstName" placeholder="First Name" value="<?php if (isset($_GET['fn'])) {echo $_GET['fn'];} ?>" required="required">
    		</div>
    		<div class="form-group col-md-6">
      			<label for="lastName">Family Name:</label>
      			<input type="text" class="form-control" name="ln" id="lastName" placeholder="Last Name" value="<?php if (isset($_GET['ln'])) {echo $_GET['ln'];} ?>" required="required">
    		</div>
  		</div>
  		<div class="form-group">
    		<label for="email">Email Address:</label>
    		<input type="email" class="form-control" name="email" id="email" placeholder="example@abc.com" value="<?php if (isset($_GET['email'])) {echo $_GET['email'];} ?>" required="required">
  		</div>
  		<div class="form-row">
    		<div class="form-group col-md-6">
      			<label for="phone">Telephone:</label>
      			<input type="tel" class="form-control" name="phno" id="phone" placeholder="Phone Number"value="<?php if (isset($_GET['phno'])) {echo $_GET['phno'];} ?>" required="required">
    		</div>
    		<div class="form-group col-md-4">
      			<label for="inputArea">Area:</label>
      			<select id="inputArea" name="area" class="form-control" required="required">
        		<option selected>Choose...</option>
        		<option>Croydon</option>
        		<option>Ealing</option>
        		<option>Fulham</option>
        		<option>Hammersmith</option>
        		<option>Hillingdon</option>
        		<option>Hounslow</option>
        		<option>Kingston</option>
        		<option>Merton</option>
        		<option>Richmond</option>
        		<option>Sutton</option>
        		<option>Wandsworth</option>
        		<option>Other Area</option>
      			</select>
    		</div>
    		<div class="form-group col-md-2">
      			<label for="postcode">Postcode</label>
      			<input type="text" class="form-control" name="pscd" id="postcode" value="<?php if (isset($_GET['pscd'])) {echo $_GET['pscd'];} ?>" required="required" >
    		</div>
  		</div>
      <div class="form-group">
        <label for="description">Describe what service do you require from us</label>
        <textarea  class="form-control" name="description" id="description" rows="4" value="<?php if (isset($_GET['description'])) {echo $_GET['description'];} ?>" required="required"></textarea>
      </div>
  		<div class="form-group">
    		<div class="form-check">
      			<input class="form-check-input" name="agree" type="checkbox" id="check" required="required">
      			<label class="form-check-label" for="check">I Agree to receive a call back from Top Roofers Ltd.</label>
    		</div>
  		</div>
  		<button type="submit" class="btn btn-outline-success mx-5" name="contact-submit">Submit Request</button><hr>
      
	</form>
  <p><i>If you encounter any issue with our website or any other related problem, please let us know about it. </i><button class="btn btn-outline-danger my-2 mx-5">Report Issue</button></p>
	</div>
</div>
<!-- Footer -->
<?php include "sections/footer.sec.php" ?>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>