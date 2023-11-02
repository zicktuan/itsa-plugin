<?php
    namespace MyPlugin\Shortcode\Home;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeInformaction extends AbstractShortcode
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
            return 'itsa_home_information';
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

            $missions = vc_param_group_parse_atts( $atts['items_mission'] );
            $challenges = vc_param_group_parse_atts( $atts['items_challenges'] );
            $partners = vc_param_group_parse_atts( $atts['items_partner'] );
            $teams = vc_param_group_parse_atts( $atts['items_teams'] );

            ob_start();
            include $this->parent->locateTemplate('home/shortcode-information.tpl.php');
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
                    'param_name' => 'items_mission',
                    'heading'    => esc_html__( 'Mission and Vision', 'itsa' ),
                    'params'     => array(
                        array(
                            'type'       => 'attach_image',
                            'param_name' => 'image',
                            'heading'    => esc_html__('Image', 'itsa')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'title',
                            'heading'    => esc_html__('Title', 'itsa')
                        ),
                        array(
                            'type'       => 'textarea',
                            'param_name' => 'desc',
                            'heading'    => esc_html__('Description', 'itsa')
                        )
                    )
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items_challenges',
                    'heading'    => esc_html__( 'Challenges', 'itsa' ),
                    'params'     => array(
                        array(
                            'type'       => 'attach_image',
                            'param_name' => 'image',
                            'heading'    => esc_html__('Image', 'itsa')
                        ),
                        array(
                            'type'       => 'textarea',
                            'param_name' => 'short_desc',
                            'heading'    => esc_html__('Short Description', 'itsa')
                        ),
                        array(
                            'type'       => 'textarea',
                            'param_name' => 'desc',
                            'heading'    => esc_html__('Description', 'itsa')
                        )
                    )
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items_partner',
                    'heading'    => esc_html__( 'Partners', 'itsa' ),
                    'params'     => array(
                        array(
                            'type'       => 'attach_image',
                            'param_name' => 'image',
                            'heading'    => esc_html__('Image', 'itsa')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'title',
                            'heading'    => esc_html__('Title', 'itsa')
                        ),
                        array(
                            'type'       => 'textarea',
                            'param_name' => 'desc',
                            'heading'    => esc_html__('Description', 'itsa')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'url',
                            'heading'    => esc_html__('Url read more', 'itsa')
                        ),
                        array(
                            'type'       => 'param_group',
                            'param_name' => 'items',
                            'heading'    => esc_html__( 'Portfolios', 'itsa' ),
                            'params'     => array(
                                array(
                                    'type'       => 'attach_image',
                                    'param_name' => 'logo',
                                    'heading'    => esc_html__('Logo', 'itsa')
                                )
                            )
                        ),
                    )
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items_teams',
                    'heading'    => esc_html__( 'Teams', 'itsa' ),
                    'params'     => array(
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'title',
                            'heading'    => esc_html__('Title', 'itsa')
                        ),
                        array(
                            'type'       => 'param_group',
                            'param_name' => 'items',
                            'heading'    => esc_html__( 'Teams', 'itsa' ),
                            'params'     => array(
                                array(
                                    'type'       => 'attach_image',
                                    'param_name' => 'image',
                                    'heading'    => esc_html__('Image', 'itsa')
                                ),
                                array(
                                    'type'       => 'textfield',
                                    'param_name' => 'name',
                                    'heading'    => esc_html__('Name', 'itsa')
                                ),
                                array(
                                    'type'       => 'textfield',
                                    'param_name' => 'position',
                                    'heading'    => esc_html__('Position', 'itsa')
                                ),
                                array(
                                    'type'       => 'textfield',
                                    'param_name' => 'fb',
                                    'heading'    => esc_html__('Facebook', 'itsa')
                                ),
                                array(
                                    'type'       => 'textfield',
                                    'param_name' => 'tw',
                                    'heading'    => esc_html__('Twitter', 'itsa')
                                ),
                                array(
                                    'type'       => 'textfield',
                                    'param_name' => 'in',
                                    'heading'    => esc_html__('Linkin', 'itsa')
                                ),
                            )
                        ),
                        
                    )
                ),
            );

            return array(
                'name'        => esc_html__('Information Home', 'itsa'),
                'description' => esc_html__('Home', 'itsa'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
