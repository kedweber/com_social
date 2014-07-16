<div class="twitter row">
    <? foreach($twitter as $tweet) : ?>
        <div class="col-md-3 tweet">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">
                        <?= @helper('com://site/socialmedia.template.helper.parser.url', array('text' => $tweet->text)); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 thumbnail">
                    <img src="<?= $tweet->user['profile_image_url']; ?>">
                </div>
                <div class="col-md-9 twitter-user">
                    <strong><?= $tweet->user['name']; ?></strong><br />
                    <p><?= @helper('date.humanize', array('date' => $tweet->created_at)); ?></p>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>