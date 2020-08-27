<?php
include "includes/config.php";
include "includes/topHead.php";
include "includes/head.php"; ?>
<?php include "includes/sideNav.php"; ?>
<?php
$output = " ";
if(isset($_GET['AccCode'])) {
    $acCode = $_GET["AccCode"];
}
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
                            <!-- /.box-header -->
                            <div class="box-body">
                                <?php
                                $TranID  = $_GET["Tid"];
                                $sql = "SELECT*FROM accounttran WHERE id = $TranID";

                                $results = $con->query($sql);
                                $row = $results->fetch(PDO::FETCH_OBJ);

                                ?>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="paye_name" class="col-sm-2 control-label">PAYE</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="paye_name" id="paye_name" value="<?php echo $row->Paye;?>"  class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="cheqNum" class="col-sm-3 control-label">Cheq Number</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="cheqNum" id="cheqNum" value="<?php echo $row->cheqnum;?>" maxlength="20" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--First Row-->
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="details" class="col-sm-2 control-label">Details</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="details"  id="details" value="<?php echo $row->Details;?>" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="amount" class="col-sm-2 control-label">Amount</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="amount" id="amount" value="<?php echo $row->Amount;?>" maxlength="20" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--Second Row-->
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="accountCode" class="col-sm-3 control-label">Account Code</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="accountCode" id="accountCode" value="<?php echo $row->AccountCode;?>" class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="t_name" class="col-sm-3 control-label">--------------</label>
                                            <div class="col-sm-10">
                                                <a href="#" class="btn btn-warning" tranID="<?php echo $row->id; ?>" id="EditTran">Edit Transaction</a>
                                                <a href="AccountTransaction.php" class="btn btn-secondary">Cancel</a>
                                            </div>

                                        </div>

                                    </div>



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