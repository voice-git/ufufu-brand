<?php get_header(); ?>
<div class="container">
	<div class="top_area">
		<p class="toptitle"><img class="topimgnews" src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/news/pressrelease_topimg.svg" width="330" height="66" alt="ウフフだより"></p>
		<p class="toptext f_qs">PRESS RELEASE</p>
	</div>
	<div class="sort_sp">
		<div class="selectwrap">
			<select>
				<option value="all">すべて</option>
				<option value="pressrelease">プレスリリース</option>
				<option value="media">メディア情報</option>
<!-- 				<option value="award">受賞歴</option> -->
			</select>
		</div>
		<div class="selectwrap">
			<select onChange="location.href=value;">
			<?php
				$home_url = get_bloginfo('url');
				$category = get_the_category();
				$cat_slug = $category[0]->slug;
				$args = array(
					'posts_per_page' => -1,
					'post_type' => 'post',
					'category_name' => 'pressrelease,media,award',
				);
				$prev_year = null;
				if (have_posts()){
					while (have_posts()){
						the_post();
						$this_year = get_the_date('Y');
						if ($prev_year != $this_year) {
							echo '<option value="'.$home_url.'/date/'.$this_year.'">'.$this_year.'年</option>';
						}
						$prev_year = $this_year;
					}
				}
			?>
			</select>
		</div>
	</div>
	<div class="presswrap">
		<div class="topflex">
			<div class="category_wrap press">
				<a href="" class="link" data-category="all">
					<p>すべて</p>
				</a>
				<a class="link" data-category="pressrelease">
					<p>プレスリリース</p>
				</a>
				<a class="link" data-category="media">
					<p>メディア情報</p>
				</a>
<!--
				<a class="link" data-category="award">
					<p>受賞歴</p>
				</a>
-->
			</div>
			<div class="archives">
				<div class="selectwrap">
					<select onChange="location.href=value;">
					<?php
						$prev_year = null;
						if (have_posts()){
							while (have_posts()){
								the_post();
								$this_year = get_the_date('Y');
								if ($prev_year != $this_year) {
									echo '<option value="'.$home_url.'/date/'.$this_year.'">'.$this_year.'年</option>';
								}
								$prev_year = $this_year;
							}
						}
						wp_reset_query();
					?>
					</select>
				</div>
			</div>
		</div>
		<div class="mainflex">
			<div class="leftwrap">
				<p class="link current">
					<a data-month="all">すべて</a>
				</p>
				<?php
					$args = array(
						'posts_per_page' => -1,
						'post_type' => 'post',
						'category_name' => 'pressrelease,media,award',
					);
					$archive_query = new WP_Query( $args );
					while ( $archive_query->have_posts() ){
						$archive_query->the_post();
						$archive_list[ get_the_time( 'Y/n', $post->ID ) ][] = $post->post_title;
					}
					wp_reset_postdata();
					
					if( $archive_list ):
					foreach( $archive_list as $year_month => $archive ):
					$year_month_arr = explode( '/', $year_month ); ?>
					<p class="link"><a data-month="<?php echo $year_month_arr[1] ?>"><?php echo $year_month_arr[1] ?>月</a></p>
				<?php endforeach;endif; ?>
			</div>
			<div class="rightwrap">
				<?php
				$category = get_the_category();
				$cat_slug = $category[0]->slug;
				$args = array(
					'posts_per_page' => -1,
					'post_type' => 'post',
					'category_name' => 'pressrelease,media,award',
				);
				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<?php $category = get_the_category();
				$cat_slug = $category[0]->slug;
				$cat_name = $category[0]->cat_name; ?>
				<a href="<?php the_permalink(); ?>" class="newsblock <?php echo $cat_slug ?> c_active m_active" data-month="<?php the_time('n'); ?>" data-category="<?php echo $cat_slug; ?>">
					<span class="imgwrap" style="background-image: url(
							<?php if(has_post_thumbnail()){
								$image_id = get_post_thumbnail_id ();
								$image_url = wp_get_attachment_image_src ($image_id, true);
								echo $image_url[0];}else{echo get_template_directory_uri() . '/assets_uff/img/news/noimage.jpg';} ?>);background-size: cover;background-position: center center;"></span>
					<div class="textwrap">
						<p class="date f_qs"><?php echo strtoupper($cat_name); ?>　|　<?php the_time('Y.n.j'); ?></p>
						<?php if(is_mobile()) : ?>
						<p class="title"><?php the_title(); ?></p>
						<?php else: ?>
						<p class="title"><?php if(mb_strlen($post->post_title, 'UTF-8')>40){
					$title= mb_substr($post->post_title, 0, 40, 'UTF-8');
					echo $title.'…';}else{echo $post->post_title;} ?></p>
						<?php endif; ?>
					</div>
				</a>
				<?php endwhile;endif; wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();