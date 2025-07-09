<?php get_header(); ?>
<div class="container">
	<div class="top_area">
		<p class="toptitle"><img class="topimgnews" src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/news/news_topimg.svg" width="350" height="80" alt="ウフフだより"></p>
		<p class="toptext f_qs">UFUFU EVERYDAY</p>
		<div class="category_wrap">
			<a href="/news/" class="link">
				<p class="f_qs">ぜんぶ</p>
			</a>
            <?php $topics = get_posts('category=2');
			if ($topics) : ?>
				<?php if(is_category('media')): ?>
				<a class="link current">
				<?php else: ?>
				<a href="/category/media" class="link">
				<?php endif; ?>
					<p class="f_qs">メディア</p>
				</a>
			<?php endif; ?>
			<?php $args = array(
				'category_name' => 'pressrelease,media,award',
				'posts_per_page' => 1,
				'post_status' => 'publish',
			);
			$query = new WP_Query($args);
			if ($query->have_posts()) {
				$query->the_post();
				$year = get_the_date('Y');
				echo '<a href="/date/' . $year . '/" class="link">';
			} wp_reset_postdata(); ?>
				<p class="f_qs">プレスリリース</p>
			</a>
            <?php $news = get_posts('category=11');
			if ($news) : ?>
				<?php if(is_category('newproduct')): ?>
				<a class="link current">
				<?php else: ?>
				<a href="/category/newproduct" class="link">
				<?php endif; ?>
					<p class="f_qs">新商品</p>
				</a>
			<?php endif; ?>
            <?php $news = get_posts('category=8');
			if ($news) : ?>
				<?php if(is_category('doughnuchu')): ?>
				<a class="link current">
				<?php else: ?>
				<a href="/category/doughnuchu" class="link">
				<?php endif; ?>
					<p class="f_qs">ドーナチュ</p>
				</a>
			<?php endif; ?>
            <?php $media = get_posts('category=7');
			if ($media) : ?>
				<?php if(is_category('ufufu-day')): ?>
				<a class="link current">
				<?php else: ?>
				<a href="/category/ufufu-day" class="link">
				<?php endif; ?>
					<p class="f_qs">店長</p>
				</a>
			<?php endif; ?>
            <?php $media = get_posts('category=12');
			if ($media) : ?>
				<?php if(is_category('coffee')): ?>
				<a class="link current">
				<?php else: ?>
				<a href="/category/coffee" class="link">
				<?php endif; ?>
					<p class="f_qs">コーチー</p>
				</a>
			<?php endif; ?>
            <?php $media = get_posts('category=13');
			if ($media) : ?>
				<?php if(is_category('scone')): ?>
				<a class="link current">
				<?php else: ?>
				<a href="/category/scone" class="link">
				<?php endif; ?>
					<p class="f_qs">チュコーン</p>
				</a>
			<?php endif; ?>
            <?php $media = get_posts('category=14');
			if ($media) : ?>
				<?php if(is_category('soup')): ?>
				<a class="link current">
				<?php else: ?>
				<a href="/category/soup" class="link">
				<?php endif; ?>
					<p class="f_qs">チュ―プ</p>
				</a>
			<?php endif; ?>
            <?php $media = get_posts('category=15');
			if ($media) : ?>
				<?php if(is_category('event')): ?>
				<a class="link current">
				<?php else: ?>
				<a href="/category/event" class="link">
				<?php endif; ?>
					<p class="f_qs">イベント</p>
				</a>
			<?php endif; ?>
            <?php $media = get_posts('category=16');
			if ($media) : ?>
				<?php if(is_category('kanazawa')): ?>
				<a class="link current">
				<?php else: ?>
				<a href="/category/kanazawa" class="link">
				<?php endif; ?>
					<p class="f_qs">金沢店</p>
				</a>
			<?php endif; ?>
            <?php $media = get_posts('category=17');
			if ($media) : ?>
				<?php if(is_category('karuizawa')): ?>
				<a class="link current">
				<?php else: ?>
				<a href="/category/karuizawa" class="link">
				<?php endif; ?>
					<p class="f_qs">軽井沢店</p>
				</a>
			<?php endif; ?>
            <?php $media = get_posts('category=18');
			if ($media) : ?>
				<?php if(is_category('place')): ?>
				<a class="link current">
				<?php else: ?>
				<a href="/category/place" class="link">
				<?php endif; ?>
					<p class="f_qs">買える場所</p>
				</a>
			<?php endif; ?>
		</div>
	</div>
	<div class="newswrap">
		<?php
		$paged = get_query_var('paged') ? get_query_var('paged') : 1;
		$args = array(
			'posts_per_page' => 18,
			'post_type' => 'post',
			'category__not_in' => array(4,5,10),
			'paged' => $paged,
		);
		$the_query = new WP_Query($args);
		if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
		<?php $category = get_the_category();
		$cat_name = $category[0]->slug; ?>
		<a href="<?php the_permalink(); ?>" class="newsblock <?php echo $cat_name; ?>">
			<span class="imgwrap" style="background-image: url(
					<?php if(has_post_thumbnail()){
						$image_id = get_post_thumbnail_id ();
						$image_url = wp_get_attachment_image_src ($image_id, true);
						echo $image_url[0];}else{echo get_template_directory_uri() . '/assets_uff/img/news/noimage.jpg';} ?>);background-size: cover;background-position: center center;"></span>
			<div class="textwrap">
				<p class="date f_qs"><?php the_time('Y.n.j'); ?>　|　<?php echo strtoupper($cat_name); ?></p>
				<?php if(is_mobile()) : ?>
				<p class="title"><?php the_title(); ?></p>
				<?php else: ?>
				<p class="title"><?php if(mb_strlen($post->post_title, 'UTF-8')>22){
			$title= mb_substr($post->post_title, 0, 22, 'UTF-8');
			echo $title.'…';}else{echo $post->post_title;} ?></p>
				<?php endif; ?>
			</div>
		</a>
		<?php endwhile; ?>
	</div>
	<?php if(function_exists('pagination')): ?>
	<div class="paging_wrap">
		<div class="paging_new">
			<?php pagination( $the_query->max_num_pages, $paged ); ?>
		</div>
	</div>
	<?php endif; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; wp_reset_query(); ?>
</div>
<?php get_footer();