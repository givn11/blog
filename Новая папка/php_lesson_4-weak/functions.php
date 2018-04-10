<?php

//1 host, 2 user, 3 password, 4 db_name
$link = mysqli_connect('localhost', 'root', '', 'blog');

function getAllArticles(){
	global $link;
	$sql = 'SELECT id, title, introxext, image FROM articles';
	$res = mysqli_query($link, $sql);
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

/*
print '<pre>';
print_r($rows) ;
print '</pre>';
*/
