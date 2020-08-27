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
            <li class="active">Process Revenue</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Process Revenue</h1>
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

                            <table class="table table-bordered table-hover table-secondary">
                                <thead class="bg-green">
                                <tr>
                                    <th>S/N</th>
                                    <th>Date</th>
                                    <th>PAYE</th>
                                    <th>Cheq No</th>
                                    <th>Details</th>
                                    <th>Amount</th>
                                    <th>Account Code</th>
                                    <th>Status</th>
                                    <th>Control</th>
                                </tr>
                                </thead>
                                <tbody id="UnproceedTran">

                                </tbody>
                            </table>


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