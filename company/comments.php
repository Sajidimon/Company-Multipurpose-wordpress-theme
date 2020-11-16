<div class="section-title">
   <h3 class="title text-left">
      <?php
      $aznews_comments = get_comments_number();

      if (1 == $aznews_comments) {
         _e('1 Comment', 'aznews');
      } else {
         echo wp_kses_post($aznews_comments) . ' ' . __('Comments', 'aznews');
      }
      ?>
   </h3>
   <div class="post-comments">
      <?php wp_list_comments();

      if (!comments_open()) {
         _e('Comments are closed', 'aznews');
      }

      ?>
   </div>

   <div class="comments-pagination">
      <?php

      the_comments_pagination(array(
         'screen_reader_text'      => ' ',
         'Prev_text'               => __('Previous comments', 'aznews'),
         'next_text'               => __('Next comments', 'aznews'),
      ));
      ?>
   </div>

</div>



<!-- post reply -->
<div class="comment-form">

   <?php comment_form(); ?>

</div>
<!-- /post reply -->