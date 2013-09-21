<?get_header()?>
	<section id="focus">
		<div class="wrapper">
			<dl>
				<dt class="shadow">
					<?query_posts(array('tag'=>'首页焦点-左'))?>
					<?the_post()?>
					<a href="<?the_permalink()?>" target="_blank">
						<h1><?the_title()?></h1>
						<?the_post_thumbnail('home-focus-left')?>
					</a>
				</dt>
				<?query_posts(array('tag'=>'首页焦点-右','post_per_page'=>2))?>
				<?while(have_posts()):the_post()?>
				<dd class="shadow">
					<a href="<?the_permalink()?>" target="_blank"><?the_post_thumbnail('home-focus-right')?></a>
					<div class="summary"><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></div>
				</dd>
				<?endwhile?>
			</dl>
		</div>
	</section>
<?get_template_part('section-headline')?>
<?get_footer()?>