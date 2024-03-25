<?php
require_once 'session.php';
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title></title>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/bootstrap-table.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/datepicker3.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/styles.css">
	<!-- datatables -->
	<link rel="stylesheet" type="text/css" href="../assets/datatables/css/jquery.dataTables.min.css">

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/font-awesome.min.css">

	<!-- custom -->
	<link rel="stylesheet" type="text/css" href="../assets/mycustom/css/styles.css">

	<!-- toastr -->
	<link rel="stylesheet" type="text/css" href="../assets/toastr/css/toastr.css">

	<!-- select2 -->
	<link rel="stylesheet" type="text/css" href="../assets/select/dist/css/select2.min.css">

	<!-- amcharts -->
	<link rel="stylesheet" href="../assets/amcharts/css/export.css" media="all" />
	<link rel="stylesheet" type="text/css" href="../assets/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/datetimepicker/datetimepicker.css">
	<style>
		.d-flex {
			display: flex;
		}

		.glyph {
			width: 18px !important;
			height: 18px !important;
			margin-right: 5px !important;
		}

		.space-between {
			justify-content: space-between;
		}

		.pt-1 {
			padding-top: 5px;
		}

		.list-style-none {
			list-style: none;
			padding-left: 15px;
		}

		

		a:hover {
			text-decoration: none;
			background-color: #eee;
			border-radius: 20px;
		}

		.container-fluid {
			padding: 10px;
		}

		.user-menu {
			background-color: transparent !important;
			/* Set initial background to transparent */
		}

		.user-menu:hover {
			background-color: transparent !important;
			/* Keep background transparent on hover */
		}
	</style>
</head>

<body class="">


	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header d-flex space-between">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">TECH TRACK</a>
				<ul class="nav menu d-flex pt-1">
					<li class="">
						<a href="dashboard">
							<svg class="glyph stroked dashboard-dial">
								<use xlink:href="#stroked-dashboard-dial"></use>
							</svg>
							Dashboard
						</a>
					</li>
					<li class="parent drop-down-container">
						<a href="#sub-item-1" data-toggle="collapse">
							<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down">
									<use xlink:href="#stroked-chevron-down"></use>
								</svg></span>Records
						</a>
						<ul class="children collapse list-style-none drop-down" id="sub-item-1">

							<li>
								<a class="" href="reservation">
									<svg class="glyph stroked eye">
										<use xlink:href="#stroked-eye" />
									</svg>
									Issues
								</a>
							</li>


							<li>
								<a class="" href="new">
									<svg class="glyph stroked plus sign">
										<use xlink:href="#stroked-plus-sign" />
									</svg>
									New
								</a>
							</li>
							<li>
								<a class="" href="borrow">
									<svg class="glyph stroked download">
										<use xlink:href="#stroked-download" />
									</svg>
									Borrowed Items
								</a>
							</li>
							<li>
								<a class="" href="return">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark" />
									</svg>
									Returned Items
								</a>
							</li>
							<li>
								<a class="" href="assign">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark" />
									</svg>
									Assign
								</a>
							</li>
						</ul>
					</li>

					<li class="active">
						<a href="items">
							<svg class="glyph stroked desktop">
								<use xlink:href="#stroked-desktop" />
							</svg>
							Item
						</a>
					</li>
					<li>
						<a href="members">
							<svg class="glyph stroked male user ">
								<use xlink:href="#stroked-male-user" />
							</svg>
							Borrower
						</a>
					</li>

					<li>
						<a href="inventory">
							<svg class="glyph stroked clipboard with paper">
								<use xlink:href="#stroked-clipboard-with-paper" />
							</svg>
							Inventory
						</a>
					</li>
					<!-- <li>
				<a href="report">
					<svg class="glyph stroked line-graph">
						<use xlink:href="#stroked-line-graph"/>
					</svg>
					Graph
				</a>
			</li>-->
					<li>
						<a href="user">
							<svg class="glyph stroked female user">
								<use xlink:href="#stroked-female-user" />
							</svg>
							User
						</a>
					</li>

				</ul>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
								<use xlink:href="#stroked-male-user"></use>
							</svg>
							<?php echo $_SESSION['admin_name']; ?><span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="user_profile"><svg class="glyph stroked male-user">
										<use xlink:href="#stroked-male-user"></use>
									</svg> Profile</a></li>
							<li><a href="../class/logout/logout"><svg class="glyph stroked cancel">
										<use xlink:href="#stroked-cancel"></use>
									</svg> Logout</a></li>
						</ul>
					</li>


					<li class="dropdown pull-right notification">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i>
							<span id="reserveBadge" class="badge badge-primary"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="reservation">
									<span id="reserveBadge2" class="today_reservation badge"></span> - Today's
									Reservation
								</a>
							</li>
						</ul>
					</li>
					<li class="dropdown pull-right notification">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-clock-o"></i>
							<span id="dueBadge" class="badge badge-primary"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="borrow">
									<span id="dueBorrow" class="badge"></span> - Borrow Due
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>