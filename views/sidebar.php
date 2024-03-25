<?php 
	include 'header.php';
?>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 col-md-2 sidebar">
		<form role="search">
			<div class="form-group">
				<!-- <input type="text" class="form-control" placeholder="Search"> -->
			</div>
		</form>
		<ul class="nav menu">
			<li class="active">
				<a href="dashboard">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
					Dashboard
				</a>
			</li>
			
			
			<?php if ($_SESSION['admin_type'] == 3) { ?>
    <!-- <li>
        <a href="items">
            <svg class="glyph stroked desktop">
                <use xlink:href="#stroked-desktop"/>
            </svg>
            Items
        </a>
    </li>
	<li>
				<a href="members">
					<svg class="glyph stroked male user ">
						<use xlink:href="#stroked-male-user"/>
					</svg>
					Borrower
				</a>
			</li>
	<li>
				<a href="inventory">
					<svg class="glyph stroked clipboard with paper">
						<use xlink:href="#stroked-clipboard-with-paper"/>
					</svg>
					Inventory
				</a>
			</li>-->
			<li> 
				<a href="category">
					<svg class="glyph stroked clipboard with paper">
						<use xlink:href="#stroked-clipboard-with-paper"/>
					</svg>
					Category
				</a>
			</li>
			<li>
				<a href="cart">
					<svg class="glyph stroked clipboard with paper">
						<use xlink:href="#stroked-clipboard-with-paper"/>
					</svg>
					Product Request
				</a>
			</li>
<?php } ?>
<?php if($_SESSION['admin_type'] == 1 ){ ?>
			<li>
				<a href="members">
					<svg class="glyph stroked male user ">
						<use xlink:href="#stroked-male-user"/>
					</svg>
					Borrower
				</a>
			</li>
			<li>
				<a href="room">
					<svg class="glyph stroked app-window">
						<use xlink:href="#stroked-app-window"></use>
					</svg>
					Room
				</a>
			</li>
			
			<!-- <li>
				<a href="report">
					<svg class="glyph stroked line-graph">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-line-graph"/>
					</svg>
					Graph
				</a>
			</li> -->
			<li>
				<a href="user">
					<svg class="glyph stroked female user">
						<use xlink:href="#stroked-female-user"/>
					</svg>
					User
				</a>
			</li>
			<?php 
				}
				($_SESSION['admin_type'] == 1) ? include('include_history.php') : false;
			 ?>
			 <!-- <li>
				<a href="setting">
					<svg class="glyph stroked gear">
						<use xlink:href="#stroked-gear"></use>
					</svg>
					Setting
				</a>
			</li> -->
		</ul>
	</div><!--/.sidebar-->
    <?php include 'footer.php'; ?>