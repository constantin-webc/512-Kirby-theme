<div class="gallery-img <?php e($item->size()->bool(), 'section-large')?>">
    <?php $images =  $item->medias()->toFiles(); foreach($images as $image): ?>

    <?php if($item->size()->bool()):?>
    <?php $imgsize = $image->resize(970); ?>
    <?php else:?>
    <?php $imgsize = $image->resize(720); ?>
    <?php endif?>

    <figure>
        <?php if($image->type() == 'video'): ?>
        <div class="video">
            <video class="html5" controls>
                <source src="<?= $image->url()?>" type="video/<?= $image->extension()?>">
                <p>Votre navigateur ne prend pas en charge les vidéos HTML5.
                    Voici <a href="<?= $image->url()?>">un lien pour télécharger la vidéo</a>.</p>
            </video>
        </div>
        <?php endif?>

        <?php if($image->type() == 'image'): ?>

        <?php if($image->extension() == 'gif'): ?>
        <img loading="lazy" src="<?= $image->url()?>" width="<?= $image->width()?>" height="<?= $image->height()?>" alt="<?= $image->alt()?>">
        <?php else:?>
        <img <?php if($item->mediaInLb ()->bool()):?> class="kt-img-lightbox-js" data-img="<?= $image->url() ?>" <?php endif?> src="<?= $imgsize->url() ?>" width="<?= $imgsize->width()?>" height="<?= $imgsize->height()?>" alt="<?= $image->alt()?>" loading="lazy" />
        <?php endif?> 

        <?php endif?>

        <?php if($image->imgcaption()->isNotEmpty()):?>
        <figcaption class="imgCaption <?php e($item->size()->bool(), 'section-large')?>">
            <?= $image->imgcaption()->kt()?>
        </figcaption>
        <?php endif?>

    </figure>

    <?php if($item->mediatext()->isNotEmpty()):?>
    <div <?php e($item->size()->bool(), 'class="section-large"')?>>
        <?= $item->mediatext()->blocks()?>
    </div>
    <?php endif?>
    <?php endforeach ?>
</div>