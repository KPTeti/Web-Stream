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
    $Kode_QR_Port = $_POST['Kode_QR_Port'];
    $Nama_ODP = $_POST['Nama_ODP'];
    $Port_ODP = $_POST['Port_ODP'];
    $No_Service = $_POST['No_Service'];
    $SN_ONT = $_POST['SN_ONT'];

    $sql = "INSERT INTO maintenance (Nama_Teknisi, Kode_QR_Port, Nama_ODP, Port_ODP, No_Service, SN_ONT) VALUES ('$Nama_Teknisi', '$Kode_QR_Port', '$Nama_ODP', '$Port_ODP', '$No_Service', '$SN_ONT')";

    if (!mysqli_query($con, $sql))
    {
        echo 'Kode Angka QR sudah pernah dimasukkan.';
    }

    else
    {
        echo 'Data berhasil dimasukkan. Halaman akan direfresh dalam 5 detik.';
    }

header("refresh:5; url=maintenance.php");





?>