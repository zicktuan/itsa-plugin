<?php
    namespace MyPlugin\Shortcode\Choose;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodePreminentSolution extends AbstractShortcode
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
            return 'itsa_preminent_solution_choose';
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
            include $this->parent->locateTemplate('choose/shortcode-preminent-solution.tpl.php');
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
                    'type'       => 'attach_image',
                    'param_name' => 'itsa_choose_preminent_solution__bg',
                    'heading'    => esc_html__('Background', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_choose_preminent_solution__title',
                    'heading'    => esc_html__('Title', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_choose_preminent_solution__exp',
                    'heading'    => esc_html__('Number exp', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_choose_preminent_solution__url',
                    'heading'    => esc_html__('Url', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_choose_preminent_solution__text_btn',
                    'heading'    => esc_html__('Text button', 'bookawesome')
                ),
                array(
                    'type'       => 'textarea',
                    'param_name' => 'itsa_choose_preminent_solution__desc',
                    'heading'    => esc_html__('desc', 'bookawesome')
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items',
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
                'name'        => esc_html__('Preminent solution choose', 'bookawesome'),
                'description' => esc_html__('Choose Us', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
