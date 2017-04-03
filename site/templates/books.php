<?php snippet('header') ?>

<?php
  $collection = get('collection'); // Get the parameter from the title

  $collectionTitle = "";
  if($collection === "reference") {
    $collectionTitle = "Art and Architecture Reference";
  } else if($collection === "antiquarian") {
    $collectionTitle = "Antiquarian books";
  } else {
    $collectionTitle = "All books";
  }

  $books = page('books')->children()->visible()->filterBy('collections', $collection, ',')->paginate(20);
?>

<h1 class="collection-title"><?php echo $collectionTitle ?></h1>

<div class="books-grid">

  <?php
    if($books->count() > 0): ?>
      <?php foreach($books->sortBy('author', 'asc') as $book): ?>
        <a class="books-grid__book <?php if($book->isSold() == '1') { echo 'book-sold'; } ?>" href="<?= $book->url() ?>">
          <div class="book__image">

            <?php
              if($book->coverImage()->isNotEmpty()) {
                $coverImage = $book->images()->find($book->coverImage());
                $coverImageThumb = thumb($coverImage, array('height' => 220))->url();
                echo "<div class='book__cover' style='background-image: url($coverImageThumb);'></div>";
              } else {
                echo "<div class='book__cover book__cover--placeholder'><span>No image</span></div>";
              }
            ?>

          </div>
          <h4 class="book__author"><?= $book->author()->html() ?></h4>
          <h5 class="book__title"><?= $book->shortTitle()->html() ?></h5>
          <?php if($book->isSold() == '1'): ?>
            <p class="book-sold-label">Sold</p>
          <?php endif ?>
        </a>

      <?php endforeach ?>
    <?php else: ?>
      <span class="no-books">No books to show</span>
    <?php endif ?>

</div>

<?php if($books->pagination()->hasPages()): ?>
<nav class="pagination">

  <?php if($books->pagination()->hasPrevPage()): ?>
  <a class="prev" href="<?php echo $books->pagination()->prevPageURL() ?>">&lsaquo; Previous page</a>
  <?php endif ?>

  <?php if($books->pagination()->hasNextPage()): ?>
  <a class="next" href="<?php echo $books->pagination()->nextPageURL() ?>">Next page &rsaquo;</a>
  <?php endif ?>

</nav>
<?php endif ?>

<?php snippet('footer') ?>