



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Kişiler </title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body{
    
    margin: 0px;
    display: flex;
    width: 100%;
    height: 100vh;
    flex-direction: column;
    font-family: Arial, Helvetica, sans-serif;
    color: #4e4747;
}

#header{
    
height: 80px;
display: flex;
width: 100%;
padding-left: 20px;
padding-right: 20px;
}

#logoSection{
    
    flex-basis: 200px;
    display: flex;
    align-items: center;
    gap: 20px;
}
#logo{
    
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 18px;
}
#searchSection{
    
    flex-grow: 1;
}
#actionSection{
flex-basis: 100px;

}
#searchContainer{
    
width: 50%;
padding-top: 7px;
position: relative;
}
input{
    width: 100%;
    height: 35px;
    border: 0px;
    background-color: rgb(243, 243, 243);
    padding-left: 40px;
    outline: none;
    margin-top: 7px;
    border-radius: 5px;
}
button{
    position: absolute;
    left: 0px;
    background-color: transparent;
    border: 0px;
    height: 100%;
    width: 60px;
    color: #333;
    
 
}
#contentContainer{
display: flex;
flex-grow: 1;
}
#sidebar{
    height: 100%;

    flex-basis:  200px;;
}
#content{
    flex-grow: 1;
}


.sidebar{
    position: fixed;
    left: 0;
    width: 250px;
    height: 100%;
    background: white;
  
}
    .sidebar header{

font-size: 22px;
color: white;
text-align: center;
line-height: 70px;
background: #fff;
user-select: none;
}

.sidebar ul a{
display: block;
height: 100%;
width: 100%;
line-height: 65px;
font-size: 20px;
color: white;
padding-left: 40px;
box-sizing: border-box;
border-top: 1px solid rgba(255, 255, 255, .1);
border-bottom: 1px solid black;

}

a{
text-decoration: none;

}
ul
{
        list-style-type: none;
}
body {
    margin: 0;
    padding: 0;	
    position: fixed;
	
}
/*.container {
height:50px;
background:#000000;
border-bottom: 2px solid rgb(255, 255, 255);
	
}*/

.sidebarmenu ul {
    list-style-type: none;	
padding: 10px 0;
}

.sidebarmenu ul li a{
text-decoration: none;	
display:block;
color:#000000;	 
padding: 30px 0px 10px 25px;               
border-bottom:1px solid rgb(255, 255, 255);         

}
.sidebarmenu {
top: 10px;
background:#ffffff;
position: fixed;
width: 200px;
height: 100%;
left: -200px;
padding-top:50px; 
transition: all 0.5s ease-in;	
margin-top:52px;
}
.sidebarmenu ul i {
    margin-right:10px;
}
.sidebarmenu ul li a:hover {
color: rgb(0, 0, 0); 
transition: all 1s; 
padding-left: 35px; 
background-color: rgb(214, 214, 214);
border-bottom-right-radius: 40px;
border-top-right-radius: 40px;

}

#checkbox {
display:none;

}

label #menu {
color:rgb(2, 2, 2); 
cursor: pointer;
position: fixed;
z-index:999;
left:20px;	
top:30px;       
}

label #menu:hover {
   font-size: 1.5rem;
   background-color: rgb(214, 214, 214);

}

#checkbox:checked ~ .sidebarmenu {
left:0;
}
#menucolor{
    color: white;
}
p{
    padding-left: 25px;
font-weight: bold;
}



.deneme  {

    float: right;
   padding-right: 550px; 
}




      #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 90%;
      margin-top: 10px;
      }
      
      #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
      }
      
      #customers tr:nth-child(even){background-color: #f2f2f2;}
      
      #customers tr:hover {background-color: #ddd;}
      
      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #ffffff;
        color: rgb(32, 31, 31);
      }
      
      </style>

</head>
<body>






 


  
    <div id="header">
        <div id="logoSection"> <i class="fa-solid fa-bars" id="menucolor"></i>
        <div id="logo"><img src="img/Google_Contacts_icon_(2022).svg.png" width="30px">Kişiler</div>
        </div>
        <div id="searchSection" 
        >
<div id="searchContainer">
    <button>
  <i class="fa-solid fa-magnifying-glass"></i> </button>
    <input type="text" placeholder="Arama"></div>
    <table id="customers">
      <tr>
        <th>İsim</th>
        <th>Soyisim</th>
        <th>Telefon Numarası</th>
        <th>Ayarlar</th>

      </tr>
      
      <?php
                include("baglanti.php");
                
                $sec = "SELECT * FROM kisiler";
                $sonuc = $baglanti->query($sec);
                
                if ($sonuc->num_rows > 0) {
                    while ($cek = $sonuc->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $cek['KisiAdi'] . "</td>";
                        echo "<td>" . $cek['Surname'] . "</td>";
                        echo "<td>" . $cek['PhoneNumber'] . "</td>";
                        echo "<td><a href='sil.php?ID=" . $cek['ID'] . "'>Sil</a> -
                        <a href='KayıtEkranı.php?ID=" . $cek['ID'] . "'>Düzenle</a></td>";
                       
                        echo "</tr>";
                    }
                } else {
                    echo "Veritabanına kayıtlı veri bulunamamıştır";
                }
                ?>
            </table>
        </div>
        <div id="actionSection"></div>

    </div>

    <div class="container">
        <input type="checkbox" id="checkbox" />
        <label for="checkbox">
          <i class="fas fa-bars" id="menu"></i>
        </label>
      
        <div class="sidebarmenu">
          <ul>
         <li > <a href="kayit.php" class="deneme"> <img src="img/Adsız.png" alt="" ></a>  </li> 
            <br>
           
            <li><a href="#" class="deneme2" >Sık Görüşmeler</a></li>
            <li><a href="#" class="deneme2" >Diğer Kişiler</a></li>
            <br>
           <P>Düzeltin ve yönetin </P>
            <li><a href="#" class="deneme2" >Birleştir ve Düzelt</a></li>
            <li><a href="#" class="deneme2" >İçe aktar</a></li>
            <li>  <a href="#" class="deneme2" >Çöp Kutusu </a>      </li>
          </ul>
      
        </div>

      </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  

<script src="/kayit.js/sql.js"></script>
<script src="/kayit.js/ui.js"></script>

</body>
</html>