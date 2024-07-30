<?php
    // Start session and include header
   
    include 'header.php';

    // Start output buffering to prevent premature output
    ob_start();

    // Check if admin type is set in the session
    if(isset($_SESSION['admin_type']) && $_SESSION['admin_type'] == 1) 
?>
<style>
	table#DataTables_Table_6 {
    width: 1357px !important;
}
</style>
	<div class="col-sm-9 col-lg-12 col-md-10">
		
		<div class="row" style="margin-top:3%">
			<ol class="breadcrumb">
				<li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Inventory</li>
			</ol>
			<div class="breadcrumb">
				<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-pills">
							<li class="active"><a href="#new" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;New</a></li>
							<li><a href="#old" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Old</a></li>
							<!-- <li><a href="#transferred" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Transferred</a></li> -->
							<li><a href="#report2" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Borrowed</a></li>
						</ul>
					</div>
					<!-- <div class="col-md-2">
						<button class="btn btn-primary add_equipment ">
							<svg class="glyph stroked plus sign">
								<use xlink:href="#stroked-plus-sign"/>
							</svg> &nbsp;
							Add Equipment
						</button>
					</div> -->
				</div>
			</div>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="new">
								<table class="table table_inventory_new" style="width:1345px">
									<thead>
										<tr>
											<th>Model</th>
											<th>Category</th>
											<th>Brand</th>
											<th>Quantity</th>
											<th>Quantity Left</th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="tab-pane fade" id="old">
								<table class="table table_inventory_old">
									<thead>
										<tr>
											<th>Model</th>
											<th>Category</th>
											<th>Brand</th>
											<th>Quantity</th>
											<th>Quantity Left</th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="tab-pane fade" id="lost">
								<table class="table table_inventory_lost">
									<thead>
										<tr>
											<th>Model</th>
											<th>Category</th>
											<th>Brand</th>
											<th>No. of items</th>
											<th>Remarks</th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="tab-pane fade" id="damaged">
								<table class="table table_inventory_damaged">
									<thead>
										<tr>
											<th>Model</th>
											<th>Category</th>
											<th>Brand</th>
											<th>No. of items</th>
											<th>Remarks</th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="tab-pane fade" id="pulledout">
								<table class="table table_inventory_all">
									<thead>
										<tr>
											<th>Category</th>
											<th>New</th>
											<th>(Old / Damage / Lost / Borrowed / Transferred)</th>
											<th>Total</th>
										</tr>
									</thead>
								</table>
							</div>
							
							<div class="tab-pane fade" id="transferred">
								<div class="row">
									<div class="col-sm-1 pull-right">
										<div class="form-group text-right">
											<button type="button" class="btn btn-primary" id="btnReloadTransferredList">Reload List</button>
										</div>
									</div>
									<div class="col-sm-3 pull-right">
										<div class="form-group">
											<select id="selectYearTransferred" class="form-control">
												<option value="">Show All</option>
												<?php
												$currentYear = date('Y');
												for($i = $currentYear; $i >= ($currentYear - 15); $i--): 
												?>
													<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
												<?php endfor; ?>
											</select>
										</div>
									</div>
									<div class="col-sm-3 pull-right">
										<div class="form-group">
											<select id="selectMonthTransferred" class="form-control">
												<option value="">Show All</option>
												<?php 
												$monthArr = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
												for($i = 0; $i < 12; $i++): 
													$month = ($i + 1);
												?>
													<option value="<?php echo $month; ?>"><?php echo $monthArr[$i]; ?></option>
												<?php endfor; ?>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<table class="table table_inventory_transfer" style="width:1345px">
											<thead>
												<tr>
													<th>Model</th>
													<th>Category</th>
													<th>Brand</th>
													<th>No. of items</th>
													<th>Room</th>
													<th>Person-in-charge</th>
													<th>User</th>
													<th>Date Transferred</th>
												</tr>
											</thead>
										</table>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="report2">
								<div class="row">
									<div class="col-sm-1 pull-right">
										<div class="form-group text-right">
											<button type="button" class="btn btn-primary" id="btnReloadList">Reload List</button>
										</div>
									</div>
									<div class="col-sm-3 pull-right">
										<div class="form-group">
											<select id="selectYear" class="form-control">
												<option value="">Show All</option>
												<?php
												$currentYear = date('Y');
												for($i = $currentYear; $i >= ($currentYear - 15); $i--): 
												?>
													<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
												<?php endfor; ?>
											</select>
										</div>
									</div>
									<div class="col-sm-3 pull-right">
										<div class="form-group">
											<select id="selectMonth" class="form-control">
												<option value="">Show All</option>
												<?php 
												$monthArr = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
												for($i = 0; $i < 12; $i++): 
													$month = ($i + 1);
												?>
													<option value="<?php echo $month; ?>"><?php echo $monthArr[$i]; ?></option>
												<?php endfor; ?>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<table class="table tbl_return">
											<thead>										
												<tr>										 
													<th>Borrower</th>
													<th>Items</th>
													<th>Borrowed Date</th>
													<th>Returned Date</th>
													
												</tr>
											</thead>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- panel -->
			</div><!-- panel -->
		</div><!-- row -->


	</div>



<?php include 'footer.php'; ?>