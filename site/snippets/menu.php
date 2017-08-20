<nav class="navigation column" role="navigation">
  <ul class="menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>" onmouseover="mBack('<?= $item->title()->html() ?>')"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
