<?php
    namespace MyPlugin\Shortcode\Contact;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeContactForm extends AbstractShortcode
    {
        public function __construct($self = null) {
            $this->parent = $self;
            add_shortcode($this->get_name(), array($this, 'render'));
            vc_lean_map($this->get_name(), array($this, 'map'));
        }

        /**
         * Get ShortCode name.
         *
         * @return string
         */
        public function get_name() {
            return 'itsa_form_contact';
        }

        /**
         * ShortCode handler.
         *
         * @param array $atts ShortCode attributes.
         *
         * @return string ShortCode output.
         */
        public function render($atts) {
            $atts = vc_map_get_attributes($this->get_name(), $atts);
            $atts = array_map('trim', $atts);

            ob_start();
            include $this->parent->locateTemplate('contact/shortcode-contact-form.tpl.php');
            return ob_get_clean();
        }

        /**
         * Get shortCode settings.
         *
         * @return array
         *
         * @see vc_lean_map()
         */
        public function map() {
            $params = array(
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_contact_form__sub_title',
                    'heading'    => esc_html__('Sub title', 'itsa')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_contact_form__title',
                    'heading'    => esc_html__('Title', 'itsa')
                ),
                array(
                    'type'       => 'textarea',
                    'param_name' => 'itsa_contact_form__desc',
                    'heading'    => esc_html__('Description', 'itsa')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_contact_form__fb',
                    'heading'    => esc_html__('Facebooke', 'itsa')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_contact_form__twitter',
                    'heading'    => esc_html__('Twitter', 'itsa')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_contact_form__ig',
                    'heading'    => esc_html__('Instagram', 'itsa')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_contact_form__in',
                    'heading'    => esc_html__('Linkin', 'itsa')
                ),
            );

            return array(
                'name'        => esc_html__('Form Contact', 'itsa'),
                'description' => esc_html__('Contact', 'itsa'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
