<?php snippet('header') ?>

  <div class="col--main">
    <h3 class="bordered-header"><?= $page->title()->html() ?></h3>
    <?= $page->text()->kirbytext() ?>
  </div>

<?php snippet('footer') ?>