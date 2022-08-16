<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>

<div class="site-section intro-section">
    <div class="company-name">
        <?php echo wp_get_attachment_image($content['logo']); ?>
    </div>
    <div class="site-wrapper">
        <div class="site-row">
            <div class="site-col  col-md-5">
                <div class="section-heading">
                    <h2 class="section-title wow" data-wow-offset="0" data-wow-delay="0.3s">
                        <?php echo preg_replace('/<\/?p>/','', $content['heading']); ?></h2>
                    <span class="big-title wow" data-wow-offset="10"
                        data-wow-delay="0.9s"><?php echo preg_replace('/<\/?p>/','', $content['sub_heading']); ?></span>
                </div>
            </div>
            <div class="site-col col-md-7">
                <div class="section-content wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <?php echo preg_replace('/<\/?p>/','', $content['description']); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;