<?php snippet('header') ?>

<main>

    <header class="intro">
        <h1 class="page-title"><?= $page->headline()->or($page->title()) ?> </h1>
        <?= $page->headlineintro()->kt()?>
    </header>

    <article class="list-items-container">
        <?php $items = $page->textcontent()->toStructure();?>
        <?php foreach ($items as $item): ?>

        <section class="kt list-item <?php e($item->size()->bool(), 'list-item-large')?>">
            <h2><?= $item->sectiontitle()?></h2>

            <?php if($item->postType() == 'Text'):?>
            <?php snippet('services-default/posttype-text', ['item' => $item]) ?>
            <?php endif?>

            <?php if($item->postType() == 'Medias'):?>
            <?php snippet('services-default/posttype-media', ['item' => $item]) ?>
            <?php endif?>

            <?php if($item->itemlink()->isNotEmpty()):?>
            <?php snippet('services-default/linkfield', ['item' => $item]) ?>
            <?php endif?>

        </section>
        <?php endforeach ?>
    </article>

    <?php snippet('lightbox-img') ?>
    
</main>

<?php snippet('footer') ?>