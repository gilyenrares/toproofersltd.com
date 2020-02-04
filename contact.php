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
<!-- Navigation -->
<?php include 'sections/navigation.sec.php';?>

<!-- Contact Banner -->
<div class="contact-banner shadow-lg"></div>

<!-- Main body -->
<div class="container my-5">
	<div class="shadow-lg p-3 bg-white rounded">
	<section>	
	<h1 class="display-5 text-center">Contact <b>Top</b> Roofers Ltd</h1><hr>
	</section>
	<form>
  		<div class="form-row">
    		<div class="form-group col-md-6">
 		    	<label for="firstName">Your Name:</label>
      			<input type="text" class="form-control" id="firstName" placeholder="First Name" required="required">
    		</div>
    		<div class="form-group col-md-6">
      			<label for="lastName">Family Name:</label>
      			<input type="text" class="form-control" id="lastName" placeholder="Last Name" required="required">
    		</div>
  		</div>
  		<div class="form-group">
    		<label for="email">Email Address:</label>
    		<input type="email" class="form-control" id="email" placeholder="example@abc.com" required="required">
  		</div>
  		<div class="form-row">
    		<div class="form-group col-md-6">
      			<label for="phone">Telephone:</label>
      			<input type="number" class="form-control" id="phone" placeholder="Phone Number" required="required">
    		</div>
    		<div class="form-group col-md-4">
      			<label for="inputState">Area:</label>
      			<select id="inputState" class="form-control" required="required">
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
      			<input type="text" class="form-control" id="postcode" required="required" >
    		</div>
  		</div>
  		<div class="form-group">
    		<div class="form-check">
      			<input class="form-check-input" type="checkbox" id="check" required="required">
      			<label class="form-check-label" for="check">I Agree to receive calls from Top Roofers Ltd.</label>
    		</div>
  		</div>
  		<button type="submit" class="btn btn-primary">Submit Request</button>
	</form>
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