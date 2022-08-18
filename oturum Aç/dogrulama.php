<?php

$kayitliKullaniciadi = "b211200400@sakarya.edu.tr";
$kayitliKullanicisifre = 211200400;

if($_POST){
    $kullaniciadi = $_POST['kullaniciadi'];
    $sifre = $_POST['sifre'];
    if($kullaniciadi == $kayitliKullaniciadi && $sifre == $kayitliKullanicisifre){
        echo "Hoşgeldiniz " .$kullaniciadi. " 5 saniye içinde giriş sayfasına  yönlendirileceksiniz. Beklemek istemiyorsanız <a href='index.html'> tıklayın</a></h1>";
        header("refresh:5; index.html");
    }else{
       echo "<br><br> <h1>Hatalı giriş yaptınız. 5 saniye içinde giriş sayfasına  yönlendirileceksiniz. Beklemek istemiyorsanız <a href='login.html'> tıklayın</a></h1>";
        header("refresh:5; login.html");
    }
}
?>
