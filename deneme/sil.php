<?php
include("baglanti.php");

if (isset($_GET['ID']) && is_numeric($_GET['ID'])) {
    $id = $_GET['ID'];
    
    // Veritabanında kişiyi silme sorgusu
    $silSorgusu = "DELETE FROM kisiler WHERE ID = $id";
    
    if ($baglanti->query($silSorgusu) === TRUE) {
        // Başarılı bir şekilde silindiğini bildirin ve ana sayfaya yönlendirin
        echo "Kişi başarıyla silindi.";
        header("Location: Main.php");
        exit();
    } else {
        // Silme işlemi başarısızsa hata mesajı gösterin
        echo "Kişiyi silerken bir hata oluştu: " . $baglanti->error;
    }
    
    $baglanti->close();
} else {
    // Geçersiz veya belirtilmemiş bir kimlik (ID)
    echo "Geçersiz veya belirtilmemiş bir kişi kimliği (ID).";
}
?>
