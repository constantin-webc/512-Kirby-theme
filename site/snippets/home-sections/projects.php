<div class="animated-items-container">
    <?php foreach($projects as $project):?>
    <?php snippet('projects-list', ['project' => $project]) ?>
    <?php endforeach?>
</div>

<section class="projects-footer">
    <h2 class="h2">
        <span>
            <?= $projectsPage->homeintrotitle()->or($projectsPage->pageintrotitle()) ?>
        </span>
    </h2>

    <?= $projectsPage->homeintro()->kt()->or($projectsPage->pageintro()->kt()) ?>

    <br />

    <a class="link-light-big" href="<?= $projectsPage->url()?>">
    <?= $projectsPage->homebuttontitle()->or($projectsPage->title()) ?>
</a>
</section> 