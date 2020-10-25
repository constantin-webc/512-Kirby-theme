<!DOCTYPE html>
<html lang="en">

<head>
    <?php snippet('meta') ?>
    <?php snippet('css') ?>

</head>

<body>

    <header class="header <?php e($page->isHomePage(), 'home-header')?> <?php e($page->isHomePage() && $page->posterfilter()->bool(), ' home-header-white')?>">
        <?php snippet('menu') ?>

        <?php if($page->isHomePage()) :?>
        <h1 class="home-h1 <?php e($page->colortitle()->bool(), ' home-h1-black')?>"><span><?= $page->bigtitre()?></span></h1>
        <?php endif?>
    </header>