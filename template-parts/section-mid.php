<!-- mid description section -->
<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<section class="site-section light-bg wow" data-wow-offset="10" data-wow-delay="0.6s" id="mid-section">
    <div class="float-images">
        <div class="wow fadeInUp" data-wow-offset="10" data-wow-delay="0.3s">
            <img src="<?php echo get_template_directory_uri(); ?>/img/float-img1.jpg" class="img-1" alt="">
        </div>
        <div class="wow fadeInUp" data-wow-offset="10" data-wow-delay="0.6s">
            <img src="<?php echo get_template_directory_uri(); ?>/img/float-img2.jpg" class="img-2" alt="">
        </div>
        <div class="wow fadeInUp" data-wow-offset="10" data-wow-delay="0.9s">
            <img src="<?php echo get_template_directory_uri(); ?>/img/float-img3.jpg" class="img-3" alt="">
        </div>
        <div class="wow fadeInUp" data-wow-offset="10" data-wow-delay="1.2s">
            <img src="<?php echo get_template_directory_uri(); ?>/img/float-img4.jpg" class="img-4" alt="">
        </div>

        <!-- <div class="wow fadeInUp" data-wow-offset="10" data-wow-delay="0.3s">
            <?php echo wp_get_attachment_image($content['float_img'],'full'); ?>
        </div>
        <div class="wow fadeInUp" data-wow-offset="10" data-wow-delay="0.6s">
            <?php echo wp_get_attachment_image($content['float_img1'],'full'); ?>
        </div>
        <div class="wow fadeInUp" data-wow-offset="10" data-wow-delay="0.9s">
            <?php echo wp_get_attachment_image($content['float_img2'],'full'); ?>
        </div>
        <div class="wow fadeInUp" data-wow-offset="10" data-wow-delay="1.2s">
            <?php echo wp_get_attachment_image($content['float_img3'],'full'); ?>
        </div> -->
    </div>
    <div class="float-logo">
        <?php echo wp_get_attachment_image($content['logo'],'full'); ?>
    </div>
    <div class="site-wrapper">
        <div class="site-row">
            <div class="site-col col-md-5">
                <div class="section-content wow fadeInUp" data-wow-offset="0" data-wow-delay="600ms">
                    <?php echo preg_replace('/<\/?p>/','', $content['description']); ?>

                </div>
            </div>
            <div class="site-col col-md-5">
                <div class="section-content wow fadeInUp" data-wow-offset="0" data-wow-delay="600ms">
                    <?php echo preg_replace('/<\/?p>/','', $content['description1']); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
