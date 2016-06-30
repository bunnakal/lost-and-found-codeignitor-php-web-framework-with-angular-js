<!DOCTYPE html>
<html lang="en" ng-app="loginApp">
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

<link rel="stylesheet" type="text/css"
	href="<?php echo base_url();?>assets/css/add.css" media="screen" />

<script src="<?php echo base_url();?>assets/js/login.js"></script>

</head>

<body ng-controller="loginCtrl">
	<div class="head">
		<div class="pull-right">
			<div class="dateField">
				<a href="<?php echo base_url();?>lost_found/register"
					class="btn btn-link" role="link" type="submit" name="op"
					value="Register">Register</a> | &nbsp; <a
					href="<?php echo base_url();?>lost_found/login"
					class="btn btn-link" role="link" type="submit" name="op"
					value="Login">Login</a> &nbsp;|&nbsp; <a
					href="<?php echo base_url();?>lost_found/help" class="btn btn-link"
					role="link" type="submit" name="op" value="Help">Help</a> &nbsp;
			</div>
		</div>
	</div>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<ul class="nav navbar-nav">
				<li id="home-li"><a
					href="<?php echo base_url();?>lost_found/"><span
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
				<form action="<?php echo base_url();?>lost_found/searchResults" method="post" role="form">
					<div class="form-group">
						<label class="control-label" for="inputGroup">Search</label> 
						<select name="reportType" id="reportType" class="form-control">
							<option value="lost">Lost Item</option>
							<option value="found">Found Item</option>
						</select>
					</div>
					<label class="control-label" for="inputGroup">Item Name</label>
					<div class="input-group">

						<input type="text" name="itemName" value="<?php echo set_value('itemName'); ?>" id="itemName" class="form-control"
							placeholder="Search for..."> <span class="input-group-btn"> <input
							type="submit" name="goSearch" id="goSearch" value="Go!" class="btn btn-primary">
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
			$this->load->view('../../assets/partials/login.php');
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

	<div class="modal fade" id="forgot-password" role="dialog">
		<div class="modal-dialog" id="forget-pwd">
			<div class="modal-content">

				<div class="modal-body">
					<form action="<?php echo base_url();?>lost_found/passwordRecovery" class="form-signin" role="form" method="post"
						enctype="multipart/form-data" name="pwdRecovForm">
						<div class="panel panel-info reg-panel">
							<div class="panel-heading">
								<h4 class="panel-title">Enter email for password recovery</h4>
							</div>
							<div class="panel-body">
								<div class="form-group input-group">
									<span class="input-group-addon"><i class="fa fa-at"></i> </span>
									<input type="email" name="email" id="email"
										class="form-control" placeholder="Email*" ng-model="email"
										required />
								</div>
								<input class="btn btn-primary btn-block" type="submit" value="Submit">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<a class="btn btn-primary" data-dismiss="modal">Close</a>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">

     </script>
</body>
</html>
