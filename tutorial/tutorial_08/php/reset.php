<!DOCTYPE html>
<?php
require_once("config.php");
?>
<html>

<head>
    <title>Rest Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <?php
                if (isset($_GET['code'])) {
                    $code = $_GET['code'];
                }
                //Form for submit 
                if (isset($_POST['sub_set'])) {
                    extract($_POST);
                    if ($password == '') {
                        $error[] = 'Please enter the password.';
                    }
                    if ($passwordConfirm == '') {
                        $error[] = 'Please confirm the password.';
                    }
                    if ($password != $passwordConfirm) {
                        $error[] = 'Passwords does not match.';
                    }
                    $fetchresultok = mysqli_query($conn, "SELECT email FROM resetpwd WHERE code='$code'");
                    if ($result = mysqli_fetch_array($fetchresultok)) {
                        $email = $result['email'];
                    }
                    if (isset($email) != '') {
                        $emailtok = $email;
                    } else {
                        $error[] = 'Link has been expired or something missing ';
                        $hide = 1;
                    }
                    //If there is no error the password will update
                    if (!isset($error)) {
                        $password = md5($password);
                        $updatepass = mysqli_query($conn, "UPDATE users SET password='$password' WHERE email='$emailtok'");
                        if ($updatepass) {
                            $success = "<div><span style='font-size:80px;'>&#9989;</span><br> Your password has been updated successfully.. <br> <a href='login.php' style='color:#000;'>Login here... </a> </div>";

                            $resultdel = mysqli_query($conn, "DELETE FROM resetpwd WHERE code='$code'");
                            $hide = 1;
                        }
                    }
                }
                ?>
                <div class="login_form">
                    <form action="" method="POST">
                        <div class="form-group">
                            <?php
                            if (isset($error)) {
                                foreach ($error as $error) {
                                    echo '<p style="color:#FF0000;">'.$error.'</div><br>';
                                }
                            }
                            if (isset($success)) {
                                echo $success;
                            }
                            ?>
                            <?php if (!isset($hide)) { ?>
                                <label class="label_txt">Password </label>
                                <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="label_txt">Confirm Password </label>
                            <input type="password" name="passwordConfirm" class="form-control" required>
                        </div>
                        <button type="submit" name="sub_set" class="btn btn-primary btn-group-lg form_btn">Reset Password</button>
                    <?php } ?>
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
</body>

</html>