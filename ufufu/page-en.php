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
<?php wp_head(); ?>
<style>
	.en_container{
		width: 100%;
		height: 100vh;
		background-image: url(<?php echo get_template_directory_uri(); ?>/assets_en/img/en_back.jpg);
		background-position: center center;
		background-size: cover;
		display: flex;
		align-items: center;
		flex-direction: column;
	}
	.main{
		display: block;
		margin: auto;
		margin-bottom: 0;
	}
	.main.sp{
		display: none;
	}
	.footer{
		margin: auto;
		margin-top: 100px;
	}
	.footer .sns{
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.footer .sns a{
		margin: 0 20px;
	}
	.footer p{
		font-size: 1rem;
		letter-spacing: 0.1em;
		margin-top: 40px;
	}
	@media (max-width:480px){
		.en_container{
			background-image: url(<?php echo get_template_directory_uri(); ?>/assets_en/img/en_back_sp.jpg);
		}
		.main{
			width: 90%;
			height: auto;
		}
		.main.pc{
			display: none;
		}
		.main.sp{
			display: block;
		}
		.footer{
			margin-top: auto;
			margin-bottom: 15px;
		}
		.footer .sns a{
			margin: 0 10px;
		}
		.footer .sns a:first-child img{
			width: 25px;
			height: auto;
		}
		.footer .sns a:nth-child(2) img{
			width: 23px;
			height: auto;
		}
		.footer .sns a:last-child img{
			width: 16px;
			height: auto;
		}
		.footer p{
			font-size: 0.9rem;
			letter-spacing: 0.1em;
			margin-top: 25px;
		}
	}
</style>
</head>

<div class="en_container">
	<img class="main pc" src="<?php echo get_template_directory_uri(); ?>/assets_en/img/en_main.png" width="566" height="417" alt="English Site Coming Soon">
	<img class="main sp" src="<?php echo get_template_directory_uri(); ?>/assets_en/img/en_main_sp.png" width="337" height="277" alt="English Site Coming Soon">
	<div class="footer">
		<div class="sns">
			<a href="https://www.instagram.com/ufufudoughnuchu/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets_en/img/icon_insta.png" width="42" height="44" alt="Instagram"></a>
			<a href="https://twitter.com/ufufudoughnuchu" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets_en/img/icon_x.png" width="39" height="41" alt="X"></a>
			<a href="https://www.facebook.com/ufufuufufudoughnuchu/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets_en/img/icon_facebook.png" width="27" height="39" alt="Facebook"></a>
		</div>
		<p class="f_qs">© UFUFU DOUGHNU-CHU / UFUFU Co., Ltd. All right reserved.</p>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>