<?php snippet('header') ?>

<?php
  $books = page('books')->children()->visible();
?>

<div class="books-grid">

  <?php foreach($books as $book): ?>
    <a class="books-grid__book" href="<?= $book->url() ?>">
      <div class="book__image">

        <?php
          if($book->coverImage()->isNotEmpty()) {
            $coverImage = $book->images()->find($book->coverImage());
            $coverImageThumb = thumb($coverImage, array('height' => 170))->url();
            echo "<div class='book__cover' style='background-image: url($coverImageThumb);'></div>";
          } else {
            echo "<div class='book__cover book__cover--placeholder'><span>No image</span></div>";
          }
        ?>

      </div>
      <h4 class="book__author"><?= $book->author()->html() ?></h4>
      <h5 class="book__title"><?= $book->shortTitle()->html() ?></h5>
    </a>

  <?php endforeach ?>
</div>

<?php snippet('footer') ?>