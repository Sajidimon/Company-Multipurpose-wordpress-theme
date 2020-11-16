<?php

function slider_shortcode($one, $two)
{
  $company_slider_atts =  shortcode_atts(
    array(
      'slider_details'          => '',
      'slider_img'          => '',
      'slider_title'          => '',
      'slider_description'          => '',
      'slider_button'          => ''

    ),
    $one,
    'slider'
  );
  ob_start();

?>


  <?php

  $company_slider_details =   vc_param_group_parse_atts($company_slider_atts['slider_details']);

  ?>


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(<?php echo wp_get_attachment_url($company_slider_details[0]['slider_img']) ?>);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2><?php echo $company_slider_details[0]['slider_title']; ?></h2>
              <p><?php echo $company_slider_details[0]['slider_description'] ?></p>
              <div class="text-center"><a href="<?php echo esc_url($company_slider_details[0]['slider_button']); ?>" class="btn-get-started"><?php echo _e('Read More', 'company') ?></a></div>
            </div>
          </div>
        </div>

        <!-- Slide 1 -->
        <div class="carousel-item" style="background-image: url(<?php echo wp_get_attachment_url($company_slider_details[1]['slider_img']) ?>);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2><?php echo $company_slider_details[1]['slider_title']; ?></h2>
              <p><?php echo $company_slider_details[1]['slider_description'] ?></p>
              <div class="text-center"><a href="<?php esc_url($company_slider_details[1]['slider_button']); ?>" class="btn-get-started"><?php echo _e('Read More', 'company') ?></a></div>
            </div>
          </div>
        </div>

        <!-- Slide 1 -->
        <div class="carousel-item" style="background-image: url(<?php echo wp_get_attachment_url($company_slider_details[2]['slider_img']) ?>);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2><?php echo $company_slider_details[2]['slider_title']; ?></h2>
              <p><?php echo $company_slider_details[2]['slider_description'] ?></p>
              <div class="text-center"><a href="<?php esc_url($company_slider_details[2]['slider_button']); ?>" class="btn-get-started"><?php echo _e('Read More', 'company') ?></a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->


<?php

  return ob_get_clean();
}

add_shortcode('slider', 'slider_shortcode');

vc_map(
  array(
    'base'      => 'slider',
    'name'      => 'Featured slider',
    'category'  => 'Company',
    'icon'      => get_template_directory_uri() . '/assets/img/slider.png',
    'params'    => array(
      array(
        'param_name'        => 'slider_details',
        'heading'           => __('Add Featured Slider', 'company'),
        'type'              => 'param_group',
        'params'            => array(
          array(
            'param_name'        => 'slider_img',
            'heading'           => __('Add Slider image', 'company'),
            'type'              => 'attach_image',
          ),
          array(
            'param_name'        => 'slider_title',
            'heading'           => __('Add Slider title', 'company'),
            'type'              => 'textfield',
          ),
          array(
            'param_name'        => 'slider_description',
            'heading'           => __('Add Slider description', 'company'),
            'type'              => 'textarea',
          ),
          array(
            'param_name'        => 'slider_button',
            'heading'           => __('Add url', 'company'),
            'type'              => 'textfield',
          ),
        ),
      ),
    )
  )
);
