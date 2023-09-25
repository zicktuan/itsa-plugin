<div class="section techwix-cta-section-02 section-padding-02">
    <div class="container">
        <div class="cta-wrap" style="background-image: url(<?php echo !empty($atts['itsa_about_infor__bg']) ? wp_get_attachment_url($atts['itsa_about_infor__bg']) : '' ?>);">
            <div class="row align-items-center">
                <div class="col-xl-9 col-lg-8">
                    <div class="cta-content">
                        <div class="cta-icon">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/cta-icon2.png'?>" alt="">
                        </div>
                        <p><?php echo !empty($atts['itsa_about_infor__title']) ? $atts['itsa_about_infor__title'] : '' ?></p>
                    </div>
                </div>
                <?php if(!empty($atts['itsa_about_infor__phone'])): ?>
                <div class="col-xl-3 col-lg-4">
                    <div class="cta-btn">
                        <a class="btn btn-white" href="#"><?php echo $atts['itsa_about_infor__phone'] ?></a>
                    </div>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>