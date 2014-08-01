<div class="mod_socialmedia hidden-sm hidden-xs">
    <div class="row hidden-phone">
		<? if ($module->showtitle) : ?>
			<div class="col-md-6">
				<h3><?= $module->title; ?></h3>
			</div>
		<? endif; ?>
		<div class="col-md-6">
			<? if($module->params->show_twitter) : ?>
				<button data-target="<?= @route('option=com_socialmedia&view=twitter&format=raw&limit=4&username=' . $module->params->username . '&hashtags=' . urlencode($module->params->hashtags)); ?>" class="btn btn-social twitter-bg-color"><?= @text('Twitter'); ?></button>
			<? endif; ?>
			<? if($module->params->show_facebook) : ?>
				<button data-target="<?= @route('option=com_socialmedia&view=facebook&format=raw&username=' . $module->params->facebook_user); ?>" class="btn btn-social facebook-bg-color"><?= @text('Facebook'); ?></button>
			<? endif; ?>
			<? if($module->params->show_rss) : ?>
				<button data-target="<?= @route('option=com_webfeeds&view=feeds&format=raw&source_id=' . $module->params->rss_source_id . '&layout=social&limit=4'); ?>" class="btn btn-social"><?= $module->params->rss_button_label; ?></button>
			<? endif; ?>
		</div>
   </div>

    <div class="mod-socialmedia-body">
        <div class="row">
            <div class="loading" style="height: 200px;"></div>
        </div>
    </div>
</div>

<script>
    jQuery.noConflict()(function($){
		$('.mod_socialmedia').find('.mod-socialmedia-body').load($('.mod_socialmedia').find('.btn-social:first').attr('data-target'));

        $('.mod_socialmedia').find('.btn-social').on('click', function(e) {
            e.preventDefault();

            $('.mod_socialmedia').find('.mod-socialmedia-body').html('<div class="loading" style="height: 200px;"></div>');
            $('.mod_socialmedia').find('.mod-socialmedia-body').load(e.target.getAttribute('data-target'));
        });
    });
</script>