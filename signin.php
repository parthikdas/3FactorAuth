<?php
    session_start();
    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $que = $_POST['que'];
        if(!empty($email) && !empty($pass) && !empty($que)) {
            $query = "select * from users where Email = '$email'";
			$result = mysqli_query($conn, $query);
            if($result && mysqli_num_rows($result) > 0) {//if result is +ve and number of rows is > 0
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $pass) { //if the password is correct
					if($user_data['que'] === $que) { //if the ans is correct
                        header("Location: verify.php");
					    die;
                    } else {
                        echo "<script>alert('wrong ans')</script>";
                    }
				} else {
                    echo "<script>alert('Wrong password')</script>";
                }
            } else {
                echo "<script>alert('No such user')</script>";
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
    <title>Signin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form class="container" action="signin.php" method="POST">
        <h2 class="login-title">Sign in</h2>
        <div class="login-form">
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
                placeholder="*****"
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
            <button class="btn btn--form" id="submit" type="submit">Submit</button>
            <a href="index.php" style="text-decoration:none;text-align:center;">Register</a>
        </div>
    </form>
    <script src="script.js"></script>
</body>
</html>