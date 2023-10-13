<?php
include("config.php");
session_start();

if (isset($_POST["login"])) {

  $email = $_POST["email"];
  $pass = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM tb_users WHERE email = '$email'");

  if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);

    $_SESSION["login"] = true;
    $_SESSION["email"] = $row["email"];
    header("location: ../index.php");
    
  } $error = true;
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="icon" href="../img/logo semudahhhh 1.svg">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- my font -->
  <script src="https://kit.fontawesome.com/ae0789ef25.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Concert+One&family=Dancing+Script&family=Fredoka:wght@500&family=Lato&family=News+Cycle&family=Roboto&family=Secular+One&display=swap" rel="stylesheet">
  <!-- Data Aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- End -->

  <title>Admin</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-6 kanan">
        <img src="../img/belakang.svg" alt="" class="foto">
      </div>

      <div class="col-6 form">
        <form method="post">
          <img src="../img/logo semudahhhh 1.svg" alt="">
          <h1 class="logo text-center mt-3">SEMUDAH</h1>
          <p>Masuk ke dalam Semudah Admin</p>
          <div class="mb-3 mt-4">
            <label for="exampleInputEmail1" class="form-label">Email*</label>
            <input type="text" class="form-control" name="email" style="border: 1px solid #003974; border-radius: 8px;">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password*</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" style="border: 1px solid #003974; border-radius: 8px;">
          </div>

          <?php if (isset($error)) : ?>
            <i style="color:red" ;>Password yang anda masukkan salah</i>
          <?php endif; ?>

          <br>

          <button type="submit" style="border-radius: 21px;" name="login">Submit</button>
        </form>

      </div>
    </div>
  </div>






  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>