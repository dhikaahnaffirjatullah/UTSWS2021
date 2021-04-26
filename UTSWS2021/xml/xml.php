<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "mahasiswa") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');

$sql = "SELECT * FROM informatika";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('informatika');
    $track->addChild('id', $row['id']);
    $track->addChild('Nama', $row['Nama']);
    $track->addChild('Npm', $row['Npm']);
    $track->addChild('Kelas', $row['Kelas']);
}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>
