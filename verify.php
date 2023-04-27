<?php
    session_start();
    include("connection.php");
    echo $_SESSION['user_data']['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pin verify</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script> 
    <script type="text/javascript">
        (function(){
            emailjs.init("e0XQkfvlUM9KN62hf");
        })();
    </script>      
</head>
<body>
    <div class="container" action="index.php" method="POST">
        <h2 class="login-title">Signup</h2>
        <div class="login-form">
            <div>
                <label for="pin">PIN </label>
                <input
                id="pin"
                type="text"
                placeholder="123"
                name="pin"
                required
                />
            </div>
        </div>
        <button class="btn btn--form" id="submit">Submit</button>
    </div>
    <script src="script.js"></script>
    <script>
        let rand = 0
        window.addEventListener("load", (event) => {
            alert(email)
            rand = Math.floor(Math.random() * 100 + 1); // generating verification code range 1 - 100
            let params = {
                name: 'pd4473@srmist.edu.in', // these 2 we need to change
                email: 'pd4473@srmist.edu.in',//its in script.js
                message: "The confirmation code is " + rand
            }
            const serviceId = "service_nmmarg5";
            const templateId = "template_o20b5au";
            emailjs
            .send(serviceId, templateId, params)
            .then((res)=>{
                console.log('Email sent')
            })
            .catch((err)=> console.log(err))
        })
        document.getElementById('submit').addEventListener('click', () => {
            let pin = document.getElementById('pin')
            if(pin.value == rand) {
                window.location.href = 'home.php'
            } else {
                alert('Wrong pin')
                window.location.href =  'index.php'
            }
        })

    // lalalalu69420@gmail.com
    // tanish@69420
    </script>
</body>
</html>