<!DOCTYPE html>
<html lang="en" ng-app="advancedApp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lost and Found</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- JQUERY css -->
<link rel="stylesheet"
	href="https://code.jquery.com/ui/1.7.2/themes/smoothness/jquery-ui.css">

<!-- Fontawesome io -->
<link rel="stylesheet"
	href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- JQUERY-->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<script
	src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>assets/js/angular-route.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url();?>assets/js/angular-datepicker.js"></script>

<!-- css from angular datepicker files -->
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url();?>assets/css/angular-datepicker.css">

<link rel="stylesheet" type="text/css"
	href="<?php echo base_url();?>assets/css/add.css" media="screen" />

<script src="<?php echo base_url();?>assets/js/advanced.js"></script>

</head>

<body ng-controller="advancedCtrl">
	<div class="head">
		<span
			style="position: relative; left: 200px; top: 30px; font-weight: bold;"
			ng-show="<?php echo $welcome_msg;?>"><?php echo 'Welcome '.$username.'!!!';?>
		</span>
		<div class="pull-right">
			<div class="dateField">
				<a href="<?php echo base_url();?>lost_found/register"
					class="btn btn-link" role="link" type="submit" name="op"
					value="Register" ng-show="<?php echo !$welcome_msg;?>">Register</a>
				<span ng-show="<?php echo !$welcome_msg;?>">| &nbsp;</span> <a
					href="<?php echo base_url();?>lost_found/login"
					class="btn btn-link" role="link" type="submit" name="op"
					value="Login"><?php echo $loginLabel;?> </a> &nbsp;|&nbsp; <a
					href="<?php echo base_url();?>lost_found/help" class="btn btn-link"
					role="link" type="submit" name="op" value="Help">Help</a> &nbsp;
			</div>
		</div>
	</div>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<ul class="nav navbar-nav">
				<li id="home-li"><a href="<?php echo base_url();?>lost_found/"><span
						class="glyphicon glyphicon-home"> Home</span> </a></li>
				<li id="contact-li"><a
					href="<?php echo base_url();?>lost_found/contact"><span
						class="glyphicon glyphicon-phone"> Contact</span> </a></li>
				<li id="about-li"><a href="<?php echo base_url();?>lost_found/about"><span
						class="glyphicon glyphicon-user"> About-Us</span> </a></li>
			</ul>
		</div>
	</nav>

	<div class="row">
		<div class="col-md-3 custom-col-1">
			<div id="left-side">
				<?php echo form_error('itemName', '<span class="error">', '</span>'); ?>
				<form action="<?php echo base_url();?>lost_found/searchResults"
					method="post" role="form">
					<div class="form-group">
						<label class="control-label" for="inputGroup">Search</label> <select
							name="reportType" id="reportType" class="form-control">
							<option value="lost">Lost Item</option>
							<option value="found">Found Item</option>
						</select>
					</div>
					<label class="control-label" for="inputGroup">Item Name</label>
					<div class="input-group">

						<input type="text" name="itemName"
							value="<?php echo set_value('itemName'); ?>" id="itemName"
							class="form-control" placeholder="Search for..."> <span
							class="input-group-btn"> <input type="submit" name="goSearch"
							id="goSearch" value="Go!" class="btn btn-primary">
						</span>
					</div>
					<!-- /input-group -->
				</form>
				<button
					onclick="location.href='<?php echo base_url();?>lost_found/advanced'"
					class="btn btn-link" role="link" type="submit" name="op"
					value="Advanced">Advanced search</button>

				<button type="submit"
					onclick="location.href='<?php echo base_url();?>lost_found/report'"
					class="btn btn-primary btn-block report-btn">Report</button>
			</div>
		</div>
		<div class="col-md-9 custom-col-2" id="partials">
			<!-- home -->
			<?php
			$this->load->view('../../assets/partials/advanced.php');
			?>
			<!-- end home -->
		</div>
	</div>

	<div class="row sec-row">
		<div class="col-md-12">
			<footer id="footer">
				<div class="container">
					<p class="text-muted">Copyright © 2015 Mhretaab Berhe, student @
						Groep-T KU Leuven University</p>
				</div>
			</footer>
		</div>
	</div>

	<script type="text/javascript">
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
              ga('create', 'UA-54772155-1', 'auto');
              ga('send', 'pageview');
     </script>
</body>
</html>
