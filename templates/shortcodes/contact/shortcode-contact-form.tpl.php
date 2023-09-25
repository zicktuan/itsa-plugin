
<div class="section techwix-contact-section techwix-contact-section-02 techwix-contact-section-03 section-padding-02">
    <div class="container">
        <div class="contact-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="contact-form">
                        <div class="contact-form-wrap">
                            <div class="heading-wrap text-center">
                                <span class="sub-title"> <?php echo !empty($atts['itsa_contact_form__sub_title']) ? $atts['itsa_contact_form__sub_title'] : '' ?></span>
                                <h3 class="title"><?php echo !empty($atts['itsa_contact_form__title']) ? $atts['itsa_contact_form__title'] : '' ?></h3>
                            </div>
                            <form method="post" id="contact_form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-form">
                                            <input type="text" placeholder="<?php echo !empty($atts['itsa_contact_form__name']) ? $atts['itsa_contact_form__name'] : '' ?> *">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-form">
                                            <input type="email" placeholder="<?php echo !empty($atts['itsa_contact_form__email']) ? $atts['itsa_contact_form__email'] : '' ?> *">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="single-form">
                                            <textarea placeholder="<?php echo !empty($atts['itsa_contact_form__content']) ? $atts['itsa_contact_form__content'] : '' ?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-btn itsa-contact-send-mess-js">
                                            <button class="btn" type="submit"><?php echo !empty($atts['itsa_contact_form__submit']) ? $atts['itsa_contact_form__submit'] : '' ?></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>