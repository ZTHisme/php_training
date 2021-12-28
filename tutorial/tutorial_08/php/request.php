<?php

/**
 * Using PHP Mailer library for send link to mail
 */
include("config.php");


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../library/vendor/phpmailer/phpmailer/src/Exception.php';
require '../library/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../library/vendor/phpmailer/phpmailer/src/SMTP.php';

if (isset($_POST['email'])) {
        $emailTo = $_POST['email'];
        $code = uniqid(true);
        //Inset data into database
        $sql = "INSERT INTO resetpwd (code,email) VALUES ('$code','$emailTo')";
        mysqli_query($conn, $sql);

        $mail = new PHPMailer();

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = 'e816e2aa1b0454';
            $mail->Password = '1ab9dceb06dc4c';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;
            $mail->setFrom('yourname@gmail.com', 'Reset Password');
            $mail->addAddress("$emailTo");
            $mail->addReplyTo('no-reply@yourname.com', 'No reply');

            $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/reset.php?code=$code";
            $mail->isHTML(true);
            $mail->Subject = 'Your Password Reset Link';
            $mail->Body    = "<h1>Password reset for your account...</h1>
                            Click this<a href='$url'> link</a> to change password";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();

            exit('Please check your email the request password link had been sent.');
        } catch (Exception $e) {
            echo "Mailer Error: {$mail->ErrorInfo}";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label class="label_txt">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <input type="submit" name="submit" class="btn btn-primary btn-group-lg form_btn" value="Send Password Reset Link">
        </form>
    </div>
</body>

</html>