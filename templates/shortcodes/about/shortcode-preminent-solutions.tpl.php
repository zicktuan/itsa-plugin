<div class="section techwix-skill-section-02 techwix-skill-section-03 section-padding">
    <div class="container">
        <div class="skill-wrap">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Skill Left Start -->
                    <div class="skill-left">
                        <div class="section-title">
                            <h2 class="title"><?php echo !empty($atts['itsa_about_preminent_solution__title']) ? $atts['itsa_about_preminent_solution__title'] : ''; ?></h2>
                        </div>
                        <div class="about-list">
                            <ul>
                                <?php if (!empty($listItems[0])): ?>
                                <?php foreach ($listItems as $item): ?>
                                <li>
                                    <span class="about-icon"><i class="fas fa-check"></i></span>
                                    <span class="about-text"><?php echo !empty($item['title']) ? $item['title'] : '' ?> </span>
                                </li>
                                <?php endforeach; ?>
                                <?php endif ?>
                            </ul>
                        </div>
                        <!-- About Author Info Wrap Start -->
                        <?php if (!empty($atts['itsa_about_preminent_solution__author']) && !empty($atts['itsa_about_preminent_solution__text_contact'])):?>
                        <div class="about-author-info-wrap">
                            <div class="about-author">
                                <img src="<?php echo !empty($atts['itsa_about_preminent_solution__signature']) ? wp_get_attachment_url($atts['itsa_about_preminent_solution__signature']) : '' ?>" alt="">
                                <h3 class="name"><?php echo $atts['itsa_about_preminent_solution__author']?></h3>
                                <span class="designation"><?php echo !empty($atts['itsa_about_preminent_solution__position']) ? $atts['itsa_about_preminent_solution__position'] : '' ?></span>
                            </div>
                            <div class="about-info">
                                <p><?php echo $atts['itsa_about_preminent_solution__text_contact'] ?> </p>
                                <h3 class="number"><?php echo !empty($atts['itsa_about_preminent_solution__phone']) ? $atts['itsa_about_preminent_solution__phone'] : '' ?></h3>
                            </div>
                        </div>
                        <?php endif ?>

                        <!-- About Author Info Wrap End -->
                    </div>
                    <!-- Skill Left End -->
                </div>
                <div class="col-lg-6">
                    <!-- Skill Right Start -->
                    <div class="skill-right">
                        <p class="text"><?php echo !empty($atts['itsa_about_preminent_solution__desc']) ? $atts['itsa_about_preminent_solution__desc'] : '' ?></p>
                        <div class="counter-bar">
                            <!-- Skill Item Start -->
                            <?php if (!empty($listItems2[0])): ?>
                                <?php foreach ($listItems2 as $val): ?>
                                <div class="skill-item">
                                    <span class="title"><?php echo !empty($val['title']) ? $val['title'] : '' ?></span>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line color-1" data-width="<?php echo !empty($val['percent']) ? $val['percent'] : 0 ?>" style="width: <?php echo !empty($val['percent']) ? $val['percent'] : 0 ?>%;">
                                                <span class="skill-percent"><span class="counter"><?php echo !empty($val['percent']) ? $val['percent'] : 0 ?></span>%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            <?php endif ?>
                            <!-- Skill Right End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>