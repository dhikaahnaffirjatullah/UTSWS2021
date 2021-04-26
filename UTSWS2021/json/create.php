<?php

    require_once('koneksi.php');

    $Nama = $_POST['Nama'];
    $Npm = $_POST['Npm'];
    $Kelas = $_POST['Kelas'];
   
   

    $query = "INSERT INTO informatika(Nama,Npm,Kelas)VALUES('$Nama','$Npm','$Kelas')";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        echo json_encode ( array('message' => 'created!') );
    }else {
        echo json_encode ( array('message' => 'error') );
    }
?>