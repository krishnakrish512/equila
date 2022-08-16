<!-- location section goes here -->
<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<section class="site-section pt-0" id="location-section">
    <div class="big-wrapper">
        <div class="site-image wow fadeInUp" data-wow-offset="0" data-wow-delay="600ms">
            <?php echo wp_get_attachment_image($content['image'],'full'); ?>
        </div>
    </div>
    <div class="site-wrapper">
        <div class="site-row">
            <div class="site-col col-md-5">
                <div class="section-heading">
                    <h2 class="section-title wow" data-wow-offset="0" data-wow-delay="0.3s">
                        <?php echo preg_replace('/<\/?p>/','', $content['heading']); ?></h2>
                    <span class="big-title wow" data-wow-offset="10"
                        data-wow-delay="0.9s"><?php echo preg_replace('/<\/?p>/','', $content['sub_heading']); ?></span>
                </div>
            </div>
            <div class="site-col col-md-7">
                <div class="section-content wow fadeInUp" data-wow-offset="0" data-wow-delay="900ms">
                    <?php echo preg_replace('/<\/?p>/','', $content['description']); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
<!-- location section ends here -->

