<?php
include "includes/config.php";
$output = " ";
if (isset($_POST["SelectTransaction"])){

    $selectTran = "SELECT*FROM accounttran WHERE status='Not Cleared'";

    $results = $con->query($selectTran);
    $n= 0;
    $count = $results->rowCount();
    if ($count>0){
        while ($row = $results->fetch(PDO::FETCH_OBJ)){
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

            $output .=" <tr>
                       <td>$n</td>
                       <td>$date</td>
                       <td>$Paye</td>
                       <td>$cheqnum</td>
                       <td>$Detail</td>
                       <td>$finalAmo</td>
                       <td>$accountCode</td>
                       <td>$status</td>
                       <td>
                            <div class='dropdown'>
                              <button type='button' class='btn btn-primary dropdown-toggle' id='dropmItenu' aria-haspopup='true'aria-expanded='false' data-toggle='dropdown'>
                                <i class='fa fa-cogs'></i>Action</button>
                              <ul class='dropdown-menu' aria-labelledby='dropmItenu'>
                               <li class=\"dropdown-item\"><a href='editTran.php?Tid=$id'> <span class='fa fa-pencil' ></span>Edit</a></li> 
                               <li class=\"dropdown-item\"><a href='#' id='transferIA' referenceIA='$id'><span class=\"fa fa-send\"></span>Referrer to IA</a> </li>
                               <li class=\"dropdown-item\"><a href='#' id='deleteTran' deleteItem='$id'><span class=\"fa fa-trash\"></span>Delete</a></li>
             
                              </ul>
                            </div>
                            </td>
                   </tr>";
        }
    }else{
        $output .=" <tfooter>
                       <th class='bg-danger'>No Transaction </th>
                      
                   </tfooter>";
    }


}

if (isset($_POST["SelectRejTransaction"])){

    $selectTran = "SELECT*FROM accounttran WHERE status='Rejected'";

    $results = $con->query($selectTran);
    $n= 0;
    $count = $results->rowCount();

    if ($count>0){
        $output .= "
         <h4 style=\"color:#770304\">Referred Back Transactions</h4>
            <hr>
            <table class='table table-bordered table-hover '>
                <thead class='bg-danger'>
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

                <tbody>

        
        ";
        while ($row = $results->fetch(PDO::FETCH_OBJ)){
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

            $output .=" <tr>
                       <td>$n</td>
                       <td>$date</td>
                       <td>$Paye</td>
                       <td>$cheqnum</td>
                       <td>$Detail</td>
                       <td>ZMW $finalAmo</td>
                       <td>$accountCode</td>
                       <td>$status</td>
                       <td>
                            <div class='dropdown'>
                              <button type='button' class='btn btn-danger dropdown-toggle' id='dropmItenu' aria-haspopup='true'aria-expanded='false' data-toggle='dropdown'>
                                <i class='fa fa-cogs'></i>Action</button>
                              <ul class='dropdown-menu' aria-labelledby='dropmItenu'>
                               <li class=\"dropdown-item\"><a  href='editTran.php?Tid=$id'> <span class='fa fa-pencil' ></span>Edit</a></li> 
                               <li class=\"dropdown-item\"><a href='#' id='transferIA' referenceIA='$id'><span class=\"fa fa-send\"></span>Referrer to IA</a> </li>
                               <li class=\"dropdown-item\"><a href='#' id='deleteTran' deleteItem='$id'><span class=\"fa fa-trash\"></span>Delete</a></li>
             
                              </ul>
                            </div>
                            </td>
                   </tr>";
        }
    }
    $output .=" </tbody>
            </table>";


}
//data-toggle="modal" data-target="#editC"
if (isset($_POST["unproceed"])){

    $selectTran = "SELECT*FROM accounttran WHERE status='processing'";

    $results = $con->query($selectTran);
    $n= 0;
    $count = $results->rowCount();
    if ($count>0) {
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

            $output .= " <tr>
                       <td>$n</td>
                       <td>$date</td>
                       <td>$Paye</td>
                       <td>$cheqnum</td>
                       <td>$Detail</td>
                       <td>ZMW $finalAmo</td>
                       <td>$accountCode</td>
                       <td>$status</td>
                       <td><a href='#' accontCod='$id' class='btn btn-success' id='ProcessTransaction'>Process Revenue</a></td>
                     
                   </tr>";
        }
    }else{
        $output .= " <tr>
                       <td class='bg-danger'>No Transaction </td>
                    
                   </tr>";
    }
}

