

<div class="main">
  <div class="container">

    <div class="content">
    <?php get_header();  ?>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

     
      <?php the_content(); ?>
    </div> <!-- /,content -->


<!-- //About Me Section -->
	<h2 class="ellyAbout">About Me</h2>
	<section class="aboutMe" id="about">
		<div class="ellyImage">
		<?php the_post_thumbnail(medium); ?>
		</div>
		<p><?php the_field('biography'); ?></p>
	</section>

<!-- //services -->

<div class="servicesContainer">
	<h2>Services</h2>
	<section class="marketingServices">
		<div class="mktgServices">
		  <?php while( has_sub_field('services') ): ?>
		    <div class="mktgServicesBlurb">
		      <p><?php the_sub_field('icon_blurb'); ?></p>
		      <img src="<?php the_sub_field('icon_image'); ?>">
		    </div>
		  <?php endwhile; ?>
		</div>
	</section>
</div>
  

<!-- //marketing skills -->
<section class="marketingSkills">
	<h2>Marketing Skills</h2>
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
	<h2>Technical Skills</h2>
	<div class="techSkills">
	  <?php while( has_sub_field('technical_skills') ): ?>
	    <div class="techSkillsBlurb">
	      <p><?php the_sub_field('tech_skills'); ?></p>
	    </div>
	  <?php endwhile; ?>
	</div>
</section>

<!-- //featured work -->
<h2>Featured Work</h2>

    <?php $portfolioQuery = new WP_query(
      array(
        'post_type'=>'portfolio',
        'orderby'=>'title',
        'order'=>'DESC'
        )
    ); ?>

    <?php if($portfolioQuery->have_posts()): ?>
      <?php while($portfolioQuery->have_posts()): $portfolioQuery->the_post(); ?>
        <!-- //stuff goes here -->
        <div class ="featured">
        <?php the_title(); ?>
        <?php the_post_thumbnail(); ?>
        <p><?php the_field(portfolio_short_description) ?></p>

        <div> 


      <?php endwhile ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

 <!-- //why choose me -->

	<section class="whyChooseMe">
		<h2>Why Choose Me?</h2>
		<div class="chooseMe">
		  <?php while( has_sub_field('why_choose_me') ): ?>
		    <div class="icon2Blurb">
		      <p><?php the_sub_field('icon2_blurb'); ?></p>
		      <img src="<?php the_sub_field('icon2'); ?>">
		    </div>
		  <?php endwhile; ?>
		</div>
	</section>


<!-- //blog section -->
	<section class="blogPosts">
		<h2>Blog</h2>
		<div class="blog">
		  <?php while( has_sub_field('blog_posts') ): ?>
		    <div class="postBlogs">
		      <img src="<?php the_sub_field('blog_post_image'); ?>">
		      <p><?php the_sub_field('blog_title'); ?></p>
		      <p><?php the_sub_field('blog_date'); ?></p>
		      
		    </div>
		  <?php endwhile; ?>
		</div>
	</section>

<section class="contactForm">
	<?php the_field('contact_form') ?>
</section>

      <?php endwhile; // end the loop?>
      <!-- //don't delete this!!! -->


		
    

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>