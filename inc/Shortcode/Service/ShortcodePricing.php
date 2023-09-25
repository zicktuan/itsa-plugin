<?php
    namespace MyPlugin\Shortcode\Service;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodePricing extends AbstractShortcode
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
            return 'itsa_price_service';
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
            include $this->parent->locateTemplate('service/shortcode-price.tpl.php');
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
                    'param_name' => 'itsa_service_price__sub_title',
                    'heading'    => esc_html__('Sub title', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_service_price__title',
                    'heading'    => esc_html__('Title', 'bookawesome')
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items',
                    'heading'    => esc_html__( 'List item', 'bookawesome' ),
                    'params'     => array(
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'title',
                            'heading'    => esc_html__('Title', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'price',
                            'heading'    => esc_html__('Price', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'price_lh',
                            'heading'    => esc_html__('Price Contact', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'duration',
                            'heading'    => esc_html__('Duaration', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'url',
                            'heading'    => esc_html__('Url', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'btn_text',
                            'heading'    => esc_html__('Text button', 'bookawesome'),
                            'std'        => 'Try It Now',
                        ),
                        array(
                            'type'       => 'param_group',
                            'param_name' => 'subItem',
                            'heading'    => esc_html__('Pricing list', 'bookawesome'),
                            'params'     => array(
                                array(
                                    'type'       => 'textfield',
                                    'param_name' => 'text',
                                    'heading'    => esc_html__('Text', 'bookawesome')
                                ),
                            )
                        ),
                        
                    )
                )
            );

            return array(
                'name'        => esc_html__('Price Service', 'bookawesome'),
                'description' => esc_html__('Service', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
