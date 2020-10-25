<?php $popup = $item->itemlink()->toLinkObject()?>
<?php if(F::type($popup) == 'image'):?>
<a class="link-dark kt-img-lightbox-js icon-link-image" data-img="<?= $popup?>" href="#<?= str::slug($popup->title())?>"><?= $popup->title()?></a>
<?php else:?>
<a class="link-dark icon-link<?php e(F::type($popup) == 'document', '-document') ?><?php e(F::type($popup) == 'archive', '-archive') ?><?php e(F::type($popup) == 'video', '-video') ?><?php e(F::type($popup) == 'code', '-code') ?>" <?php e($popup->popup() == true, 'rel="noopener noreferrer" target="_blank"') ?>
    href="<?= $item->itemlink()->toLinkObject()?>"><?= $popup->title()?></a>
<?php endif?>