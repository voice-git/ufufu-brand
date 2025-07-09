<?php get_header(); ?>
	<div class="brandtop_area">
		<picture>
			<source media="(min-width: 481px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/backmask.png">
			<source media="(max-width: 480px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/backmask_sp.png">
			<img class="maskimg" src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/backmask.png" width="1366" height="866" alt="">
		</picture>
		<picture>
			<source media="(min-width: 481px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_mainback.jpg">
			<source media="(max-width: 480px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_mainback_sp.jpg">
			<img class="backimg" src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_mainback.jpg" width="2000" height="1297" alt="">
		</picture>
	</div>
	<div class="container">
		<div class="about_area">
			<p class="about_sptext f_qs">WHY DOUGHNU-CHU ?</p>
			<img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_about_title.svg" class="aboutimg01" width="660" height="118" alt="ママが愛情こめたドーナツだから、ドーナチュでちゅ。">
			<p class="abouttext">ママがこどものために<br>愛情こめてつくったドーナツだから、ドーナチュ。<br>保存料は無添加。<br>卵は、大切に育てた鶏の卵。<br>地元の新鮮な食材もいっぱい使う。<br>手づくりだからちょっとカタチが<br class="sp_block">ヘンテコかもしれません。<br>そのかわり、<br class="sp_block">たくさんのチューがこめられていまちゅ。</p>
			<img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_about_img.png" class="aboutimg02" width="451" height="450" alt="">
		</div>
		<?php get_template_part('inc/ufufuchu3'); ?>
		<div class="news_area">
			<div class="newswrap">
				<div class="newsletter">
					<div class="newslettertitle">
						<h2><img class="news_title_img" src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/ufufutayori.svg" width="300" height="104" alt="ウフフだより"></h2>
					</div>
					<div class="newsmediawrap">
						<?php
						if(is_mobile()){
							$args = array(
								'posts_per_page' => 1,
								'post_type' => 'post',
								'category_name' => 'media',
							);
						}else{
							$args = array(
								'posts_per_page' => 2,
								'post_type' => 'post',
								'category_name' => 'media',
							);
						}
						$the_query = new WP_Query($args);
						if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="nm_block">
								<span class="imgwrap" style="background-image: url(
													<?php if(has_post_thumbnail()){
														$image_id = get_post_thumbnail_id ();
														$image_url = wp_get_attachment_image_src ($image_id, true);
														echo $image_url[0];}else{echo get_template_directory_uri() . '/assets_uff/img/news/noimage.jpg';} ?>);background-size: cover;background-position: center center;"></span>
								<p class="nm_date sp_none f_qs"><?php the_time('Y.n.j'); ?> ｜ MEDIA</p>
								<?php if(is_mobile()){ ?>
								<h3 class="nm_title"><?php if(mb_strlen($post->post_title, 'UTF-8')>35){
					$title= mb_substr($post->post_title, 0, 35, 'UTF-8');
					echo $title.'…';}else{echo $post->post_title;} ?></h3>
								<?php }else{ ?>
								<h3 class="nm_title"><?php if(mb_strlen($post->post_title, 'UTF-8')>40){
					$title= mb_substr($post->post_title, 0, 40, 'UTF-8');
					echo $title.'…';}else{echo $post->post_title;} ?></h3>
								<?php } ?>
								<p class="nm_date sp_block f_qs"><?php the_time('Y.n.j'); ?></p>
						</a>
						<?php endwhile;endif; wp_reset_query(); ?>
					</div>
					<div class="ufufunewswrap">
						<?php
						if(is_mobile()){
							$args = array(
								'posts_per_page' => 4,
								'post_type' => 'post',
								'category_name' => 'doughnuchu,ufufu-day,newproduct,coffee,scone,event,kanazawa,karuizawa,place',
							);
						}else{
							$args = array(
								'posts_per_page' => 3,
								'post_type' => 'post',
								'category_name' => 'doughnuchu,ufufu-day,newproduct,coffee,scone,event,kanazawa,karuizawa,place',
							);
						}
						$the_query = new WP_Query($args);
						if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<?php $category = get_the_category();
						$cat_name = $category[0]->slug; $cat_name02 = str_replace('-',' ',$cat_name);?>
							<a href="<?php the_permalink(); ?>" class="un_block <?php echo $cat_name; ?>">
								<span class="imgwrap" style="background-image: url(
													<?php if(has_post_thumbnail()){
														$image_id = get_post_thumbnail_id ();
														$image_url = wp_get_attachment_image_src ($image_id, true);
														echo $image_url[0];}else{echo get_template_directory_uri() . '/assets_uff/img/news/noimage.jpg';} ?>);background-size: cover;background-position: center center;"></span>
								<p class="un_date sp_none"><?php the_time('Y.n.j'); ?><!-- ｜  <?php echo strtoupper($cat_name02); ?> --></p>
								<?php if(is_mobile()){ ?>
								<h3 class="un_title"><?php if(mb_strlen($post->post_title, 'UTF-8')>18){
					$title= mb_substr($post->post_title, 0, 18, 'UTF-8');
					echo $title.'…';}else{echo $post->post_title;} ?></h3>
								<?php }else{ ?>
								<h3 class="un_title"><?php if(mb_strlen($post->post_title, 'UTF-8')>27){
					$title= mb_substr($post->post_title, 0, 27, 'UTF-8');
					echo $title.'…';}else{echo $post->post_title;} ?></h3>
								<?php } ?>
								<p class="un_date sp_block"><?php the_time('Y.n.j'); ?></p>
							</a>
						<?php endwhile;endif; wp_reset_query(); ?>
					</div>
					<div class="btnwrap">
						<a href="/news/" class="cmnbtn02"><span>すべての記事</span></a>
					</div>
					<img>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="staff_area">
			<picture>
				<source media="(min-width: 481px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_staffimg.jpg">
				<source media="(max-width: 480px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_staffimg_sp.jpg">
				<img class="sttaffimg" src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_staffimg.jpg" width="1366" height="588" alt="">
			</picture>
			<div class="aboutstaffwrap">
				<img class="sttafftitleimg" src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/staff_title.svg" width="284" height="160" alt="わたしたちママが、つくってまちゅ。">
				<div class="aboutstaff">
					<p class="stafftext">ウフフドーナチュのオーナー、<br>パティシエ、スタッフは、ほとんどがママ。<br>こどもがおいしい、こどもがうれしいアイデアを<br>「ウフフ」「アハハ」と出しあって<br>こどもに食べさせたいドーナツを毎日手づくりしています。</p>
					<a href="/about/" class="cmnbtn01"><span>ウフフについて</span></a>
				</div>
			</div>
			<div class="aboutstaffwrap_sp">
				<img class="staff_aboutwrap" src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/staff_aboutwrap_sp.svg" width="284" height="166" alt="わたしたちママが、つくってまちゅ。">
				<a href="/about/" class="cmnbtn01 black"><span>ウフフについて</span></a>
			</div>
		</div>
		<div class="moredoughnuchu">
			<h2 class="more_title">ウフフドーナチュを<br class="sp_block">もっと知りたい方へ</h2>
			<div class="moredwrap">
				<a href="https://shop.ufufu-ufufu.com/about/#howtoeat" class="moreblock"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/moredoughnuchu_btn01.png" width="242" height="240" alt="ドーナチュのたのしみかた"></a>
				<a href="/goochu/" class="moreblock"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/moredoughnuchu_btn02.png" width="242" height="240" alt="グッチュ"></a>
				<a href="https://shop.ufufu-ufufu.com/shop/" class="moreblock"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/moredoughnuchu_btn03.png" width="242" height="240" alt="お店"></a>
				<a href="/news/" class="moreblock"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/moredoughnuchu_btn04.png" width="242" height="240" alt="ウフフな日常"></a>
				<a href="/ufufucoffee/" class="moreblock"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/moredoughnuchu_btn05.png" width="242" height="240" alt="ウフフコーチー"></a>
			</div>
		</div>
		<div class="shop_area">
			<div class="shopwrap">
				<p class="sptext f_qs">UFUFU SHOP</p>
				<img class="shopimg" src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/shopimg.png" width="650" height="382" alt="">
				<div class="shop_info">
					<div class="textarea left">
						<h2 class="title">ウフフドーナチュ<br class="sp_none">金沢本店</h2>
						<p class="text">〒921-8164<br class="sp_none">石川県金沢市久安2-463 1F<br class="sp_block"><a href="https://goo.gl/maps/veGQHAktZ1jqqZae9" target="_blank" rel="noopener" class="googlelink f_qs">Google Map</a><br>TEL. 076-218-4062</p>
						<p class="text02"><span class="f_qs">Open</span>9:00 am – 16:00 pm<br><span class="f_qs">Close</span>土・日・祝 休み</p>
						<div class="btnwrap">
							<a href="https://www.instagram.com/ufufudoughnuchu/" target="_blank" class="cmnbtn02"><span>金沢本店 Instagram</span></a>
						</div>
					</div>
					<div class="textarea right">
						<h2 class="title">ウフフドーナチュ<br class="sp_none">旧軽井沢</h2>
						<p class="text">〒389-0102<br class="sp_none">長野県北佐久郡<br class="sp_block">軽井沢町軽井沢813-1 1F<br class="sp_block"><a href="https://goo.gl/maps/oj6DtN7aUGAQDYBGA" target="_blank" rel="noopener" class="googlelink f_qs">Google Map</a><br>TEL. 0267-46-8148</p>
						<p class="text02"><span class="f_qs">Open</span>10:00 am – 16:00 pm<br><span class="f_qs">Close</span>土・日・祝 休み</p>
						<div class="btnwrap">
							<a href="https://www.instagram.com/ufufudoughnuchu_kyukaruizawa/" target="_blank" class="cmnbtn02"><span>軽井沢店 Instagram</span></a>
						</div>
					</div>
				</div>
				<a href="https://shop.ufufu-ufufu.com/shop/" class="cmnbtn01"><span>全国のショップ</span></a>
			</div>
		</div>
	</div>

<?php get_footer();