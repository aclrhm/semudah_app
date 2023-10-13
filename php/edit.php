<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("menu/$id");
$data = json_decode($retrieve, 1);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../img/logo semudahhhh 1.svg">
        
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous">
        <!-- my font -->
        <script src="https://kit.fontawesome.com/ae0789ef25.js"
            crossorigin="anonymous"></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
            integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Concert+One&family=Dancing+Script&family=Fredoka:wght@500&family=Lato&family=News+Cycle&family=Roboto&family=Secular+One&display=swap"
            rel="stylesheet">
        <!-- Data Aos -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <!-- End -->

        <title>Admin</title>
    </head>
<body>
    
<div class="container-fluid">
    <div class="row">
        <div class="col-3 kiri">
            <div class="logo mt-2">
            <img src="../img/Group 12.svg" alt="" style="width: 100px;
                height: 100px">
                <p class="mt-4">Semudah Admin</p>
            </div>
            <div class="foto container">
                <div class="satu d-flex">
                    <img src="../img/Vector.svg" alt="" style="width: 40px;
                    height: 40px;">
                    <a href="../php/add.php" class="mt-2 text-white" style="text-decoration: none;">Tambah Barang</a>
                </div>
                <div class="dua mt-4 d-flex">
                    <img src="../img/Vector (1).svg" alt="" style="width: 40px;
                    height: 40px;">
                    <a href="#" class="mt-2 text-white " style="text-decoration: none;" >Lihat Barang</a>
                </div>
                <div class="tiga d-flex">
                    <img src="../img/Vector (2).svg" alt="" style=" width: 30px;
                    height: 30px;">
                    <a href="#" class="mt-1 merah " style="text-decoration: none; margin-top:450px;" >Keluar</a>
                </div>
            
            </div>
        </div>
        <div class="col-9">
            <div class="kanan mt-3">
                

                <form method="post" action="action_edit.php" style="width: 50%;">
                <h1>Edit Barang</h1>
                <hr>
   <table border="0" width="500" class="mt-4">
      <tr>
         <td>Nama Barang</td>
         <td>:</td>
         <td><input type="text" name="nama" value="<?php echo $data['nama']?>" placeholder="Nama Barang" style="border: 1px solid #003974; border-radius: 8px;"></td>
      </tr>
      <tr class="mt-4">
         <td>Harga Barang</td>
         <td>:</td>
         <td><input type="number" name="harga" value="<?php echo $data['harga']?>" placeholder="Nama Barang" style="border: 1px solid #003974; border-radius: 8px;"></td>
      </tr>
      <tr>
         <td>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="submit" value="Save" style="background-color:#003974; border:none; color:white; width:220%; height:40px; border-radius:8px; margin-top: 30px;">
         </td>
      </tr>
   </table>
</form>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>