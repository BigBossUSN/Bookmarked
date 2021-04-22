<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <title>Log in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="../CSS/style.css" rel="stylesheet">

    <style>
        a.cancel:hover{
            background-color: red !important;
        }
        body {
            background-image: "../CSS/Background_loop.mp4";
        }
    </style>
</head>

<body>
<script>
function myFunction() {
  alert("you have successfully logged in");
}
</script>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 text-center mb-5">
                    <a href="../logut/index.html"><img src="../img/login.png"> </a>
                </div>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <!-- form card login -->
                        <div class="card rounded-0" id="login-form">
                            <div class="card-header">
                                <h3 class="mb-0">User Login</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="login.php">
                                    <?php include('errors.php'); ?>
                                    <div class="form-group">
                                        <label for="uname1">Username</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="username" id="uname1" required="">

                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control form-control-lg rounded-0" name="password" id="pwd1" required="">

                                    </div>
                                    <div>
                                        <label class="custom-control custom-checkbox">
                                     <a href="register.php" class="register-form-link">Sign Up</a>
                                    </label>
                                    </div>
                                    <button onclick="myFunction()" type="submit" class="btn btn-primary btn-lg float-right" name="login_user">Login</button><a class="cancel btn" href="../logut/index.html" style="color: white; text-decoration: none; margin: 5px; background-color: #f44336;">Cancel</a>
                                </form>
                            </div>
                        </div>
                        <!-- /form card login end-->


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>