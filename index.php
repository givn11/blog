<? include 'settings.php';?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <? include_once 'includes/head.php' ?>
</head>

<body>

<!-- Navigation -->
<?php include_once 'includes/header.php'; ?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Content -->
        <div class="col-md-9">

            <!-- Page Heading -->
            <h1 class="my-4">Заголовок страницы
                <small></small>
            </h1>
            <hr>
            <h4><?= $welcome ?>, Гость!</h4>
            <small>Cейчас <?= $date?></small>
            <hr>

            <?php foreach ($rows as $row):?>

<!-- Project One -->
            <div class="row">
                <div class="col-md-4">
                    <a href="/article.php?id=<?=$row['id'];?>">
                        <img class="img-fluid rounded mb-3 mb-md-0" src="img/<?=$row['image'];?>" alt="">
                    </a>
                </div>
                <div class="col-md-8">
                    <h3><?=$row['title'];?></h3>
                    <p><?=$row['introxext'];?></p>
                    <!-- Формируем ссылочку для GET запроса -->
                    <a class="btn btn-primary" href="/article.php?id=<?=$row['id'];?>">Читать далее</a>
                </div>
            </div>
<!-- /.row -->

            <hr>
            <?php endforeach;?>

            
            

            
        
        </div>

        <!-- Sidebar -->
        <?php include 'includes/sidebar.php' ?>

        <div class="clearfix"></div>
    </div>


    <!-- Pagination -->
    <?php include 'includes/pagination.php' ?>

</div>
<!-- /.container -->

<!-- Footer -->
<?php include 'includes/footer.php' ?>

</body>

</html>
