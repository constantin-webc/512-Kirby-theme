<?php snippet('header') ?>

<main>

    <header class="article-header">
        <h1 class="page-title">
        <?= $page->headline()->or($page->title()) ?> 
        </h1>
        <time datetime="<?= $page->date()->toDate('%d.%m.%Y') ?>" pubdate="pubdate"><?= $page->date()->toDate('%d.%m.%Y') ?></time>
        <?= $page->headlineintro()->kt()?>
    </header>

    <article class="article-container kt">

        <?php foreach ($items as $item): ?>

        <section <?php e($item->size()->bool(), 'class="section-large"')?>>
            <h2><?= $item->sectiontitle()?></h2>

            <?php if($item->postType() == 'Text'):?>
            <?php snippet('article-project/posttype-text', ['item' => $item]) ?>
            <?php endif?>

            <?php if($item->postType() == 'Medias'):?>
            <?php snippet('article-project/posttype-media', ['item' => $item]) ?>
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