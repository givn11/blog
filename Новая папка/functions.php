<?php

//1 host, 2 user, 3 password, 4 db_name
$link = mysqli_connect ('localhost', 'root', '', 'blog'); //Соединение с базой данных

function getAllArticles(){
	global $link;
	$sql = 'SELECT id, title, introxext, image FROM articles';
	$res = mysqli_query($link, $sql);
	//MYSQLI_ASSOC - ассоциативный массив
	//MYSQLI_NUM - индексированный массив
	//MYSQLI_BOTH - дублированные данные (индексированный и ассоциативный)
	$rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $rows;
}

function getArticle($article_id){
	global $link;

	$sql = 'SELECT title, full_text, image FROM articles WHERE id = ' . $article_id;
	$res = mysqli_query($link, $sql);
	$row = mysqli_fetch_assoc($res);
	return $row;
}

function getAllsidebarMenu(){
	global $link;
	
	$sql = 'SELECT cat_id, name FROM categories';
	
	$res = mysqli_query($link, $sql);
	
	//$row = mysqli_fetch_array($res);
	$menu = mysqli_fetch_all($res, MYSQLI_ASSOC); //возвращает весь массив значений
	return $menu;

/*foreach ($rows as $row) {
	echo $row['0'] . ' ' . $row['1'] . ' ' . $row['2'] . '<br/>';
}
mysqli_close($link1);*/
}
?>