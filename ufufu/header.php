<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SCWZH5Y5GS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SCWZH5Y5GS');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121202641-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121202641-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title><?php the_title() ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets_uff/slick/slick-theme.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets_uff/slick/slick.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets_uff_b/drawer/css/drawer.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets_uff_b/yarn/dist/main.css?<?php echo date("Ymd-Hi"); ?>" />
<?php if(is_page('ufufuscone')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/ufufuscone/css/ufufuscone.css?<?php echo date("Ymd-Hi"); ?>" />
<?php endif; ?>

<?php wp_head(); ?>
</head>
<body <?php body_class('drawer drawer--left'); ?>>
	<header class="nav active">
<?php if(is_home() || is_front_page()): ?>
		<h1 class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/headlogo.svg" width="108" height="116" alt="ウフフドーナチュ"></h1>
<?php else: ?>
		<a href="/" class="disabled_h"><h1 class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/headlogo.svg" width="108" height="116" alt="ウフフドーナチュ"></h1></a>
<?php endif; ?>
		<div class="nav_right">
			<div class="nav_active">
				<a href="/about/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text01.svg" width="110" height="16" alt="ウフフのこと"><span class="f_qs">ABOUT UFUFU</span></a>
				<a href="/doughnuchu/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text02.svg" width="145" height="16" alt="ドーナチュのこと"><span class="f_qs">DOUGHNU-CHU</span></a>
				<a href="/ufufuscone/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text11.svg" width="149" height="15" alt="チュコーンのこと"><span class="f_qs">UFUFU SCONE</span></a>
				<a href="/ufufucoffee/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text10.svg" width="128" height="15" alt="コーチーのこと"><span class="f_qs">UFUFU COFFEE</span></a>
				<a href="/factory/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text03.svg" width="92" height="16" alt="工房のこと"><span class="f_qs">KITCHEN</span></a>
<!-- 				<a href="https://shop.ufufu-ufufu.com" target="_blank" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text04.svg" width="93" height="16" alt="おかいもの"><span class="f_qs">ONLINE STORE</span></a> -->
				<a href="/wholesaler/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text05.svg" width="112" height="16" alt="とんやさんへ"><span class="f_qs">FOR BUYER</span></a>
				<a href="https://shop.ufufu-ufufu.com/shop/#shop" target="_blank" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text12.svg" width="110" height="16" alt="買えるばしょ"><span class="f_qs">PLACES TO BUY</span></a>
				<?php $args = array(
					'category_name' => 'pressrelease,media,award',
					'posts_per_page' => 1,
					'post_status' => 'publish',
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) {
					$query->the_post();
					$year = get_the_date('Y');
					echo '<a href="/date/' . $year . '/" class="toplink"><img src="' . get_template_directory_uri() . '/assets_uff_b/img/common/menu_text06.svg" width="132" height="16" alt="プレスリリース"><span class="f_qs">PRESS RELEASE</span></a>';
				} wp_reset_postdata(); ?>
				<a href="/zerofoodloss/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text07.svg" width="132" height="16" alt="みらいのために"><span class="f_qs">UFUFU PROJECT</span></a>
				<a href="/goochu/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text08.svg" width="72" height="16" alt="グッチュ"><span class="f_qs">GOOCHU</span></a>
				<a href="/news/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text09.svg" width="110" height="16" alt="ウフフだより"><span class="f_qs">UFUFU NEWS</span></a>
				<a class="menu close noscroll"><span class="f_qs">MENU<img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/icon_menu02.svg" width="64" height="30" alt=""></span></a>
			</div>
		</div>
		<a class="menu open noscroll"><span class="f_qs">MENU<img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/icon_menu.svg" width="64" height="30" alt=""></span></a>
		<a href="https://shop.ufufu-ufufu.com" target="_blank" class="menu"><span class="f_qs">ONLINE<br>STORE</span></a>
	</header>
	<header class="navsp">
		<a href="/" class="logo"><h1><img src="<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/header_logo.svg" width="246" height="58" alt="ドーナツの通販サイト ウフフドーナチュ"></h1></a>
	</header>
	<div class="menuwrap navhamb">
		<div class="hambu_wrap">
			<button type="button" class="drawer-toggle drawer-hamburger">
			    <span class="menuclose"></span>
			    <span class="sr-only">toggle navigation</span>
			    <span class="drawer-hamburger-icon"></span>
			</button>
		</div>
		<a href="https://shop.ufufu-ufufu.com" target="_blank" class="onlinestore_btn f_qs"><span>ONLINE<br>STORE</span></a>
	</div>
<?php if(is_home() || is_front_page()): ?>
	<header class="tophead_top">
		<div class="mainnav top">
			<picture>
				<source media="(min-width: 481px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/toplogo.svg">
				<source media="(max-width: 480px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/header_logo.svg">
				<img class="toplogo" src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/toplogo.svg" width="242" height="218" alt="ウフフドーナチュ">
			</picture>
			<a href="/about/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_menu_about.svg" width="110" height="18" alt="ウフフのこと"><span class="f_qs">ABOUT UFUFU</span></a>
			<a href="/doughnuchu/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_menu_doughnuchu.svg" width="146" height="16" alt="ドーナチュのこと"><span class="f_qs">DOUGHNU-CHU</span></a>
			<a href="/ufufuscone/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text11.svg" width="149" height="15" alt="チュコーンのこと"><span class="f_qs">UFUFU SCONE</span></a>
			<a href="/ufufucoffee/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text10.svg" width="128" height="15" alt="コーチーのこと"><span class="f_qs">UFUFU COFFEE</span></a>
			<a href="/factory/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_menu_kitchen.svg" width="94" height="16" alt="工房のこと"><span class="f_qs">KITCHEN</span></a>
<!-- 			<a href="https://shop.ufufu-ufufu.com" target="_blank" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_menu_store.svg" width="94" height="16" alt="おかいもの"><span class="f_qs">ONLINE STORE</span></a> -->
			<a href="/wholesaler/" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text05.svg" width="112" height="16" alt="とんやさんへ"><span class="f_qs">FOR BUYER</span></a>
			<a href="https://shop.ufufu-ufufu.com/shop/#shop" target="_blank" class="toplink"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text12.svg" width="110" height="16" alt="買えるばしょ"><span class="f_qs">PLACES TO BUY</span></a>
	        <?php
	        $args = array(
				'posts_per_page' => 1,
				'post_type' => 'post',
				'category_name' => 'pressrelease,media,award',
	        );
	        $the_query = new WP_Query($args);
	        if ($the_query->have_posts()) :
	            while ($the_query->have_posts()) : $the_query->the_post(); ?>
			<?php $category = get_the_category();
			$cat_name = $category[0]->slug; $cat_name02 = str_replace('-',' ',$cat_name);?>
			<a href="<?php the_permalink(); ?>" class="newslink">
				<span class="category_sp"><?php echo strtoupper($cat_name02); ?> ｜ </span><span class="date"><?php the_time('Y.n.j'); ?></span><span class="text"><?php if(mb_strlen($post->post_title, 'UTF-8')>30){
				$title= mb_substr($post->post_title, 0, 30, 'UTF-8');
				echo $title.'…';}else{echo $post->post_title;} ?></span>
			</a>
			<?php endwhile; endif; wp_reset_query(); ?>
		</div>
	</header>
	<div class="menuwrapnavhamb_sp">
		<div class="hambu_wrap">
			<button type="button" class="drawer-toggle drawer-hamburger">
			    <span class="menuclose"></span>
			    <span class="sr-only">toggle navigation</span>
			    <span class="drawer-hamburger-icon"></span>
			</button>
		</div>
	</div>
<?php else: ?>
	<header class="tophead">
		<div class="mainnav">
			<a href="/" class="nav_left">
				<picture>
					<source media="(min-width: 481px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/headerlogo_brand.svg">
					<source media="(max-width: 480px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/header_logo.svg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/headerlogo_brand.svg" width="424" height="115" alt="ウフフドーナチュ">
				</picture>
			</a>
<!--
			<div class="nav_right">
				<a href="/about/" class="link"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_menu_about.svg" width="110" height="18" alt="ウフフのこと"><span class="f_qs">ABOUT UFUFU</span></a>
				<a href="/doughnuchu/" class="link"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_menu_doughnuchu.svg" width="146" height="16" alt="ドーナチュのこと"><span class="f_qs">DOUGHNU-CHU</span></a>
				<a href="/factory/" class="link"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_menu_kitchen.svg" width="94" height="16" alt="工房のこと"><span class="f_qs">UFUFU KITCHEN</span></a>
				<a href="https://shop.ufufu-ufufu.com" target="_blank" class="link"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/top/top_menu_store.svg" width="94" height="16" alt="おかいもの"><span class="f_qs">ONLINE STORE</span></a>
				<a href="/wholesaler/" class="link"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/menu_text05.svg" width="112" height="16" alt="とんやさんへ"><span class="f_qs">FOR BUYER</span></a>
			</div>
-->
		</div>
	</header>
	<div class="menuwrapnavhamb_sp">
		<div class="hambu_wrap">
			<button type="button" class="drawer-toggle drawer-hamburger">
			    <span class="menuclose"></span>
			    <span class="sr-only">toggle navigation</span>
			    <span class="drawer-hamburger-icon"></span>
			</button>
		</div>
	</div>
<?php endif; ?>
<!--
<?php if(is_home() || is_front_page()): ?>
	<div class="rightnav top">
		<a href="/karuizawa/" class="stafflink"></a>
<?php else: ?>
	<div class="rightnav">
<?php endif; ?>
		<a href="https://shop.ufufu-ufufu.com" target="_blank" class="storelink"><span class="f_qs">ONLINE<br>STORE</span></a>
	</div>
-->
	<nav class="drawer-nav">
	    <div class="drawer-menu sp">
		    <div class="drawermenuwrap">
		    	<a href="/about/" class="splink f_qs">ABOUT UFUFU<span>ウフフのこと</span></a>
		    	<a href="/doughnuchu/" class="splink f_qs">DOUGHNU-CHU<span>ドーナチュのこと</span></a>
		    	<a href="/ufufuscone/" class="splink f_qs">UFUFU SCONE<span>チュコーンのこと</span></a>
		    	<a href="/ufufucoffee/" class="splink f_qs">UFUFU COFFEE<span>コーチーのこと</span></a>
		    	<a href="/factory/" class="splink f_qs">KITCHEN<span>工房のこと</span></a>
		    	<a href="https://shop.ufufu-ufufu.com" target="_blank" class="splink f_qs">ONLINE STORE<span>おかいもの</span></a>
		    	<a href="/wholesaler/" class="splink f_qs">FOR BUYER<span>とんやさんへ</span></a>
		    	<a href="https://shop.ufufu-ufufu.com/shop/#shop" target="_blank" class="splink f_qs">PLACES TO BUY<span>買えるばしょ</span></a>
		    	<div class="link_bottom">
					<?php $args = array(
						'category_name' => 'pressrelease,media,award',
						'posts_per_page' => 1,
						'post_status' => 'publish',
					);
					$query = new WP_Query($args);
					if ($query->have_posts()) {
						$query->the_post();
						$year = get_the_date('Y');
						echo '<a href="/date/' . $year . '/" class="splinkbottom f_qs">プレスリリース</a>';
					} wp_reset_postdata(); ?>
			    	<a href="/zerofoodloss/" class="splinkbottom f_qs">みらいのために</a>
			    	<a href="/goochu/" class="splinkbottom f_qs">グッチュ</a>
<!-- 					<a href="/ufufucoffee/" class="splinkbottom f_qs">ウフフコーチー</a> -->
			    	<a href="/news/" class="splinkbottom f_qs">ウフフだより</a>
			    	<a href="https://shop.ufufu-ufufu.com/shop/" class="splinkbottom f_qs">店舗情報</a>
			    	<a href="https://shop.ufufu-ufufu.com/contact/" class="splinkbottom f_qs">お問い合わせ</a>
		    	</div>
		    	<div class="snslinkimgwrap">
			    	<a href="https://www.instagram.com/ufufudoughnuchu/" target="_blank" rel="noopener" class="insta" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/menu_sns_insta.svg)"></a>
			    	<a href="https://twitter.com/ufufudoughnuchu" target="_blank" rel="noopener" class="twitter" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/menu_sns_twitter.svg);"></a>
			    	<a href="https://www.facebook.com/ufufuufufudoughnuchu/" target="_blank" rel="noopener" class="facebook" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/menu_sns_facebook.svg);"></a>
		    	</div>
		    </div>
	    </div>
	</nav>