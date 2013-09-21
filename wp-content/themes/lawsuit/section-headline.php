	<section id="headlines">
		<div class="wrapper">
			<div class="widget column-3-1 news">
				<h2><a href="/tag/团队动态/" target="_blank">团队动态</a></h2>
				<!--
				<hr />
				<?query_posts(array('tag'=>'团队动态'));?>
				<?the_post();?>
				<?the_post_thumbnail(array(283,118))?>
				<h3><?the_title()?></h3>
				-->
				<ul>
					<?while(have_posts()):the_post();?>
					<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
					<?endwhile;?>
				</ul>
				<button class="read-more" onclick="window.location.href='/tag/团队动态/'"></button>
			</div>
			<div class="widget column-3-1 news">
				<h2><a href="/tag/律师观点/" target="_blank">律师观点</a></h2>
				<!--
				<hr />
				<?query_posts(array('tag'=>'律师观点'));?>
				<?the_post();?>
				<?the_post_thumbnail(array(283,118))?>
				<h3><?the_title()?></h3>
				-->
				<ul>
					<?while(have_posts()):the_post();?>
					<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
					<?endwhile;?>
				</ul>
				<button class="read-more" onclick="window.location.href='/tag/律师观点/'"></button>
			</div>
			<div class="widget column-3-1 news">
				<h2><a href="/tag/案例分析/" target="_blank">案例分析</a></h2>
				<!--
				<hr />
				<?query_posts(array('tag'=>'案例分析','post_per_page'=>1));?>
				<?the_post();?>
				<?the_post_thumbnail('headline')?>
				<h3><?the_title()?></h3>
				-->
				<ul>
					<?while(have_posts()):the_post();?>
					<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
					<?endwhile;?>
				</ul>
				<button class="read-more" onclick="window.location.href='/tag/案例分析/'"></button>
			</div>
		</div>
	</section>
