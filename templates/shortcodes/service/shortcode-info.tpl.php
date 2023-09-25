<div class="section techwix-cta-section-04 techwix-cta-section-06 techwix-cta-section-07">
    <div class="container">
        <div class="cta-wrap" style="background-image: url(<?php echo !empty($atts['itsa_service_infor__bg']) ? wp_get_attachment_url($atts['itsa_service_infor__bg']) : '' ?>);">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Cta Left Start -->
                    <div class="cta-left">
                        <div class="section-title">
                            <h2 class="title white"><?php echo !empty($atts['itsa_service_infor__title']) ? $atts['itsa_service_infor__title'] : '' ?></h2>
                        </div>
                    </div>
                    <!-- Cta Left End -->
                </div>
                <div class="col-lg-5">
                    <!-- Cta Right Start -->
                    <div class="cta-info text-center">
                        <div class="cta-icon">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/cta-icon2.png'?>" alt="">
                        </div>
                        <div class="cta-text">
                            <p><?php echo !empty($atts['itsa_service_infor__sub_title']) ? $atts['itsa_service_infor__sub_title'] : '' ?></p>
                            <h3 class="number"><?php echo !empty($atts['itsa_service_infor__phone']) ? $atts['itsa_service_infor__phone'] : '' ?></h3>
                        </div>
                    </div>
                    <!-- Cta Right End -->
                </div>
            </div>
        </div>
    </div>
</div>
