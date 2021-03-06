<?php get_header(); ?>

<section class="col-md-9">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
		
		<article class="clearfix">
			<a href="<?php the_permalink()?>"><h2><?php the_title(); ?></h2></a>
			<dl class="dl-horizontal">
				<dt><?php the_post_thumbnail('thumbnail'); ?></dt>
				<dd><summary><?php the_excerpt(); ?></summary></dd>
		</article>
		
		<?php endwhile; ?>

	<?php endif; ?>
	
	<?php echo paginator(); ?>

</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>