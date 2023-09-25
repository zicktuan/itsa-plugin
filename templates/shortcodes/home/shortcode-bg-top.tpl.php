<div class="section techwix-hero-section-05">
    <div class="techwix-hero-wrap" style="background-image: url(<?php echo !empty($atts['itsa_home_bg__background']) ? wp_get_attachment_url($atts['itsa_home_bg__background']) : '' ?>);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h3 class="sub-title aos-init aos-animate" data-aos-delay="600" data-aos="fade-up"><?php echo !empty($atts['itsa_home_bg__sub_title']) ? $atts['itsa_home_bg__sub_title'] : ''?></h3>
                        <!-- <h2 class="title aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">Take the next steps for an <span>AI-driven</span> enterprise.</h2> -->
                        <h2 class="title aos-init aos-animate" data-aos="fade-up" data-aos-delay="800"><?php echo !empty($atts['itsa_home_bg__title']) ? $atts['itsa_home_bg__title'] : ''?></h2>
                        <p data-aos="fade-up" data-aos-delay="900" class="aos-init aos-animate"><?php echo !empty($atts['itsa_home_bg__short_desc']) ? $atts['itsa_home_bg__short_desc'] : ''?></p>
                        <?php if(!empty($atts['itsa_home_bg__url'])): ?>
                        <div class="hero-btn aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000">
                            <a class="btn" href="<?php echo $atts['itsa_home_bg__url'] ?>">Read More</a>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-images">
                        <div class="images">
                            <img src="<?php echo !empty($atts['itsa_home_bg__img']) ? wp_get_attachment_url($atts['itsa_home_bg__img']) : '' ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>