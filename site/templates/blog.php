<?php snippet('header') ?>

<main class="blog-items">
    <section>
        <div class="blog-text blog-text-blog">
            <h1 class="h1"><span><?= $page->headline()->or($page->title()) ?> </span></h1>
            <?= $page->headlineintro()->kt() ?>
        </div>
        <div class="blog-items-container blog-items-container-blog">
            <?php if($articles->count()):?>
            <?php foreach($articles as $article):?>
            <?php snippet('articles-list', ['article' => $article]) ?>
            <?php endforeach?>
            <?php else:?>
            <p>No article yet :( </p>
            <?php endif?>
        </div>
        <?php snippet('blog/pagination') ?>
    </section>
</main>

<?php snippet('footer') ?> 