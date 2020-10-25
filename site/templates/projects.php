<?php snippet('header') ?>

<main>

    <header class="intro">
        <h1 class="page-title"><?= $page->headline()->or($page->title()) ?> </h1>
        <?= $page->headlineintro()->kt()?>
    </header>

    <div class="animated-items-container">
        <?php foreach($projects as $project):?>
        <?php snippet('projects-list', ['project' => $project]) ?>
        <?php endforeach?>
    </div>
    <section class="projects-footer">
        <h2 class="h2"><span><?= $page->pagefootergridtitle()?></span></h2>
        <?= $page->pagefootergrid()->kt()?>
    </section>

</main>



<?php snippet('footer') ?>

