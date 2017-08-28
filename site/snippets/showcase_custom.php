<?php

$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<ul class="showcase-custom grid gutter-1">

  <?php foreach($projects as $project): ?>

    <li class="showcase-custom-item column">
      <a href="<?= $project->url() ?>" class="showcase-custom-link">
        <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
          <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-custom-image" />
        <?php endif ?>
      </a>

      <div class="showcase-custom-info-wrapper">
        <h2 class="showcase-custom-title"><a href="<?= $project->url() ?>" class="showcase-custom-link"><?= $project->title()->html() ?></a></h2>
        <h2 class="showcase-custom-skills bio-city"><?= $project->skills() ?></h2>
      </div>

      <div class="showcase-custom-copy-wrapper">
        <p class="showcase-custom-copy"><?= $project->summary() ?></p>
        <a class="showcase-custom-readmore" href="<?= $project->url() ?>">Read More &hellip;</a>
      </div>


    </li>

  <?php endforeach ?>

</ul>
