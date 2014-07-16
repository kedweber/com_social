<div class="mod_socialmedia hidden-sm hidden-xs">
    <div class="row hidden-phone">
        <hgroup>
            <div class="col-md-8 blue">
                <? if ($module->showtitle) : ?>
                    <h3><?= $module->title; ?></h3>
                <? endif; ?>
            </div>

            <button data-target="<?= @route('option=com_socialmedia&view=twitter&format=raw&limit=4&username=' . $module->params->username . '&hashtags=' . urlencode($module->params->hashtags)); ?>" class="col-md-2 mod-social-btn btn-light-blue"><?= @text('Twitter'); ?></button>
            <button data-target="<?= @route('option=com_socialmedia&view=facebook&format=raw&username=' . $module->params->facebook_user); ?>" class="col-md-2 mod-social-btn btn-blue"><?= @text('Facebook'); ?></button>
        </hgroup>
    </div>

    <div class="mod-socialmedia-body body hidden-phone">
        <div class="row-fluid">
            <div class="loading" style="height: 200px;"></div>
        </div>
    </div>
</div>

<script>
    jQuery.noConflict()(function($){
        $('.mod_socialmedia').find('.mod-socialmedia-body').load($('.mod_socialmedia').find('.mod-social-btn:first').attr('data-target'));

        $('.mod_socialmedia').find('.mod-social-btn').on('click', function(e) {
            e.preventDefault();

            $('.mod_socialmedia').find('.mod-socialmedia-body').html('<div class="loading" style="height: 200px;"></div>');
            $('.mod_socialmedia').find('.mod-socialmedia-body').load(e.target.getAttribute('data-target'));
        });
    });
</script>