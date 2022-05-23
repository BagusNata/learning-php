<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body style="margin: 2rem;">
  <h2>Silahkan Login</h2>
  <form action="login_act.php" method="POST">
    <label> Username  : </label> <br>
    <input type="text" name="username"> <br>
    <label> Password  : </label> <br>
    <input type="password" name="password"> <br> <br>
    <input type="submit" name="login"> <br>
  </form>
</body>
</html>