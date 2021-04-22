<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <title>sign up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="../CSS/style.css" rel="stylesheet">
    <style>
        a.cancel:hover{
            background-color: red !important;
        }
    </style>
</head>

<body>
<script>
function myFunction() {
  alert("You have successfully created a user \n Login to read our books");
}
</script>
    <div class="container py-5">
        <div class="row">
            <div class="col col-md-12">
                <div class="col-md-12 text-center mb-5">

                    <a href="../logut/index.html"><img src="../img/login.png"></a>
                </div>
                <div class="row">
                    <div class="col-md-10 mx-auto">

                        <!-- form card register -->
                        <div class="card rounded-0" id="register-form">
                            <div class="card-header">
                                <h3 class="mb-0">Create Account</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="register.php">
                                <?php include('errors.php'); ?>
                                    <div class="form-group">
                                        <label for="uname1">Username</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="username" value="<?php echo $username; ?>" id="uname1" required="">

                                    </div>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" class="form-control form-control-lg rounded-0" name="email" value="<?php echo $email; ?>" id="email" required="" autocomplete="new-password">

                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password_1" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">

                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password_2" class="form-control form-control-lg rounded-0" id="pwd2" required="" autocomplete="new-password">

                                    </div>
                                    <div>
                                        <label class="custom-control custom-checkbox">
                                            <p>by creating an account you agree<br>to the terms of <a href="policy.html">service</a></p>
                                                       I have an account. <a href="login.php" class="login-form-link">Login.</a>
                                                      </label>
                                    </div>
                                    <button onclick="myFunction()" type="submit" class="btn btn-primary btn-lg float-right" id="btnLogin" name="reg_user">Register</button><a class="cancel btn" href="../logut/index.html" style="color: white; text-decoration: none; margin: 5px; background-color: #f44336;">Cancel</a>
                                </form>
                            </div>
                        </div>
                        <!-- /form card register end -->

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>