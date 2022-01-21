<li>
    <a href="?id=<?=$id;?>"><?=$occupation['title'];?></a>
    <?php if(isset($occupation['childs'])): ?>
        <ul>
            <?= $this->getMenuHtml($occupation['childs']);?>
        </ul>
    <?php endif; ?>
</li>