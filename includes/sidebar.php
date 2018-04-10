<div class="col-md-3">
    <h3 class="my-4">Категории</h3>
    <div class="list-group">
        <? foreach ($sidebar as $row):?>
            <a href="includes/category.php?category_id=<?=$row['cat_id'];?>" class="list-group-item list-group-item-action">
                <?=$row['name'];?>
            </a>
        <? endforeach; ?>
    </div>
</div>