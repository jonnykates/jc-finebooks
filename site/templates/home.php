<?php snippet('head') ?>

  <div class="background-image-banner" style="background-image: url(' <?php echo $page->backgroundImage()->toFile()->url() ?> ');" >

    <div class="splash-container">
      <header class="header wrap wide" role="banner">
        <a class="home-link" href="/about">
          <img src="/assets/images/leaf.svg" class="logo__aldus-leaf" />
          <h1 class="logo__title">Jonathan Clark Fine Books</h1>
          <h3 class="logo__subtitle">Art and Architecture</h3>
        </a>
        <ul class="main-navigation col--main">
          <li><a href="/about">Enter site</a></li>
        </ul>
      </header>
    </div>

  </div>

</body>
</html>