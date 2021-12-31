<?php

    require 'inc/config.php';

    if ($_POST){
        $adi_soyadi=$_POST['ad_soyad'];
        $telefon=$_POST['telefon'];
        $email=$_POST['email'];
        $mesaj=$_POST['mesaj'];
        
        DB::insert("INSERT INTO iletisim(ad_soyad,telefon,email,mesaj) VALUES(?,?,?,?)",array(
            $adi_soyadi,
            $telefon,
            $email,
            $mesaj
        ));

        header("Location:iletisim.php?success=1");
    }


?>