<div class="col-md-3">
    <h3 class="my-4">Категории</h3>
    <div class="list-group">
        <? foreach ($sidebarMenu as $link => $item):?>
            <a href="<?= $item ?>" class="list-group-item list-group-item-action">
                <?= $link ?>
            </a>
        <? endforeach; ?>
    </div>
</div>