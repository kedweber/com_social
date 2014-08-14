<div class="twitter row">
    <? foreach($twitter as $tweet) : ?>
        <div class="col-md-3 social--block tweet">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">
                        <?= @helper('com://site/socialmedia.template.helper.parser.url', array('text' => $tweet->text)); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
					<div class="thumbnail">
						<img class="img-responsive" src="<?= $tweet->user['profile_image_url']; ?>">
					</div>
                </div>
                <div class="col-md-8 twitter-user">
                    <strong><?= $tweet->user['name']; ?></strong><br />
					<? $time_zone_server = new DateTimeZone(date_default_timezone_get()); ?>
					<? $time_zone_gmt = new DateTimeZone("GMT"); ?>

					<? $date_server = new DateTime("now"); ?>
					<? $date_gmt = new DateTime("now", $time_zone_gmt); ?>
                    <p><?= @helper('date.humanize', array('date' => $tweet->created_at, 'gmt_offset' => $date_server->getOffset() - $date_gmt->getOffset())); ?></p>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>