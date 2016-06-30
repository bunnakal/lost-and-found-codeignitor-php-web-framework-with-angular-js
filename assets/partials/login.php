<div id="right-side-login">
	<div class="col-md-12">
		<h2 class="page-header">Login page</h2>
	</div>
	<br />
	<div class="col-md-5 col-md-offset-1">
		<form action="<?php echo base_url();?>lost_found/login"
			class="form-signin" role="form" method="post"
			enctype="multipart/form-data" name="loginForm">
			<div class="panel panel-info reg-panel">
				<div class="panel-heading">
					<h4 class="panel-title">use correct username and password to login</h4>
				</div>
				<div class="panel-body">
					</span> <span style="color: red; position: relative; left: 15px;">
						<?php echo form_error('loginusername', '<span class="error">', '</span>'); ?>
					</span>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-tag"></i> </span>
						<input type="text" name="loginusername" id="loginusername"
							class="form-control" placeholder="Enter Username"
							ng-model="username" />
					</div>
					</span> <span style="color: red; position: relative; left: 15px;">
						<?php echo form_error('loginpassword', '<span class="error">', '</span>'); ?>
					</span>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i> </span>
						<input type="password" name="loginpassword" id="loginpassword"
							class="form-control" placeholder="Enter Password"
							ng-model="password"/>
					</div>
					<button class="btn btn-primary btn-block" type="submit">Sign in</button>

					<a href="#forgot-password" data-toggle="modal" class="btn btn-link"
						role="link" name="op" value="Login">Forget password?</a>
				</div>
			</div>
		</form>
		<h3 style="color: blue; position: relative; left: 15px;"><?php echo  $repMsg;?></h3><br/>
		<span style="color: red; position: relative; left: 15px;"><?php echo $login_error;?></span>
	</div>
</div>
