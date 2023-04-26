<?php
    session_start();
    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $que = $_POST['que'];
        if(!empty($name) && !empty($email) && !empty($pass) && !empty($que)) {
			$query = "insert into users (Name,Email,password,que) values ('$name','$email','$pass', '$que')";
			$lol = mysqli_query($conn, $query);
            if($lol) {
                header("Location: signin.php");
            } else {
                echo "Something is wrong!!";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src=
    "https://smtpjs.com/v3/smtp.js">
  </script> -->
</head>
<body>
    <form class="container" action="index.php" method="POST">
        <h2 class="login-title">Signup</h2>
        <div class="login-form">
            <div>
                <label for="name">Name </label>
                <input
                id="name"
                type="text"
                placeholder="Ranajay Roy"
                name="name"
                required
                />
            </div>
            <div>
                <label for="email">Email </label>
                <input
                id="email"
                type="email"
                placeholder="a@a.com"
                name="email"
                required
                />
            </div>
            <div>
                <label for="password">Password </label>
                <input
                id="password"
                type="password"
                placeholder="******"
                name="password"
                required
                />
            </div>
            <div>
                <label for="que">What is the name of your first school? </label>
                <input
                id="que"
                type="text"
                placeholder="Dav"
                name="que"
                required
                />
            </div>
            <button class="btn btn--form" type="submit">Submit</button>
            <a href="signin.php" style="text-decoration:none;text-align:center;">Sign in</a>
        </div>
    </form>
</body>
</html>


<!-- only issue is to send the email from sigin to verify html page so that to change email 

