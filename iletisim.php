<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mersin Rehberi İletişimler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="./css/iletisimler.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <!-- Start Landing Page -->

<div class="landing-page">
    <div class="container">
      <div class="header-area">
        <div class="logo"><img src="./img/1634842553705.jpg " style="width: 200px; height: 85px; border-radius: 9px;" alt=""></div>
        <ul class="links">
          <li><a href="index.html" style=" border: 0;
            border-radius: 20px;
            padding: 10px 18px;
            color: rgb(0, 0, 0);
            background-color: none">Ana Sayfa</a></li>
          
          <div class="btn-group">
            <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <li><a href="#" style="border: 0;
                border-radius: 20px;
                padding: 10px 18px;
                color: rgb(0, 0, 0);
                background-color: none">İçerik ve Rezervasyon</a></li>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="sinema.html">Sinema</a></li> <br>
              <li><a class="dropdown-item" href="tiyatro.html">Tiyatro</a></li>  <br>
           

         
            </ul>
          </div>
          
          <li><a href="iletisim.php" style="color: rgb(0, 0, 0);   border: 0;
            border-radius: 20px;
            padding: 10px 18px;
            background-color: rgb(218, 224, 192); ">İletişimler</a></li>
          
        </ul>
      </div>
      
     
    </div>
  </div>
  <div class="container" style="width: 600px;">  
    <form id="contact" action="iletisim-post.php" method="post">
    <?php if(isset($_GET['success'])): ?>
            <div class="alert alert-success">Mesajınız başarıyla iletilmiştir. </div>

    <?php endif ?>
      <h3>Hemen Bize Ulaşın</h3>
      <h4>Lütfen bilgilerinizi eksiksiz ve doğru giriniz!</h4>
      <fieldset>
        <input placeholder="Adınız ve Soyadınızı giriniz" type="text" name="ad_soyad" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Telefon numaranızı giriniz" type="tel" name="telefon" tabindex="2" required autofocus>
      </fieldset>
      
      <fieldset>
        <input placeholder="Email Adresiniz" type="email" name="email" tabindex="3" required>
      </fieldset>
     
      <fieldset>
        <textarea placeholder="Lütfen Mesajınızı buraya yazın...." name="mesaj" tabindex="5" required></textarea>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Gönder</button>
      </fieldset>
      
    </form>
    
   
    
  </div>
  <footer>
     
      
    <div class="bottom_content">
    
   
    <section>
      <a href="https://www.facebook.com/orkun.koprek/"><i class="fa fa-facebook"></i></a>
      <a href="https://www.instagram.com/orkunkoprk/"><i class="fa fa-instagram"></i></a>
      <a href="https://twitter.com/orkunkprek?t=26izCsim-K21LvFz1Anf1Q&s=09"><i class="fa fa-twitter"></i></a>
 
    </section>

    </div>
    
    </footer>
    


    
</body>
</html>