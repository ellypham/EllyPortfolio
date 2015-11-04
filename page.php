<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

     
      <?php the_content(); ?>
    </div> <!-- /,content -->


<!-- //About Me Section -->
	<section class="aboutMe">
		<?php the_post_thumbnail(); ?>
		<h2>About Me</h2>
		<p><?php the_field('biography'); ?></p>
	</section>

<!-- //services -->

	<section class="marketingServices">
		<h2>Services</h2>
		<div class="images">
		  <?php while( has_sub_field('services') ): ?>
		    <div class="iconBlurb">
		      <p><?php the_sub_field('icon_blurb'); ?></p>
		      <img src="<?php the_sub_field('icon_image'); ?>">
		    </div>
		  <?php endwhile; ?>
		</div>
	</section>
  

<!-- //marketing skills -->
<section class="marketingServices">
	<h2>Marketing Skills</h2>
	<div class="images">
	  <?php while( has_sub_field('marketing_skills') ): ?>
	    <div class="iconBlurb">
	      <p><?php the_sub_field('market_skills'); ?></p>
	    </div>
	  <?php endwhile; ?>
	</div>
</section>


      <?php endwhile; // end the loop?>
      <!-- //don't delete this!!! -->


		
    

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>