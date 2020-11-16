<?php

function pricing_shortcode($one, $two)
{
    $company_pricing_atts =  shortcode_atts(
        array(
            'pricing_title'          => '',
            'pricing_title_color'          => '',
            'pricing_price'          => '',
            'pricing_currency'          => '',
            'pricing_period'          => '',
            'pricing_details'          => '',
            'pricing_options'          => '',
            'pricing_buy_btn'          => '',
            'pricing_buy_btn_url'          => '',
            'pricing_bg'          => '',

        ),
        $one,
        'pricing'
    );
    ob_start();

?>

    <style>
        .pricing .featured h3 {
	        color: <?php echo $company_pricing_atts['pricing_title_color']  ?>;
	        background:<?php echo $company_pricing_atts['pricing_bg'] ?> ;
    }
    </style>


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

            <div class="box featured">
              <h3><?php echo $company_pricing_atts['pricing_title'] ?></h3>
              <h4><sup><?php echo $company_pricing_atts['pricing_currency'] ?></sup><?php echo $company_pricing_atts['pricing_price'] ?><span> / <?php echo $company_pricing_atts['pricing_period'] ?></span></h4>
              <ul>

              <?php 
              
                $company_pricing_details_options = vc_param_group_parse_atts($company_pricing_atts['pricing_details']);
              
                    foreach($company_pricing_details_options as $company_pricing_details_option):
              ?>
                <li><?php echo $company_pricing_details_option['pricing_options'] ?></li>

                    <?php endforeach; ?>

              </ul>
              <div class="btn-wrap">
                <a href="<?php echo esc_url($company_pricing_atts['pricing_buy_btn_url']); ?>" class="btn-buy"><?php echo $company_pricing_atts['pricing_buy_btn']; ?></a>
              </div>
            </div>

      </div>
    </section><!-- End Pricing Section -->


<?php

    return ob_get_clean();
}

add_shortcode('pricing', 'pricing_shortcode');

vc_map(
    array(
        'base'      => 'pricing',
        'name'      => 'Company Pricing Table',
        'category'  => 'Company',
        'icon'      => get_template_directory_uri() . '/assets/img/pricing.png',
        'params'    => array(
            array(
                'param_name'        => 'pricing_title',
                'heading'           => __('Title', 'company'),
                'type'              => 'textfield',
            ),
            array(
                'param_name'        => 'pricing_title_color',
                'heading'           => __('Title color', 'company'),
                'type'              => 'colorpicker',
            ),
            array(
                'param_name'        => 'pricing_price',
                'heading'           => __('Price', 'company'),
                'type'              => 'textfield',
            ),
            array(
                'param_name'        => 'pricing_currency',
                'heading'           => __('Currency', 'company'),
                'type'              => 'textfield',
                'description' => esc_html__( 'Default mark is $', 'company' )
            ),
            array(
                'param_name'        => 'pricing_period',
                'heading'           => __('Pricing Period', 'company'),
                'type'              => 'textfield',
                'description' => esc_html__( 'Default label is monthly', 'company' )
            ),
            array(
                'param_name'        => 'pricing_details',
                'heading'           => __('Price pros & cons', 'company'),
                'type'              => 'param_group',
                'params'            => array(
                    array(
                        'param_name'        => 'pricing_options',
                        'heading'           => __('Price options', 'company'),
                        'type'              => 'textfield',
                    ),
                )
            ),
            array(
                'param_name'        => 'pricing_buy_btn',
                'heading'           => __('Buy now button', 'company'),
                'type'              => 'textfield',
            ),
            array(
                'param_name'        => 'pricing_buy_btn_url',
                'heading'           => __('Buy now button Link', 'company'),
                'type'              => 'textfield',
            ),
            array(
                'param_name'        => 'pricing_bg',
                'heading'           => __('price background color', 'company'),
                'type'              => 'colorpicker',
            ),
        )
    )
);
