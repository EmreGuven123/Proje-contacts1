<?php 

include("baglanti.php");
if (isset($_POST["kaydet"])) {

$name=$_POST["kullaniciadi"];
$surname=$_POST["kullaniciSoyadi"];
$number=$_POST["TelNo"];

$ekle="INSERT INTO kisiler (KisiAdi, Surname , PhoneNumber) VALUES ('$name','$surname','$number')";
$calistirekle = mysqli_query($baglanti,$ekle);
if($calistirekle){
    echo'<div class="alert alert-success" role="alert">
 başarıyla kayıt edildi
  </div>';
  header("Location: Main.php");
  exit();
}
else{
'    <div class="alert alert-danger" role="alert">
bir problem oluştu
</div>';
}
mysqli_close($baglanti);
}




?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Üye kayıt işlemi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>




<div class="container p-5">

<div class="card p-5">
<form action="kayit.php" method="POST">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ad</label>
    <input type="text" class="form-control" id="exampleInputEmail1"name="kullaniciadi" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Soyad</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="kullaniciSoyadi">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telefon Numarası</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="TelNo">
  </div>

  <button type="submit" name="kaydet" class="btn btn-primary">Kaydet</button>
</form>
</div>
</div>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</body>
</html>