<?php
class accordion_course extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'accordion-course';
    }

    public function get_title()
    {
        return esc_html__('لیست دروس', 'elementor-addon');
    }

    public function get_icon()
    {
        return 'eicon-thumbnails-right';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_keywords()
    {
        return ['accordion_course'];
    }

    public function get_custom_help_url()
    {
        return 'https://developers.elementor.com/docs/widgets/';
    }

    protected function register_controls()
    {
        // Existing controls registration code

        // Section 1: Font and Font Size
        $this->start_controls_section(
            'font_section',
            [
                'label' => esc_html__('تایپوگرافی', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'font_family',
            [
                'label' => esc_html__('فونت', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::FONT,
                'selectors' => [
                    '{{WRAPPER}} .accordion-box' => 'font-family: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'font_size_title',
            [
                'label' => esc_html__('سایز فونت عنوان فصل', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .notif-title h2' => 'font-size: {{SIZE}}px;',
                ],
                'separator' => 'none', // Use 'none' as the separator for responsiveness
                'range' => [
                    'desktop' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for desktop font size
                    ],
                    'tablet' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for tablet font size
                    ],
                    'mobile' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for mobile font size
                    ],
                ],
            ]
        );

        $this->add_responsive_control(
            'font_size_course',
            [
                'label' => esc_html__('سایز فونت عنوان بخش', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .card-item h2' => 'font-size: {{SIZE}}px;',
                ],
                'separator' => 'none', // Use 'none' as the separator for responsiveness
                'range' => [
                    'desktop' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for desktop font size
                    ],
                    'tablet' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for tablet font size
                    ],
                    'mobile' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for mobile font size
                    ],
                ],
            ]
        );


        $this->add_responsive_control(
            'font_size_course',
            [
                'label' => esc_html__('سایز فونت دکمه ها ', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .items-btn .permission' => 'font-size: {{SIZE}}px;',
                ],
                'separator' => 'none', // Use 'none' as the separator for responsiveness
                'range' => [
                    'desktop' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for desktop font size
                    ],
                    'tablet' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for tablet font size
                    ],
                    'mobile' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for mobile font size
                    ],
                ],
            ]
        );
        $this->add_responsive_control(
            'font_size_title_icon',
            [
                'label' => esc_html__('سایز آیکون بخش ', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .card-item > h2 i' => 'font-size: {{SIZE}}px;',
                ],
                'separator' => 'none', // Use 'none' as the separator for responsiveness
                'range' => [
                    'desktop' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for desktop font size
                    ],
                    'tablet' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for tablet font size
                    ],
                    'mobile' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for mobile font size
                    ],
                ],
            ]
        );
        $this->add_responsive_control(
            'font_size_download_icon',
            [
                'label' => esc_html__('سایز آیکون وضعیت دوره ', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .permission' => 'font-size: {{SIZE}}px;',
                ],
                'separator' => 'none', // Use 'none' as the separator for responsiveness
                'range' => [
                    'desktop' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for desktop font size
                    ],
                    'tablet' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for tablet font size
                    ],
                    'mobile' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for mobile font size
                    ],
                ],
            ]
        );
        $this->add_responsive_control(
            'font_size_download_icon',
            [
                'label' => esc_html__('سایز آیکون دانلود ', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .items-btn .download-btn' => 'font-size: {{SIZE}}px;',
                ],
                'separator' => 'none', // Use 'none' as the separator for responsiveness
                'range' => [
                    'desktop' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for desktop font size
                    ],
                    'tablet' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for tablet font size
                    ],
                    'mobile' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for mobile font size
                    ],
                ],
            ]
        );
        $this->add_responsive_control(
            'font_size_toggle_icon',
            [
                'label' => esc_html__('سایز آیکون باز و بست ', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .notif-date i' => 'font-size: {{SIZE}}px;',
                ],
                'separator' => 'none', // Use 'none' as the separator for responsiveness
                'range' => [
                    'desktop' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for desktop font size
                    ],
                    'tablet' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for tablet font size
                    ],
                    'mobile' => [
                        'default' => [
                            'size' => '',
                        ],
                        'size_units' => ['px'], // Specify the available units for mobile font size
                    ],
                ],
            ]
        );

        // Add more font-related controls as needed

        $this->end_controls_section();

        // Section 2: Colors
        $this->start_controls_section(
            'color_section',
            [
                'label' => esc_html__('رنگبندی ها', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'active_item_bg',
            [
                'label' => esc_html__('رنگ پس زمینه آیتم ', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion-box ul.list-unstyled li' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'active_item_bg_active',
            [
                'label' => esc_html__('رنگ پس زمینه آیتم فعال', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion-box ul.list-unstyled li.active' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'active_item_title',
            [
                'label' => esc_html__('رنگ متن فصل', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .notif-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'active_item_course_active',
            [
                'label' => esc_html__('رنگ متن فصل فعال', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion-box ul.list-unstyled li.active .notif-title h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'active_item_course',
            [
                'label' => esc_html__('رنگ متن بخش', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .card-item h2' => 'color: {{VALUE}};',
                ],
            ]
        );


        $this->add_control(
            'active_item_course-icon',
            [
                'label' => esc_html__('رنگ آیکون بخش', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .card-item h2 i' => 'color: {{VALUE}};',
                ],
            ]
        );

        // Add more color-related controls as needed

        $this->end_controls_section();
    }



    protected function render()
    {
        include_once(get_stylesheet_directory() . '/Accordion/inc/templates/accordion-tpl.php');
?>
<?php
    }
}
