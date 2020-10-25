<?php if($logosite = $site->sitelogo()->toFile()): ?>
<?php if ($logosite->extension() === 'svg'): ?>
<?= $logosite->read() ?>
<?php else: ?>
<img src="<?= $logosite->url() ?>" alt="logo <?= $site->title()->html() ?>">
<?php endif ?>
<?php else:?>
<?= $site->title()->html() ?>
<?php endif ?>