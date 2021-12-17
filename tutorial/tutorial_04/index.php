<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial04</title>
</head>

<body>
  <form action="./php/home.php" method="post">
    <fieldset>
      <legend>Login Form</legend>
      <label for="uname">Username</label>
      <input type="email" id="uname" name="uname" required><br>
      <label for="pwd">Passowrd</label>
      <input type="password" id="pwd" name="pwd" required><br>
      <input type="submit" value="Login" name="login">
    </fieldset>
  </form>
</body>

</html>