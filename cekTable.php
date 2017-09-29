<?php
	
	$con = mysqli_connect('127.0.0.1', 'root', '');
    mysqli_select_db($con, 'database_stream');

    //provisioning
	if (isset($_POST) & !empty($_POST)) {
		$kode_qr = mysqli_real_escape_string($con, $_POST['kode_qr']);
		$sql = "SELECT * from provisioning WHERE Kode_QR_Port = '$kode_qr'";

		$result = mysqli_query($con, $sql);
		$count = mysqli_num_rows($result);
		if ($count>0) {
				echo '<div style="color:red;"<b>'.$kode_qr.'</b> sudah pernah dimasukan</div>';
		}
		else{
			echo " ";
		}
	}

	//maintenance
	if (isset($_POST) & !empty($_POST)) {
		$kode_qr = mysqli_real_escape_string($con, $_POST['kode_qr']);
		$sql = "SELECT * from maintenance WHERE Kode_QR_Port = '$kode_qr'";

		$result = mysqli_query($con, $sql);
		$count = mysqli_num_rows($result);
		if ($count>0) {
				echo '<div style="color:red;"<b>'.$kode_qr.'</b> sudah pernah dimasukan</div>';
		}
		else{
			echo " ";
		}
	}

	//assurance
	if (isset($_POST) & !empty($_POST)) {
		$kode_qr = mysqli_real_escape_string($con, $_POST['kode_qr']);
		$sql = "SELECT * from assurance WHERE Kode_QR_Port = '$kode_qr'";

		$result = mysqli_query($con, $sql);
		$count = mysqli_num_rows($result);
		if ($count>0) {
				echo '<div style="color:red;"<b>'.$kode_qr.'</b> sudah pernah dimasukan</div>';
		}
		else{
			echo " ";
		}
	}

	//deployment
	if (isset($_POST) & !empty($_POST)) {
		$kode_qr = mysqli_real_escape_string($con, $_POST['kode_qr']);
		$sql = "SELECT * from deployment WHERE Kode_QR_ODP = '$kode_qr'";

		$result = mysqli_query($con, $sql);
		$count = mysqli_num_rows($result);
		if ($count>0) {
				echo '<div style="color:red;"<b>'.$kode_qr.'</b> sudah pernah dimasukan</div>';
		}
		else{
			echo " ";
		}
	}

	//migration
	if (isset($_POST) & !empty($_POST)) {
		$kode_qr = mysqli_real_escape_string($con, $_POST['kode_qr']);
		$sql = "SELECT * from migration WHERE Kode_QR_Port = '$kode_qr'";

		$result = mysqli_query($con, $sql);
		$count = mysqli_num_rows($result);
		if ($count>0) {
				echo '<div style="color:red;"<b>'.$kode_qr.'</b> sudah pernah dimasukan</div>';
		}
		else{
			echo " ";
		}
	}
	
	
?>