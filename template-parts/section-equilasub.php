<!--equila sub section -->
<?php
$content = get_sub_field('section_settings');
if($content['enable_disable']):
    ?>
<section class="site-section p-0 ">
    <div class="site-wrapper">
        <div class="srv-block inner-block" id="serv-1">
            <figure>
                <?php echo wp_get_attachment_image($content['image1'],'full'); ?>
                <figcaption>
                    <div class="section-heading">
                        <h2 class="section-title wow" data-wow-offset="0" data-wow-delay="0.3s">
                            <?php echo preg_replace('/<\/?p>/','', $content['heading1']); ?></h2>
                        <span class="big-title wow" data-wow-offset="10"
                            data-wow-delay="0.9s"><?php echo preg_replace('/<\/?p>/','', $content['sub_heading1']); ?></span>
                    </div>

                    <div class="section-content wow fadeInUp" data-wow-offset="0" data-wow-delay="900ms">
                        <?php echo preg_replace('/<\/?p>/','', $content['description1']); ?>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="srv-block inner-block" id="serv-2">
            <figure>
                <?php echo wp_get_attachment_image($content['image2'],'full'); ?>
                <figcaption>
                    <div class="section-heading">
                        <h2 class="section-title wow" data-wow-offset="0" data-wow-delay="0.3s">
                            <?php echo preg_replace('/<\/?p>/','', $content['heading2']); ?></h2>
                        <span class="big-title wow" data-wow-offset="10"
                            data-wow-delay="0.9s"><?php echo preg_replace('/<\/?p>/','', $content['sub_heading2']); ?></span>
                    </div>
                    <div class="section-content wow fadeInUp" data-wow-offset="0" data-wow-delay="900ms">
                        <?php echo preg_replace('/<\/?p>/','', $content['description2']); ?>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="srv-block inner-block" id="serv-8">
            <figure>

                <?php echo wp_get_attachment_image($content['image3'],'full');  ?>
                <figcaption>
                    <div class="section-heading">
                        <h2 class="section-title wow" data-wow-offset="0" data-wow-delay="0.3s">
                            <?php echo preg_replace('/<\/?p>/','', $content['heading3']); ?> </h2>
                        <span class="big-title wow" data-wow-offset="10"
                            data-wow-delay="0.9s"><?php echo preg_replace('/<\/?p>/','', $content['sub_heading3']); ?></span>
                    </div>

                    <div class="section-content wow fadeInUp" data-wow-offset="0" data-wow-delay="900ms">
                        <?php echo preg_replace('/<\/?p>/','', $content['description3']); ?>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<?php endif; ?>
<!--equila sub section ends here-->