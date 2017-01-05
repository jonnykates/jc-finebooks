<?php snippet('header') ?>

<?php
  $bookPrice = $page->price()->html();
?>

  <div class="product-page">
    <a class="back-link" href="/books">Back</a>
    <div class="product__image">
      <div class="image-frame">
        <?php
          if($page->coverImage()->isNotEmpty()) {
            $coverImageUrl = $page->images()->find($page->coverImage())->url();
            echo "<img src='$coverImageUrl' />";
          } else {
            echo "<div class='product__image--placeholder'><span>No image</span></div>";
          }
        ?>
      </div>
    </div>
    <div class="product__content">
      <div class="product__headings">
          <h1 class="product__author"><?= $page->author()->html() ?></h1>
          <h2 class="product__title"><?= $page->title()->html() ?></h2>
          <h3 class="product__publisher"><?= $page->publisher()->html() ?>, <span class="product__publication-year"><?= $page->year()->html() ?></span></h3>
      </div>
      <div class="product__pricing">
          <h3 class="product__price"><?php e($page->price()->isNotEmpty(), "<span>£</span>$bookPrice" ); ?></h3>
          <a class="button button__enquire" href="/contact/?title=<?= $page->title()->html() ?>&author=<?= $page->author()->html() ?>">Enquire</a>
      </div>
      <div class="product__description">
        <?= $page->text()->kirbytext() ?>
        <p>Stock number: <?= $page->booksellerId() ?>
      </div>
    </div>
  </div>

<?php snippet('footer') ?>