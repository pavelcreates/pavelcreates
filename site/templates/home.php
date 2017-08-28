<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="bio-wrapper wrap wide">
      <p class="bio-text intro text"><?= $site->description()->html() ?></p>
      <hr />
    </div>

    <!-- <section class="projects-section">

      <div class="wrap wide">
        <?php snippet('showcase', ['limit' => 3]) ?>
        <?php snippet('showcase_custom', ['limit' => 3]) ?>
        <p class="projects-section-more"><a href="<?= page('projects')->url() ?>" class="btn">show all projects &hellip;</a></p>
      </div>

    </section> -->

  </main>

</div>

<?php snippet('footer') ?>
