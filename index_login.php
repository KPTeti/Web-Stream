<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-click.css">
</head>

<body>
    <form class="form-basic-login" method="POST" action="process.php">
        <h3 class="text-center">Silahkan Login</h3>
        <div class="form-group">
            <label class="control-label" for="text-input">Username </label>
            <input class="form-control" type="text" name="user" id="user">
        </div>
        <div class="form-group">
            <label class="control-label" for="password-input">Password </label>
            <input class="form-control" type="password" name="pass" id="pass">
        </div>
        <div class="form-group">
          <input type="hidden" name="state" value="login"/>
        </div>
        <div class="form-group">
            <button class="btn btn-success btn-block" type="submit" name="btn-login" value="login">Login </button>
        </div>
    </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
