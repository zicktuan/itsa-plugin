<div class="section techwix-counter-section-03" style="background-image: url(<?php echo !empty($atts['itsa_home_counter__bg']) ? wp_get_attachment_url($atts['itsa_home_counter__bg']) : '' ?>);">
    <div class="container">
        <div class="counter-wrap">
            <div class="row">
            <?php if(!empty($listItems[0])): ?>
                <?php foreach ($listItems as $item): ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-counter-02 text-center">
                            <span><span class="counter"><?php echo !empty($item['num']) ? $item['num'] : ''?></span><?php echo !empty($item['char']) ? $item['char'] : ''?></span>
                            <p><?php echo !empty($item['title']) ? $item['title'] : ''?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>