<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

$insert = $db->insert("menu", [
   "nama" => $_POST['nama'],
   "harga" => $_POST['harga']
   
]);

echo"<script>alert('Data berhasil dimasukkan')</script>";
header("location: ../index.php");
