<div id="right-side-about">
	<div class="col-lg-12">
		<h2 class="page-header">Detail</h2>
		<br />
	</div>
	<div class="col-lg-6">
		<div class="media">
			<div class="media-left">
				<a href="#"> <img
					src="<?php echo base_url();?>uploads/<?php echo $item->itemPic;?>"
					alt="">
				</a>
			</div>
			<div class="media-body">
				<h4 class="media-heading page-header">
					<?php echo $searchType;?>
				</h4>
				<span><strong>Name:</strong>
				</span><span><?php echo $item->itemName;?>
				</span><br> <span><strong>Model:</strong>
				</span><span><?php echo $item->itemModel;?>
				</span><br> <span><strong>Description:</strong>
				</span><span><?php echo $item->itemDescription;?>
				</span>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="media">
			<div class="media-left">
				<a href="#"> <img
					src="<?php echo base_url();?>uploads/<?php echo $user->userPic;?>"
					alt="">
				</a>
			</div>
			<div class="media-body">
				<h4 class="media-heading page-header">
					<?php echo $reporter;?>
				</h4>
				<span><strong>Name: </strong>
				</span><span><?php echo $user->firstName.' '.$user->lastName;?>
				</span><br> <span><strong>Street: </strong>
				</span><span><?php echo $userAddress->streetName;?>
				</span><br> <span><strong>House Number: </strong>
				</span><span><?php echo $userAddress->houseNumber;?>
				</span><br> <span><strong>Postal Code: </strong>
				</span><span><?php echo $userAddress->postalCode;?>
				</span><br> <span><strong>City: </strong>
				</span><span><?php echo $userAddress->city;?>
				</span><br> <span><strong>Email: </strong>
				</span><span><?php echo $userAddress->email;?>
				</span><br> <span><strong>Tel: </strong>
				</span><span><?php echo $userAddress->phoneNumber;?>
				</span>
			</div>
		</div>
	</div>
	<div class="detailBtn pull-right">
		<button class="btn btn-primary" onclick="history.go(-1);">Back</button>
	</div>
</div>
