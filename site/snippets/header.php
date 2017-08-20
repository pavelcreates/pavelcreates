<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!-- <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title> -->
  <title>Pavel Ganapolsky | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <script src="https://use.typekit.net/iuh1ndy.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

  <?= css('assets/css/index.css') ?>


</head>
<body>
  <div class="wrapper">
    <header class="header  col-md-4 col-lg-3" role="banner">
      <div class="grid">

        <div class="branding column">
          <a href="<?= url() ?>" rel="home">
            <!-- <?= $site->title()->html() ?> -->
            Pavel Ganapolsky
          </a>
        </div>
      </div>
      <?php snippet('menu') ?>
    </header>

    <div id="m-wrapper"></div>
