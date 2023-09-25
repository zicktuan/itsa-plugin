<div class="section techwix-service-section-05">
    <div class="container">
        <div class="service-wrap section-padding-02">
            <div class="section-title text-center">
                <h3 class="sub-title"><?php echo !empty($atts['itsa_home_service__sub_title']) ? $atts['itsa_home_service__sub_title'] : ''?></h3>
                <h2 class="title"><?php echo !empty($atts['itsa_home_service__title']) ? $atts['itsa_home_service__title'] : ''?></h2>
            </div>
            <div class="service-content-wrap">
                <div class="row">
                    <?php if(!empty($listItems[0])): ?>
                        <?php foreach ($listItems as $item): ?>
                            <div class="col-xl-3 col-sm-6">
                                <div class="service-item-04">
                                    <div class="service-img">
                                        <img src="<?php echo !empty($item['img']) ? wp_get_attachment_url($item['img']) : '' ?>" alt="">
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                            <a href="<?php echo !empty($item['url']) ? $item['url'] : '#'?>">
                                                <?php echo !empty($item['title']) ? $item['title'] : ''?>
                                            </a>
                                        </h3>
                                        <p><?php echo !empty($item['desc']) ? $item['desc'] : ''?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>