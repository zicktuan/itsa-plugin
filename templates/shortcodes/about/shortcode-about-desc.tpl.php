<div class="section techwix-about-section-07 section-padding">
            <div class="shape-1"></div>
            <div class="container">
                <!-- About Wrapper Start -->
                <div class="about-wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- About Image Wrap Start -->
                            <div class="about-img-wrap">
                                <img class="shape-1" src="<?php echo !empty($atts['itsa_about_desc__background'] ) ? wp_get_attachment_url($atts['itsa_about_desc__background'])  : '' ?>" alt="">
                                <div class="about-img">
                                    <img src="<?php echo !empty($atts['itsa_about_desc__img1'] ) ? wp_get_attachment_url($atts['itsa_about_desc__img1'])  : '' ?>" alt="">
                                </div>
                                <div class="about-img about-img-2">
                                    <img src="<?php echo !empty($atts['itsa_about_desc__img2'] ) ? wp_get_attachment_url($atts['itsa_about_desc__img2'])  : '' ?>" alt="">
                                </div>
                            </div>
                            <!-- About Image Wrap End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- About Content Wrap Start -->
                            <div class="about-content-wrap">
                                <div class="section-title">
                                    <h3 class="sub-title"><?php echo !empty($atts['itsa_about_desc__sub_title'] ) ? $atts['itsa_about_desc__sub_title']  : '' ?></h3>
                                    <h2 class="title"><?php echo !empty($atts['itsa_about_desc__title'] ) ? $atts['itsa_about_desc__title']  : '' ?></h2>
                                </div>
                                <p class="text"><?php echo !empty($atts['itsa_about_desc__desc'] ) ? $atts['itsa_about_desc__desc']  : '' ?></p>
                                <!-- About List Start -->
                                <div class="about-list-03">
                                    <div class="row">
                                        <?php if(!empty($listItems[0])): ?>
                                        <?php foreach ($listItems as $item): ?>
                                        <div class="col-sm-6">
                                            <div class="about-list-item-03">
                                                <h3 class="title"><?php echo !empty($item['title'] ) ? $item['title']  : '' ?></h3>
                                                <p><?php echo !empty($item['desc'] ) ? $item['desc']  : '' ?></p>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- About List End -->
                            </div>
                            <!-- About Content Wrap End -->
                        </div>
                    </div>
                </div>
                <!-- About Wrapper End -->
            </div>
        </div>