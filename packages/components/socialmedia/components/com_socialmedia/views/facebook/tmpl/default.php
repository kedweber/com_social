<div class="row facebook">
    <? foreach($facebook as $item) : ?>
        <div class="col-md-3 fb-post">
            <div class="row">
                <div class="text">
                    <?= @helper('com://site/socialmedia.template.helper.parser.facebook', array('feed' => $item)); ?>
                </div>
            </div>
            <div class="row">
                <footer>
                    <a class="readmore" href="<?= $item->link; ?>" target="_blank"><?= @text('READ_MORE'); ?></a>
                </footer>
            </div>
        </div>
    <? endforeach; ?>
</div>