//Постановка задачи
<?php 
	$komu = $_POST['komu'];
        $zag = $_POST['zag'];
        $text = $_POST['text'];
	$fast = $_POST['fast'];
	$otkogo = $_POST['otkogo'];
 
        

mysql_connect("localhost", "user8026_20", "123qwe") or die (mysql_error ());
	mysql_select_db("user8026_20") or die(mysql_error());

	$strSQL = "INSERT INTO tasks(komu,zag,text,fast,otkogo) VALUES('$komu','$zag','$text','$fast','$otkogo')";
	mysql_query($strSQL) or die (mysql_error());
	mysql_close();
        $url_orderpage="http://gazobeton.rlkk.ru/tasks/";
        header("Location: $url_orderpage");
     
      
	?>
