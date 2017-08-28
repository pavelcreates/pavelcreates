<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <!-- Custom Scripts -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- End Custom Scripts -->

  <!-- Typekit Stuff -->
  <script src="https://use.typekit.net/iuh1ndy.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <!-- End Typekit Stuff -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/index.css') ?>

</head>
<body>
  <div class="main-wrapper">
    <header class="header wrap wide" role="banner">
      <div class="grid">

        <div class="branding column">
          <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>
        </div>
        <h2 class="bio-spec"><?= $site->specialty()->html() ?></h2>
        <h2 class="bio-city"><?= $site->city()->html() ?></h2>

        <?php snippet('menu') ?>

      </div>
    </header>
