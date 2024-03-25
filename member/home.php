<?php 
date_default_timezone_set('Asia/Manila');
	include 'header.php';
?>
	
	<div class="row-fluid">
		<div class="col-md-12 ">
			<div class="col-sm-9 col-lg-12 col-md-10 ">
				
				
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">ISSUES</h1>
					</div>
				</div><!--/.row-->

				<div class="row">
					<div class="panel panel-default">
						<div class="panel-heading"><svg class="glyph stroked email"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-email"></use></svg>RAISE AN ISSUE</div>
						<div class="panel-body">
							<form class="form-horizontal client_reservation" action="" >
								<fieldset>
								<div class="form-group">
										<label  class="col-md-3 control-label">Select Room</label>
										<div class="col-md-5">
											<select class="form-control" name="reserve_room" required></select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="email">Date </label>
										<div class="col-md-5">
											<input type="text" class="form-control datepicker" name="reserved_date" required="required">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label" for="message">Time</label>
										<div class="col-md-5">
											<input type="time" placeholder="" class="form-control" name="reserved_time" required="required">
											<input type="hidden" name="client_id" value="<?php echo $_SESSION['member_id']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Items</label>
										<div class="col-md-5">
											<select class="form-control input-lg borrowitem" name="reserve_item[]" multiple="multiple" required="required" style="width: 100%">
												<option></option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Time limit</label>
										<div class="col-md-5">
											<input name="time_limit" id="timeLimit" type="text" class="form-control" value="" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Issue Details</label>
										<div class="col-md-5">
											<input name="i_status" id="i_status" type="text" class="form-control" value="" />
										</div>
									</div>
									
									<!-- Form actions -->
									<div class="form-group">
										<div class="col-md-8 widget-right">
											<button type="submit" class="btn btn-primary btn-md pull-right">Raise Issue</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				

			</div>
		</div>
	</div>



<?php include 'footer.php'; ?>

<script type="text/javascript">
$(document).ready(function(){
	$("#timeLimit").datetimepicker({
		minTime: '<?php echo date("H:i"); ?>',
		maxTime: '18:00',
		minDate: 0,
		format:'Y-m-d h:i A',
		step: 15
	});
});
</script>