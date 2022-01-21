<option value="" class="label"><?php echo $this->language['code'] ?></option>
<?php foreach ($this->languages as $k => $v): ?>
    <?php if ($k != $this->language['code']): ?>
        <option value="<?=$k;?>"><?=$k;?></option>
    <?php endif; ?>
<?php endforeach; ?>
