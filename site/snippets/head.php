<!doctype html>
<html class="no-js" lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title><?= $page->title()->html() ?> | <?= $site->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <meta name="google-site-verification" content="cwov3QMDzqzX6JV6DDPDl4ON3T-tArRBCYzkb64D9cM" />
  <?= css('/assets/css/normalize.css') ?>
  <?= css('/assets/css/main.css') ?>
  <?= css('/assets/lightbox-2/css/lightbox.min.css') ?>
  <script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
  <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>

  <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/favicons/manifest.json">
  <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#2172a1">
  <link rel="shortcut icon" href="/favicons/favicon.ico">
  <meta name="msapplication-config" content="/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

</head>