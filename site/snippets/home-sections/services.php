<section class="list-items">
    <h2 class="h1">
        <span>
        <?= $services->homeheadline()->or($services->headline()) ?>  
        </span>
    </h2>
    
    <?= $services->homeintro()->kt()->or($services->headlineintro()->kt()) ?>
    <br>

    <p> <a class="link-light-big" href="<?= $services->url()?>"><?= $services->homelinktitle()?></a> </p>

    <ul class="list-items-container">
    <?php $items = $services->textcontent()->toStructure();?>
        <?php foreach ($items as $item): ?>
        <?php if ($item->onhome()->bool()):?>
        <li class="kt list-item <?php e($item->size()->bool(), 'list-item-large')?>">

            <h2 class="h3 anchor-item"><a href="<?= $services->url()?>/#<?= $item->titlesection()->slug()?>"><?= $item->titlesection()?></a></h2>
            
            <?php if($item->onhomecontent()->isNotEmpty()):?>
            <?= $item->onhomecontent()->kt() ?>
            <?php else:?>
            <?php if($item->postType() == 'Medias'):?>
            <p><?= $item->mediatext()->blocks()->excerpt(300) ?></p>
            <?php else:?>
            <p><?= $item->text()->blocks()->excerpt(300) ?></p>
            <?php endif?>
            <?php endif?>
        </li>
        <?php endif?>
        <?php endforeach ?>

    </ul>
</section>