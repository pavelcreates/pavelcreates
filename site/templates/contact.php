<?php snippet('header') ?>

    <style media="screen">
      /*h1 + .intro { margin-top: 0; }*/
      .intro { display: none; }
      h1 { margin-bottom: 1.5rem; }
    </style>

    <main class="main" role="main">

      <header class="wrap">
        <h1><?= $page->title()->html() ?></h1>
        <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
        </div>
      </header>

      <div class="wrap wide">
        <ul class="contact-options">
          <?php foreach($page->contactoptions()->toStructure() as $item): ?>
            <?php $icon = $page->image($item->icon()); ?>
            <li class="contact-item column">
                <div class="contact-item-content">
                  <i class="<?= $item->class() ?>" aria-hidden="true"></i>
                  <h3 class="contact-item-title"><?= $item->title()->html() ?></h3>
                  <p class="contact-item-text">
                    <?= $item->text()->html() ?>
                  </p>
                </div>
                <p class="contact-item-action">
                  <a href="<?= $item->url()->html() ?>" class="contact-action btn"><?= $item->linktext()->html() ?></a>
                </p>
            </li>
          <?php endforeach ?>
        </ul>
      </div>

      <div class="contact-twitter text wrap cf">
        <?= $page->text()->kirbytext() ?>
      </div>

    </main>

  </div>

<?php snippet('footer') ?>
