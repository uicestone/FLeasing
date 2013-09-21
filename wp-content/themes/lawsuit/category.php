<?get_header()?>
	<section id="category-main">
		<div class="wrapper">
			<h2>律师观点</h2>
			<div class="left column">
				<hr />
				<?$category=get_category(get_query_var('cat'))?>
				<?query_posts(array('cat'=>$category->cat_ID,'tag'=>'律师观点'))?>
				<?the_post()?>
				<h3><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></h3>
				<summary class="shadow">
					<a href="<?the_permalink()?>" target="_blank"><?the_post_thumbnail('category-main-thumb')?></a>
				</summary>
			</div>
			<div class="right column">
				<summary><?=$category->description?></summary>
				<ul>
					<?while(have_posts()):the_post()?>
					<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
					<?endwhile?>
				</ul>
			</div>
		</div>
	</section>
	<section id="categories">
		<div class="wrapper">
			<div class="left column">
				<h2>案例分析</h2>
				<hr>
				<dl>
					<?query_posts(array('cat'=>$category->cat_ID,'tag'=>'案例分析'))?>
					<?the_post()?>
					<dt>
						<a href="<?the_permalink()?>" target="_blank"><?the_post_thumbnail('category-thumb')?></a>
						<h3><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></h3>
					</dt>
					<dd>
						<ul>
						<?while(have_posts()):the_post()?>
							<li><a href="<?the_permalink()?>"><?the_title()?></a></li>
						<?endwhile?>
						</ul>
						<span class="more">More>>></span>
					</dd>
				</dl>
			</div>
			<div class="right column">
				<h2>法律法规</h2>
				<hr>
				<dl>
					<?query_posts(array('cat'=>$category->cat_ID,'tag'=>'法律法规'))?>
					<?the_post()?>
					<dt>
						<a href="<?the_permalink()?>" target="_blank"><?the_post_thumbnail('category-thumb')?></a>
						<h3><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></h3>
					</dt>
					<dd>
						<ul>
						<?while(have_posts()):the_post()?>
							<li><a href="<?the_permalink()?>"><?the_title()?></a></li>
						<?endwhile?>
						</ul>
						<span class="more">More>>></span>
					</dd>
				</dl>
			</div>
		</div>
	</section>
<?get_footer()?>