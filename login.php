<?php
if(isset($_SESSION["id"])) {
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Revenue Recovery - Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div align="center">
            <img src="images/coat.png" width="100" height="100"/>
            </div>
            <div class="panel-heading text-center">eProcurement</div>
            <div class="panel-body">
                <form role="form" method="post">
                    <fieldset>
                        <?php
                        if(isset($_POST["login"])){
                            $email = trim($_POST["email"]);
                            $password = trim(md5($_POST["password"]));

                            include "includes/config.php";
                            $sql = "SELECT*FROM auditors WHERE email=? AND password=?";
                            $run_query = $con->prepare($sql);
                            $run_query->bindValue(1,$email);
                            $run_query->bindValue(2,$password);
                            $run_query->execute();
                            // $count = mysqli_num_rows($run_query);
                            $COUNT = $run_query->rowCount();
                            if ($COUNT==1) {
                                $row = $run_query->fetch(PDO::FETCH_OBJ);
                                $_SESSION["id"] = $row->ID;
                                $_SESSION["email"] = $row->email;
                                $_SESSION["username"] = $row->username;
                                $_SESSION["AccessType"] = $row->accountLevel;
                                $_SESSION["firstName"]= $row->firstName;
                                $_SESSION["surname"]= $row->surname;
                                session_start();
                                header("Location:index.php");
                            }else{
                                echo "";
                                echo" <div class='alert alert-danger'>
                            <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>Your Username and password are invalid</b>
                                                    <ul>
                                                    <li>Email -> $email</li>
                                                    </ul>
                            </div> ";
                            }
                        }else{
                            $username ="";
                            $password="";
                        }
                        if(isset($_GET['logout']) && $_GET['logout']==1){
                            echo " <div class='alert alert-success'>
                            <a href='#' class='close' data-dismiss ='alert' aria-label ='close'>&times;</a><b>You are now loggedout Successfully.</b>
                                                     </div> ";

                        }
                        ?>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <input type="submit"  name="login" id="login" class="btn btn-primary" value="Login"></fieldset>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
