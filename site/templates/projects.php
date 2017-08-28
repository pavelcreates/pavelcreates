<?php snippet('header') ?>

    <style media="screen">
      .intro { display: none; }
      h1 { margin-bottom: 1.5rem; }
    </style>

    <main class="main" role="main">

      <header class="wrap">
        <h1><?= $page->title()->html() ?></h1>
        <div class="intro text">
          <?= $page->text()->kirbytext() ?>
        </div>
      </header>

      <section class="projects-section">

        <div class="wrap wide">
          <?php snippet('showcase_custom') ?>
        </div>

      </section>

    </main>

  </div>

<?php snippet('footer') ?>
