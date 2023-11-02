<section>
    <div class="container">
        <div class="section-title mb-1-9 mb-md-6 text-center wow fadeInUp">
            <span class="sm-title"><?php echo !empty($atts['itsa_service_price__sub_title']) ? $atts['itsa_service_price__sub_title'] : '' ?></span>
            <h2 class="mb-0 h1"><?php echo !empty($atts['itsa_service_price__title']) ? $atts['itsa_service_price__title'] : '' ?></h2>
        </div>
        <?php if (!empty($listItems[0])):?>
        <div class="row mt-n1-9 gx-xxl-5">
            <?php foreach ($listItems as $item): ?>
            <div class="col-sm-6 col-lg-4 mt-1-9 wow fadeInUp">
                <div class="card card-style-03 border-0 text-center primary-shadow">
                    <div class="position-relative">
                        <img src="<?php echo !empty($item['image']) ? wp_get_attachment_url($item['image']) : '' ?>" class="card-img-top">
                        <div class="price-before"><span><?php echo !empty($item['category']) ? $item['category'] : '' ?></span></div>
                        <div class="card-price text-white">
                            <h3 class="display-14 mb-0 text-white">
                                <?php if (!empty($item['price_lh'])):?>
                                    <?php echo $item['price_lh'] ?>
                                <?php else: ?>
                                    <span class="display-26">$</span>
                                    <?php echo $item['price'] ?>
                                <?php endif ?>
                            </h3>
                            <?php if (!empty($item['duration'])): ?>
                            <span><?php echo $item['duration']?></span>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="card-body pt-8 pb-1-9 px-1-6 px-sm-2-3">
                        <?php
                            $listSubItems = vc_param_group_parse_atts( $item['subItem'] );
                            if (!empty($listSubItems[0])):
                        ?>
                                
                        <ul class="list-style1 ps-0 mb-1-9">
                            <?php foreach ($listSubItems as $val):?>
                                <?php echo !empty($val['text']) ? '<li>'.$val['text'].'</li>' : '' ?>
                            <?php endforeach ?>
                        </ul>
                        <?php endif; ?>
                        <?php if(!empty($item['url'])):?>
                        <a href="<?php  echo $item['url'] ?>" class="btn-style1 medium"><span>Start Now</span></a>

                        <?php endif ?>
                    </div>
                </div>
            </div>
            <?php endforeach?>
        </div>
        <?php endif ?>
    </div>
</section>