<?get_header()?>
<section id="article">
	<div class="wrapper">
		<article class="column column-4-3">
<?php while ( have_posts() ) : the_post(); ?>
			<h1><?the_title()?></h1>
			<?the_content()?>
<?php endwhile; // end of the loop. ?>
		</article>
		<aside class="column column-4-1">
			<h1>相关文章</h1>
			<ul>
				<li><a href="#">中小企业私募债启航考验企业……</a></li>
				<li><a href="#">中小企业私募债启航考验企业……</a></li>
				<li><a href="#">中小企业私募债启航考验企业……</a></li>
				<li><a href="#">中小企业私募债启航考验企业……</a></li>
			</ul>
		</aside>
	</div>
</section>
<?get_template_part('section-headline')?>
<?get_footer()?>