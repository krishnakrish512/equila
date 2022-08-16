<?php
$content = get_sub_field('hero_settings');
if($content['enable_disable']):

?>
<div class="hero-section">
    <div class="hero-image  wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
        <?php echo wp_get_attachment_image($content['hero_image'],'full'); ?>
        <div class="site-wrapper">
            <div class="hero-content">
                <h1><?php echo preg_replace('/<\/?p>/','', $content['heading']); ?>
                </h1>
            </div>
        </div>
    </div>
</div>
<?php endif;