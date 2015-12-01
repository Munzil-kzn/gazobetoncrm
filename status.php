//Изменение стаутса у заказа
<?php 
	$idnum = $_POST['idnum'];
        $status = $_POST['editstatus'];

        mysql_connect("localhost", "user8026_20", "123qwe") or die (mysql_error ());
	mysql_select_db("user8026_20") or die(mysql_error());
      
        mysql_query("UPDATE allorder SET status = '$status' WHERE id = $idnum");
        mysql_close();
        $url_orderpage="http://gazobeton.rlkk.ru/ordern/";
        header("Location: $url_orderpage");
?>
