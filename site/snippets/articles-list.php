<article class="contentToLoad blog-item  <?php e($page->template() == 'blog', 'blog-item-blog')?>  blog-mini-thumb-item">
    <header>
        <time datetime="<?= $article->date()->toDate('%d.%m.%Y') ?>" pubdate="pubdate">
            <?= $article->date()->toDate('%d.%m.%Y') ?></time>
        <h3 class="<?php if($article->IlluPresentation()->bool()):?>h3 <?php else:?> h2 <?php endif?>"><?= $article->title()?></h3>
    </header>

    <?php if($img = $article->Illu()->toFile() ):?>
    <?php if($article->IlluPresentation()->bool()):?>
    <img loading="lazy" class="mini-thumb" src="<?= $img->crop(120, 120)->url()?>" width="120" height="120" alt="<?= $article->title()?> illustration">
    <?php else:?>

    <?php if($page->template() == 'home'):?>
    <?php $imgsize = $img->resize(284, 250); ?>
    <figure>
        <img loading="lazy" src="<?=$imgsize->url()?>" width="<?= $imgsize->width()?>" height="<?= $imgsize->height()?>" alt="<?= $article->title()?> illustration">
    </figure>
    <?php else:?>

    <?php $imgsize = $img->crop(442, 250); ?>
    <figure>
        <img loading="lazy" src="<?=$imgsize->url()?>" width="<?= $imgsize->width()?>" height="<?= $imgsize->height()?>" alt="<?= $article->title()?> illustration">
    </figure>
    <?php endif?>

    <?php endif?>
    <?php endif?>

    <?php if($page->template() == 'home'):?>
    <p><?= $article->headlineintro()->excerpt(50)?></p>
    <?php else:?>
    <?= $article->headlineintro()->kt() ?>
    <?php endif?>

    <a class="link-dark <?php e($page->template() == 'home', 'link-absolute')?>" href="<?= $article->url()?>">Read article</a>

    <?php if($page->template() == 'blog'):?>
    <footer class="articleTags">
        <?php foreach ($article->tags()->split(',') as $tag): ?>
        <a class="tag-boutton <?php e($tag == urldecode(param('tag')), ' tagActive ')?>" <?php if($tag == urldecode(param('tag'))):?> href="<?= $page->url()?>">
            <?php else:?>
            href="<?= url($page->url(), ['params' => ['tag' => urlencode($tag)]]) ?>">
            <?php endif?>
            <?php e($tag == urldecode(param('tag')), ' <span>X</span> ')?> <?php echo $tag; ?>
        </a>
        <?php endforeach?>
    </footer>
    <?php endif?>

</article>