	<section id="headlines">
		<div class="wrapper">
			<div class="widget column-3-1 news">
				<h2><a href="/tag/团队动态/" target="_blank">团队动态</a></h2>
				<?query_posts(array('tag'=>'团队动态'));?>
				<ul>
					<?while(have_posts()):the_post();?>
					<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
					<?endwhile;?>
				</ul>
				<button class="read-more" onclick="window.location.href='/tag/团队动态/'"></button>
			</div>
			<div class="widget column-3-1 news">
				<h2><a href="/tag/律师观点/" target="_blank">律师观点</a></h2>
				<?query_posts(array('tag'=>'律师观点'));?>
				<ul>
					<?while(have_posts()):the_post();?>
					<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
					<?endwhile;?>
				</ul>
				<button class="read-more" onclick="window.location.href='/tag/律师观点/'"></button>
			</div>
			<div class="widget column-3-1 news">
				<h2><a href="/tag/案例分析/" target="_blank">案例分析</a></h2>
				<?query_posts(array('tag'=>'案例分析'));?>
				<ul>
					<?while(have_posts()):the_post();?>
					<li><a href="<?the_permalink()?>" target="_blank"><?the_title()?></a></li>
					<?endwhile;?>
				</ul>
				<button class="read-more" onclick="window.location.href='/tag/案例分析/'"></button>
			</div>
		</div>
	</section>
