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
                <div class="text-left">
                    <a class="link" href="../index.php">Go Back</a>
                </div>
                <h1 class="text-center">Sign Up</h1>
                <hr>
                <form action="" method="post">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-mail"></i></span>
                        <input type="text" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <select class="form-control" name="gender" required>
                            <option disabled>Select your gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-gender"></i></span>
                        <input type="date" class="form-control" name="birthdate" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calender"></i></span>
                        <input type="text" class="form-control" placeholder="Password" name="pass" required>
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <input type="text" class="form-control" placeholder="Retype Password" name="repass" required>
                    </div>
                    <br>
                    <div class="text-right">
                        <a class="link" href="login.php">Already have an account?</a>
                        <br>
                        <br>
                        <input name="sign_up" class="btn btn-outline-success" value="Sign up"> &nbsp;
                        <input type="reset" class="btn btn-outline-primary" value="Reset">
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
        <br>
        <br>
        <?php include_once'footer.php'; ?>
    </body>
</html>