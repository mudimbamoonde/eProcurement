<?php
include "includes/config.php";
include "includes/topHead.php";
include "includes/head.php"; ?>
<?php include "includes/sideNav.php"; ?>
<?php
$output = " ";
$acCode = $_GET["AccCode"];
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
                    <div class="acct">
                        <!--form-->

                        <!-- /.box-header -->
                        <div class="box-body">
                            <form method="post" class="form-horizontal">
                                <div  id="message"> <!---Message field-->
                                </div>
                                <p><br></p>
                                <div class="box-body">
                                    <div class="acct">
                                        <table class="table table-bordered table-hover table-secondary">
                                            <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Date</th>
                                                <th>PAYE</th>
                                                <th>Cheq No</th>
                                                <th>Details</th>
                                                <th>Amount</th>
                                                <th>Account Code</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody >
                                            <?php
                                            $accessCode= $_GET["AccCode"];

                                            $selectTran = "SELECT*FROM accounttran WHERE status='processing' AND  id=$accessCode";
                                            $results = $con->query($selectTran);
                                            $count  = $results->rowCount();
                                            if ($count==1){
                                                $n= 0;
                                                while ($row = $results->fetch(PDO::FETCH_OBJ)) {

                                                    $n++;
                                                    $id = $row->id;
                                                    $date = $row->Date;
                                                    $Paye = $row->Paye;
                                                    $cheqnum = $row->cheqnum;
                                                    $Detail = $row->Details;
                                                    $Amount = $row->Amount;
                                                    $accountCode = $row->AccountCode;
                                                    $status = $row->status;

                                                    $finalAmo = number_format($Amount);

                                                    echo " <tr>
                       <td>$n</td>
                       <td>$date</td>
                       <td>$Paye</td>
                       <td>$cheqnum</td>
                       <td>$Detail</td>
                       <td>$finalAmo</td>
                       <td>$accountCode</td>
                       <td>$status</td>
                       
                     
                   </tr>";
                                                }

                                            }else{
                                                header("location:process_transaction.php");
                                            }



                                            ?>

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="t_name" class="col-sm-2 control-label">Account Code</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="idic"  hidden value="<?php echo $id ?>" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="t_name" class="col-sm-2 control-label">Account Code</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="accountCode"  value="<?php echo $accountCode ?>" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="t_name" class="col-sm-2 control-label">Financial Regulation</label>
                                                    <div class="col-sm-10">
                                                        <select name="finReg" class="form-control">
                                                            <option>Select Financial Regulation</option>
                                                            <option>MGT Public funds 20001</option>
                                                            <option>Accounting Units 20002</option>
                                                            <option>Estimates 20003</option>
                                                            <option>Expenditure and Payments 20004</option>
                                                            <option>Payroll Management 20005</option>
                                                            <option>Imprest Management 20006</option>
                                                            <option>Not Applicable</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="t_name" class="col-sm-2 control-label">Government Circular</label>
                                                    <div class="col-sm-10">
                                                        <select name="governC" class="form-control">
                                                            <option >Select Government Circular</option>
                                                            <option>Transport MGT  7/2012 30001</option>
                                                            <option>Travel Abroad 10/2012 30002</option>
                                                            <option>SubFees Prof  Bodies B/2014 30003</option>
                                                            <option>SubAllowance B12/2012 30004</option>
                                                            <option>Not Applicable</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="t_name" class="col-sm-2 control-label">Procurement Regulation</label>
                                                    <div class="col-sm-10">
                                                        <select name="procRegulation" class="form-control">
                                                            <option >Select Procurement Regulation</option>
                                                            <option>Bid Evaluation  40001</option>
                                                            <option>Procure Rules 40002</option>
                                                            <option>Tender Process 40003</option>
                                                            <option>Contract Management 40004</option>
                                                            <option>Not Applicable</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="t_name" class="col-sm-2 control-label"> Stores Regulation</label>
                                                    <div class="col-sm-10">
                                                        <select name="storeRegulation" class="form-control">
                                                            <option >Select Stores Regulation</option>
                                                            <option>Receipt 50001</option>
                                                            <option>Disposal 50002</option>
                                                            <option>Physical Count 0003</option>
                                                            <option>Asset 50004</option>
                                                            <option>Not Applicable</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>



                                    <!--Second Row-->
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <a href="#" class="btn btn-info" id="PassedTransaction">Transaction Passed</a>
                                                    <a href="#" class="btn btn-danger" reject="<?php echo $id ?>" id="rejectTrans">Transaction Refer Back</a>
                                                    <a href="AccountTransaction.php" class="btn btn-secondary">Cancel</a>
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