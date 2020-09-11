<?php
include "../includes/config.php";

$paye_name = $_POST["paye_name"];
$cheqNum = $_POST["cheqNum"];
$details = $_POST["details"];
$amount = $_POST["amount"];
$amountCode = $_POST["amountCode"];
$output = " ";

if(empty($paye_name) || empty($cheqNum) || empty($details)|| empty($amount)||empty($amountCode)){
    $output .= "
      <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Please Fill all The Fields!</b>
      </div> ";
}else {
/**
  id          | int(10)      | NO   | PRI | NULL    | auto_increment |
| Date        | date         | YES  |     | NULL    |                |
| cheqnum     | varchar(100) | NO   |     | NULL    |                |
| Details     | text         | YES  |     | NULL    |                |
| Amount      | varchar(100) | YES  |     | NULL    |                |
| AccountCode | varchar(100) | YES  |     | NULL    |                |
| status
 */
    $sql = "INSERT INTO accounttran(id,Date,paye,cheqnum,Details,Amount,AccountCode,status) VALUES(NULL,NOW(),'$paye_name','$cheqNum','$details','$amount','$amountCode','Not Cleared')";
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
echo $output;


//<div class='alert alert-danger'>
//<a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a>
//<b>Transaction Done</b></div>