<?php
session_start();
$username = "Daman";
$password = "daman123uwo";

$Username = $_POST['user'];
$Password = $_POST['pass'];
$state = $_POST['state'];

if ($Username == $username && $Password == $password)
{
    $_SESSION['Username'] = $Username;
    $_SESSION['state'] = $state;
    header('Location: index.php');
}
else
{
    header('Location: index_login.php');
}

?>
