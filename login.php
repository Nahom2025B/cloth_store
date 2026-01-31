<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="row">
        <div class="col">
            <h1 style="text-align: center; color: white; font-weight: bolder;"> Welcome Back </h1>
            <p style="text-align: center;"> Enter your credentials here</p>
             <form action="login_process.php" method="POST">
                <input type="text" name="username" class="form-control form-control-lg" placeholder="Username"  id="usernameInput"><br><br>
                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" id="passwordInput"><br><br>
                <button type="submit" class="btn btn-primary w-100" id="loginButton">Login</button><br><br>

                <p style="text-align: center;"> <a href="" style="color: plum; ">Forgot Password?</a><br><br></p>
                <p style="text-align: center;"> Don't have an account? <a href="signup.php" style="color: plum;">Sign Up</a></p>
                
            </form>
        </div>
    </div>

</div>    




    <script src="js/bootstrap.js"></script>
    <script src="login.js"></script>
</body>
</html>