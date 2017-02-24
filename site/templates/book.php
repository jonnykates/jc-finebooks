<?php snippet('header') ?>

<?php
  $bookPrice = $page->price()->html();
  $i = -1;
  // $coverImageUrl;
?>

  <div class="product-page">
    <a class="back-link" href="/books">Back</a>
    <div class="product__image">
      <div class="image-frame">
        <?php
          if($page->coverImage()->isNotEmpty()) {
            $coverImage = $page->images()->find($page->coverImage());
            $coverImageUrl = $coverImage->url();
            $coverImageThumb = thumb($coverImage, array('height' => 300))->url();

            echo "<a href='#coverImageLightbox'><img src='$coverImageThumb' /></a>";
            echo "<a href='#_' class='lightbox' id='coverImageLightbox'><img src='$coverImageUrl'></a>";
          } else {
            echo "<div class='product__image--placeholder'><span>No image</span></div>";
          }
        ?>
      </div>
      <div class="product__thumbnails">
        <?php $filteredImageArray = $page->images()->not($page->coverImage()); ?>
        <?php foreach($filteredImageArray as $key => $image): $i++ ?>
          <a href="#img<?php echo $i ?>" class="product__thumbnail" style="background-image: url(' <?php echo thumb($image, array('height' => 80))->url() ?> ');"></a>
          <a href="#_" class="lightbox" id="img<?php echo $i ?>">
            <img src="<?php echo $image->url() ?>">
          </a>
        <?php endforeach ?>
      </div>
    </div>
    <div class="product__content">
      <div class="product__headings">
          <h1 class="product__author"><?= $page->author()->html() ?></h1>
          <h2 class="product__title"><?= $page->title()->html() ?></h2>
          <h3 class="product__publisher"><?= $page->publisher()->html() ?><?php if($page->publisher()->isNotEmpty() && $page->year()->isNotEmpty()){ echo " "; } ?><span class="product__publication-year"><?= $page->year()->html() ?></span></h3>
      </div>
      <div class="product__pricing">
          <?php if($page->isSold() == '0'): ?>
            <h3 class="product__price"><?php e($page->price()->isNotEmpty(), "<span>£</span>$bookPrice" ); ?></h3>
            <a class="button button__enquire" href="/contact/?title=<?= $page->title()->html() ?>&author=<?= $page->author()->html() ?>">Enquire</a>
          <?php endif ?>
          <?php if($page->isSold() == '1'): ?>
            <span class="sold-label">Book sold</span>
          <?php endif ?>
      </div>
      <div class="product__description">
        <?= $page->text()->kirbytext() ?>
        <p>Stock number: <?= $page->booksellerId() ?>
      </div>
    </div>
  </div>

<?php snippet('footer') ?>