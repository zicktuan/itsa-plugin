<section class="py-0 mx-lg-1-6 mx-xl-2-5 mx-xxl-2-9">
    <div class="slider-fade1 owl-carousel owl-theme w-100 owl-loaded">
        <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(-3620px, 0px, 0px); transition: all 0s ease 0s; width: 12672px;">
                <?php if(!empty($listItems[0])): ?>
                <?php foreach ($listItems as $item):?>
                <div class="owl-item cloned" style="width: 1810.22px;">
                    <div class="item bg-img cover-background pt-14 pb-22 py-sm-18 py-lg-20 py-xl-24"
                        data-background="<?php echo !empty($item['bg']) ? wp_get_attachment_url($item['bg']) : '' ?>"
                        style="background-image: url(<?php echo !empty($item['bg']) ? wp_get_attachment_url($item['bg']) : '' ?>);">
                        <div class="container position-relative z-index-9">
                            <div class="row align-items-center justify-content-xl-end">
                                <div class="col-lg-9 col-xl-7 col-xxl-6">
                                    <h1 class="display-16 display-sm-7 display-lg-4 display-xl-3 mb-2-9">
                                        <?php echo !empty($item['title']) ? $item['title'] : ''?>
                                    </h1>
                                    <p class="mb-2-3 font-weight-500 lead d-none d-sm-block">
                                        <?php echo !empty($item['desc']) ? $item['desc'] : ''?>
                                    </p>
                                    <?php if(!empty($item['url'])): ?>
                                    <a href="<?php echo $item['url'] ?>" class="btn-style1">
                                        <span>Get Started</span>
                                    </a>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; ?>

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