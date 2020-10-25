<?php snippet('header') ?>

<main>

    <?php if(!$page->hideIntro()->bool()): ?>
    <section class="intro">
        <h2><?= $page->introTitle()?></h2>
        <?= $page->introText()->kt()?>

        <?php if($relatedPage): ?>
        <br />
        <a class="link-dark-big" href="<?= $relatedPage->url()?>">
            <?= $page->relatedtitle()->or($relatedPage->title()) ?>
        </a>
        <?php endif?>
    </section>
    <?php endif?>

    <?php $projectsPage = $pages->listed()->findBy('template', 'projects');?>
    <?php if($projectsPage):?>
    <?php $projects = $projectsPage->projectsOnHome()->toPages();?>
    <?php if($projects->count()):?>
    <?php snippet('home-sections/projects', ['projects' => $projects, 'projectsPage' => $projectsPage]) ?>
    <?php endif?>
    <?php endif?>

    <?php $services = $pages->listed()->findBy('template', 'services');?>
    <?php if($services):?>   
    <?php snippet('home-sections/services', ['services' => $services]) ?>
    <?php endif?>

    <?php $blog = $pages->listed()->findBy('template', 'blog');?> 
    <?php if($blog):?>    
    <?php snippet('home-sections/blog', ['blog' => $blog]) ?>
    <?php endif?>

</main>



<?php snippet('footer') ?>