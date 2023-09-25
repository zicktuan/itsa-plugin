<?php
    namespace MyPlugin\Shortcode\Team;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeTeam extends AbstractShortcode
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
            return 'itsa_team';
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
            include $this->parent->locateTemplate('team/shortcode-team.tpl.php');
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
                    'heading'    => esc_html__( 'List item', 'bookawesome' ),
                    'params'     => array(
                        array(
                            'type'       => 'attach_image',
                            'param_name' => 'bg',
                            'heading'    => esc_html__('Background', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'url',
                            'heading'    => esc_html__('Url', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'name',
                            'heading'    => esc_html__('Name', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'position',
                            'heading'    => esc_html__('Position', 'bookawesome')
                        ),
                        array(
                            'type'       => 'param_group',
                            'param_name' => 'socials',
                            'heading'    => esc_html__('List social', 'bookawesome'),
                            'params'     => array(
                                array(
                                    'type'       => 'textfield',
                                    'param_name' => 'url',
                                    'heading'    => esc_html__('Url', 'bookawesome')
                                ),
                                array(
                                    'type'        => 'dropdown',
                                    'heading'     => __('Icon'),
                                    'param_name'  => 'icon',
                                    'admin_label' => true,
                                    'value'       => array(
                                        'facebook' => '<i class="fab fa-facebook-f"></i>',
                                        'twitter' =>  '<i class="fab fa-twitter"></i>',
                                        'dribbble' => '<i class="fab fa-dribbble"></i>',
                                        'behance' => '<i class="fab fa-behance"></i>',
                                    ),
                                ),
                            )
                        ),
                        
                    )
                )
            );

            return array(
                'name'        => esc_html__('Team', 'bookawesome'),
                'description' => esc_html__('Team', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
