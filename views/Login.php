<?php include '../Controllers/login-controller.php'?>

<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="container">
            <div class="upper">
                <h3>Login</h3>
            </div>
            <form class="form" id="form" method="post" action="#" >
                <div class="form-control" id="form-control">
                    <label>Username:</label>
                    <input type="text" id="uname" name="uname" placeholder="  Enter Username">
                    <i id="nsuccess"class="fas fa-check-circle"></i>
                    <i id="nerror" class="fas fa-exclamation-circle"></i>
                    <small id="nameErr">Error message</small>
                </div>
                <div class="form-control1" id="form-control1">
                    <label>Password:</label>
                    <input type="password" id="pass" name="pass" placeholder="  Enter Password">
                    <i id ='psuceess'class="fas fa-check-circle"></i>
                    <i id = "perror" class="fas fa-exclamation-circle"></i>
                    <small id ="passErr">Error message</small>
                </div>
                <button type="submit" name="btnLogin">Login</button>
                <p>Don't have an account? <a href="Registration.php">Register</a></p>
            </form>
        </div>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        
    </body>
</html>