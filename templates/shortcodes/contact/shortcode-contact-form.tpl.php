<section class="p-0" style="padding-bottom: 120px!important;">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 mb-1-6 mb-xl-0 wow fadeIn" data-wow-delay="200ms"
                style="visibility: visible; animation-delay: 200ms; animation-name: fadeIn;">
                <div class="pe-xl-1-9">
                    <div class="section-title left mb-1-9">
                        <span class="sm-title"><?php echo !empty($atts['itsa_contact_form__sub_title']) ? $atts['itsa_contact_form__sub_title'] : '' ?></span>
                        <h2 class="mb-0 h1 mt-2"><?php echo !empty($atts['itsa_contact_form__title']) ? $atts['itsa_contact_form__title'] : '' ?></h2>
                    </div>
                    <p class="mb-1-9"><?php echo !empty($atts['itsa_contact_form__desc']) ? $atts['itsa_contact_form__desc'] : '' ?></p>
                    <ul class="social-icon-style3 ps-0">
                        <?php if (!empty($atts['itsa_contact_form__fb'])): ?>
                        <li class="me-1"><a href="<?php echo $atts['itsa_contact_form__fb']?>"><i class="fab fa-facebook-f"></i></a></li>
                        <?php endif  ?>
                        <?php if (!empty($atts['itsa_contact_form__twitter'])): ?>
                        <li class="me-1"><a href="<?php echo $atts['itsa_contact_form__twitter']?>"><i class="fab fa-twitter"></i></a></li>
                        <?php endif ?>
                        <?php if (!empty($atts['itsa_contact_form__ig'])): ?>
                        <li class="me-1"><a href="<?php echo $atts['itsa_contact_form__ig']?>"><i class="fab fa-instagram"></i></a></li>
                        <?php endif ?>
                        <?php if (!empty($atts['itsa_contact_form__in'])): ?>
                        <li class="me-0"><a href="<?php echo $atts['itsa_contact_form__in']?>"><i class="fab fa-linkedin-in"></i></a></li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 wow fadeIn">
                <form class="contact quform" action="/quform/contact.php" method="post"
                    enctype="multipart/form-data" onclick="">
                    <div class="quform-elements">
                        <div class="row">

                            <!-- Begin Text input element -->
                            <div class="col-md-6">
                                <div class="quform-element form-group">
                                    <label for="name">Your Name <span class="quform-required">*</span></label>
                                    <div class="quform-input">
                                        <input class="form-control" id="name" type="text" name="name"
                                            placeholder="Your name here">
                                    </div>
                                </div>
                            </div>
                            <!-- End Text input element -->

                            <!-- Begin Text input element -->
                            <div class="col-md-6">
                                <div class="quform-element form-group">
                                    <label for="email">Your Email <span class="quform-required">*</span></label>
                                    <div class="quform-input">
                                        <input class="form-control" id="email" type="text" name="email"
                                            placeholder="Your email here">
                                    </div>
                                </div>
                            </div>
                            <!-- End Text input element -->

                            <!-- Begin Text input element -->
                            <div class="col-md-6">
                                <div class="quform-element form-group quform-select-replaced">
                                    <label for="subject">Your Subject <span
                                            class="quform-required">*</span></label>
                                    <div class="quform-input">
                                        <input class="form-control" id="subject" type="text" name="subject"
                                            placeholder="Your subject here">
                                    </div>
                                </div>
                            </div>
                            <!-- End Text input element -->

                            <!-- Begin Text input element -->
                            <div class="col-md-6">
                                <div class="quform-element form-group">
                                    <label for="phone">Contact Number</label>
                                    <div class="quform-input">
                                        <input class="form-control" id="phone" type="text" name="phone"
                                            placeholder="Your phone here">
                                    </div>
                                </div>
                            </div>
                            <!-- End Text input element -->

                            <!-- Begin Textarea element -->
                            <div class="col-md-12">
                                <div class="quform-element form-group">
                                    <label for="message">Message <span class="quform-required">*</span></label>
                                    <div class="quform-input">
                                        <textarea class="form-control" id="message" name="message" rows="3"
                                            placeholder="Tell us a few words"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- End Textarea element -->

                            <!-- Begin Captcha element -->
                            <div class="col-md-12">
                                <div class="quform-element">
                                    <div class="form-group">
                                        <div class="quform-input">
                                            <input class="form-control" id="type_the_word" type="text"
                                                name="type_the_word" placeholder="Type the below word">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="quform-captcha">
                                            <div class="quform-captcha-inner">
                                                <img src="./contact_files/courier-new-light.png" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Captcha element -->

                            <!-- Begin Submit button -->
                            <div class="col-md-12">
                                <div class="quform-submit-inner">
                                    <button class="btn-style1 border-0" type="submit"><span>Send
                                            Message</span></button>
                                </div>
                                <div class="quform-loading-wrap text-start"><span class="quform-loading"></span>
                                </div>
                            </div>
                            <!-- End Submit button -->

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>