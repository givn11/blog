<?php

//1 host, 2 user, 3 password, 4 db_name
$link = mysqli_connect ('localhost', 'root', '', 'blog');

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
//меню Sidebar
function getAllsidebarMenu(){
	global $link;
	$sql = 'SELECT cat_id, name FROM categories';
	$res = mysqli_query($link, $sql);
	$menu = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $menu;
}

//Категории
function getCategory($caty_id) {
	global $link;
	$sql = 'SELECT title, introxext, image FROM articles WHERE category_id = ' . $caty_id;
	$res = mysqli_query($link, $sql);
	$cat = mysqli_fetch_assoc($res);
	return $cat;
}
?>