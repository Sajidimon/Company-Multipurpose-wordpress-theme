<?php 

  get_header();

?>

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

          <?php while(have_posts()):
                the_post();
            ?>

            <article <?php post_class('entry') ?> data-aos="fade-up">

              <div class="entry-img">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
                  <?php echo wp_trim_words(get_the_content(), 35, '.') ?>
                </p>
                <div class="read-more">
                  <a href="<?php the_permalink(); ?>"><?php _e('Read More', 'company'); ?></a>
                </div>
              </div>

            </article><!-- End blog entry -->

          <?php endwhile; ?>

            <div class="blog-pagination">
             

                <?php company_pagination(); ?>


            </div>


          </div><!-- End blog entries list -->

        <?php get_sidebar(); ?>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

 <?php get_footer(); ?>