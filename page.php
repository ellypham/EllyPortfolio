

<div class="main">
  <div class="container">

    <div class="content">
    <?php get_header();  ?>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
     <h1 class="animated duration4 fadeIn">Elly Pham</h1>
     <h2 class="animated duration4 slideInLeft">Front-End Developer & Digital Marketer</h2>
     <div class="chevronDown animated duration4 slideInUp">
     	<a data-scroll href="#about"><i class="fa fa-chevron-down fa-2x"></i></a>
     </div>
    </div> <!-- /,content -->


<!-- //About Me Section -->
<section class="aboutContainer" id="about">
		<h2 class="ellyAbout">About Me</h2>
	<div class="aboutMe wow zoomIn">
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
	<div class="marketingServices wow slideInUp">
		<div class="mktgServices">
		  <?php while( has_sub_field('services') ): ?>
		    <div class="mktgServicesBlurb">
		      <img src="<?php the_sub_field('icon_image'); ?>">
		      <p><?php the_sub_field('icon_blurb'); ?></p>
		    </div>
		  <?php endwhile; ?>
		</div>
	</div>
</section>
  

<!-- //marketing skills -->
<section class="marketingSkills wow slideInUp">
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
<section class="technicalSkills wow slideInUp">
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

<section class='portfolioSection' id="portfolio">
	<h2>Portfolio</h2>
	<div class='portfolio'>
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

        <div class="portfolioPieces">
        	<div class="portfolioImg"><?php the_post_thumbnail(large); ?></div>
			<div class="portfolioCopy">
        		<div class="portfolioTitle"><?php the_title(); ?></div>
        		<div class="portTechList">
	  				<?php while( has_sub_field('portfolio_tech') ): ?>
	  					<p class="port"><?php the_sub_field('port_tech'); ?></p>
	 				 <?php endwhile; ?>
					</div>
        		<p><?php the_field(portfolio_short_description) ?></p>
			</div>
        </div> 


      <?php endwhile ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    </div>
</section>

<!-- //blog section -->
<section class="blogPosts" id="blog">
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
<section class="contactFromContainer" id="contact">
	<div class="contactForm">
	<h2>Contact Me</h2>
		<?php the_field('contact_form') ?> 
	</div>
	<div class="givingBack">
	<h2>Giving Back to 100 Smiles Project</h2>
	<img src="<?php bloginfo('template_url') ?>/images/100Smiles-bw.png" alt="100 smiles project logo">
	<p>50% of funds from my services will be donated to the 100 Smiles Project, a non-for profit organization which helps orphanages in Central America. 100% of these donated funds will go directly to the projects.</p>
  	</div>
</section>

      <?php endwhile; // end the loop?>
      <!-- //don't delete this!!! -->


		
    

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>