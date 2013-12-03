<?php get_header(); ?>

<article class="col-md-9">
	
	<?php the_post(); ?>
	
	<header class="archive-header">
		<h1 class="archive-title"><?php the_title(); ?></h1>

		<?php if ( category_description() ) : ?>
		<div class="archive-meta"><?php echo category_description(); ?></div>
		<?php endif; ?>
	</header>
	
	<?php the_content(); ?>
	
	<footer class="archive-meta">
		
	</footer>
	
</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>