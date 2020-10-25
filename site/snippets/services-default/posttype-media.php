<div class="gallery-img <?php e($item->size()->bool(), 'project-large')?>">

    <?php $images =  $item->medias()->toFiles(); foreach($images as $image): ?>
    <figure>
        <?php if($item->size()->bool()):?>
        <?php $imgsize = $image->resize(944); ?>
        <?php else:?>
        <?php $imgsize = $image->resize(408); ?>
        <?php endif?>
        <img <?php if($item->mediaInLb()->bool()):?>class="kt-img-lightbox-js" data-img="<?= $image->url() ?>" <?php endif?> src="<?= $imgsize->url() ?>" width="<?= $imgsize->width()?>" height="<?= $imgsize->height()?>" alt="<?= $image->alt()?>" loading="lazy" />
    </figure>

    <?php if($item->mediatext()->isNotEmpty()):?>
    <div <?php e($item->size()->bool(), 'class="project-large"')?>>
        <?= $item->mediatext()->blocks()?>
    </div>
    <?php endif?>
    
    <?php endforeach ?>
    
</div>