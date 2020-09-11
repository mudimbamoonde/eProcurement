<?php
include "includes/topHead.php";
include "includes/head.php"; ?>
<?php include "includes/sideNav.php"; ?>
<?php

//session_start();
//if(!isset($_SESSION["id"])){
//    header("location:login.php");
//}
?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
            <li class="active">Edit Transaction</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Transaction</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-6 col-md-12">
            <div class="container-fluid">
                <div class="jumbotron">
                    <div class="acct">
                        <!--form-->
                        <a href="new_User.php" class="btn btn-info">New User</a>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered table-hover table-secondary">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Position</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Control</th>
                                </tr>
                                </thead>

                                <tbody id="ViewUsers">

                                </tbody>
                            </table>


                    </div>
                    <!-- /.row (main row) -->
                    <!-- /.content -->
                </div>
                <!--End form-->

            </div>
        </div>
        <!--/.row-->

    </div>






<?php include "includes/footer.php"; ?>