<?php
session_start();
include_once 'server.php';
if(isset($_POST['submit']))
{
    $user_id = $_POST['user_id'];
    $result = mysqli_query($conn,"SELECT * FROM user_details where username='" . $_POST['username'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_user_id=$row['username'];
	$email_id=$row['email'];
	$password=$row['password'];
	if($user_id==$fetch_user_id) {
				$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: password@studentstutorial.com" . "\r\n" .
                "CC: somebodyelse@example.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid userid';
				}
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
        <title>Forgot password</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="../CSS/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="container py-5">
            <div class="row">
                <div class="col col-md-12">
                    <div class="col-md-12 text-center mb-5">

                        <a href="../logut/index.html"><img src="../img/login.png"></a>
                    </div>
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <!-- form card forgot -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="mb-0">Reset Password</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form" role="form" autocomplete="off" novalidate="" method="POST">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="email" class="form-control form-control-lg rounded-0" required="" autocomplete="new-password">

                                        </div>
                                        <div>
                                            <label class="custom-control custom-checkbox">
                         <a href="signup.html" class="register-form-link">Register</a>
                        </label>
                                            <label class="custom-control custom-checkbox">
                         <a href="login.html" class="login-form-link">Login</a>
                        </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg float-right" id="btnLogin">Send Code</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /form card forgot end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>