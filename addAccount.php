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
            <li class="active">Account Transaction Process</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Transaction Process</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-6 col-md-12">
            <div class="container-fluid">
                <div class="jumbotron">
                    <h1 style="color:#00547a">Add Transaction</h1>
                    <hr>
                    <div class="acct">
                        <!--form-->
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form method="post" class="form-horizontal">
                                <div id="message">
                                    <!---Message field-->
                                </div>
                                <p><br></p>
                                <div class="box-body">
                                    <div class="row">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="t_name" class="col-sm-2 control-label">PAYE</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="paye_name" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="t_name" class="col-sm-2 control-label">Cheq Number</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="cheqNum" maxlength="20" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!--First Row-->
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="t_name" class="col-sm-2 control-label">Details</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="details" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="t_name" class="col-sm-2 control-label">Amount</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="amount" maxlength="20" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Second Row-->
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="t_name" class="col-sm-2 control-label">Account Code</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="amountCode" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <a href="#" class="btn btn-info" id="submitTransaction">Submit Transaction</a>
                                                    <a href="AccountTransaction.php" class="btn btn-secondary" id="submitTransaction">Cancel</a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <!--Box Body-->
                                </div>
                        </div>

                        <!-- /.box-footer -->
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                </section>
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