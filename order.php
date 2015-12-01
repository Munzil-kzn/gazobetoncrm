//Здесь идет рассчет объема и цены, а так же выводим на страницу

<?php
$host='localhost';
$database='user8026_20';
$user='user8026_20';
$pswd='123qwe';

$dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
mysql_select_db($database) or die("Не могу подключиться к базе.");
$query = "SELECT * FROM `allorder` ORDER BY id DESC";
$res = mysql_query($query);
while($row = mysql_fetch_array($res))
{	
$number=$row['id'];	
$name=$row['nameClient'];	
$manager=$row['nameManager'];
$adress=$row['adress'];
$phone=$row['phone'];
$data=$row['data'];	
$status=$row['status'];
$comment=$row['comment'];
$product=$row['product'];	
$wh=$row['wh'];
$lh=$row['lh'];
$hh=$row['hh'];
$depth=$row['depth'];
$ww=$row['ww'];
$lw=$row['lw'];
$kw=$row['kw'];
$wd=$row['wd'];
$ld=$row['ld'];
$kd=$row['kd'];
$okon=$row['okon'];
$dver=$row['dver'];
	if($okon == 2){
	   $ww2=$row['ww2'];
       $lw2=$row['lw2'];
       $kw2=$row['kw2'];
	   $tod=$lw2*$ww2*$depth*$kw2;
	}
    if($okon == 3){
	   $ww2=$row['ww2'];
       $lw2=$row['lw2'];
       $kw2=$row['kw2'];	
	   $ww3=$row['ww3'];
       $lw3=$row['lw3'];
       $kw3=$row['kw3'];
	   $tod=($lw3*$ww3*$depth*$kw3)+($lw2*$ww2*$depth*$kw2);
	} 
    if($okon == 4){
	   $ww2=$row['ww2'];
       $lw2=$row['lw2'];
       $kw2=$row['kw2'];	
	   $ww3=$row['ww3'];
       $lw3=$row['lw3'];
       $kw3=$row['kw3'];
	   $ww4=$row['ww4'];
       $lw4=$row['lw4'];
       $kw4=$row['kw4'];
	   $tod=($lw4*$ww4*$depth*$kw4)+($lw3*$ww3*$depth*$kw3)+($lw2*$ww2*$depth*$kw2);
	} 
	if($dver == 2){
	   $wd2=$row['wd2'];
       $ld2=$row['ld2'];
       $kd2=$row['kd2'];
	   $dod=$ld2*$wd2*$depth*$kd2;
	}
    if($dver == 3){
	   $wd2=$row['wd2'];
       $ld2=$row['ld2'];
       $kd2=$row['kd2'];	
	   $wd3=$row['wd3'];
       $ld3=$row['ld3'];
       $kd3=$row['kd3'];
	   $dod=($ld3*$wd3*$depth*$kd3)+($ld2*$wd2*$depth*$kd2);
	} 
    if($dver == 4){
	   $wd2=$row['wd2'];
       $ld2=$row['ld2'];
       $kd2=$row['kd2'];	
	   $wd3=$row['wd3'];
       $ld3=$row['ld3'];
       $kd3=$row['kd3'];
	   $wd4=$row['wd4'];
       $ld4=$row['ld4'];
       $kd4=$row['kd4'];
	   $dod=($ld4*$wd4*$depth*$kd4)+($ld3*$wd3*$depth*$kd3)+($ld2*$wd2*$depth*$kd2);
	} 		
	
	switch($depth) {
    case 0.4: $koef = 2; break;
    case 0.3: $koef = 1.875; break;
    case 0.2: $koef = 1.75; break;
	case 0.15: $koef = 1.875; break;
    case 0.1: $koef = 1.875; break;
    }	
	$perimetr=(($wh+$lh)*2)*$hh;
	$od= ($lw*$ww*$depth*$kw)+($ld*$wd*$depth*$kd)+$tod+$dod;
	$obiem= $perimetr - $od;
	$itog=ceil(($perimetr-$od)/$koef);
	$summa=$itog*3700;

	echo "<tr><td>$number</td><td>$product</td><td>$data</td><td>$summa руб.</td><td>$name</td><td><form action='/status.php' method='POST'><div class='none'><input type='number' value='$number' name='idnum'></div><select name='editstatus'><option value='$status'>$status</option><option value='В обработке'>В обработке</option><option value='В работе'>В работе</option></select><input type='submit' value=''></form></td><td>$comment</td><td><img src='/img/info.png' title='Подробнее о заказe'></td></tr>";
	echo "<tr class='info'>
	<td colspan='4' style='text-align:left;'>
	<div class='info-text'>
		<span>Номер заказа: <b>$number</b></span>
		<span>Продукт: <b>$product</b></span>
		<span>Имя клиента: <b>$name</b></span>
		<span>Менеджер: <b>$manager</b></span>
		<span>Адрес доставки: <b>$adress</b></span>
		<span>Телефон: <b>$phone</b></span>
		<span>Дата: <b>$data</b></span>
		<span>Комментарий: <b>$comment</b></span>
		<span>Статус: <b>$status</b></span>
	</div>
	</td>
	<td colspan='3' style='text-align:left;'>
	<div class='info-number'>
		<a>Закрыть</a>
		<span>Ширина дома: <b>$wh</b></span>
		<span>Длина дома: <b>$lh</b></span>
		<span>Высота дома: <b>$hh</b></span>
		<span>Толщина блока: <b>$depth</b></span>
		<span>Ширина окна: <b>$ww</b><b>$ww2</b><b>$ww3</b><b>$ww4</b></span>
		<span>Длина окна: <b>$lw</b><b>$lw2</b><b>$lw3</b><b>$lw4</b></span>
		<span>Количество окон: <b>$kw</b><b>$kw2</b><b>$kw3</b><b>$kw4</b></span>
		<span>Ширина двери: <b>$wd</b><b>$wd2</b><b>$wd3</b><b>$wd4</b></span>
		<span>Длина двери: <b>$ld</b><b>$ld2</b><b>$ld3</b><b>$ld4</b></span>
		<span>Количество дверей: <b>$kd</b><b>$kd2</b><b>$kd3</b><b>$kd4</b></span>
		<span>Объем дома: <b>$obiem м<sup><small>3</small></sup></b></span>
		<span>Количество упаковок: <b>$itog шт.</b></span>
		<span>Итоговая сумма: <b>$summa руб.</b></span>
	</div>
	<td>
	</tr>";	

}
?>