if (isset($_POST["processing"])){
    $idc = $_POST["AccCode"];
    $selectTran = "SELECT*FROM accounttran WHERE status='processing' AccountCode=$idc";
    $results = $con->query($selectTran);
    $count = $results->rowCount();
    if ($count>0) {
        $n = 0;
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

            $output .= " <tr>
                       <td>$n</td>
                       <td>$date</td>
                       <td>$Paye</td>
                       <td>$cheqnum</td>
                       <td>$Detail</td>
                       <td>ZMW $finalAmo</td>
                       <td>$accountCode</td>
                       <td>$status</td>
                       
                     
                   </tr>";
        }
    }else{
        $output .= " <tr>
                       <td>No Transaction to Process</td>
                    
                   </tr>";
    }
}

if (isset($_POST["processed"])){


    $selectTran = "SELECT*FROM accounttran WHERE status='Audited'";

    $results = $con->query($selectTran);
    $n= 0;
    while ($row = $results->fetch(PDO::FETCH_OBJ)){
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

        $output .=" <tr>
                       <td>$n</td>
                       <td>$date</td>
                       <td>$Paye</td>
                       <td>$cheqnum</td>
                       <td>$Detail</td>
                       <td><b>ZMW</b> $finalAmo</td>
                       <td><a href='#' detailsID='$accountCode' id='moreD' data-toggle=\"modal\" data-target=\"#moreDatails\">$accountCode</a></td>
                       <td>$status</td>
                     
                   </tr>";
//
//        <tr>
//                    <td>1</td>
//                    <td>20-06-2018</td>
//                    <td>Mudimba Moonde</td>
//                    <td>4451202</td>
//                    <td>Salary Payments</td>
//                    <td>25,645</td>
//                    <td>745844</td>
//                    <td>cleared</td>
//                    <td><span class="btn btn-danger fa fa-trash-o"></span> </td>
//                </tr>
    }

}
///moreDatails procedd
if (isset($_POST["DetailedTransaction"])){
    $FileID1 = $_POST["FileID"];
    $check1 = "SELECT*FROM accounttran WHERE  AccountCode=$FileID1  AND status='Audited' ";
//SELECT * FROM `auditedtran` inner join accounttran on auditedtran.AccountCode = 45216
    $findOutput1 = $con->query($check1);
    $n= 0;
    $output .="<ul>";
    while ($row = $findOutput1->fetch(PDO::FETCH_OBJ)){
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

        $output .="<hr>";
        $output .="<li>Date: <b>$date</b> </li> ";
        $output .="<li>Paye: <b>$Paye</b></li> ";
        $output .="<li>Cheqnum: <b>$cheqnum</b></li> ";
        $output .="<li>Detail: <b>$Detail</b></li> ";
        $output .="<li>Amount: ZMW <b>$Amount</b></li> ";
        $output .="<li>Account Code: <b>$accountCode</b></li> ";
        $output .="<li>Status: <b>$status</b></li> ";


    }
    $FileID = $_POST["FileID"];
    $check = "SELECT*FROM auditedtran WHERE AccountCode=$FileID  AND status='Audited'  ";
//SELECT * FROM `auditedtran` inner join accounttran on auditedtran.AccountCode = 45216
    $findOutput = $con->query($check);
    while($row = $findOutput->fetch(PDO::FETCH_OBJ)){
        $FinacialRegulation = $row->FinacialRegulation;
        $GovernmentCircular = $row->GovernmentCircular;
        $ProcRegulation= $row->ProcRegulation;
        $StoresRegulations = $row->StoresRegulations;
        $OtherRegulation= $row->OtherRegulation;

        $output .=" <h1 style=\"color:#00547a\">Regulations</h1>";
        $output .="<hr>";
        $output .="<li>Financial Regulation: <b>$FinacialRegulation</b></li>";
        $output .="<li>Government Circular: <b>$GovernmentCircular</b></li>";
        $output .="<li>Procurement Regulation: <b>$ProcRegulation</b></li>";
        $output .="<li>Store Regulation: <b>$StoresRegulations</b></li>";
        $output .="<li>Other Regulation: <b>$OtherRegulation</b></li>";
        $output .="<hr>";
    }
    $output .="</ul>";

}

if (isset($_POST["Delete"])){
    $ItemID = $_POST["ItemID"];

    $deleteItem = $con->query("DELETE FROM accounttran WHERE id=$ItemID ");
    if ($deleteItem){
        $output .="<div class='alert alert-info'>
          <h4>Success!</h4>
           <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Transaction was successfully Deleted!</b>
        </div>";
    }else{
        $output .="<div class='alert alert-danger'>
          <h4>Failed!</h4>
           <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Failed to Transaction</b>
        </div>";
    }
}
if (isset($_POST["referenceTrans"])){
    $referID = $_POST["referID"];


    $ProcessTrn = $con->query("UPDATE accounttran SET status='processing' WHERE id=$referID");
    if ($ProcessTrn){
        $output .="<div class='alert alert-info'>
          <h4>Success!</h4>
           <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Transaction Under Processing!</b>
        </div>";
    }else{
        $output .="<div class='alert alert-danger'>
          <h4>Failed!</h4>
           <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Failed to Process Transaction...$con->error</b>
        </div>";
    }
}

