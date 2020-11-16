<?php

function testimonial_shortcode($one, $two)
{
    $company_testimonial_atts =  shortcode_atts(
        array(
            'client_img'          => '',
            'client_name'          => '',
            'client_designation'          => '',
            'client_feedback'          => '',

        ),
        $one,
        'testimonial'
    );
    ob_start();

?>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

          <div data-aos="fade-up">
            <div class="testimonial-item">
              <img src="<?php echo wp_get_attachment_url($company_testimonial_atts['client_img']); ?>" class="testimonial-img" alt="">
              <h3><?php echo $company_testimonial_atts['client_name'] ?></h3>
              <h4><?php echo $company_testimonial_atts['client_designation']; ?></h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?php echo $company_testimonial_atts['client_feedback']; ?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

      </div>
    </section><!-- End Testimonials Section -->

<?php

    return ob_get_clean();
}

add_shortcode('testimonial', 'testimonial_shortcode');

vc_map(
    array(
        'base'      => 'testimonial',
        'name'      => 'Company testimonial area',
        'category'  => 'Company',
        'icon'      => get_template_directory_uri() . '/assets/img/testimonial.png',
        'params'    => array(
            array(
                'param_name'        => 'client_img',
                'heading'           => __('Add Client picture', 'company'),
                'type'              => 'attach_image',
            ),
            array(
                'param_name'        => 'client_name',
                'heading'           => __('Client name', 'company'),
                'type'              => 'textfield',
            ),
            array(
                'param_name'        => 'client_designation',
                'heading'           => __('Client Designation', 'company'),
                'type'              => 'textfield',
            ),
            array(
                'param_name'        => 'client_feedback',
                'heading'           => __('Describe Client feedback', 'company'),
                'type'              => 'textarea',
            ),
        )
    )
);
