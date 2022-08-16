<!-- lifestyle section starts here -->
<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<div class="site-section" id="lifestyle-section">
    <div class="site-wrapper">
        <div class="site-row">
            <div class="site-col col-md-5">
                <div class="section-heading">
                    <h2 class="section-title wow" data-wow-offset="0" data-wow-delay="0.3s">
                        <?php echo preg_replace('/<\/?p>/','', $content['heading']); ?>
                    </h2>
                    <span class="big-title wow" data-wow-offset="10"
                        data-wow-delay="0.9s"><?php echo preg_replace('/<\/?p>/','', $content['sub_heading']); ?></span>
                </div>
                <div class="section-content wow fadeInUp" data-wow-offset="0" data-wow-delay="900ms">
                    <?php echo preg_replace('/<\/?p>/','', $content['description']); ?>

                </div>
            </div>
            <div class="site-col col-md-7">
                <div class="site-image collage-image wow fadeInRight" data-wow-offset="0" data-wow-delay="0.6s">
                    <div class="site-row">
                        <div class="col-6">
                            <span class="single-image">
                                <?php echo wp_get_attachment_image($content['image'],'full'); ?>
                            </span>
                            <span class="single-image">
                                <?php echo wp_get_attachment_image($content['image1'],'full'); ?>
                            </span>
                        </div>
                        <div class="col-6">
                            <span class="single-image">
                                <?php echo wp_get_attachment_image($content['image2'],'full'); ?>
                            </span>
                            <span class="single-image">
                                <?php echo wp_get_attachment_image($content['image3'],'full'); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
<!-- lifestyle section starts ends here -->