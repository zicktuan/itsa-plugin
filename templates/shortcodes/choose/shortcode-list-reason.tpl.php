<div class="section techwix-choose-us-section techwix-choose-us-section-03 section-padding">
            <div class="container">
                <div class="choose-us-wrap">
                    <div class="section-title text-center">
                        <h3 class="sub-title"><?php echo !empty($atts['itsa_choose_reason__sub_title']) ? $atts['itsa_choose_reason__sub_title'] : '' ?></h3>
                        <h2 class="title"><?php echo !empty($atts['itsa_choose_reason__title']) ? $atts['itsa_choose_reason__title'] : '' ?></h2>
                    </div>
                    <div class="choose-us-content-wrap">
                        <div class="row">

                        <?php if(!empty($listItems[0])): ?>
                        <?php foreach ($listItems as $item): ?>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="choose-us-item-02">
                                <div class="choose-us-img">
                                    <img src="<?php echo !empty($item['icon']) ? wp_get_attachment_url($item['icon']) : '' ?>" alt="">
                                </div>
                                <div class="choose-us-content">
                                    <h3 class="title">
                                        <a href="<?php echo !empty($item['url']) ? $item['url'] : '#' ?>">
                                         <?php echo !empty($item['title']) ? $item['title'] : '' ?>
                                        </a>
                                    </h3>
                                    <p><?php echo !empty($item['desc']) ? $item['desc'] : '' ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                        <?php endif ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>