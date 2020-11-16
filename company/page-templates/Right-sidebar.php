<?php
/*
    Template name: Right Sidebar
*/
?>

<?php 
get_header(); 
?>

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article <?php post_class(' entry-single'); ?> data-aos="fade-up">

            <?php if(has_post_thumbnail()): ?>
              <div class="entry-img">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="img-fluid">
              </div>
            <?php endif; ?>

              <div class="entry-content">
                <p>
                    <?php the_content(); ?>
                </p>

              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <?php get_sidebar(); ?>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <?php get_footer(); ?>