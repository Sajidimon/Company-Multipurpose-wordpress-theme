<?php

function team_shortcode($one, $two)
{


  $company_team_atts =  shortcode_atts(
        array(
            'team_img'          => '',
            'team_name'          => '',
            'team_pro'          => '',
            'team_fb'          => '',
            'team_tw'          => '',
            'team_ins'          => '',
            'team_ln'          => '',

        ),
        $one,
        'team'
    );
    ob_start();

?>


    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
        <div class="container">
            <div class="member" data-aos="fade-up">
                <div class="member-img">
                    <img src="<?php echo wp_get_attachment_url($company_team_atts['team_img'], 'full'); ?>" class="img-fluid" alt="">
                    <div class="social">
                        <a href="<?php echo $company_team_atts['team_fb']; ?>"><i class="icofont-twitter"></i></a>
                        <a href="<?php echo $company_team_atts['team_tw']; ?>"><i class="icofont-facebook"></i></a>
                        <a href="<?php echo $company_team_atts['team_ins']; ?>"><i class="icofont-instagram"></i></a>
                        <a href="<?php echo $company_team_atts['team_ln']; ?>"><i class="icofont-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info">
                    <h4><?php echo $company_team_atts['team_name']; ?></h4>
                    <span><?php echo $company_team_atts['team_pro']; ?></span>
                </div>
            </div>

        </div>
    </section><!-- End Our Team Section -->


<?php

    return ob_get_clean();
}

add_shortcode('team', 'team_shortcode');

vc_map(
    array(
        'base'      => 'team',
        'name'      => 'Our team',
        'category'  => 'Company',
        'icon'      => get_template_directory_uri() . '/assets/img/team-icon.png',
        'params'    => array(
            array(
                'param_name'        => 'team_img',
                'heading'           => __('Member image', 'company'),
                'type'              => 'attach_image'
            ),
            array(
                'param_name'        => 'team_name',
                'heading'           => __('Add members name here', 'company'),
                'type'              => 'textfield'
            ),
            array(
                'param_name'        => 'team_pro',
                'heading'           => __('Add member designation here', 'company'),
                'type'              => 'textfield'
            ),
            array(
                'param_name'        => 'team_fb',
                'heading'           => __('Facebook Profile link', 'company'),
                'type'              => 'textfield'
            ),
            array(
                'param_name'        => 'team_tw',
                'heading'           => __('Twitter Profile link', 'company'),
                'type'              => 'textfield'
            ),
            array(
                'param_name'        => 'team_ins',
                'heading'           => __('Instagram Profile link', 'company'),
                'type'              => 'textfield'
            ),
            array(
                'param_name'        => 'team_ln',
                'heading'           => __('LinkedIn profile link', 'company'),
                'type'              => 'textfield'
            ),
        )
    )
);
