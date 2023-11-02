<section class="page-title-section bg-img cover-background mx-lg-1-6 mx-xl-2-5 mx-xxl-2-9 left-overlay-dark"
            data-overlay-dark="8" data-background="<?php echo !empty($atts['itsa_contact_bg__background']) ? wp_get_attachment_url($atts['itsa_contact_bg__background']) : '' ?>"
            style="background-image: url(<?php echo !empty($atts['itsa_contact_bg__background']) ? wp_get_attachment_url($atts['itsa_contact_bg__background']) : '' ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="position-relative">
                            <h1><?php echo !empty($atts['itsa_contact_bg__title']) ? $atts['itsa_contact_bg__title'] : '' ?></h1>
                        </div>
                        <ul>
                            <li><a href="<?php home_url()?>">Home</a></li>
                            <li><a href="#"><?php echo !empty($atts['itsa_contact_bg__title']) ? $atts['itsa_contact_bg__title'] : '' ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="line-animated">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </section>