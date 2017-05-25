<?php snippet('header') ?>

<?php
  $bookPrice = $page->price()->html();
  $i = -1;
  // $coverImageUrl;
  $bookTitle = $page->title()->text();
  $bookAuthor = $page->author()->text();
?>

  <div class="product-page" itemscope itemtype="http://schema.org/Book">
    <a class="back-link" onclick="history.go(-1);">Back</a>
    <div class="product__image">
      <div class="image-frame">
        <?php
          if($page->coverImage()->isNotEmpty()) {
            $coverImage = $page->images()->find($page->coverImage());
            $coverImageUrl = $coverImage->url();
            $coverImageThumb = thumb($coverImage, array('height' => 300))->url();

            echo "<a href='$coverImageUrl' data-lightbox='book-images'><img src='$coverImageThumb' itemprop='image' alt='Photo of $bookTitle by $bookAuthor' /></a>";
          } else {
            echo "<div class='product__image--placeholder'><span>No image</span></div>";
          }
        ?>
      </div>
      <div class="product__thumbnails">
        <?php $filteredImageArray = $page->images()->not($page->coverImage()); ?>
        <?php foreach($filteredImageArray as $key => $image): $i++ ?>
          <a class="product__thumbnail" style="background-image: url(' <?php echo thumb($image, array('height' => 80))->url() ?> ');" href="<?php echo $image->url() ?>" data-lightbox="book-images"></a>
        <?php endforeach ?>
      </div>
    </div>
    <div class="product__content">
      <div class="product__headings">
          <h1 class="product__author" itemprop="author"><?= $page->author()->html() ?></h1>
          <h2 class="product__title" itemprop="name"><?= $page->title()->kirbytext() ?></h2>
          <h3 class="product__publisher" itemprop="publisher"><?= $page->publisher()->html() ?><?php if($page->publisher()->isNotEmpty() && $page->year()->isNotEmpty()){ echo " "; } ?><span class="product__publication-year" itemprop="datePublished"><?= $page->year()->html() ?></span></h3>
      </div>
      <div class="product__pricing" itemscope itemtype="http://schema.org/Offer">
          <?php if($page->isSold() == '0'): ?>
            <h3 class="product__price" itemprop="price"><?php e($page->price()->isNotEmpty(), "<span>£</span>$bookPrice" ); ?></h3>
            <a class="button button__enquire" href="/contact/?title=<?= $page->title()->html() ?>&author=<?= $page->author()->html() ?>">Enquire</a>
          <?php endif ?>
          <?php if($page->isSold() == '1'): ?>
            <span class="sold-label">Book sold</span>
          <?php endif ?>
      </div>
      <div class="product__description" itemprop="description">
        <?= $page->text()->kirbytext() ?>
        <p>Stock number: <?= $page->booksellerId() ?>
      </div>
    </div>
  </div>

<?php snippet('footer') ?>