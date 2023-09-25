<div class="section techwix-team-section techwix-team-section-03 section-padding">
    <div class="container">
        <!-- Team Wrap Start -->
        <div class="team-wrap">
            <div class="row">
            <?php if (!empty($listItems[0])): ?>
            <?php foreach ($listItems as $item): 
                $socials = vc_param_group_parse_atts( $item['socials'] );
            ?>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Team Start -->
                    <div class="single-team">
                        <div class="team-img">
                            <a href="<?php echo !empty($item['url']) ? $item['url'] : '#' ?>">
                                <img src="<?php echo !empty($item['bg']) ? wp_get_attachment_url($item['bg']) : '' ?>" alt="">
                            </a>
                        </div>
                        <div class="team-content">
                            <h3 class="name">
                                <a href="<?php echo !empty($item['url']) ? $item['url'] : '#' ?>">
                                    <?php echo !empty($item['name']) ? $item['name'] : '' ?>
                                </a>
                            </h3>
                            <span class="designation"><?php echo !empty($item['position']) ? $item['position'] : '' ?></span>
                            <div class="team-social">
                                <ul class="social">
                                <?php if (!empty($socials[0])): ?>
                                    <?php foreach ($socials as $val):?>
                                    <li>
                                        <a href="<?php echo !empty($val['url']) ? $val['url'] : '#' ?>">
                                            <?php echo !empty($val['icon']) ? $val['icon'] : '' ?>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                <?php endif ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Team End -->
                </div>
                <?php endforeach; ?>
            <?php endif ?>
            </div>
        </div>
        <!-- Team Wrap End -->
    </div>
</div>