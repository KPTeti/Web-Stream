<?php
$username = "Daman";
$password = "daman123uwo";

$Username = $_POST['user'];
$Password = $_POST['pass'];

if ($Username == $username && $Password == $password)
{
    $_SESSION['Username'] = $Username;
    header('Location: index.php');
}
else
{
    header('Location: index_login.php');
}

?>