<?php
    session_start();
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successful login</title>
    <style>
        body {
            font-family: system-ui;
            background: #f06d06;
            color: white;
            text-align: center;
        }
        h1 {
            font-size: 6vw; 
        }
    </style>
</head>
<body>
    <h1>👋 Hello <?php echo $_SESSION['user_data']['Name'] ?>!</h1>
</body>
</html>