<?php
get_header();
$title_posts = get_posts(array('tag'=>'标题')); $title_post=array_pop($title_posts);
?>

<?php if($title_post){ ?>
<section class="headline" style="background-image: url('<?php echo fleasing_get_img_src(get_the_post_thumbnail($title_post->ID, 'headline-background')); ?>');">
	<h1><?php echo $title_post->post_title; ?></h1>

	<summary><?php echo $title_post->post_excerpt; ?></summary>

	<ul class="article-list pull-left">
		<?php foreach(get_posts(array('category_name'=>'专业期刊','posts_per_page'=>3)) as $headline_post){ ?>
		<li><a href="<?php echo get_permalink($point->ID); ?>"><h3><?php echo $headline_post->post_title; ?></h3></a></li>
		<?php } ?>
	</ul>

	<ul class="article-list pull-left">
		<?php foreach(get_posts(array('tag'=>'头条','posts_per_page'=>3,'paged'=>2)) as $headline_post){ ?>
		<li><a href="<?php echo get_permalink($point->ID); ?>"><h3><?php echo $headline_post->post_title; ?></h3></a></li>
		<?php } ?>
	</ul>
</section>
<?php } ?>

<?php foreach(get_posts(array('tag'=>'主打')) as $order => $point){?>
<div class="delimiter"></div>

<section class="feature<?php if($order % 2){?> odd<?php }else{ ?> even<?php } ?>" style="background-image: url('<?php echo fleasing_get_img_src(get_the_post_thumbnail($point->ID, 'home-features')); ?>');">
	<h2><?php echo $point->post_title; ?></h2>

	<summary><?php echo $point->post_excerpt; ?></summary>

	<ul class="article-list list-unstyled">
		<?php foreach(get_posts(array('cat'=>get_the_category($point->ID)[0]->term_id, 'post__not_in'=>array($point->ID))) as $related_post){?>
		<li><a href="<?php echo get_permalink($related_post->ID); ?>"><h4><?php echo get_the_title($related_post->ID); ?><h4></a></li>
		<?php } ?>
	</ul>
</section>
<?php } ?>
<?php get_footer(); ?>