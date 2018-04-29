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

      <div class="membership-badges">
        <div class="membership-badges__badge">
          <a href="http://www.aba.org.uk/"><img src="/assets/images/aba_logo_2011_web.jpg" alt="Antiquarian Booksellers' Association logo" /></a>
        </div>
        <div class="membership-badges__badge">
          <a href="https://ilab.org/home" style="padding: 5px;"><img src="/assets/images/ilab_logo.jpg" alt="International League of Antiquarian Booksellers logo" /></a>
        </div>
        <div class="membership-badges__badge">
          <a href="http://www.pbfa.org/"><img src="/assets/images/pbfa-logo-black.png" alt="PFBA Logo" /></a>
        </div>
      </div>
    </div>

  </div>

<?php snippet('analyticstracking') ?>
</body>
</html>