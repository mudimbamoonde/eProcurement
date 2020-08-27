<?php
session_start();
include "includes/topHead.php";
include "includes/head.php"; ?>
<?php include "includes/sideNav.php"; ?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="index.php">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Dashboard</li>
                <li class="active">Create User</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add User</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12">
                <div class="container-fluid">
                    <div class="jumbotron">
                        <div class="acct">
                            <!--form-->
                            <!-- /.box-header -->
                            <div class="box-body">
                                <h1 style="color:#00547a">Create User</h1>
                                <hr>

                                <div id="AdminAccount">


                                    <form method="post">
                                        <div id="Admin_msg"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="f_name">First Name</label>
                                                <input type="text" class="form-control" id="f_name" name="f_name"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="l_name">Last Name</label>
                                                <input type="text" class="form-control" id="l_name" name="l_name"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"/>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="Mobile">Mobile</label>
                                                <input type="text" class="form-control" id="Mobile" name="Mobile"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="repassword">Re-enter Password</label>
                                                <input type="password" class="form-control" id="repassword" name="repassword"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="type">Select The type of Account</label>
                                                <select id="type" name="type" class="form-control">
                                                    <option selected>Select Account Type</option>
                                                    <option>procurement</option>
                                                    <option>Accountant</option>
                                                    <option>master</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" name="username" id="username"/>
                                            </div>
                                        </div>

                                        <p><br/></p>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <a href="#" class="btn btn-success btn-lg" id="adminCreate" name="adminCreate">create Account</a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!-- /.box-body -->
                    </div>
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