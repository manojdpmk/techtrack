<?php 
	include 'header.php';
?>
	<style>
		.row {
    margin-right: -15px;
    margin-left: -15px;
    margin-top: 2%;
}
	</style>


	<div class="col-sm-9 col-lg-12 col-md-10">
		
		<div class="row mt-3" >
			<ol class="breadcrumb">
				<li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class=""><a href="items">Items</a></li>
				<li class="active">Items Information</li>
			</ol>
			<div class="breadcrumb">
				<button class="btn btn-primary item-add" type="button">
					<i class="fa fa-plus"></i>
					Add Quantity
				</button>
				<button class="btn btn-primary item-edit" type="button">
					<i class="fa fa-edit"></i>
					Edit Item
				</button>
				<button class="btn btn-primary item-change" type="button">
					<i class="fa fa-arrows-alt"></i>
					Change Status
				</button>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table ">
							<thead>
							
							</thead>
							<tbody>
								<tr>
									<td style="text-align:center;" class="e_photo" ></td>
								</tr>
								<tr>
									<td class="success col-sm-6">Serial ID/ Device ID</td>
									<td class="e_id"></td>
								</tr>
								<tr>
									<td class="col-sm-6">Model</td>
									<td class="e_model"></td>
								</tr>
								<tr>
									<td class="success col-sm-6">Category</td>
									<td class="e_category"></td>
								</tr>
								<tr>
									<td class="col-sm-6">Brand</td>
									<td class="e_brand"></td>
								</tr>
								<tr>
									<td class="success col-sm-6">Description</td>
									<td class="e_description"></td>
								</tr>
								<tr>
									<td class="col-sm-6">Quantity</td>
									<td class="e_stock"></td>
								</tr>
								<tr>
									<td class="success col-sm-6">Quantity Left</td>
									<td class="e_stockleft"></td>
								</tr>
								<!-- <tr>
									<td class="col-sm-6">Assign Room</td>
									<td class="e_assign"></td>
								</tr> -->
								<tr>
									<td class="col-sm-6">Type</td>
									<td class="e_type"></td>
								</tr>
								<tr>
									<td class="success col-sm-6">Status</td>
									<td class="e_status"></td>
								</tr>
								<tr>
									<td class="col-sm-6">MR</td>
									<td class="e_mr"></td>
								</tr>
								<tr>
									<td class="success col-sm-6">Price per Item</td>
									<td class="e_price"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!-- panel -->
			</div><!-- panel -->
		</div>
	</div>


<div class="right-sidebar equipment-info">
	<div class="sidebar-form">
		<div class="container-fluid equipment-forminfo"></div>
	</div>
</div>



<?php include 'footer.php'; ?>

<script type="text/javascript">
	
	var id = '<?php echo $_GET["item"]; ?>';

	equipment_info(id);

	function getequipmentid(){
		return id;
	}
	

</script>