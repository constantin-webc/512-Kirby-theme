<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<meta name="viewport" content="width=device-width,initial-scale=1.0">


<?php if($page->isHomePage()):?>
  <title><?= $page->seotitle()->or($page->bigtitre()) ?> </title>
  <meta property="og:title" content="<?= $page->seotitle()->or($page->bigtitre()) ?>" />
  <meta name="description" content="<?= $page->seoDescription()->or($page->introText()->excerpt(170)) ?>">
<meta property="og:description" content="<?= $page->seoDescription()->or($page->introText()->excerpt(170)) ?>" />
  <meta property="og:type" content="website" />

  <?php else:?>

<title><?= $page->seotitle()->or($page->headline()) ?> </title>
<meta property="og:title" content="<?= $page->seotitle()->or($page->headline()) ?>" />
<meta name="description" content="<?= $page->seoDescription()->or($page->headlineIntro()->excerpt(170)) ?>">
<meta property="og:description" content="<?= $page->seoDescription()->or($page->headlineIntro()->excerpt(170)) ?>" />
<meta property="og:type" content="article" />
<?php endif;?>

<meta property="og:url" content="<?= $page->url() ?>" />
<meta property="og:site_name" content="<?= $site->title() ?>" />

<?php if ($image =  $page->metaimage()->toFile()):?>
  <meta property="og:image" content="<?= $image->url() ?>">
  <meta property="og:image:type" content="image/<?= $image->extension() ?>" />
<meta property="og:image:width" content="<?= $image->width() ?>" />
<meta property="og:image:height" content="<?= $image->height() ?>" />
<meta property="og:image:alt" content="<?= $site->title() ?> <?= $page->title() ?> <?= $image->imgtitle() ?>" /> 
<?php else:?>   
<?php $image = $page->images()->first()?>
<?php if($page->hasImages()):?>
<meta property="og:image" content="<?= $image->url() ?>">
  <meta property="og:image:type" content="image/<?= $image->extension() ?>" />
<meta property="og:image:width" content="<?= $image->width() ?>" />
<meta property="og:image:height" content="<?= $image->height() ?>" />
<meta property="og:image:alt" content="<?= $site->title() ?> <?= $page->title() ?> <?= $image->imgtitle() ?>" /> 
<?php endif?>   
  <?php endif?>   

