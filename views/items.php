<?php 
	include 'header.php';
?>
<style>
.bg-success {
    color: #fff;
    background-color: #30a5ff;
}
.sidebar-form{
	background-color: ;
}


</style>	


	<div class="col-sm-9 col-lg-12 col-md-10 ">
		<div class="row" style="margin-top:40px">
			<!-- <ol class="breadcrumb">
				<li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Item</li>
			</ol> -->
			<div class="breadcrumb">
				<button class="btn btn-primary col-sm-offset-10 add_equipment">
					<svg class="glyph stroked plus sign">
						<use xlink:href="#stroked-plus-sign"/>
					</svg> &nbsp;
					Add Item
				</button>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-bordered table_equipment ">
							<thead>
								<tr>
									<th>Image</th>
									<th>Model</th>
									<th>Category</th>
									<th>Brand</th>
									<th>Description</th>
									<th>Quantity</th>
									<th>Quantity Left</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
						</table>
					</div>
				</div><!-- panel -->
			</div><!-- panel -->
		</div>
	</div>


<div class="right-sidebar equipment-side">
	<div class="sidebar-form">
		<div class="container-fluid">
			<h4 class="alert bg-success">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Add Item
			</h4>
			<form class="frm_addequipment" enctype="multipart/form-data">
				<input type="hidden" name="key" value="add_equipment" />
				<div class="form-group">
					<label>Model</label>
					<input type="text" name="e_number" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Device ID</label>
					<input type="text" name="e_model" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Category</label>
					<select name="e_category" class="form-control" required>
						<option selected disabled>Please select category</option>
						<option>Mouse</option>
						<option>Keyboard</option>
						<option>Monitor</option>
						<option>Projector</option>
						<option>Remote</option>
						<option>DLP Screen</option>
						<option>Aircon</option>
						<option>TV</option>
						<option>AVR</option>
						<option>Extension</option>
						<option>UPS</option>
						<option>Router</option>
						<option>Table</option>
						<option>Chair</option>
						<option>Switch Hub</option>
					</select> 
				</div>
				<div class="form-group">
					<label>Brand</label>
					<input type="text" name="e_brand" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea name="e_description" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label>Quantity</label>
					<input type="number" name="e_stock" class="form-control" min="1" required>
				</div>
				<div class="form-group hide">
					<label>Assign Room</label>
					<select name="e_assigned" class="form-control" required>
					</select>
				</div>
				<div class="form-group">
					<label>Type</label>
					<select type="text" name="e_type" class="form-control" required>
						<option disabled selected>Please select type</option>
						<option>Consumable</option>
						<option>Non-consumable</option>
					</select>
				</div>
				<div class="form-group">
					<label>Status</label>
					<select name="e_status" class="form-control" required>
						<option disabled selected>Please select status</option>
						<option value="1">New</option>
						<option value="2">Old</option>
					</select>
				</div>
				
				<div class="form-group">
					<label>MR</label>
					<input type="text" name="e_mr" class="form-control" required>
				</div>
				
				<div class="form-group">
					<label>Price</label>
					<input type="text" name="e_price" class="form-control" required>
				</div>
				
				 <div class="form-group">
						<label >Photo</label>
						
						  <input type="file" name="e_photo" for="inputPassword3" class="form-control" required />
						
					  </div>
				
				
				<div class="form-group">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<button class="btn btn-danger btn-block cancel-equipment" type="button">
								<i class="fa fa-remove"></i>
								CANCEL
							</button>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<button class="btn btn-primary btn-block" type="submit">
								ADD
								<i class="fa fa-check"></i>
							</button>
						</div>
					</div>
				</div>
				<br>
				<br>
				<br>
			</form>
		</div>
	</div>
</div>


<div class="right-sidebar equipment-view">
	<div class="sidebar-form equipment-form">
		
	</div>
</div>



<?php include 'footer.php'; ?>