

<div class="main">
  <div class="container">

    <div class="content">
    <?php get_header();  ?>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

     
      <?php the_content(); ?>
    </div> <!-- /,content -->


<!-- //About Me Section -->
<section class="aboutContainer" id="about">
	
	
	
		<h2 class="ellyAbout">About Me</h2>
	<div class="aboutMe">
		<div class="imgBackground"></div>
		<div class="ellyImage">
			<?php the_post_thumbnail(medium); ?>
		</div>
		<p><?php the_field('biography'); ?></p>
	</div>
</section>

<!-- //services -->

<section class="servicesContainer" id="services">
	<h2>Services</h2>
	<div class="marketingServices">
		<div class="mktgServices">
		  <?php while( has_sub_field('services') ): ?>
		    <div class="mktgServicesBlurb">
		      <p><?php the_sub_field('icon_blurb'); ?></p>
		      <img src="<?php the_sub_field('icon_image'); ?>">
		    </div>
		  <?php endwhile; ?>
		</div>
	</div>
</section>
  

<!-- //marketing skills -->
<section class="marketingSkills">
	<h2>Skills</h2>
	<div class="mktSkills">
	  <?php while( has_sub_field('marketing_skills') ): ?>
	    <div class="mktSkillsBlurb">
	      <p><?php the_sub_field('market_skills'); ?></p>
	    </div>
	  <?php endwhile; ?>
	</div>
</section>

<!-- //technical skills -->
<section class="technicalSkills">
	<!-- <h2>Technical Skills</h2> -->
	<div class="techSkills">
	  <?php while( has_sub_field('technical_skills') ): ?>
	    <div class="techSkillsIcon">
	      <img src="<?php the_sub_field('tech_image'); ?>">
	    </div>
	  <?php endwhile; ?>
	</div>
</section>

<!-- //Portfolio Featured Work -->

<section class="portfolioContainer" id="portfolio">
	<h2>Portfolio</h2>
	<div class="portfolio">
		<div class="portfolioItems">
		  <?php while( has_sub_field('portfolio_items') ): ?>
		    <div class="portItems">
		      <p><?php the_sub_field('portfolio_title'); ?></p>
		      <img src="<?php the_sub_field('portfolio_image'); ?>">

		    </div>
		  <?php endwhile; ?>
		</div>
	</div>
</section>

<!-- //blog section -->
<section class="blogPosts" id="blogs">
	<h2>Blog</h2>
	<div class="blog">
	<div class="posts">
		 <?php while( has_sub_field('blog_posts') ): ?>
		   <div class="postBlogs">
		     <img src="<?php the_sub_field('blog_post_image'); ?>">
		     <p><?php the_sub_field('blog_title'); ?></p>
		     <p><?php the_sub_field('blog_date'); ?></p>
		      
		   </div>
		 <?php endwhile; ?>
		</div>
	</div>
</section>

<!-- //contact form -->
<section class="contactForm">
	<?php the_field('contact_form') ?> 
</section>

      <?php endwhile; // end the loop?>
      <!-- //don't delete this!!! -->


		
    

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>