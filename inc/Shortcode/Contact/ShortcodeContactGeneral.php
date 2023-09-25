<?php
    namespace MyPlugin\Shortcode\Contact;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeContactGeneral extends AbstractShortcode
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
            return 'itsa_general_contact';
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

            $listItems = vc_param_group_parse_atts( $atts['items'] );

            ob_start();
            include $this->parent->locateTemplate('contact/shortcode-contact-general.tpl.php');
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
                    'type'       => 'param_group',
                    'param_name' => 'items',
                    'heading'    => esc_html__('Items', 'bookawesome'),
                    'params'     => array(
                        array(
                            'type'       => 'attach_images',
                            'param_name' => 'icon',
                            'heading'    => esc_html__('Icon', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'title',
                            'heading'    => esc_html__('Title', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'info',
                            'heading'    => esc_html__('Thông tin 1', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'info1',
                            'heading'    => esc_html__('Thông tin 2', 'bookawesome')
                        )
                    )
                )
            );

            return array(
                'name'        => esc_html__('Contact General', 'bookawesome'),
                'description' => esc_html__('Contact', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
