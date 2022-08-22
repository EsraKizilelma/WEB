<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../iletişim/iletişim.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../hakkımda/hakkında.css">
    <title>Oturum Aç</title>
    <link rel="icon" href="../apple.png" type="image/x-icon"/>
  </head>
  <body class="bg-pink">
    <div id="sticky">
      <nav class="navbar navbar-danger navbar-expand-lg bg-warning text-white">
        <div class="container py-2">
          <a href="../hakkımda/Hakkında.html" class="navbar-brand text-white"> 
                <img src="../apple.png" width="50px" alt="Ana Sayfa"> KIZILELMA
          </a>
          <a href="oturumAc.html" class="navbar-brand text-white"> Oturum Aç
                <img src="sign-in.png" width="50px" alt="sign-in icon">
          </a>   
        </div>
      </nav>
    <div>
    <?php 
    include("kullanicilar.php");

    if (($_POST["email"] == $username) and ($_POST["password"] == $password))
    {
    $_SESSION["login"] = "true";
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    
    $kullaniciAdi=substr($username, 0, strrpos($username,"@")); 
    
    echo('<h1>Sisteme Giriş Başarılı</h1> <br>'.'<h3> HOŞGELDİNİZ Sayın </h3> "'. "<h2> $kullaniciAdi </h2>". '" <h3> Sisteme Giriş Başardınız </h3>');
    
    }
    else 
    {
        echo '<h1>Başarısız Giriş</h1> <br>'. '<h3>Kullancı Adı veya Şifre Yanlış Girdiniz</h3> <br>';
        echo "<h3>Lütfen kontrol edip tekrar deneyin</h3>";
        header("Refresh: 1; url=oturumAc.html");
    }
    ?>              
     <a href="oturumAc.html">
        <input type="button" class="btn btn-dark" value="Giriş Ekranına Geri Dön">
        </a>
    <a href="/hakkında.html">
        <input type="button" class="btn btn-dark" value="Ana Sayfaya Geri Dön">
    </a>
    </div>
     <footer class="bg-warning p-3">
      <section>
          <div class="container text-center text-md-start mt-5">
              <div class="row mt-3">
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                      <h6 class="text-uppercase fw-bold mb-4">hakkımda</h6>
                      <p><a href="../ilgi alanlarım/İlgi Alanlarım.html" class="text-reset">İlgi Alanlarım</a></p>
                      <p><a href="../özgeçmiş/Özgeçmiş.html" class="text-reset">Özgeçmiş</a></p>            
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                      <h6 class="text-uppercase fw-bold mb-4">Bizimle İletişime Geçin</h6>
                      <p><a href="../iletişim/İletişim.html" class="text-reset">iletişim</a></p>
                      <p><a href="../oturum Aç/oturumAc.html" class="text-reset">Oturum Aç</a></p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                      <h6 class="text-uppercase fw-bold mb-4">şehrim</h6>
                      <p><a href="../şehrim/Şehrim.html" class="text-reset">Şehrim</a></p>
                      <p><a href="../mirasımız/Mirasımız.html" class="text-reset">Mirasımız</a></p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                      <h6 class="text-uppercase fw-bold mb-4">İLETİŞİM</h6>
                      <p><i class="fas fa-envelope me-3"></i>b211200400@sakarya.edu.tr</p>
                      <p><i class="fas fa-phone me-3"></i>+90 551 111 ** **</p>
                    </div>
              </div>
          </div>
    </section>
    <div class="text-center p-4" style="background-color:#ffc107;">
      © 2021 Telif Hakkı:
      <a class="text-reset fw-bold" href="https://KIZILELMA.com/">KIZILELMA</a>
    </div>
    </footer>
  </body>
</html>
