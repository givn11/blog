<?php
$link = mysqli_connect ('localhost', 'root', '', 'blog');

function getAllsidebarMenu(){
	global $link;
	$query = 'SELECT name FROM categories';
	$res = mysqli_query($link, $query);
	var_dump($row['name']);
	//$rows = mysqli_num_rows($res);
	$rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $rows;
}

/*$sdd_db_host='localhost'; // ваш хост
$sdd_db_name='blog'; // ваша бд
$sdd_db_user='root'; // пользователь бд
$sdd_db_pass=''; // пароль к бд
@mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass); // коннект с сервером бд
@mysql_select_db($sdd_db_name); // выбор бд
$result=mysql_query('SELECT name FROM `categories`'); // запрос на выборку
$row=mysql.9l_fetch_array($result);*/



?>