<?php get_header(); ?>
<section class="col-md-9">

	<?php if ( have_posts() ) : ?>

		<header class="archive-header">
			<h1 class="archive-title"><?php echo single_cat_title( '', false ); ?></h1>

			<?php if ( category_description() ) : ?>
			<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
		</header>

		<?php while ( have_posts() ) : the_post(); ?>
		
		<article class="clearfix">
			<a href="<?php the_permalink()?>"><h2><?php the_title(); ?></h2></a>
			<dl class="dl-horizontal">
				<dt><?php the_post_thumbnail('thumbnail'); ?></dt>
				<dd><summary><?php the_excerpt(); ?></summary></dd>
			</dl>
		</article>
		
		<?php endwhile; ?>

	<?php endif; ?>
	
	<?php echo paginator(); ?>

</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>