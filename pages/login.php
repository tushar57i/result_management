<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../css/styles.css">
        <link rel="stylesheet" type="text/css" href="../css/all.min.css">
        <link rel="stylesheet" type="text/css" href="../css/fontawsome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <title>SignUp Now</title>
    </head>
    <body>
        <?php include_once 'header.php'; ?>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 jumbotron">
                <h1 class="text-center">Sign In</h1>
                <hr>
                <form action="" method="post">
                    Username:
                    <input name="email" type="text" placeholder="Type your email" class="form-control">
                    Password:
                    <input name="password" type="password" placeholder="type your password" class="form-control">
                    <br>
                    <input name="log_submit" type="submit" value="Sign In" class="btn btn-block btn-outline-primary">
                </form><br>
                <a href="forgotpass.php"> Forgot your password?</a>
                <br>
                <br>
                <a href="signup.php"><button class="btn btn-block btn-success">Sign Up</button></a>
            </div>
            <div class="col-md-3"></div>
            <br>
            <br>
        </div>
        <?php include_once'footer.php'; ?>
    </body>
</html>