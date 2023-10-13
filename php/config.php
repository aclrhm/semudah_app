<?php
$databaseURL = "https://original-meme-default-rtdb.asia-southeast1.firebasedatabase.app/";

$conn = mysqli_connect('localhost', 'root', '', 'semudah_app');

if(!$conn){
    echo "error";
} 

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    } return $rows;
}



