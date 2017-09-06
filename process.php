<?php
$con = mysqli_connect('127.0.0.1', 'root', '');

if (!$con)
    {
        echo 'Tidak Tersambung ke Server';
    }

    if (!mysqli_select_db($con, 'login'))
    {
        echo 'Database Not Selected';
    }

session_start();
if(isset($_POST['btn-login']))
{
    $Username = $_POST['user'];
    $Password = $_POST['pass'];
    $result = mysqli_query($con, "select * from user where Username = '$Username' and Password = '$Password'");
    
    if (!mysqli_num_rows($result) == 1) {
        echo "Login gagal";
    }
        
        else {
            $_SESSION['Username'] = $Username;
            header('Location: index.html');
        }     
}

    

/*
$Username = $_POST['user'];
$Password = $_POST['pass'];

//mencegah SQL injection
$Username = stripcslashes($Username);
$Password = stripcslashes($Password);
$Username = mysql_real_escape_string($Username);
$Password = mysql_real_escape_string($Password);

//connect ke server & memilih database
mysql_connect("127.0.0.1", "root", "");
mysql_select_db("login");

//query database untuk user
$result = mysql_query("select * from user where Username = '$Username' and Password = '$Password'")
or die("Failed to query database ".mysql_error());

$row = mysql_fetch_array($result);

if ($row['Username'] == $Username && $row['Password'] == $Password)
{
    header('Location: index.html');
}
else
{
    echo "Login gagal";
}
*/
?>