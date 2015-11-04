<?php get_header(); ?>

<div class="main">
  <div class="container">
  <h1>Portfolio Items</h1>

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="entry-meta">
            <?php hackeryou_posted_on(); ?>
          </div><!-- .entry-meta -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <p class="portfolio_title"><?php the_field('portfolio_title'); ?></p>

          <div class="portfolioImages">
            <?php while(has_sub_field('portfolio_items')): ?>
              <?php $image = get_sub_field('portfolio_image'); ?>
              <img src="<?php echo $image['sizes']['medium'] ?>" >
              <p class="portfolio_description"><?php the_sub_field('portfolio_description'); ?></p>
            <?php endwhile; ?>
          </div>

          <p class="link"><a href="http://<?php the_field('live_link'); ?>"><?php the_field('live_link'); ?></a></p>

          <div class="entry-utility">
            <?php hackeryou_posted_in(); ?>
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>