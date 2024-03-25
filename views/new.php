<?php 
date_default_timezone_set('Asia/Manila');
include 'header.php';
?>


<div class="col-sm-9 col-lg-10 col-md-10">

    <div class="row" style="margin-top:3%">
        <ol class="breadcrumb">
            <li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Borrow</li>
        </ol>
                
            <div class="row">
                <br/>
                <br/>
                
                <div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-3">
                    <div class="panel panel-primary custom-panel">
                        <div class="panel-heading">
                            <i class="fa fa-plus-circle"></i>
                            Borrow Items
                        </div>
                        <div class="panel-body">
                            <form class="frm_borrow">
                                <div class="form-group">
                                    <label class="">Select Borrower</label>
                                    <select class="form-control input-lg" name="borrow_membername" required="required">
                                        <option></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="">Select Items (maximum of 5 items)</label>
                                    <select class="form-control input-lg borrowitem" name="borrowitem[]" multiple="multiple" required="required">
                                        <option></option>
                                    </select>
                                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['admin_id']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Select Room</label>
                                    <select class="form-control" name="reserve_room" required></select>
                                </div>
                                <div class="form-group">
                                    <label class="">Time Limit</label>
                                    <input name="expected_time_of_return" id="timeLimit" type="text" class="form-control" value="<?php echo date('Y-m-d h:i A'); ?>" />
                                </div>
                                <div class="form-group">
                                    <div class="text-center">
                                        <button class="btn btn-primary" type="submit">
                                            Confirm Borrow
                                            <i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
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
                    maxDate: 0,
                    format:'Y-m-d h:i A',
                    step: 15
                });
            });
        </script>
