<div class="section techwix-about-section-05 section-padding">
    <div class="container">
        <div class="about-wrap">
            <div class="section-title text-center">
                <h3 class="sub-title"><?php echo !empty($atts['itsa_home_about__sub_title']) ? $atts['itsa_home_about__sub_title'] : ''?></h3>
                <h2 class="title"><?php echo !empty($atts['itsa_home_about__title']) ? $atts['itsa_home_about__title'] : ''?></h2>
            </div>
            <div class="about-content-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-img-wrap">
                            <div class="about-img about-img-big">
                                <img src="<?php echo !empty($atts['itsa_home_about__img_big']) ? wp_get_attachment_url($atts['itsa_home_about__img_big']) : '' ?>" alt="">
                            </div>
                            <div class="about-img about-img-sm">
                                <img src="<?php echo !empty($atts['itsa_home_about__img_sm']) ? wp_get_attachment_url($atts['itsa_home_about__img_sm']) : '' ?>" alt="">
                                <div class="shape-01"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <p class="title"><?php echo !empty($atts['itsa_home_about__title_content']) ? $atts['itsa_home_about__title_content'] : ''?></p>
                            <p class="text"><?php echo !empty($atts['itsa_home_about__text_content']) ? $atts['itsa_home_about__text_content'] : ''?></p>
                            <div class="about-list-item-wrap">
                            <?php if(!empty($listItems[0])): ?>
                                <?php foreach ($listItems as $item): ?>
                                <div class="about-list-item">
                                    <div class="about-img">
                                        <img src="<?php echo !empty($item['img']) ? wp_get_attachment_url($item['img']) : '' ?>" alt="">
                                    </div>
                                    <div class="about-text">
                                        <h3 class="title"><?php echo !empty($item['title']) ? $item['title'] : ''?></h3>
                                        <p><?php echo !empty($item['desc']) ? $item['desc'] : ''?></p>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>