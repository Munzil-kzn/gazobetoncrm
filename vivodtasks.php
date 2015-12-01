//Здесь выводим все задачи
<?php
$host='localhost';
$database='user8026_20';
$user='user8026_20';
$pswd='123qwe';

$dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
mysql_select_db($database) or die("Не могу подключиться к базе.");
$query = "SELECT * FROM `tasks` ORDER BY id DESC";
$res = mysql_query($query);
while($row = mysql_fetch_array($res))
{
$number=$row['id'];	
$zag=$row['zag'];
$komu=$row['komu'];
$text=$row['text'];
$fast=$row['fast'];
$otkogo=$row['otkogo'];
	switch($fast) {
    case f1: $color = red; break;
    case f2: $color = blue; break;
    case f3: $color = green; break;
    }	
		
echo  "<div class='addtasks' style='border-left:5px solid $color;'> ";
echo "<h1> $zag </h1>";	
echo "<b>Ответсвенный: <i>$komu</i></b>";
echo "<p> $text </p>";
echo "<span>От <i>$otkogo</i></span>"	;
	
echo  "</div>";
}
?>
