<?php

    require 'inc/config.php';

    if ($_POST){
        $adi_soyadi=$_POST['ad_soyad'];
        $telefon=$_POST['telefon'];
        $email=$_POST['email'];
        $kisi=$_POST['kisi'];
        $tiyatro=$_POST['tiyatro'];
        
        DB::insert("INSERT INTO tiyrezervasyon(ad_soyad,telefon,email,kisi,tiyatro) VALUES(?,?,?,?,?)",array(
            $adi_soyadi,
            $telefon,
            $email,
            $kisi,
            $tiyatro
        ));

        header("Location:tiyrezervasyon.php?success=1");
    }


?>