<?php
session_start();
$state = $_SESSION['state'];
if ($state != "login") {
  header('Location: index_login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Data Validation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
       <div id="branding">
         <a href="index.php">
           <img src="img\telkom.png" style="width:250px;height: auto; padding: 15px;">
         </a>
       </div>
   </header>

  <section id="headtext">
    <div class="container">
      <h2> Data Validation & Labelling </h2>
    </section>

    <section id="choicetext">
      <div class="container">
        <h4> Pilih stream di bawah! </h4>
      </section>

  <section id="validation">
    <div class="container">
        <a href="deployment.php"><button type="submit" class="button_1"> Deployment </button></a>
      <h3> </h3>
        <a href="provisioning.php"><button type="submit" class="button_1"> Provisioning </button></a>
      <h3> </h3>
        <a href="migration.php"><button type="submit" class="button_1"> Migration </button></a>
      <h3> </h3>
        <a href="assurance.php"><button type="submit" class="button_1"> Assurance </button></a>
      <h3> </h3>
        <a href="maintenance.php"><button type="submit" class="button_1"> Maintenance </button></a>
        <h2> ___________________ </h2>
        <a href="logout.php"><button type="submit" class="btn btn-warning">Logout</button></a>
      </div>
        </section>

  <footer>
    <p> Telekomunikasi Indonesia, Copyright &copy;2017 </p>
  </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
