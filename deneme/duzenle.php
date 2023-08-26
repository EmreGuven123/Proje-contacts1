<?php 

$kayitno = $_GET["ID"];

if ($kayitno > 0) {
    $host = "veritabani_host";
    $kullanici = "veritabani_kullanici";
    $parola = "veritabani_parola";
    $vt = "veritabani_adı";

    // MySQL bağlantısı oluştur
    $baglanti = mysqli_connect($host, $kullanici, $parola, $vt);
    mysqli_set_charset($baglanti, "UTF8");

    // Veritabanından kaydı sorgula
    $sorgu =  $baglanti->query("SELECT * FROM kisiler WHERE ID=$kayitno");
    
    // Sorgu sonucunu al
    $satir = $sorgu->fetch_assoc();
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Üye Güncelle İşlemi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-5">
      <div class="card p-5">
        <form action="kayit.php" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ad</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kullaniciadi" value="<?php echo $satir['kullaniciadi']; ?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Soyad</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kullaniciSoyadi">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telefon Numarası</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="TelNo">
          </div>
          <input type="hidden" name="ID" value="<?php echo $satir['ID']; ?>">
          <button type="submit" name="kaydet" class="btn btn-primary">Güncelle</button>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>
