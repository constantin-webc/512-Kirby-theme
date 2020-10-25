<?php $articlesOnHome = $blog->articlesOnHome()->int();?>
<?php $articles = $blog->children()->listed()->sortBy('date', 'desc')->limit($articlesOnHome);?>

<section class="blog-items blog-items-home">
    <div class="blog-text">
        <h2 class="h1">
            <span>
                <?= $blog->homeintrotitle()->or($blog->pageintrotitle()) ?>
            </span>
        </h2>

        <?= $blog->homeintro()->kt()->or($blog->pageintro()->kt()) ?>

        <br />

        <a class="link-light-big" href="<?= $blog->url() ?>">
            <?= $blog->homebuttontitle()->or($blog->title()) ?>
        </a>
    </div>

    <div id="blog-items-container" class="blog-items-container">
        <?php if($articles->count()):?>
        <?php foreach($articles as $article):?>
        <?php snippet('articles-list', ['article' => $article]) ?>
        <?php endforeach?>
        <?php else:?>
        <p>No article yet :( </p>
        <?php endif?>
    </div>
</section>
