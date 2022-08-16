<!--map section starts here -->
<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<section class="site-section pt-0 pb-0" id="map-section">
    <div class="site-map">
        <?php echo wp_get_attachment_image($content['image'],'full'); ?>
    </div>
    <div class="map-locator">


        <div class="section-heading">
            <h2 class="section-title wow" data-wow-offset="0" data-wow-delay="0.3s">
                <?php echo preg_replace('/<\/?p>/','', $content['heading']); ?></h2>
            <p class="large"><?php echo preg_replace('/<\/?p>/','', $content['sub_heading']); ?></p>
        </div>
        <div class="section-content wow fadeInUp" data-wow-offset="0" data-wow-delay="600ms">
            <?php echo preg_replace('/<\/?p>/','', $content['description']); ?></h2>
        </div>
    </div>
</section>
<?php endif;?>
<!--map section ends here -->