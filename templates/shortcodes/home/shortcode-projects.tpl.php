<section class="pt-0 pb-0 bg-dark">
    <div class="container-fluid px-0">
        <div class="portfolio-carousel owl-carousel owl-theme wow fadeIn owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage" >
                    <?php if($listItems[0]): ?>
                    <?php foreach ($listItems as $item): ?>
                    <div class="owl-item cloned">
                        <div class="portfolio-style01 mb-2-3">
                            <div class="portfolio-img">
                                <img src="<?php echo !empty($item['image']) ? wp_get_attachment_url($item['image']) : '' ?>">
                            </div>
                            <div class="portfolio-content">
                                <span class="text-primary d-block mb-1 text-uppercase font-weight-600 small">
                                    <?php echo !empty($item['position']) ? $item['position'] : '' ?>
                                </span>
                                <h3 class="mb-3 h4">
                                    <a href="<?php echo !empty($item['url']) ? $item['url'] : '' ?>">
                                        <?php echo !empty($item['title']) ? $item['title'] : '' ?>
                                    </a>
                                </h3>
                                <?php if (!empty($item['url'])):?>
                                <a href="<?php echo $item['url']?>">Read more <iclass="ti-arrow-right align-middle"></i></a>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                        aria-label="Previous">‹</span></button><button type="button" role="presentation"
                    class="owl-next"><span aria-label="Next">›</span></button></div>
            <div class="owl-dots disabled"></div>
        </div>
    </div>
</section>