<?php
    namespace MyPlugin\Shortcode\About;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeProminentSolutions extends AbstractShortcode
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
            return 'itsa_prominent_solution_about';
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
            $listItems2 = vc_param_group_parse_atts( $atts['items2'] );

            ob_start();
            include $this->parent->locateTemplate('about/shortcode-preminent-solutions.tpl.php');
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
                    'param_name' => 'itsa_about_preminent_solution__title',
                    'heading'    => esc_html__('Title', 'bookawesome')
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items',
                    'heading'    => esc_html__( 'List about', 'bookawesome' ),
                    'params'     => array(
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'title',
                            'heading'    => esc_html__('Title', 'bookawesome')
                        ),
                    )
                ),
                array(
                    'type'       => 'attach_images',
                    'param_name' => 'itsa_about_preminent_solution__signature',
                    'heading'    => esc_html__('Chữ ký điện tử', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_about_preminent_solution__author',
                    'heading'    => esc_html__('Name author', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_about_preminent_solution__position',
                    'heading'    => esc_html__('Position', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_about_preminent_solution__text_contact',
                    'heading'    => esc_html__('Text contact', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_about_preminent_solution__phone',
                    'heading'    => esc_html__('Phone', 'bookawesome')
                ),
                array(
                    'type'       => 'textarea',
                    'param_name' => 'itsa_about_preminent_solution__desc',
                    'heading'    => esc_html__('desc', 'bookawesome')
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items2',
                    'heading'    => esc_html__( 'Skill item', 'bookawesome' ),
                    'params'     => array(
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'title',
                            'heading'    => esc_html__('Title', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'percent',
                            'heading'    => esc_html__('Percent', 'bookawesome')
                        ),
                    )
                ),
            );

            return array(
                'name'        => esc_html__('Preminent Solution About', 'bookawesome'), //giai phap noi bat
                'description' => esc_html__('About', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
