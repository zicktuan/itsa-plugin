<section class="pt-lg-0 overflow-visible">
    <div class="container position-relative z-index-1">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="horizontaltab tab-style1 top-margin">
                    <ul class="resp-tabs-list hor_1 text-center wow fadeIn">
                        <?php if (!empty($missions[0])):?>
                        <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab">Mission and vision</li>
                        <?php endif?>
                        <?php if (!empty($challenges[0])):?>
                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab">Our challenges</li>
                        <?php endif?>
                        <?php if (!empty($partners[0])):?>
                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-2" role="tab">Partners</li>
                        <?php endif?>
                        <?php if (!empty($teams[0])):?>
                        <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-3" role="tab">Our team </li>
                        <?php endif?>
                        <?php //if (!empty($missions[0])):?>
                        <!-- <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-4" role="tab">Careers withus</li> -->
                        <?php //endif?>
                    </ul>

                    <div class="resp-tabs-container hor_1 p-0 wow fadeIn">
                        <?php if ($missions[0]):?>
                        <h2 class="resp-accordion hor_1 resp-tab-active" role="tab"><span class="resp-arrow"></span>Mission and vision</h2>
                        <div class="resp-tab-content hor_1 resp-tab-content-active" style="display:block">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-1-9 mb-lg-0">
                                    <img src="<?php echo !empty($missions[0]['image']) ? wp_get_attachment_url($missions[0]['image']) : '' ?>">
                                </div>
                                <div class="col-lg-6">
                                    <div class="ps-lg-4">
                                        <h3 class="mb-3"><?php echo !empty($missions[0]['title']) ? $missions[0]['title'] : '' ?></h3>
                                        <p class="mb-0"><?php echo !empty($missions[0]['desc']) ? $missions[0]['desc'] : '' ?></p>
                                        <!-- <div class="row mt-2-3">
                                            <div class="col-md-8">
                                                <div class="pe-lg-4">
                                                    <p class="mb-0">Our Vision and Mission are both empowering
                                                        our group to achieve the objective.</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 d-none d-md-block">
                                                <div class="text-end">
                                                    <img src="./Solutic - IT Solutions and Services HTML Template_files/tab-02.jpg"
                                                        alt="...">
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>
                        <?php if (!empty($challenges[0])):?>
                        <h2 class="resp-accordion hor_1" role="tab"><span class="resp-arrow"></span>Our challenges</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-1-9 mb-lg-0">
                                    <?php if (!empty($challenges[0]['short_desc'])):?>
                                    <h4 class="mb-4">“ <?php echo $challenges[0]['short_desc']?>”</h4>
                                    <?php endif ?>
                                    <!-- <p class="d-flex align-items-center mb-4"><span
                                            class="fw-bold text-dark me-2">Leah Kirton</span> -<label
                                            class="ms-2 mb-0">Head Of Idea</label></p> -->
                                    <p><?php echo !empty($challenges[0]['desc']) ? $challenges[0]['desc'] : '' ?></p>
                                    <!-- <a href="/about-us.html" class="btn-style1 secondary"><span>Read more</span></a> -->
                                </div>
                                <div class="col-lg-6">
                                    <img src="<?php echo !empty($challenges[0]['image']) ? wp_get_attachment_url($challenges[0]['image']) : '' ?>">
                                </div>
                            </div>
                        </div>
                        <?php endif ?>
                        <?php if (!empty($partners[0])):?>
                        <h2 class="resp-accordion hor_1" role="tab"><span class="resp-arrow"></span>Partners</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-2">
                            <div class="row">
                                <div class="col-lg-6 mb-1-9 mb-lg-0">
                                    <div class="pe-xl-1-9">
                                        <img src="<?php echo !empty($partners[0]['image']) ? wp_get_attachment_url($partners[0]['image']) : '' ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h3><?php echo !empty($partners[0]['title']) ? $partners[0]['title'] : '' ?></h3>
                                    <p class="w-lg-80 mb-md-2-9 mb-1-9"><?php echo !empty($partners[0]['desc']) ? $partners[0]['desc'] : '' ?></p>
                                    <div class="row mb-2-9 mt-n1-9">
                                        <?php $portfolios = vc_param_group_parse_atts($partners[0]['items']); ?>
                                        <?php if (!empty($portfolios[0])): ?>
                                        <?php foreach ($portfolios as $item):?>
                                        <div class="col-6 col-sm-3 mt-1-9">
                                            <img src="<?php echo !empty($item['logo']) ? wp_get_attachment_url($item['logo']) : '' ?>">
                                        </div>
                                        <?php endforeach; endif;?>
                                    </div>
                                    <?php if (!empty($partners[0]['url'])):?>
                                    <a href="<?php echo $partners[0]['url']?>" class="btn-style1 secondary"><span>Become a partner</span></a>
                                    <?php endif ?>
                                    
                                </div>
                            </div>
                        </div>
                        <?php endif ?>
                        <?php if (!empty($teams[0])):?>
                        <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-3"><span
                                class="resp-arrow"></span>Our team</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-3">
                            <h3 class="mb-1-9"><?php echo !empty($teams[0]['title']) ? $teams[0]['title'] : '' ?></h3>
                            <div class="row mt-n1-9">
                                <?php $teamss = vc_param_group_parse_atts($teams[0]['items']) ?>
                                <?php if (!empty($teamss[0])): ?>
                                <?php foreach ($teamss as $team):?>
                                <div class="col-sm-6 col-lg-3 mt-1-9">
                                    <div class="team-style01">
                                        <div class="image">
                                            <div>
                                                <img src="<?php echo !empty($team['image']) ? wp_get_attachment_url($team['image']) : '' ?>">
                                                <ul class="mb-0 social ps-0">
                                                    <?php if (!empty($team['fb'])):?>
                                                        <li><a href="<?php echo $team['fb'] ?>"><i class="fab fa-facebook-f"></i></a></li>
                                                    <?php endif ?>
                                                    <?php if (!empty($team['tw'])):?>
                                                        <li><a href="<?php echo $team['fb'] ?>"><i class="fab fa-twitter"></i></a></li>
                                                    <?php endif ?>
                                                    <?php if (!empty($team['in'])):?>
                                                        <li><a href="<?php echo $team['fb'] ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <?php endif ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <h3 class="h5 mb-0"><a href="#"><?php echo !empty($team['name']) ? $team['name'] : '' ?></a></h3>
                                            <p class="mb-0 small"><?php echo !empty($team['position']) ? $team['position'] : '' ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; endif;?>
                            </div>
                        </div>
                        <?php endif ?>
                        <!-- <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-4"><span
                                class="resp-arrow"></span>Careers with us</h2>
                        <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-4">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-1-9 mb-lg-0">
                                    <h4 class="mb-4">Why work with us?</h4>
                                    <div class="row mb-1-9">
                                        <div class="col-md-6 mb-2 mb-md-0">
                                            <ul class="list-style2 mb-0">
                                                <li>Flexible Time Off</li>
                                                <li>24/7 parking.</li>
                                                <li>Full medical benefits</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-style2 mb-0">
                                                <li>Collaborative environment</li>
                                                <li>Health, Dental, And Vision</li>
                                                <li>Flexible hours</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="/contact.html" class="btn-style1 secondary"><span>Find job
                                            now</span></a>
                                </div>
                                <div class="col-lg-6">
                                    <img src="./Solutic - IT Solutions and Services HTML Template_files/tab-05.jpg"
                                        alt="...">
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>