<div id="right-side-register">
	<div class="col-md-12">
		<h2 class="page-header">Account Creation</h2>
	</div>
	<br />
	<div class="col-md-7 col-md-offset-1">
		<form action="<?php echo base_url();?>lost_found/register" role="form"
			method="post" enctype="multipart/form-data" name="registerForm"
			novalidate>
			<div class="panel panel-info reg-panel"
				ng-show="registrationStep == 0">
				<div class="panel-heading">
					<h4 class="panel-title">Personal Information</h4>
				</div>
				<div class="panel-body">

					<div class="row">
						<span style="color: red; position: relative; left: 15px;"
							ng-show="registerForm.firstname.$dirty && registerForm.firstname.$invalid">
							<span ng-show="registerForm.firstname.$error.required">First Name
								is required.</span>
						</span> <span style="color: red; position: relative; left: 15px;">
							<?php echo form_error('firstname', '<span class="error">', '</span>'); ?>
						</span>
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">First Name*</label>
						</div>
						<div class="col-md-9">

							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-circle-o-notch"></i>
								</span> <input type="text" name="firstname"
									value="<?php echo set_value('firstname'); ?>" id="firstname"
									class="form-control" placeholder="First Name*"
									ng-model="firstname" ng-change="enableConBtn()" required />
							</div>
						</div>
					</div>

					<div class="row">
						<span style="color: red; position: relative; left: 15px;"
							ng-show="registerForm.lastname.$dirty && registerForm.lastname.$invalid">
							<span ng-show="registerForm.lastname.$error.required">Last Name
								is required.</span>
						</span> <span style="color: red; position: relative; left: 15px;">
							<?php echo form_error('lastname', '<span class="error">', '</span>'); ?>
						</span>
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Last Name*</label>
						</div>
						<div class="col-md-9">

							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-circle-o-notch"></i>
								</span> <input type="text" name="lastname"
									value="<?php echo set_value('lastname'); ?>" id="lastname"
									class="form-control" placeholder="Last Name*"
									ng-model="lastname" ng-change="enableConBtn()" required />
							</div>
						</div>
					</div>
					
					<div class="row">
						<span style="color: red; position: relative; left: 15px;"
							ng-show="registerForm.birthdate.$dirty && registerForm.birthdate.$invalid">
							<span ng-show="registerForm.birthdate.$error.required">Birthdate
								is required.</span>
						</span> <span style="color: red; position: relative; left: 15px;">
							<?php echo form_error('birthdate', '<span class="error">', '</span>'); ?>
						</span>
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Birthdate*</label>
						</div>
						<div class="col-md-9">

							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-calendar"></i>
								</span> <input type="date" name="birthdate"
									value="<?php echo set_value('birthdate'); ?>" id="birthda"
									class="form-control"
									ng-model="birthdate" ng-change="enableConBtn()" required />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<label class="control-label" for="inputGroup">Gender</label>
						</div>
						<div class="col-md-9 col-md-offset-1">
							<div class="form-group">
								<select name="genderType" id="genderType" class="form-control">
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<span style="color: red; position: relative; left: 15px;"
							ng-show="registerForm.username.$dirty && registerForm.username.$invalid">
							<span ng-show="registerForm.username.$error.required">Username is
								required.</span>
						</span> <span style="color: red; position: relative; left: 15px;">
							<?php echo form_error('username', '<span class="error">', '</span>'); ?>
						</span>
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Username*</label>
						</div>
						<div class="col-md-9">

							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"></i> </span>
								<input type="text" name="username"
									value="<?php echo set_value('username'); ?>" id="username"
									class="form-control" placeholder="Username*"
									ng-model="username" ng-change="enableConBtn()" required />
							</div>
						</div>
					</div>

					<div class="row">
						<span style="color: red; position: relative; left: 15px;"
							ng-show="registerForm.password.$dirty && registerForm.password.$invalid">
							<span ng-show="registerForm.password.$error.required">Password is
								required.</span>
						</span> <span style="color: red; position: relative; left: 15px;">
							<?php echo form_error('password', '<span class="error">', '</span>'); ?>
						</span>
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Password*</label>
						</div>
						<div class="col-md-9">

							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i> </span>
								<input type="password" name="password" id="password"
									class="form-control" placeholder="Password*"
									ng-model="password" ng-change="enableConBtn()" required />
							</div>
						</div>
					</div>

					<div class="row">
						<span style="color: red; position: relative; left: 15px;"
							ng-show="passconf != password"> <span
							ng-show="registerForm.lastname.$error.required">Password
								mismatch.</span>
						</span> <span style="color: red; position: relative; left: 15px;">
							<?php echo form_error('passconf', '<span class="error">', '</span>'); ?>
						</span>
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Retype Password*</label>
						</div>
						<div class="col-md-9">

							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i> </span>
								<input type="password" name="passconf" id="passconf"
									class="form-control" placeholder="Retype Password"
									ng-model="passconf" ng-change="enableConBtn()" required />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Profile Pic.</label>
						</div>
						<div class="col-md-9">
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-file-image-o"></i>
								</span> <input type="file" name="fileToUpload" id="fileToUpload"
									class="form-control" />
							</div>
						</div>
					</div>

				</div>

			</div>

			<div class="panel panel-info reg-panel"
				ng-show="registrationStep == 1">
				<div class="panel-heading">
					<h4 class="panel-title">Current Address</h4>
				</div>
				<div class="panel-body">

					<div class="row">
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Street name</label>
						</div>
						<div class="col-md-9">
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-bus"></i> </span>
								<input type="text" name="streetName"
									value="<?php echo set_value('streetName'); ?>" id="streetName"
									class="form-control" placeholder="Street Name" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">House number</label>
						</div>
						<div class="col-md-9">
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-building"></i> </span>
								<input type="text" name="houseNumber"
									value="<?php echo set_value('houseNumber'); ?>"
									id="houseNumber" class="form-control"
									placeholder="House number" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Postal code</label>
						</div>
						<div class="col-md-9">
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i> </span>
								<input type="text" name="postalCode"
									value="<?php echo set_value('postalCode'); ?>" id="postalCode"
									class="form-control" placeholder="Postal code" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">City</label>
						</div>
						<div class="col-md-9">
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-building-o"></i>
								</span> <input type="text" name="city"
									value="<?php echo set_value('city'); ?>" id="city"
									class="form-control" placeholder="City" />
							</div>
						</div>
					</div>

					<div class="row">
						<span style="color: red; position: relative; left: 15px;"
							ng-show="registerForm.phoneNumber.$dirty && registerForm.phoneNumber.$invalid">
							<span ng-show="registerForm.phoneNumber.$error.required">Phone
								number is required.</span>
						</span> <span style="color: red; position: relative; left: 15px;">
							<?php echo form_error('phoneNumber', '<span class="error">', '</span>'); ?>
						</span>
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Phone number*</label>
						</div>
						<div class="col-md-9">
							<div class="form-group input-group">
								<span class="input-group-addon"><i
									class="glyphicon glyphicon-phone"></i> </span> <input
									type="tel" name="phoneNumber"
									value="<?php echo set_value('phoneNumber'); ?>"
									id="phoneNumber" class="form-control"
									placeholder="Phone number*" ng-model="phoneNumber"
									ng-change="enableSubmitBtn()" required />
							</div>
						</div>
					</div>

					<div class="row">
						<span style="color: red; position: relative; left: 15px;"
							ng-show="registerForm.email.$dirty && registerForm.email.$invalid">
							<span ng-show="registerForm.email.$error.required">Invalid Email.</span>
						</span> <span style="color: red; position: relative; left: 15px;">
							<?php echo form_error('email', '<span class="error">', '</span>'); ?>
						</span>
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Email*</label>
						</div>
						<div class="col-md-9">
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-at"></i> </span>
								<input type="text" name="email"
									value="<?php echo set_value('email'); ?>" id="email"
									class="form-control" placeholder="Email*" ng-model="email"
									ng-change="enableSubmitBtn()" required />
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="probBtn pull-left" style="margin-left: 10px;"
				ng-show="registrationStep > 0">
				<a href=""><button type="button" class="btn btn-default"
						ng-click="registrationStep = registrationStep - 1">
						<span class="glyphicon glyphicon-backward"> Prevoius</span>
					</button> </a>
			</div>

			<div class="probBtn pull-right" id="continueBtn"
				style="margin-right: 10px;" ng-show="registrationStep < 1">
				<a href=""><button type="button" class="btn btn-default"
						ng-click="registrationStep = registrationStep + 1"
						ng-disabled="registerForm.firstname.$dirty && registerForm.firstname.$invalid ||  
					registerForm.lastname.$dirty && registerForm.lastname.$invalid ||  
					registerForm.birthdate.$dirty && registerForm.birthdate.$invalid ||  
					registerForm.username.$dirty && registerForm.username.$invalid ||  
					registerForm.password.$dirty && registerForm.password.$invalid ||  
					passconf != password || disableConBtn">
						Continue <span class="glyphicon glyphicon-forward"></span>
					</button> </a>
			</div>

			<div class="probBtn pull-right" style="margin-right: 10px;"
				ng-show="registrationStep == 1">
				<input type="submit" name="register" value="Register"
					class="btn btn-primary"
					ng-disabled="registerForm.phoneNumber.$dirty && registerForm.phoneNumber.$invalid ||  
					registerForm.email.$dirty && registerForm.email.$invalid || disableSubmitBtn">
			</div>

		</form>
	</div>
</div>
