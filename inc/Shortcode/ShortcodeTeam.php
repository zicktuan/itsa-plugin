<?php
    namespace MyPlugin\Shortcode;

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
            include $this->parent->locateTemplate('shortcode-teams.tpl.php');
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
                    'param_name' => 'itsa_team__sub_title',
                    'heading'    => esc_html__('Sub Title', 'itsa')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_team__title',
                    'heading'    => esc_html__('Title', 'itsa')
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items',
                    'heading'    => esc_html__( 'List item', 'itsa' ),
                    'params'     => array(
                        array(
                            'type'       => 'attach_image',
                            'param_name' => 'img',
                            'heading'    => esc_html__('Image', 'itsa')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'url',
                            'heading'    => esc_html__('Url', 'itsa')
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
                            'heading'    => esc_html__('Linkedin', 'itsa')
                        )
                    )
                )
            );

            return array(
                'name'        => esc_html__('Teams', 'itsa'),
                'description' => esc_html__('Teams', 'itsa'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
