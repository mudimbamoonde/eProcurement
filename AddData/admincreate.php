<?php
include "../includes/config.php";


$firstname =$_POST["f_name"];
$lname =$_POST["l_name"];
$email =$_POST["email"];

$Mobile =$_POST["Mobile"];
$username = $_POST["username"];
$password =$_POST["password"];
$repassword =$_POST["repassword"];
$type =$_POST["type"];

if (empty($firstname)||empty($lname)||empty($email) || empty($Mobile) || empty($password) ||empty($username)){
    echo "<div class='alert alert-warning'>
          <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Please Fill All fields!</b>
          <ol>
            <li>Fullname->$firstname $lname</li>
            <li>Email->$email</li>
            <li>Type -> $type</li>
            <li>Mobile-> $Mobile</li>
            <li>username-> $username</li>
            <li>password-> $password</li>
          </ol>
     </div> ";

}else{
    if ($password!=$repassword){
        echo "<div class='alert alert-warning'>
          <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Password does not match!</b>
     </div> ";
    }else{
        $check_valid = "SELECT*FROM auditors WHERE email=?";
        $check_result = $con->prepare($check_valid);
        $check_result->bindValue(1,$email);
        $check_result->execute();
        $count = $check_result->rowCount();
        if ($count>0){
            echo "<div class='alert alert-warning'>
          <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Email is Already been Used !</b>
     </div> ";
        }else{
 //ID 	int(20) 	NO 	PRI 	NULL	auto_increment
//firstName 	varchar(100) 	NO 		NULL
//surname 	varchar(100) 	NO 		NULL
//email 	varchar(200) 	NO 		NULL
//mobile 	int(11) 	YES 		NULL
//password 	varchar(10) 	NO 		NULL
//accountLevel 	varchar(100) 	YES 		NULL
//username 	varchar(100) 	YES 		NULL
//status


            $enpPassword = md5($password);
            $insertion_qury = "INSERT INTO auditors (id,firstname,surname,email,mobile,username,password,accountLevel,status) 
                                 VALUES (NULL,'{$firstname}','{$lname}','{$email}','{$Mobile}','{$username}',
                                 '{$enpPassword}','{$type}',1)";
            $result = $con->query($insertion_qury);

            if ($result){
                echo "<div class='alert alert-info'>
          <h4>Success!</h4>
           <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>User Created</b>
        </div>";
            }else{
                echo "<div class='alert alert-danger'>
          <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Failed to Create!</b>
          <ul>
             <li>'".mysqli_error($con)."'</li>
          </ul>
     </div> ";
            }
        }


    }


}

