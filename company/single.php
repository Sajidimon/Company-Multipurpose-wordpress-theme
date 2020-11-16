<?php 
the_post();
get_header(); 
?>

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article <?php post_class('entry entry-single'); ?> data-aos="fade-up">

              <div class="entry-img">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="img-fluid">
              </div>

              <h2 class="entry-title">
                    <?php the_title(); ?>
              </h2>

              <div class="entry-meta">
                <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i> <?php the_author(); ?></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <time datetime="2020-01-01"><?php echo get_the_date(); ?></time></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <?php comments_number(); ?></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                    <?php the_content(); ?>
                </p>

              </div>

              <div class="entry-footer clearfix">
                <div class="float-left">
                  <i class="icofont-tags"></i>
                  <ul class="tags">
                    <?php _e('Tags :', 'company'); the_tags(' '); ?>
                  </ul>
                </div>

              </div>

            </article><!-- End blog entry -->

            <div class="blog-author clearfix" data-aos="fade-up">
              <img src="<?php get_avatar(get_the_author_meta('ID')); ?>" class="rounded-circle float-left" alt="">
              <h4><?php the_author(); ?></h4>
              <div class="social-links">
                <a href="https://twitters.com/#"><i class="icofont-twitter"></i></a>
                <a href="https://facebook.com/#"><i class="icofont-facebook"></i></a>
                <a href="https://instagram.com/#"><i class="icofont-instagram"></i></a>
              </div>
              <p>
                <?php the_author_meta('description'); ?>
              </p>
            </div><!-- End blog author bio -->

            <div class="blog-comments" data-aos="fade-up">


            <?php
				if (!post_password_required()) {
					comments_template();
				}
                ?>

            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->

          <?php get_sidebar(); ?>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <?php get_footer(); ?>