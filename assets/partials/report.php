<div id="right-side-report">
	<div class="col-md-12">
		<h2 class="page-header">Report Item</h2>
	</div>
	<br />
	<div class="col-md-7 col-md-offset-1">
		<form action="<?php echo base_url();?>lost_found/report" method="post"
			id="reportForm" role="form" enctype="multipart/form-data">
			<div class="row" ng-show="reportStep == 0">
				<div class="col-md-2">
					<label class="control-label" for="inputGroup">Report</label>
				</div>
				<div class="col-md-10">
					<div class="form-group">
						<select name="reportType" id="reportType" class="form-control">
							<option value="lost">Lost Item</option>
							<option value="found">Found Item</option>
						</select>
					</div>
				</div>
			</div>

			<div class="panel panel-info" ng-show="reportStep == 0">
				<div class="panel-heading">
					<h4 class="panel-title">Item Information</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-2">
							<label class="control-label" for="inputGroup">Category</label>
						</div>
						<div class="col-md-9 col-md-offset-1">
							<div class="form-group">
								<select name="categories" id="categories" class="form-control"
									ng-model="categories" ng-change="getSubcategories()">
									<option value="">Select Category...</option>
									<?php if(is_array($categories)): ?>
									<?php foreach($categories as $row):?>
									<option value="<? echo $row->idcategory; ?>">
										<? echo $row->categoryName; ?>
									</option>
									<?php endforeach;?>
									<?php endif; ?>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-2">
							<label class="control-label" for="inputGroup">Subcategory</label>
						</div>
						<div class="col-md-9 col-md-offset-1">
							<div class="form-group">
								<select name="subcategories" id="subcategories"
									class="form-control" ng-model="subcategories">
									<option value="">Select subcategory...</option>
									<option ng-repeat="subcategory in subcats"
										value="{{subcategory.id}}">{{subcategory.name}}</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<span style="color: red; position: relative; left: 15px;"> <?php echo form_error('itemname', '<span class="error">', '</span>'); ?>
						</span>
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Name</label>
						</div>
						<div class="col-md-9">
							<div class="form-group">
								<input type="text" name="itemname" id="itemname"
									class="form-control" placeholder="Item Name*"
									ng-model="itemname" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Model</label>
						</div>
						<div class="col-md-9">
							<div class="form-group">
								<input type="text" name="modelnum" id="modelnum"
									class="form-control" placeholder="Model" ng-model="modelnum" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Serial Number</label>
						</div>
						<div class="col-md-9">
							<div class="form-group">
								<input type="text" name="serialNum" id="serialNum"
									class="form-control" placeholder="Serial Number"
									ng-model="serialNum" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Primary color</label>
						</div>
						<div class="col-md-9">
							<div class="form-group">
								<input type="text" name="itemcolor" id="itemcolor"
									class="form-control" placeholder="Item color"
									ng-model="itemcolor" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Item Image</label>
						</div>
						<div class="col-md-9">
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-file-image-o"></i>
								</span> <input type="file" name="reItemImage" id="reItemImage"
									class="form-control" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Item description</label>
						</div>
						<div class="col-md-9">
							<div class="form-group">
								<textarea rows="3" cols="54" name="description"
									form="reportForm"> </textarea>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="panel panel-info" ng-show="reportStep == 1">
				<div class="panel-heading">
					<h4 class="panel-title">Where Item lost or found</h4>
				</div>
				<div class="panel-body">

					<div class="row">
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">Street name</label>
						</div>
						<div class="col-md-9">
							<div class="form-group">
								<input type="text" name="streetname" id="streetname"
									class="form-control" placeholder="Street name"
									ng-model="streetname" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">House number</label>
						</div>
						<div class="col-md-9">
							<div class="form-group">
								<input type="text" name="housenumber" id="housenumber"
									class="form-control" placeholder="House number"
									ng-model="housenumber" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<label class="control-label" for="inputGroup">City</label>
						</div>
						<div class="col-md-9">
							<div class="form-group">
								<input type="text" name="city" id="city" class="form-control"
									placeholder="city" ng-model="city" />
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="probBtn pull-right" id="continueBtn-search"
				style="margin-right: 10px;" ng-show="reportStep == 0">
				<a href=""><button type="button" class="btn btn-default"
						ng-click="reportStep = reportStep + 1">
						Continue <span class="glyphicon glyphicon-forward"></span>
					</button> </a>
			</div>

			<div class="probBtn pull-left" id="continueBtn-search"
				style="margin-right: 10px;" ng-show="reportStep == 1">
				<a href=""><button type="button" class="btn btn-default"
						ng-click="reportStep = reportStep - 1">
						<span class="glyphicon glyphicon-backward"></span> Previous
					</button> </a>
			</div>

			<div class="probBtn pull-right" style="margin-right: 10px;"
				ng-show="reportStep == 1">
				<input type="submit" name="register" value="Submit"
					class="btn btn-primary">
			</div>
		</form>
	</div>
</div>