//Reject Transaction
if (isset($_POST["RejectTransaction"])) {
    $reID = $_POST["refID"];

    $ProcessTrn = $con->query("UPDATE accounttran SET status='Rejected' WHERE id=$reID");
    if ($ProcessTrn) {
        $output .= "<div class='alert alert-warning'>
          <h4>Referred!</h4>
           <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Transaction Referred Back!</b>
        </div>";
    } else {
        $output .= "<div class='alert alert-danger'>
          <h4>Failed!</h4>
           <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Failed to Refere  Transaction...$con->error</b>
        </div>";
    }
}

//Edit Transaction
if(isset($_POST["EditTran"])){
    // data:{EditTran:1,paye_name:paye_name,cheqNum:cheqNum,details:details,amount:amount,accountCode:accountCode,tranID:tranID}
    $paye_name = $_POST["paye_name"];
    $cheqNum = $_POST["cheqNum"];
    $details = $_POST["details"];
    $amount = $_POST["amount"];
    $accountCode = $_POST["accountCode"];

    $tranID = $_POST["tranID"];

    $sql = "UPDATE accounttran SET Paye='$paye_name',cheqnum='$cheqNum',Details='$details',
              Amount='$amount',AccountCode='$accountCode' WHERE id='$tranID'";
    $changeSql = $con->query($sql);

    if ($changeSql) {
        $output .= "<div class='alert alert-info'>
          <h4>Success!</h4>
           <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Transaction Correction Made!</b>
        </div>";
    } else {
        $output .= "<div class='alert alert-danger'>
          <h4>Failed!</h4>
           <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Failed to Correct Transaction ...$con->error</b>
        </div>";
    }



}

if(isset($_POST["viewUser"])){
    $selectTran = "SELECT*FROM auditors";

    $results = $con->query($selectTran);
    $n= 0;
    $count = $results->rowCount();
    if ($count>0){
        while ($row = $results->fetch(PDO::FETCH_OBJ)){
            $n++;
            $id = $row->ID;
            $username = $row->username;
            $firstName = $row->firstName;
            $surname = $row->surname;
            $email = $row->email;
            $mobile  = $row->mobile;
            $accountLevel = $row->accountLevel;
            $status = $row->status;
            $pass = $row->password;


            if ($status==0){
                $st = "<span class='btn btn-danger'>Active</span>";
            }else{
                $st = "<span class='btn btn-success'>Active</span>";

            }

            $output .=" <tr>
                       <td>$n</td>
                       <td>$firstName  $surname</td>
                       <td>$email</td>
                       <td>$mobile</td>
                       <td>$accountLevel</td>
                       <td>$username</td>                  
                       <td>$st</td>
                     
                       <td>
                            <div class='dropdown'>
                              <button type='button' class='btn btn-primary dropdown-toggle' id='dropmItenu' aria-haspopup='true' aria-expanded='false' data-toggle='dropdown'>
                                <i class='fa fa-cogs'></i>Action</button>
                              <ul class='dropdown-menu' aria-labelledby='dropmItenu'>
                               <li class=\"dropdown-item\"><a href='#' id='editUser'><span class='fa fa-pencil' ></span>Edit</a></li>
                               <li class=\"dropdown-item\"><a href='#'><span class=\"fa fa-trash\"></span>Delete</a></li>
             
                              </ul>
                            </div>
                            </td>
                   </tr>";
        }
    }else{
        $output .=" <tfooter>
                       <th class='bg-danger'>No Records</th>
                      
                   </tfooter>";
    }
}
//create Admin
if (isset($_POST["CreateAdminAccount"])) {
    //CreateAdminAccount:1,access_level:position,username:username,password:password,AccountID:AccountID
    $accountLevel = $_POST["access_level"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $AccountID = $_POST["AccountID"];

//StaffID 	access_level 	username 	auditorID 	password
    $adim = "INSERT INTO auditor_staff (StaffID,access_level,username,aditorID,password) VALUES(NULL,'{$accountLevel}','{$username}','{$AccountID}','{$password}')";
    $insertAdmin = $con->query($adim);

    if ($insertAdmin) {
        $output .= "<div class='alert alert-info'>
          <h4>Success!</h4>
           <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Account Created!</b>
        </div>";
    } else {
        $output .= "<div class='alert alert-danger'>
          <h4>Failed!</h4>
           <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Failed to Create Account ...$con->error</b>
        </div>";
    }
}
echo $output;