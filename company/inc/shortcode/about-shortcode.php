<?php

function aboutus_shortcode($one, $two)
{
    $company_aboutus_atts =  shortcode_atts(
        array(
            'aboutus_content'          => '',
            'about_us'          => '',
            'aboutus_info'          => '',
            'aboutus_title'          => ''

        ),
        $one,
        'aboutus'
    );
    ob_start();

?>

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">

            <div class="row content">
                <div data-aos="fade-left">
                    <p>
                        <?php echo $company_aboutus_atts['aboutus_content'] ?>
                    </p>
                    <ul>
                        <?php

                        $company_aboutus_details =   vc_param_group_parse_atts($company_aboutus_atts['about_us']);

                        foreach ($company_aboutus_details as $company_single_detail) {
                        ?>
                            <li><i class="ri-check-double-line"></i><?php echo $company_single_detail['aboutus_info']; ?></li>
                        <?php
                        }
                        ?>
                    </ul>
                    <p class="font-italic">
                        <?php echo $company_aboutus_atts['aboutus_title']; ?>
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->



<?php

    return ob_get_clean();
}

add_shortcode('aboutus', 'aboutus_shortcode');

vc_map(
    array(
        'base'      => 'aboutus',
        'name'      => 'About our company',
        'category'  => 'Company',
        'icon'      => get_template_directory_uri() . '/assets/img/aboutus.png',
        'params'    => array(
            array(
                'param_name'        => 'aboutus_content',
                'heading'           => __('Add your company details', 'company'),
                'type'              => 'textarea',
            ),
            array(
                'param_name'        => 'about_us',
                'heading'           => __('About your company', 'company'),
                'type'              => 'param_group',
                'params'            => array(
                    array(
                        'param_name'        => 'aboutus_info',
                        'heading'           => __('Company info', 'company'),
                        'type'              => 'textfield',
                    ),
                )
            ),
            array(
                'param_name'        => 'aboutus_title',
                'heading'           => __('company Headline', 'company'),
                'type'              => 'textfield',
            ),
        )
    )
);
