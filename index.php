<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/custom/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/custom/css/bootstrap-table.css">
    <link rel="stylesheet" type="text/css" href="assets/custom/css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="assets/custom/css/datepicker3.css">
    <link rel="stylesheet" type="text/css" href="assets/custom/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/toastr/css/toastr.css">
    <link rel="stylesheet" type="text/css" href="assets/mycustom/css/styles.css">
	<style>
		.index-body {
    background-image: url('uploads/6938839_3409297.jpg');
    background-size: cover;
    background-position: center;
    height: 825px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.panel-default .panel-heading {
    background: #fff;
   
    color: #fff;
}
.panel-heading{
	text-align:center;
	background-color: transparent;
}
</style>
</head>
<body class="index-body">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 offset-md-3" style="margin-left:30%">
                <div class="panel panel-default" style="width:84%;background-color:#fff">
                    <div class="panel-heading" style="background-color:transparent;border-bottom:none;margin-bottom:35px"><h1 style="color:grey;font-family: times-new-roman">ADMIN LOGIN</h1></div>
                    <div class="panel-body">
                        <form class="frm_index">
                            <fieldset style="width: 82%;margin-left: 10%">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus="" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <button class="btn btn-primary btn-block">Log in</button>
                                <br>
                                <a href="./member/login" style="padding-left:28%">Go to Member's Page</a><br>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/custom/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/custom/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/toastr/js/toastr.min.js"></script>
    <script type="text/javascript" src="assets/mycustom/js/login.js"></script>
</body>
</html>
