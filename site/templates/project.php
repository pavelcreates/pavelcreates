<?php snippet('header') ?>

    <main class="main" role="main">

      <header class="wrap">
        <h1><?= $page->title()->html() ?></h1>
        <div class="intro text">
          <?= $page->skills() ?>
        </div>
        <hr />
      </header>

      <div class="text wrap">

        <?= $page->text()->kirbytext() ?>

        <?php
        // Images for the "project" template are sortable. You
        // can change the display by clicking the 'edit' button
        // above the files list in the sidebar.
        foreach($page->images()->sortBy('sort', 'asc') as $image): ?>

          <?php if($image->cover()->bool()) :?>
            <figure>
              <img class="project-cover" src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
            </figure>

          <?php else: ?>

            <figure>
              <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
            </figure>

          <?php endif ?>

        <?php endforeach ?>

      </div>

      <?php snippet('prevnext') ?>

    </main>

  </div>
<?php snippet('footer') ?>
