<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="row">
            <div class="col">
                <h1 style="text-align: center; color: aliceblue;"> Sign up </h1>
                <p style="text-align: center;"> Create your account </p>
                <form action="signup_process.php" method="POST">
                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required><br><br>
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required><br><br>
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required minlength="8"><br><br>
                    <input type="password" name="confirm_password" class="form-control form-control-lg" placeholder="Confirm Password" required minlength="8"><br><br>
                    <input type="password" name="access_code" class="form-control form-control-lg" placeholder="Code"><br><br>
                    <button type="submit" class="btn btn-primary w-100">Sign Up</button><br><br>

                    <p style="text-align: center;"> Already have an account? <a href="login.php" style="color: plum;">Login</a></p>
                </form>
            </div>
        </div>
    </div>






    <script src="js/bootstrap.js"></script>
</body>
</html>