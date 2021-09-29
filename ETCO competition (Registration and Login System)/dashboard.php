<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title>Welcome</title>
    
    <style>
        body{ 
            font: 14px sans-serif; 
            text-align: center; 
            height: 100%;
            margin: 0;
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(149,199,20,1) 0%, rgba(0,212,255,1) 96%);
        }
    </style>
</head>
<body>
    <div class="myDashboard">
    <h1 class="my-5">Hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our Website.</h1>
    <p>
        
        <a href="logout.php" class="btn btn-danger ml-3">Logout</a>
    </p>
</div>
</body>
</html>