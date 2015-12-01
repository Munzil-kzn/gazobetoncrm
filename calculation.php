<?php 
	$name = $_POST['name'];
        $manager = $_POST['manager'];
        $adress = $_POST['adress'];
        $phone = $_POST['phone'];
        $wh = $_POST['wh'];
	$lh = $_POST['lh'];
	$hh = $_POST['hh'];
        $depth = $_POST['depth'];
        $ww = $_POST['ww'];
	$lw = $_POST['lw'];
	$kw = $_POST['kw'];
        $wd = $_POST['wd'];
	$ld = $_POST['ld'];
	$kd = $_POST['kd'];
        $okon = $_POST['okon'];
	$dver = $_POST['dver'];
        $today = date("j. m. Y.");
        $status = "В обработке";
        $comment = $_POST['comment'];
        $product = $_POST['product'];
        $ww2 = $_POST['ww2'];
	$lw2 = $_POST['lw2'];
	$kw2 = $_POST['kw2'];
        $wd2 = $_POST['wd2'];
	$ld2 = $_POST['ld2'];
	$kd2 = $_POST['kd2'];
        $ww3 = $_POST['ww3'];
	$lw3 = $_POST['lw3'];
	$kw3 = $_POST['kw3'];
        $wd3 = $_POST['wd3'];
	$ld3 = $_POST['ld3'];
	$kd3 = $_POST['kd3'];
        $ww4 = $_POST['ww4'];
	$lw4 = $_POST['lw4'];
	$kw4 = $_POST['kw4'];
        $wd4 = $_POST['wd4'];
	$ld4 = $_POST['ld4'];
	$kd4 = $_POST['kd4'];  
           

        mysql_connect("localhost", "user8026_20", "123qwe") or die (mysql_error ());
	mysql_select_db("user8026_20") or die(mysql_error());
       

	$strSQL = "INSERT INTO allorder(nameClient,nameManager,adress,phone,wh,lh,hh,depth,ww,lw,kw,wd,ld,kd,ww2,lw2,kw2,wd2,ld2,kd2,ww3,lw3,kw3,wd3,ld3,kd3,ww4,lw4,kw4,wd4,ld4,kd4,data,status,comment,product,okon,dver) VALUES('$name','$manager','$adress','$phone','$wh','$lh','$hh','$depth','$ww','$lw','$kw','$wd','$ld','$kd','$ww2','$lw2','$kw2','$wd2','$ld2','$kd2','$ww3','$lw3','$kw3','$wd3','$ld3','$kd3','$ww4','$lw4','$kw4','$wd4','$ld4','$kd4','$today','$status','$comment','$product','$okon','$dver')";
	mysql_query($strSQL) or die (mysql_error());
	mysql_close();
        $url_orderpage="http://gazobeton.rlkk.ru/ordern/";
        header("Location: $url_orderpage");
     
      
	?>
