<div class="section techwix-pricing-section section-padding-02">
    <div class="container">
        <!-- Pricing Wrap Start -->
        <div class="pricing-wrap">
            <div class="section-title text-center">
                <h3 class="sub-title"><?php echo !empty($atts['itsa_service_price__sub_title']) ? $atts['itsa_service_price__sub_title'] : '' ?></h3>
                <h2 class="title"><?php echo !empty($atts['itsa_service_price__title']) ? $atts['itsa_service_price__title'] : '' ?></h2>
            </div>
            <div class="pricing-content-wrap">
                <div class="row">
                <?php if(!empty($listItems[0])): ?>
                    <?php foreach ($listItems as $key => $item): ?>
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Pricing Start -->
                        <div class="single-pricing <?php echo ($key == 1 )? 'active' : ''?>">
                            <div class="pricing-badge">
                                <span class="title"><?php echo !empty($item['title']) ? $item['title'] : '' ?></span>
                            </div>
                            <?php if(!empty($item['price']) || !empty($item['price_lh'])):?>
                            <div class="pricing-price">
                                <?php if (!empty($item['price_lh'])):?>
                                    <h3 class="price"><?php echo $item['price_lh']?></h3>
                                <?php else: ?>
                                    <span class="currency">$</span>
                                    <h3 class="price"><?php echo $item['price']?><span>/<?php  echo !empty($item['duration']) ? $item['duration'] : '' ?></span></h3>
                                <?php endif ?>
                            </div>
                            <?php endif ?>
                            <div class="pricing-content">
                                <?php
                                    $listSubItems = vc_param_group_parse_atts( $item['subItem'] );
                                    if (!empty($listSubItems[0])):
                                ?>
                                
                                <ul class="pricing-list">
                                    <?php foreach ($listSubItems as $val):?>
                                        <?php echo !empty($val['text']) ? '<li>'.$val['text'].'</li>' : '' ?>
                                    <?php endforeach ?>
                                </ul>
                                <?php endif ?>
                                <?php if(!empty($item['url'])):?>
                                <div class="pricing-btn">
                                    <a class="btn" href="<?php  echo $item['url'] ?>">Try It Now</a>
                                </div>
                                <?php endif ?>
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