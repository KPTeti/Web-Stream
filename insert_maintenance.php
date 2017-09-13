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
    $Kode_Angka_QR = $_POST['Kode_Angka_QR'];
    $Nama_ODP = $_POST['Nama_ODP'];
    $Port_ODP = $_POST['Port_ODP'];
    $No_Service = $_POST['No_Service'];
    $SN_ONT = $_POST['SN_ONT'];

    $sql = "INSERT INTO maintenance (Nama_Teknisi, Kode_Angka_QR, Nama_ODP, Port_ODP, No_Service, SN_ONT) VALUES ('$Nama_Teknisi', '$Kode_Angka_QR', '$Nama_ODP', '$Port_ODP', '$No_Service', '$SN_ONT')";

    if (!mysqli_query($con, $sql))
    {
        echo 'Data Gagal Dimasukkan';
    }

    else
    {
        echo 'Data berhasil dimasukkan. Halaman akan direfresh dalam 5 detik.';
    }

header("refresh:5; url=maintenance.php");





?>