<footer class="footer-site">

    <div class="footer-logo">
        <a class="logosite" href="<?= url() ?>"><?php snippet('logo') ?></a>
        <div class="social">
            <?php foreach ($site->socials()->toStructure() as $social) : ?>
                <a href="<?= $social->socialname() ?>">
                    <?php if ($sociallogo = $social->logo()->toFile()) : ?>
                        <?php if ($sociallogo->extension() === 'svg') : ?>
                            <?= $sociallogo->read() ?>
                        <?php else : ?>
                            <img src="<?= $sociallogo->url() ?>" alt="logo <?= $social->socialname() ?>">
                        <?php endif ?>
                    <?php else : ?>
                        <?= $social->socialname() ?>
                    <?php endif ?>
                </a>
            <?php endforeach ?>
        </div>
    </div>

    <div id="contact" class="footer-contact">
        <?php if ($site->contactText()->isNotEmpty()) : ?>
            <div class="contact-text">
                <?= $site->contactText()->kt() ?>
            </div>
        <?php endif ?>
        <?php if ($site->email()->isNotEmpty()) : ?>
            <?= html::email($site->email(), $text = '', $attr = array('class' => 'footer-email')) ?>
        <?php endif ?>
        <?php if ($site->tel()->isNotEmpty()) : ?>
            <a class="tel" href="tel: <?= $site->tel() ?>"><?= $site->tel() ?></a>
        <?php endif ?>
        <?php if ($site->address()->isNotEmpty()) : ?>
            <address><?= $site->address() ?></address>
        <?php endif ?>
        <a class="copyright" href="<?= url() ?>"><?= $site->copyright() ?></a>
    </div>
</footer>
<?= js('assets/dist/js/prod.min.js') ?>

</body>

</html>

