<?php include "vizyondakiler-post.php" ?>
<?php error_reporting(0); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mersin Rehberi Sinema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="./css/sinema.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <!-- Start Landing Page -->

<div class="landing-page">
    <div class="container">
      <div class="header-area">
        <div class="logo"><img src="./img/1634842553705.jpg" style="width: 200px; height: 85px; border-radius: 9px;" alt=""></div>
        <ul class="links">
          <li><a href="index.html" style=" border: 0;
            border-radius: 20px;
            padding: 10px 18px;
            color: rgb(0, 0, 0);
            background-color: none">Ana Sayfa</a></li>
          
          <div class="btn-group">
            <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <li><a href="icerik.html" style="color: rgb(0, 0, 0);   border: 0;
                border-radius: 20px;
                padding: 10px 18px;
                background-color: rgb(218, 224, 192);">İçerik ve Rezervasyon</a></li>
            </button>
            <ul class="dropdown-menu">
              <li style="color: rgb(0, 0, 0);   
              border: 0;
              border-radius: 20px;
              padding: 10px 18px;
              background-color: lightgrey;"><a class="dropdown-item"  href="sinema.html">Sinema</a></li> <br>
              <li><a class="dropdown-item" href="tiyatro.html">Tiyatro</a></li>  <br>
          
            </ul>
          </div>
          
          <li><a href="iletisim.php" style="color: rgb(0, 0, 0); ">İletişimler</a></li>
          
        </ul>
      </div>
      
     
    </div>
  </div>
  <div class="container" style=" margin-left: 350px;">
    <br>
    <br>
    <br>
    <div id="products" class="row list-group">
        <div>
        
          <?php
          $kayit->num_rows>0;
          ($satir = $kayit->fetch_assoc());

        ?>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
            <img class="group list-group-image" src="./cinimg/örümcek.jpg" style="width: 400px; height: 576px;  border-radius: 12px;" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading" style="text-align: center;">
                  <?php  echo "" .$satir["name"]."<br>"; ?>
                        </h4>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["type"]."<br>"; ?>
                     </p>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["director"]."<br>"; ?>
                     </p>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["summary"]."<br>"; ?>
                     </p>

                        <a class="btn btn-success" style="margin-left: 105px;"  href="cinrezervasyon.php">Rezervasyon Yap </a>
                </div>
            </div>
        </div>
        <br>
        <?php
          $kayit->num_rows>1;
          ($satir = $kayit->fetch_assoc());
        
        ?>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
            <img class="group list-group-image" src="./cinimg/2.jpg" style="width: 400px; height: 576px;  border-radius: 12px;" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading" style="text-align: center;">
                  <?php  echo "" .$satir["name"]."<br>"; ?>
                        </h4>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["type"]."<br>"; ?>
                     </p>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["director"]."<br>"; ?>
                     </p>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["summary"]."<br>"; ?>
                     </p>

                        <a class="btn btn-success" style="margin-left: 105px;" href="cinrezervasyon.php">Rezervasyon Yap </a>
                </div>
            </div>
        </div>
        <br>
        <?php
          $kayit->num_rows>2;
          ($satir = $kayit->fetch_assoc());

        ?>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
            <img class="group list-group-image" src="./cinimg/3.jpg" style="width: 400px; height: 576px;  border-radius: 12px;" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading" style="text-align: center;">
                  <?php  echo "" .$satir["name"]."<br>"; ?>
                        </h4>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["type"]."<br>"; ?>
                     </p>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["director"]."<br>"; ?>
                     </p>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["summary"]."<br>"; ?>
                     </p>

                        <a class="btn btn-success" style="margin-left: 105px;" href="cinrezervasyon.php">Rezervasyon Yap </a>
                </div>
            </div>
        </div>
        <br>
        <?php
          $kayit->num_rows>3;
          ($satir = $kayit->fetch_assoc());

            
        ?>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
            <img class="group list-group-image" src="./cinimg/4.jpg" style="width: 400px; height: 576px;  border-radius: 12px;" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading" style="text-align: center;">
                  <?php  echo "" .$satir["name"]."<br>"; ?>
                        </h4>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["type"]."<br>"; ?>
                     </p>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["director"]."<br>"; ?>
                     </p>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["summary"]."<br>"; ?>
                     </p>

                        <a class="btn btn-success" style="margin-left: 105px;" href="cinrezervasyon.php">Rezervasyon Yap </a>
                </div>
            </div>
        </div>
        <br>
        <?php
          $kayit->num_rows>4;
          ($satir = $kayit->fetch_assoc());

        ?>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
            <img class="group list-group-image" src="./cinimg/5.jpg" style="width: 400px; height: 576px;  border-radius: 12px;" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading" style="text-align: center;">
                  <?php  echo "" .$satir["name"]."<br>"; ?>
                        </h4>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["type"]."<br>"; ?>
                     </p>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["director"]."<br>"; ?>
                     </p>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["summary"]."<br>"; ?>
                     </p>

                        <a class="btn btn-success" style="margin-left: 105px;" href="cinrezervasyon.php">Rezervasyona Git
                      </a>
                </div>
            </div>
        </div>
        <br>
        <?php
          $kayit->num_rows>5;
          ($satir = $kayit->fetch_assoc());

        ?>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
            <img class="group list-group-image" src="./cinimg/6.jpg" style="width: 400px; height: 576px;  border-radius: 12px;" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading" style="text-align: center;">
                  <?php  echo "" .$satir["name"]."<br>"; ?>
                        </h4>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["type"]."<br>"; ?>
                     </p>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["director"]."<br>"; ?>
                     </p>
                    <p class="group inner list-group-item-text" style="text-align: center;">
                 <?php   echo "" .$satir["summary"]."<br>"; ?>
                     </p>

                        <a class="btn btn-success" style="margin-left: 105px;" href="cinrezervasyon.php">Rezervasyona Git
                      </a>
                </div>
            </div>
        </div>
        <br>
            
        </div>

    </div>
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

  <script>
  function satinal()
  {
    alert("Tebrikler rezervasyonunuz başarıyla yapılmıştır!");
  }
</script>



    
</body>
</html>