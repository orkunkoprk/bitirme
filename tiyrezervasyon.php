<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervasyon Yap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="./css/rezervasyon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<form action="tiyrezervasyon-post.php" method="post">
<?php if(isset($_GET['success'])):
  $n=10;
  function getName($n) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $randomString = '';
    
      for ($i = 0; $i < $n; $i++) {
          $index = rand(0, strlen($characters) - 1);
          $randomString .= $characters[$index];
      }
    
      return $randomString;
  } ?>
            <div class="alert alert-success">Talebiniz başarıyla alınmıştır, 
              kısa süre içerisinde tarafınıza dönüş sağlanacaktır!
              <br>REZERVASYON ID :<?php echo getName($n);?>
            </div>

    <?php endif ?>
  <div class="elem-group">
    <label for="name">Adınız Soyadınız</label>
    <input type="text" id="name" name="ad_soyad" placeholder="Lütfen İsminizi Giriniz"  required>
  </div>
  <div class="elem-group">
    <label for="phone">Telefon numaranızı giriniz</label>
    <input type="tel" id="phone" name="telefon" placeholder="Telefon numaranızı giriniz" required>
  </div>
  <div class="elem-group">
    <label for="email">Email Adresiniz</label>
    <input type="email" id="email" name="email" placeholder="Email Adresiniz" required>
  </div>
  
  <hr>
  <div class="elem-group inlined">
    <label for="adult">Kaç kişilik rezervasyon istersiniz?</label>
    <input type="number" id="adult" name="kisi" placeholder="?" min="1" required>
  </div>
  
 
  <div class="elem-group">
    <label for="tiyatro">Gitmek istediginiz film?</label>
    <select id="tiyatro" name="tiyatro" required>
        <option value="">Lütfen Gitmek İstediginiz Filmi Seçin</option>
        <option value="Bernarda">Bernarda</option>
        <option value="İyi Kötü Çirkin">İyi Kötü Çirkin</option>
        <option value="Şeker Portakalı">Şeker Portakalı</option>
        <option value="İkinci Bahar">İkinci Bahar</option>
        <option value="Tek Başıma">Tek Başıma</option>
       
    </select>
  </div>
  <hr>
  
  <button type="submit" >Rezervasyon Yap</button>
  <br>
  <br>
  <br>
 <a href="index.html"> <i class="fa fa-chevron-circle-left" style="font-size:100px; padding-left: 150px;" > </i></a>

  
</form>


    


    
</body>
</html>