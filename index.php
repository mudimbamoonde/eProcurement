<?php
include "includes/config.php";
include "includes/topHead.php";
include "includes/head.php";
include "includes/sideNav.php";
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Rejected Account Transaction</h4>
                        <?php
                        $sl = $con->prepare("SELECT count(*) AS counts FROM accounttran WHERE status='Rejected'");
                        $sl->execute();
                        $count = $sl->rowCount();
                        echo "<div class='easypiechart' id='easypiechart-blue' data-percent='$count'><span class='percent'> $count </span></div>";
                        ?>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Pending Account Transaction</h4>
                        <?php
                        $sl = $con->prepare("SELECT*FROM accounttran WHERE status='processing'");
                        $sl->execute();
                        $count = $sl->rowCount();
                        echo "<div class='easypiechart' id='easypiechart-orange' data-percent='$count' ><span class='percent'>$count</span></div>";
                        ?>

					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Users</h4>
                        <?php
                        $sl = $con->prepare("SELECT*FROM auditors");
                        $sl->execute();
                        $count = $sl->rowCount();
                        echo "<div class='easypiechart' id='easypiechart-teal' data-percent='$count'><span class='percent'>$count</span></div>";
                        ?>

					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Audited Transaction</h4>
                        <?php
                        $sl = $con->prepare("SELECT*FROM auditors");
                        $sl->execute();
                        $count = $sl->rowCount();
                        echo "<div class='easypiechart' id='easypiechart-red' data-percent='$count'><span class='percent'>$count</span></div>";
                        ?>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>
<?php include "includes/footer.php"; ?>