<?php
$classSection = '';
$check = false;
if(!empty($atts['itsa_team__sub_title']) || !empty($atts['itsa_team__title'])) {
    $check = true;
    $classSection = "pt-0";
}
?>
<section class=<?php echo $classSection?>>
    <div class="container">
        <?php if($check):?>
        <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn">
            <span class="sm-title"><?php echo !empty($atts['itsa_team__sub_title']) ? $atts['itsa_team__sub_title'] : '' ?></span>
            <h2 class="mb-0 h1"><?php echo !empty($atts['itsa_team__title']) ? $atts['itsa_team__title'] : '' ?></h2>
        </div>
        <?php endif ?>
        <div class="row mt-n1-9">
            <?php if(!empty($listItems[0])): ?>
            <?php foreach ($listItems as $item): ?>
            <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeInUp">
                <div class="team-style01">
                    <div class="image">
                        <div>
                            <img src="<?php echo !empty($item['img']) ? wp_get_attachment_url($item['img']) : '' ?>">
                            <ul class="mb-0 social ps-0">
                                <?php if (!empty($item['fb'])):?>
                                <li><a href="<?php echo !empty($item['fb']) ? $item['fb'] : '' ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <?php endif ?>
                                <?php if (!empty($item['tw'])):?>
                                <li> <a href="<?php echo !empty($item['tw']) ? $item['tw'] : '' ?>"><i class="fab fa-twitter"></i></a></li>
                                <?php endif ?>
                                <?php if (!empty($item['in'])):?>
                                <li><a href="<?php echo !empty($item['in']) ? $item['in'] : '' ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                <?php endif ?>
                            </ul>
                        </div>
                    </div>
                    <div class="pt-3">
                        <h3 class="h5 mb-0">
                            <a href="<?php echo !empty($item['url']) ? $item['url'] : '' ?>">
                            <?php echo !empty($item['name']) ? $item['name'] : '' ?>
                            </a>
                        </h3>
                        <p class="mb-0 small"><?php echo !empty($item['position']) ? $item['position'] : '' ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; endif;?>
        </div>
    </div>
</section>