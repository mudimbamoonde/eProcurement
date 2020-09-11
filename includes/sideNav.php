<?php require_once "config.php" ?>
<?php
if(!isset($_SESSION["id"])) {
    header("location:logout.php");
}

?>
<div id="sidebar-coll1apse" class="col-sm-3 col-lg-2 sidebar">
    	    <div class="profile-sidebar">
    	        <div class="profile-userpic">
    	            <!-- <img src="" class="img-responsive" alt=""> -->
    	        </div>
    	        <div class="profile-usertitle">
    	            <div class="profile-usertitle-name"><?php echo $_SESSION["firstName"]." ".$_SESSION["surname"]; ?></div>
    	            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
    	        </div>
    	        <div class="clear"></div>
    	    </div>

    	    <ul class="nav menu">
    	        <?php if ($_SERVER['PHP_SELF'] == '/InternalAuditF/index.php') { ?>
    	        <li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
    	        <?php 
				} else { ?>
					<li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
					<?php 
				} ?>

    	        <?php if ($_SERVER['PHP_SELF'] == '/InternalAuditF/AccountTransaction.php') { ?>
    	        <li class='active' title="Accounts Transaction Processing"><a href="AccountTransaction.php"><em class="fa fa-money">&nbsp;</em> Accounts Transaction P</a></li>
				<?php 
					} else { ?>
					<li title="Accounts Transaction Processing"><a href="AccountTransaction.php"><em class="fa fa-money">&nbsp;</em> Accounts Transaction P</a></li>
					<?php 
				   } ?>


                <?php if ($_SERVER['PHP_SELF'] == '/InternalAuditF/pro_revenue.php') { ?>
    	        <li class='active' title="Process Revenue"><a href="pro_revenue.php"><em class="fa fa-building">&nbsp;</em> Process Revenue</a></li>
				<?php
					} else { ?>
					<li title="Process Revenue"><a href="pro_revenue.php"><em class="fa fa-building">&nbsp;</em> Process Revenue</a></li>
					<?php
				   } ?>


                <?php if ($_SERVER['PHP_SELF'] == '/InternalAuditF/process_transaction.php') { ?>
    	        <li class='active' title="Process Revenue"><a href="process_transaction.php"><em class="fa fa-sellsy">&nbsp;</em> Process Payments </a></li>
				<?php
					} else { ?>
					<li title="Process Revenue"><a href="process_transaction.php"><em class="fa fa-sellsy">&nbsp;</em> Process Payments</a></li>
					<?php
				   } ?>



                <?php if ($_SERVER['PHP_SELF'] == '/InternalAuditF/pro_transaction.php') { ?>
    	        <li class='active' title="Process Revenue"><a href="pro_transaction.php"><em class="fa fa-ruble">&nbsp;</em> Audited Transactions </a></li>
				<?php
					} else { ?>
					<li title="Process Revenue"><a href="pro_transaction.php"><em class="fa fa-ruble">&nbsp;</em> Audited Transactions</a></li>
					<?php
				   } ?>


                <?php if ($_SERVER['PHP_SELF'] == '/InternalAuditF/createAdmin.php') { ?>
    	        <li class='active' title="Process Revenue"><a href="createAdmin.php"><em class="fa fa-users">&nbsp;</em> User Management </a></li>
				<?php
					} else { ?>
					<li title="Process Revenue"><a href="createAdmin.php"><em class="fa fa-users">&nbsp;</em> User Management</a></li>
					<?php
				   } ?>


<!--    	            <li><a href="index.html"><em class="fa fa-cogs">&nbsp;</em>Audit Tests</a></li>-->
    	            <!-- <li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
    	        <li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
    	        <li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
    	        <li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li> -->
    	            <!-- <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
    	                <em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
    	            </a>
    	            <ul class="children collapse" id="sub-item-1">
    	                <li><a class="" href="#">
    	                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
    	                    </a></li>
    	                <li><a class="" href="#">
    	                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
    	                    </a></li>
    	                <li><a class="" href="#">
    	                        <span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
    	                    </a></li>
    	            </ul>
    	        </li> -->
    	            <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    	    </ul>
    	</div>
    	<!--/.sidebar--> 