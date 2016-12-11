<!doctype html>
<html class="no-js" lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <?= css('assets/css/normalize.css') ?>
  <?= css('assets/css/main.css') ?>
  <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

  <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/favicons/manifest.json">
  <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#2172a1">
  <link rel="shortcut icon" href="/favicons/favicon.ico">
  <meta name="msapplication-config" content="/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

</head>
<body>

  <div class="site-container">

    <header class="header wrap wide" role="banner">
    <a class="home-link" href="/">
      <img src="/assets/images/leaf.svg" class="logo__aldus-leaf" />
      <h1 class="logo__title">Jonathan Clark Fine Books</h1>
      <h3 class="logo__subtitle">Art and Architecture</h3>
      <?php snippet('menu') ?>
    </a>
    </header>
