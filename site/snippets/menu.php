<?php $items = $pages->listed(); if($items->isNotEmpty()):?>
    <input id="navInput" type="checkbox" class="navInput">
<nav class="topNav">
    <a class="logosite" href="<?= url()?>">
        <?php snippet('logo') ?>
    </a>
    
    <label aria-label="open mobile nav button" for="navInput" class="menuBtns">
    <svg class="menuBtn1" xmlns="http://www.w3.org/2000/svg"         height="24" width="24" viewBox="0 0 24 24">      
        <path transform="rotate(0,12,12) translate(0,0) scale(0.75,0.75)  " d="M8,20L24,20 24,22 8,22z M8,15L24,15 24,17 8,17z M8,10L24,10 24,12 8,12z M16,2C8.28,2 2,8.2800002 2,16 2,23.72 8.28,30 16,30 23.72,30 30,23.72 30,16 30,8.2800002 23.72,2 16,2z M16,0C24.822001,0 32,7.178 32,16 32,24.822 24.822001,32 16,32 7.178,32 0,24.822 0,16 0,7.178 7.178,0 16,0z" />      
      </svg>
      <svg class="menuBtn2" xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 24 24">      
        <path transform="rotate(0,12,12) translate(0,0) scale(0.75,0.75)  " d="M23,14C24.10498,14 25,14.89502 25,16 25,17.10498 24.10498,18 23,18 21.89502,18 21,17.10498 21,16 21,14.89502 21.89502,14 23,14z M16,14C17.105,14 18,14.895 18,16 18,17.105 17.105,18 16,18 14.895,18 14,17.105 14,16 14,14.895 14.895,14 16,14z M9,14C10.105,14 11,14.895 11,16 11,17.105 10.105,18 9,18 7.8950005,18 7,17.105 7,16 7,14.895 7.8950005,14 9,14z M16,2C8.2799997,2 2,8.2800002 2,16 2,23.72 8.2799997,30 16,30 23.72,30 30,23.72 30,16 30,8.2800002 23.72,2 16,2z M16,0C24.822,0 32,7.178 32,16 32,24.822 24.822,32 16,32 7.1780005,32 0,24.822 0,16 0,7.178 7.1780005,0 16,0z" />      
      </svg>
    </label>
    
    <ul class="nav-mobile <?php e($page->isHomePage(), 'nav-mobile-home')?>">
    <?php if($site->homeBtnMenu()->bool()):?>
        <li>
            <a href="<?= url()?>"><?= $site->homeBtnMenuTitle()?></a>
        </li>
        <?php endif ?>
        <?php foreach($items as $item): ?>
        <li>
            <a <?php e($item->isOpen(), 'class="menuActive"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        </li>
        <?php endforeach ?>
        <?php if($site->contactBtnMenu()->bool()):?>
        <li>
            <a href="<?= $page->url()?>/#contact"><?= $site->contactBtnMenuTitle()?></a>
        </li>
        <?php endif ?>

    </ul>
</nav>
<?php endif ?>