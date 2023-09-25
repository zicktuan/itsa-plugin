<div class="section techwix-counter-section-03 techwix-counter-section-04">
    <div class="container">
        <div class="counter-wrap" style="background-image: url(<?php echo !empty($atts['itsa_about_counter__bg']) ? wp_get_attachment_url($atts['itsa_about_counter__bg']) : '' ?>);">
            <div class="row">
                <?php if(!empty($listItems[0])): ?>
                    <?php foreach ($listItems as $item): ?>
                        <div class="col-lg-3 col-sm-6">
                        <div class="single-counter-02 text-center">
                            <span><?php echo !empty($item['num']) ? $item['num'] : ''?><?php echo !empty($item['char']) ? $item['char'] : ''?></span>
                            <p><?php echo !empty($item['title']) ? $item['title'] : ''?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>