<?get_header()?>
<script src="<?=get_template_directory_uri(); ?>/mobilyslider/mobilyslider.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/mobilyslider/style.css" />
	<section id="focus">
		<div class="wrapper">
			<dl>
				<?query_posts(array('tag'=>'首页焦点-左'))?>
				<dt class="slider shadow">
					<div class="sliderContent">
						<?while(have_posts()):the_post()?>
						<div class="item">
							<a href="<?the_permalink()?>" target="_blank">
								<h1><?the_title()?></h1>
								<?the_post_thumbnail('home-focus-left')?>
							</a>
						</div>
						<?endwhile;?>
					</div>
				</dt>
				<?query_posts(array('tag'=>'首页焦点-右'))?>
				<?the_post()?>
				<dd>
					<a href="<?the_permalink()?>" target="_blank"><h1><?the_title()?></h1></a>
					<div class="summary"><?=the_content('查看全文')?></div>
					<div class="more-link"><a href="<?the_permalink()?>" target="_blank">查看全文</a></div>
				</dd>
			</dl>
		</div>
	</section>
<?get_template_part('section-headline')?>
<?get_footer()?>