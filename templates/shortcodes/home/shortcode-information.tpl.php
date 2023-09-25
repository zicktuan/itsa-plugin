<div class="section techwix-cta-section-03">
    <div class="container">
        <!-- Cta Wrap Start -->
        <div class="cta-wrap" style="background-image: url(<?php echo !empty($atts['itsa_home_infor__bg']) ? wp_get_attachment_url($atts['itsa_home_infor__bg']) : '' ?>);">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Cta Content Start -->
                    <div class="cta-content">
                        <div class="section-title">
                            <h2 class="title white"><?php echo !empty($atts['itsa_home_infor__title']) ? $atts['itsa_home_infor__title'] : '' ?></h2>
                        </div>
                    </div>
                    <!-- Cta Content End -->
                </div>
                <div class="col-lg-5">
                    <!-- Cta Button Start -->
                    <div class="cta-info text-center">
                        <div class="cta-icon">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/cta-icon2.png'?>" alt="">
                        </div>
                        <p><?php echo !empty($atts['itsa_home_infor__sub_title']) ? $atts['itsa_home_infor__sub_title'] : '' ?></p>
                        <h3 class="number"><?php echo !empty($atts['itsa_home_infor__phone']) ? $atts['itsa_home_infor__phone'] : '' ?></h3>
                    </div>
                    <!-- Cta Button End -->
                </div>
            </div>
        </div>
        <!-- Cta Wrap End -->
    </div>
</div>