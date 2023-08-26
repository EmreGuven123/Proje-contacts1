<?php
    include("baglanti.php");
    
    // Form gönderildiğinde
    if(isset($_POST['Guncelle'])){
        $id = $_POST['ID'];
        $KisiAdi = $_POST['KisiAdi'];
        $Surname = $_POST['Surname'];
        $PhoneNumber = $_POST['PhoneNumber'];
        
        // Güncelleme sorgusu
        $guncelle = "UPDATE kisiler SET KisiAdi = '$KisiAdi', Surname = '$Surname', PhoneNumber = '$PhoneNumber' WHERE ID = $id";
        
        if($baglanti->query($guncelle)){
            echo "Güncelleme başarılı.";
            header("Location: Main.php");
    exit();
        } else {
            echo "Güncelleme başarısız: " . $baglanti->error;
        }
    }
    
    // Kullanıcıyı çek
    if(isset($_GET['ID']) && is_numeric($_GET['ID'])){
        $id = $_GET['ID'];
        $sec = "SELECT * FROM kisiler WHERE ID = $id";
        $sonuc = $baglanti->query($sec);
        
        if($sonuc->num_rows == 1){
            $row = $sonuc->fetch_assoc();
            $KisiAdi = $row['KisiAdi'];
            $Surname = $row['Surname'];
            $PhoneNumber = $row['PhoneNumber'];
        }
        else {
            echo "Kullanıcı bulunamadı.";
            exit();
        }
    }
    else {
        echo "Geçersiz ";
        exit();
    }
    
?>

<!doctype html>
<html>
    <head>
        <title>Kullanıcı Kayıt Formu</title>
        <meta charset="utf-8" />
        <style type="text/css">
            body{
                background:#ffffff;
                font-size:10px;
                font-family:Trebuchet MS;
            }
            #kayitFormu{
                
                border-radius:10px;
                background:#f1f1f1;
                width:360px;
                margin:auto;
                margin-top:20px;
                padding:15px;
                text-align:center;
            }
            input, button 
            {
                border-radius:5px;
                border:none;
                width:300px;
                height:50px;
                margin:20px 0px 20px 0px;
                background:rgba(216, 216, 216, 0.5);
                padding-left:15px;
                font-style:italic;
                
            }
            
            .btn{
                background:#757575;
                color:white;
            }
            h3{
                color:#333;
                text-transform:uppercase;
                font-size:20px;
            }
            
            a:link, a:visited {
                font-size: 20px;
                padding: 13px 90px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border-radius: 5px;
            }

            a:hover, a:active {
                background-color: #2c2c2c;
                transition: 0.7s;
            }
        </style>
    </head>
    <body>
        <div id="kayitFormu">
            <form action="" method="POST">
                <h3> KİŞİ DÜZENLEME </h3>
                <input type="text" name="KisiAdi" placeholder="Ad" value="<?php echo $KisiAdi; ?>"  /> 
                <input type="text" name="Surname" placeholder="Soyad" value="<?php echo $Surname; ?>"/> 
                <input type="text" name="PhoneNumber" placeholder="Telefon"  value="<?php echo $PhoneNumber; ?>"/>
                <input type="hidden" name="ID" value="<?php echo $id; ?>" />
                <input type="submit" name="Guncelle" class="btn" value="Güncelle" />
            </form>
        </div>
    </body>
</html>
