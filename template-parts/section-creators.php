<!--creators section starts here -->
<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<section class="site-section" id="creators-section">
    <div class="site-wrapper">
        <div class="site-row">
            <div class="site-col col-lg-4">
                <div class="section-heading">
                    <h2 class="section-title wow" data-wow-offset="0" data-wow-delay="0.3s">
                        <?php echo preg_replace('/<\/?p>/','', $content['heading']); ?></h2>
                    <span class="big-title wow" data-wow-offset="10"
                        data-wow-delay="0.9s"><?php echo preg_replace('/<\/?p>/','', $content['sub_heading']); ?></span>
                </div>
            </div>
            <div class="site-col col-lg-8">
                <div class="site-creators">
                    <div class="site-image">
                    <?php echo wp_get_attachment_image($content['creators_image'],'full'); ?>
                    </div>
                    <div class="site-content">
                        <div class="section-heading wow fadeInUp" data-wow-offset="0" data-wow-delay="300ms">
                            <h2> <?php echo preg_replace('/<\/?p>/','', $content['creators_heading']); ?></h2>
                        </div>
                        <div class="section-content wow fadeInUp" data-wow-offset="0" data-wow-delay="600ms">
                            <?php echo preg_replace('/<\/?p>/','', $content['creators_description']); ?>
                        </div>
                    </div>
                </div>
                <div class="site-creators">
                    <div class="site-image">
                    <?php echo wp_get_attachment_image($content['creators_image1'],'full'); ?>
                    </div>
                    <div class="site-content">
                        <div class="section-heading wow fadeInUp" data-wow-offset="0" data-wow-delay="300ms">
                            <h2><?php echo preg_replace('/<\/?p>/','', $content['creators_heading1']); ?></h2>
                        </div>
                        <div class="section-content wow fadeInUp" data-wow-offset="0" data-wow-delay="600ms">
                            <?php echo preg_replace('/<\/?p>/','', $content['creators_description1']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
<!--creators section ends here -->