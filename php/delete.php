<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
if($id != ""){
   $delete = $db->delete("menu", $id);
   echo"<script>alert('Data berhasil dihapus')</script>";
   header("location: ../index.php");
}
