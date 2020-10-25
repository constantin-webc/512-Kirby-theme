<article class="article-style article-animated">
    <div class="article-animated-content">
        <header>
            <h2 class="h2 anchor-item"><a title="read all  <?= $project->headline()->or($project->title()) ?>" href="<?= $project->url() ?>"><?= $project->headline()->or($project->title()) ?></a> </h2>
        </header>
        <?php if ($project->illusintro()->isNotEmpty()) : ?>
            <?= $project->illusintro()->kt() ?>
        <?php endif ?>
       
    </div>
    <figure>
        <?php if ($imgfront = $project->projectIllu()->toFile()) : ?>
            <img
            <?php if ($imgback = $project->projectIlluBack()->toFile()) : ?>
            <?php if ($imgback->type() == 'image') : ?>              
            data-img="<?= $imgback->url() ?>"
            <?php endif?>
            <?php if ($imgback->type() == 'video') : ?>
            data-video="<?= $imgback->url() ?>"
            data-poster="<?= $imgfront->url() ?>"
            <?php endif?>
            <?php else:?>
            data-img="<?= $imgfront->url() ?>"
             <?php endif?>
             loading="lazy" 
             class="thumb face" 
             src="<?= $imgfront->crop(612, 381)->url() ?>" 
             width="612" 
             height="381" 
             alt="<?= $project->title() ?> presentation"             
             >
        <?php endif ?>  
        <figcaption>
            <h3><a class="anchor-item" title="Read article" href="<?= $project->url() ?>"><?= $project->title() ?></a></h3>
        </figcaption>
    </figure>



    <button title="Close window" aria-label="Close window" class="closeClone"></button>
    <button title="Open window" aria-label="Open window" class="btnOpenClone"></button>
</article>