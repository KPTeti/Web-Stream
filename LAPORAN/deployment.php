<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/styles.css">
     <link rel="stylesheet" href="css/style-click.css">
     <script type="js/jquery.min"></script>

</head>
<body>
	<div class="container">
		<div class="page-header" align="center"><h1>Hasil input stream Deployment</h1></div>
		<table class="table table-striped">
			<thead>
				<th>No</th>
				<th>Tanggal</th>
				<th>Nama Teknisi</th>
				<th>Kode QR Port</th>
				<th>Nama ODP</th>
				<th>Kapasitas ODP</th>
				<th>Status Port</th>
				<th>Port ODP</th>
				<th>Koordinat ODP</th>
			</thead>
			<tbody>
				<?php
					$con = mysqli_connect('127.0.0.1', 'root', '');
					mysqli_select_db($con, 'database_stream');
					$sql = "SELECT * FROM deployment";
					$run = mysqli_query($con, $sql);
					while ($rows = mysqli_fetch_array($run)) {
							echo '
							<tr>
							<td>'.$rows['No'].'</td>
							<td>'.$rows['Tanggal'].'</td>
							<td>'.$rows['Nama_Teknisi'].'</td>
							<td>'.$rows['Kode_QR_Port'].'</td>
							<td>'.$rows['Nama_ODP'].'</td>
							<td>'.$rows['Kapasitas_ODP'].'</td>
							<td>'.$rows['Status_Port'].'</td>
							<td>'.$rows['Port_ODP'].'</td>
							<td>'.$rows['Koordinat_ODP'].'</td>
							</tr>
							';
					}

				?>
			</tbody>
		</table>
	</div>

</body>
</html>
