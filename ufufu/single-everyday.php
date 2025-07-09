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
		<?php if(is_single('942')): ?>
		<a href="/ufufu-day939/" rel="prev"><img class="prev" src="<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/icon_arrow_prev.svg" alt="PREV" width="20" height="13"><span>Prev</span></a>
		<?php else: ?>
		<?php previous_post_link('%link','<img class="prev" src="' . get_template_directory_uri() . '/assets_uff/img/common/icon_arrow_prev.svg" alt="PREV" width="20" height="13"><span>Prev</span>'); ?>
		<?php endif; ?>
		<a class="back" href="/news/">一覧に戻る</a>
		<?php if(is_single('939')): ?>
		<a href="/ufufu-day942/" rel="prev"><span>Next</span><img class="next" src="<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/icon_arrow.svg" alt="NEXT" width="20" height="13"></a>
		<?php else: ?>
		<?php next_post_link('%link', '<span>Next</span><img class="next" src="' . get_template_directory_uri() . '/assets_uff/img/common/icon_arrow.svg" alt="NEXT" width="20" height="13">'); ?>
		<?php endif; ?>
	</div>
	<?php else: ?>
	<div class="paging_single">
		<?php if(is_single('942')): ?>
		<a href="/ufufu-day939/" rel="prev"><img class="prev" src="<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/icon_arrow_prev.svg" alt="PREV" width="20" height="13"><span>Prev</span></a>
		<?php else: ?>
		<?php previous_post_link('%link','<img class="prev" src="' . get_template_directory_uri() . '/assets_uff/img/common/icon_arrow_prev.svg" alt="PREV" width="20" height="13"><span>Prev</span>'); ?>
		<?php endif; ?>
		<a class="back" href="/news/">一覧に戻る</a>
		<?php if(is_single('939')): ?>
		<a href="/ufufu-day942/" rel="prev"><span>Next</span><img class="next" src="<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/icon_arrow.svg" alt="NEXT" width="20" height="13"></a>
		<?php else: ?>
		<?php next_post_link('%link', '<span>Next</span><img class="next" src="' . get_template_directory_uri() . '/assets_uff/img/common/icon_arrow.svg" alt="NEXT" width="20" height="13">'); ?>
		<?php endif; ?>
	</div>
	<?php endif; ?>
</div>

<?php endwhile; endif; ?>
<?php get_footer();