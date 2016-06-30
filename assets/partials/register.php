<div id="right-side-register">
	<div class="col-md-12">
		<h2 class="page-header">Account Creation</h2>
	</div>
	<br />
	<div class="col-md-7 col-md-offset-1">
		<form role="form" method="post" enctype="multipart/form-data"
			name="registerForm" novalidate>
			<div class="panel panel-info reg-panel"
				ng-show="registrationStep == 0">
				<div class="panel-heading">
					<h4 class="panel-title">Personal Information</h4>
				</div>
				<div class="panel-body">

					<span style="color: red"
						ng-show="registerForm.firstname.$dirty && registerForm.firstname.$invalid">
						<span ng-show="registerForm.firstname.$error.required">First Name
							is required.</span>
					</span>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-circle-o-notch"></i>
						</span> <input type="text" name="firstname" id="firstname"
							class="form-control" placeholder="First Name*"
							ng-model="firstname" ng-change="enableConBtn()" required />
					</div>

					<span style="color: red"
						ng-show="registerForm.lastname.$dirty && registerForm.lastname.$invalid">
						<span ng-show="registerForm.lastname.$error.required">Last Name is
							required.</span>
					</span>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-circle-o-notch"></i>
						</span> <input type="text" name="lastname" id="lastname"
							class="form-control" placeholder="Last Name*" ng-model="lastname"
							ng-change="enableConBtn()" required />
					</div>

					<span style="color: red"
						ng-show="registerForm.birthdate.$dirty && registerForm.birthdate.$invalid">
						<span ng-show="registerForm.birthdate.$error.required">Birthdate
							is required.</span>
					</span>
					<!-- <div class="form-group">
						<div class='input-group date' id='datetimepicker1'>
							<input type='text' name="birthdate" id="birthdate"
								class="form-control" placeholder="Birthdate*"
								ng-model="birthdate" ng-change="enableConBtn()" required /> <span
								class="input-group-addon"> <span class="fa fa-calendar"></span>
							</span>
						</div>
					</div> -->
					
					<datepicker date-format="d/M/y" button-prev="<i   class='fa fa-arrow-left'> </i>"
					button-next="<i class='fa fa-arrow-right'></i>"> <input type='text'
						name="birthdate" id="birthdate" class="form-control"
						placeholder="Birthdate*" ng-model="birthdate"
						ng-change="enableConBtn()" required></datepicker>

					<span style="color: red"
						ng-show="registerForm.gender.$dirty && registerForm.gender.$invalid">
						<span ng-show="registerForm.gender.$error.required">Gender is
							required.</span>
					</span>
					<div class="form-group">
						<span><label class="control-label" for="inputGroup">Gender</label>
						</span> <select name="gender" id="gender" class="form-control"
							ng-model="gender" required>
							<option value="M">Male</option>
							<option value="F">Female</option>
						</select>
					</div>

					<span style="color: red"
						ng-show="registerForm.username.$dirty && registerForm.username.$invalid">
						<span ng-show="registerForm.username.$error.required">Username is
							required.</span>
					</span>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-tag"></i> </span>
						<input type="text" name="username" id="username"
							class="form-control" placeholder="Desired Username*"
							ng-model="username" ng-change="enableConBtn()" required />
					</div>

					<span style="color: red"
						ng-show="registerForm.password.$dirty && registerForm.password.$invalid">
						<span ng-show="registerForm.password.$error.required">Password is
							required.</span>
					</span>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i> </span>
						<input type="password" name="password" id="password"
							class="form-control" placeholder="Enter Password*"
							ng-model="password" ng-change="enableConBtn()" required />
					</div>

					<span style="color: red" ng-show="retypePassword != password"> <span
						ng-show="registerForm.lastname.$error.required">Password mismatch.</span>
					</span>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i> </span>
						<input type="password" name="retypePassword" id="retypePassword"
							class="form-control" placeholder="Retype Password"
							ng-model="retypePassword" ng-change="enableConBtn()" required />
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-file-image-o"></i>
						</span> <input type="file" name="fileToUpload" id="fileToUpload"
							class="form-control" />
					</div>
				</div>
			</div>

			<div class="panel panel-info reg-panel"
				ng-show="registrationStep == 1">
				<div class="panel-heading">
					<h4 class="panel-title">Current Address</h4>
				</div>
				<div class="panel-body">

					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-bus"></i> </span>
						<input type="text" name="streetName" id="streetName"
							class="form-control" placeholder="Street Name" />
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-building"></i> </span>
						<input type="text" name="houseNumber" id="houseNumber"
							class="form-control" placeholder="House number" />
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i> </span>
						<input type="text" name="postalCode" id="postalCode"
							class="form-control" placeholder="Postal code" />
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-building-o"></i> </span>
						<input type="text" name="city" id="city" class="form-control"
							placeholder="City" />
					</div>

					<span style="color: red"
						ng-show="registerForm.phoneNumber.$dirty && registerForm.phoneNumber.$invalid">
						<span ng-show="registerForm.phoneNumber.$error.required">Phone
							number is required.</span>
					</span>
					<div class="form-group input-group">
						<span class="input-group-addon"><i
							class="glyphicon glyphicon-phone"></i> </span> <input type="text"
							name="phoneNumber" id="phoneNumber" class="form-control"
							placeholder="Phone number*" ng-model="phoneNumber"
							ng-change="enableSubmitBtn()" required />
					</div>

					<span style="color: red"
						ng-show="registerForm.email.$dirty && registerForm.email.$invalid || !validEmail">
						<span ng-show="registerForm.email.$error.required">Invalid Email.</span>
					</span>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-at"></i> </span> <input
							type="text" name="email" id="email" class="form-control"
							placeholder="Email*" ng-model="email"
							ng-change="enableSubmitBtn()" required />
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
					retypePassword != password || disableConBtn">
						Continue <span class="glyphicon glyphicon-forward"></span>
					</button> </a>
			</div>

			<div class="probBtn pull-right" style="margin-right: 10px;"
				ng-show="registrationStep == 1">
				<a href=""><input type="submit" name="register" value="Register"
					class="btn btn-primary"
					ng-disabled="registerForm.phoneNumber.$dirty && registerForm.phoneNumber.$invalid ||  
					registerForm.email.$dirty && registerForm.email.$invalid || disableSubmitBtn">
				</a>
			</div>
		</form>
	</div>
</div>
