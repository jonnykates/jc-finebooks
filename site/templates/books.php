<?php snippet('header') ?>

<?php

$books = page('books')->children()->visible();

?>

<div class="books-grid">

  <?php foreach($books as $book): ?>

    <a class="books-grid__book" href="<?= $book->url() ?>">
      <div class="book__image">
        <img src="<?= $book->images()->find($book->coverImage())->url() ?>" />
      </div>
      <h4 class="book__title"><?= $book->title()->html() ?></h4>
      <h5 class="book__author"><?= $book->author()->html() ?></h5>
    </a>

  <?php endforeach ?>
</div>

<?php snippet('footer') ?>