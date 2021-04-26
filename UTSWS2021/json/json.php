<?php

    require_once('koneksi.php');

    $query = "SELECT * FROM informatika";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        $result = array();
        while ($row = mysqli_fetch_array($sql)){
            array_push ($result,array(
                'id' => $row ['id'],
                'Nama' => $row['Nama'],
                'Npm' => $row['Npm'],
                'Kelas' => $row['Kelas'],
                'release_at' => $row['release_at'],
            ) );
        }
        
    
    echo json_encode ( array('informatika' => $result) );
    }
?>