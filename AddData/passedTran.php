<?php
include "../includes/config.php";

$finReg = $_POST["finReg"];
$governC = $_POST["governC"];
$procRegulation = $_POST["procRegulation"];
$storeRegulation = $_POST["storeRegulation"];
$accountCode = $_POST["accountCode"];
$id = $_POST["idic"];
$output = " ";

if($finReg =="Select Financial Regulation" || $governC =="Select Government Circular" ||
    $procRegulation == "Select Procurement Regulation" || $storeRegulation=="Select Stores Regulation"){
    $output .= "
      <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Please Select one of The Fields and Make sure to Select Not applicable!</b>
      </div> ";


}else{
    if(empty($finReg) && empty($governC) && empty($procRegulation)&& empty($storeRegulation)){
        $output .= "
      <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Please Fill all The Fields!</b>
      </div> ";
    }else {
//    id 	AccountCode 	FinacialRegulation 	GovernmentCircular 	ProcRegulation 	StoresRegulations 	OtherRegulation 	status
        $select =$con->query("SELECT id FROM accounttran WHERE status='Audited' AND id=$id");
        $xr = $select->rowCount();

        if ($xr>0){
            $output .="<div class='alert alert-danger'>
          <h4>Failed!</h4>
           <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Failed to Process Transaction. Because You have already Processed this transaction with the same ID ($id)</b>
        </div>";
        }else{


            $deleted = $con->query("UPDATE accounttran SET status='Audited' WHERE id=$id");



            $sql = "INSERT INTO auditedtran  VALUES(NULL,'$accountCode','$finReg','$governC','$procRegulation','$storeRegulation','Null','Audited')";
            $run_query =$con->query($sql);
            if ($run_query){
                $output .="<div class='alert alert-info'>
          <h4>Success!</h4>
           <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Transaction was successfully Created!</b>
        </div>";
            }else{
                $output .="<div class='alert alert-danger'>
          <h4>Warning!</h4>
           <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Failed To Create A Transaction!</b>
          
        </div>".mysqli_error($con);
            }
        }



    }


}
echo $output;


//<div class='alert alert-danger'>
//<a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a>
//<b>Transaction Done</b></div>