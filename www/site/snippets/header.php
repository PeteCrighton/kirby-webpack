<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
    <?php if(!$page->isHomePage()): ?>
      <?= $page->title()->html() ?> |
    <?php endif ?>
    <?= $site->title()->html() ?>
  </title>
  
  <?= liveCSS('assets/builds/bundle.css') ?>
</head>
  
<body>
