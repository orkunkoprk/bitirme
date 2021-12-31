<?php

    require 'inc/config.php';

    if ($_POST){
        $adi_soyadi=$_POST['ad_soyad'];
        $telefon=$_POST['telefon'];
        $email=$_POST['email'];
        $kisi=$_POST['kisi'];
        $film=$_POST['film'];
        
        
        DB::insert("INSERT INTO cinrezervasyon(ad_soyad,telefon,email,kisi,film) VALUES(?,?,?,?,?)",array(
            $adi_soyadi,
            $telefon,
            $email,
            $kisi,
            $film,
           
        ));

        header("Location:cinrezervasyon.php?success=1");
    }


?>