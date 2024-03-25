<?php 
	include 'header.php';
?>
	

	<div class="col-sm-9 col-lg-12 col-md-10  ">
		
		<div class="row" style="margin-top:3%">
			<ol class="breadcrumb">
				<li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Borrowed Items</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-bordered tbl_borrow">
							<thead>
								<tr>
									<th>Borrower Name</th>
									<th>Borrowed Date</th>
									<th>Items Borrowed</th>
									<th>Room</th>
									<th>Action</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>



<?php include 'footer.php'; ?>