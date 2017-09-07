<?php
include 'process.php';

if($_SESSION['Username'] == $Username)
{
  header('Location: index.php');
}
else
{
  header("location: index_login.php");
}



?>