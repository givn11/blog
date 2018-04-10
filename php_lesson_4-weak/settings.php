<?php
session_start();
define('SITE_URL', 'http://blog/');

include 'functions.php';


if(isset($_GET['id'])){
	$article_id = (int)$_GET['id'];
	$article = getArticle($article_id);
}

//Установка локали и даты
setlocale(LC_ALL, "russian");
//Час
$hour = strftime('%H');
$date = strftime('%d.%m.%Y %H ч %M мин %S сек');
/*Приветствие*/
$welcome = '';

if ($hour > 0 and $hour < 6):
    $welcome = "Доброй ночи";
elseif ($hour >= 6 and $hour < 12):
    $welcome = "Доброе утро";
elseif ($hour >= 12 and $hour < 18):
    $welcome = "Добрый день";
elseif ($hour >= 18 and $hour < 24):
    $welcome =  "Добрый вечер";
endif;

$rows = getAllArticles();

$sidebarMenu = array(
    'HTML' => '#',
    'PHP' => '#',
    'JavaScript' => '#',
);

$mainMenu = [
    'Главная' => SITE_URL,
    'Статьи' => '#',
    'Услуги' => '#',
    'Контакты' => '#',
    'Гостевая книга' => '/guestbook/',
    'Онлайн тест' => '/test/',
];