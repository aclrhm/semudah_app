<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];
$update = $db->update("menu", $id, [
    "nama" => $_POST['nama'],
    "harga" => $_POST['harga']
]);

echo"<script>alert('Data berhasil diubah')</script>";
header("location: ../index.php");
