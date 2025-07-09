<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $category = get_the_category();$cat_name = $category[0]->slug; ?>
<div class="container_single">
	<p class="date f_qs"><?php the_time('Y.n.j'); ?>　|　<?php echo strtoupper($cat_name); ?></p>
	<h2 class="title"><?php the_title() ?></h2>
	<div class="content">
		<?php the_content() ?>
	</div>
	<?php if(is_mobile()) : ?>
	<div class="paging_single">
		<?php previous_post_link('%link','<img class="prev" src="' . get_template_directory_uri() . '/assets_uff/img/common/icon_arrow_prev.svg" alt="PREV" width="20" height="13"><span>Prev</span>'); ?>
		<?php $args = array(
			'category_name' => 'pressrelease,media,award',
			'posts_per_page' => 1,
			'post_status' => 'publish',
		);
		$query = new WP_Query($args);
		if ($query->have_posts()) {
			$query->the_post();
			$year = get_the_date('Y');
			echo '<a class="back" href="/date/' . $year . '/">一覧に戻る</a>';
		} wp_reset_postdata(); ?>
		<?php next_post_link('%link', '<span>Next</span><img class="next" src="' . get_template_directory_uri() . '/assets_uff/img/common/icon_arrow.svg" alt="NEXT" width="20" height="13">'); ?>
	</div>
	<?php else: ?>
	<div class="paging_single">
		<?php previous_post_link('%link','<img class="prev" src="' . get_template_directory_uri() . '/assets_uff/img/common/icon_arrow_prev.svg" alt="PREV" width="20" height="13"><span>Prev</span>'); ?>
		<?php $args = array(
			'category_name' => 'pressrelease,media,award',
			'posts_per_page' => 1,
			'post_status' => 'publish',
		);
		$query = new WP_Query($args);
		if ($query->have_posts()) {
			$query->the_post();
			$year = get_the_date('Y');
			echo '<a class="back" href="/date/' . $year . '/">一覧に戻る</a>';
		} wp_reset_postdata(); ?>
		<?php next_post_link('%link', '<span>Next</span><img class="next" src="' . get_template_directory_uri() . '/assets_uff/img/common/icon_arrow.svg" alt="NEXT" width="20" height="13">'); ?>
	</div>
	<?php endif; ?>
</div>

<?php endwhile; endif; ?>
<?php get_footer();