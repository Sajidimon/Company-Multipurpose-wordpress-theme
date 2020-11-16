 <!-- ======= Footer ======= -->
 <footer id="footer">

   <div class="footer-top">
     <div class="container">
       <div class="row">

         <?php
          if (is_active_sidebar('footer_1')) {
            dynamic_sidebar('footer_1');
          }
          ?>

         <?php
          if (is_active_sidebar('footer_2')) {
            dynamic_sidebar('footer_2');
          }
          ?>

         <?php
          if (is_active_sidebar('footer_3')) {
            dynamic_sidebar('footer_3');
          }
          ?>

         <?php
          if (is_active_sidebar('footer_4')) {
            dynamic_sidebar('footer_4');
          }
          ?>

       </div>
     </div>
   </div>

   <div class="container d-md-flex py-4">

     <div class="mr-md-auto text-center text-md-left">
       <div class="copyright">
         <?php echo wp_kses_post(get_theme_mod('company_copyright')); ?>
       </div>
     </div>
   </div>
 </footer><!-- End Footer -->

 <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

 <?php wp_footer(); ?>

 </body>

 </html>