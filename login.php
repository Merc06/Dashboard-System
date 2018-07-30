<?php
    session_start();
    include_once "includes/db_con.php";
    
    if(isset($_SESSION['id'])){
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <title>LRWC-INVENTORY SYSTEM</title>
    <link rel="icon" type="image/png" href="assets/img/globe.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/light-bootstrap-dashboard.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
     <link rel="stylesheet" href="assets/css/style.css">   

</head>

    <body>

        <div class="container">
            <br><br><br>
            <center><h1 class="style"><img src="assets/img/lrlogo.png"></h1></center>

            <center>
                <b>Do you have an account? Please </b>
                <a href="#" data-toggle="modal" data-target="#login-modal">
                    <i><b>Login</b></i>
                </a><br>
                <i>Or call local#1142</i>
            </center>

        </div>
        
    </body>
    
    
    
<?php include "includes/modal.php"; ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src="ajax.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>

</html>
