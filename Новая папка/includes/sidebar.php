<? include 'settings.php';?>

/*$sdd_db_host='localhost'; // ваш хост
$sdd_db_name='blog'; // ваша бд
$sdd_db_user='root'; // пользователь бд
$sdd_db_pass=''; // пароль к бд
@mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass); // коннект с сервером бд
@mysql_select_db($sdd_db_name); // выбор бд
$result=mysql_query('SELECT name FROM `categories`'); // запрос на выборку
$row=mysql.9l_fetch_array($result);*/

<div class="col-md-3">
    <h3 class="my-4">Категории</h3>
    <div class="list-group">
        <?php foreach ($menu as $row):?>
            <a href="#" class="list-group-item list-group-item-action">
                <?=$row['name'];?>
            </a>
        <? endforeach; ?>
    </div>
</div>