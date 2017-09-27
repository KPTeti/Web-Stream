<?php
    $con = mysqli_connect('127.0.0.1', 'root', '');
    
    if (!$con)
    {
        echo 'Tidak Tersambung ke Server';
    }

    if (!mysqli_select_db($con, 'database_stream'))
    {
        echo 'Database Not Selected';
    }

    $Nama_Teknisi = $_POST['Nama_Teknisi'];
    $Kode_QR_ODP = $_POST['Kode_QR_ODP'];
    $Nama_ODP = $_POST['Nama_ODP'];
    $Kapasitas_ODP = $_POST['Kapasitas_ODP'];
    $Status_Port = $_POST['Status_Port'];
    $Koordinat_ODP = $_POST['Koordinat_ODP'];

    $sql = "INSERT INTO deployment (Nama_Teknisi, Kode_QR_ODP, Nama_ODP, Kapasitas_ODP, Status_Port, Koordinat_ODP) VALUES ('$Nama_Teknisi', '$Kode_QR_ODP', '$Nama_ODP', '$Kapasitas_ODP', '$Status_Port', '$Koordinat_ODP')";

    if (!mysqli_query($con, $sql))
    {
        echo 'Kode Angka QR sudah pernah dimasukkan.';
    }

    else
    {
        echo 'Data berhasil dimasukkan. Halaman akan direfresh dalam 5 detik.';
    }

header("refresh:5; url=deployment.php");





?>