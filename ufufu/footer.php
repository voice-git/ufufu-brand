	<footer>
		<div class="footerwrap">
			<ul class="left">
				<li><img class="footlogo" src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/toplogo.svg" width="307" height="277" alt="ウフフドーナチュ"></li>
			</ul>
			<ul class="center">
				<li class="foottitle f_qs">CONTACT</li>
				<li><a href="https://shop.ufufu-ufufu.com/order/">デコレーションのリクエスト</a></li>
				<li><a href="https://shop.ufufu-ufufu.com/counterorder/">店頭受け取り予約</a></li>
				<li><a href="https://shop.ufufu-ufufu.com/contact/">お問い合わせ</a></li>
			</ul>
			<ul class="right">
				<li class="foottitle f_qs">FOLLOW</li>
				<li class="snsbtn">
					<a href="https://www.instagram.com/ufufudoughnuchu/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/snsbtn_insta.svg" width="44" height="46" alt="Instagram"></a>
					<a href="https://twitter.com/ufufudoughnuchu" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/snsbtn_twitter.svg" width="48" height="42" alt="Twitter"></a>
					<a href="https://www.facebook.com/ufufuufufudoughnuchu/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/snsbtn_facebook.svg" width="30" height="40" alt="Facebook"></a>
				</li>
			</ul>
		</div>
		<div class="footer_sp_wrap">
			<?php if(!is_page('ufufuscone')): ?>
			<a href="https://shop.ufufu-ufufu.com/" target="_blank" class="cmnbtn01 black spw70"><span>オンラインストア</span></a>
			<a href="https://shop.ufufu-ufufu.com/contact/" class="cmnbtn01 spw70"><span>お問い合わせ</span></a>
			<?php endif; ?>
			<img class="footlogo" src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/common/toplogo.svg" width="307" height="277" alt="ウフフドーナチュ">
		</div>
		<ul class="footersnssp">
			<li class="snsbtn">
				<a href="https://www.instagram.com/ufufudoughnuchu/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/snsbtn_insta.svg" width="30" height="31" alt="Instagram"></a>
				<a href="https://twitter.com/ufufudoughnuchu" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/snsbtn_twitter.svg" width="30" height="26" alt="Twitter"></a>
				<a href="https://www.facebook.com/ufufuufufudoughnuchu/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/snsbtn_facebook.svg" width="23" height="30" alt="Facebook"></a>
			</li>
		</ul>
		<p class="copyright f_qs">&copy; UFUFU DOUGHNU-CHU / UFUFU Co., Ltd. All right reserved.</p>
	</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets_uff/slick/slick.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets_uff/drawer/js/iscroll.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets_uff/drawer/js/drawer.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/yarn/dist/bundle.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/js/jquery.inview.min.js"></script>
<script>
$(function(){
	$(".inview").on("inview", function (event, isInView) {
		if (isInView) {
			$(this).stop().addClass("is-show");
		}
	});
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.3/ofi.js"></script>
<script>
	objectFitImages();
	$('.drawer').drawer();
	$('.drawer-nav .dmenu,.drawer-nav .dlist').on('click', function() {
		$('.drawer').drawer('close');
	});
</script>
<?php if ( is_home() || is_front_page() ) : ?>
<script>
	$(function() {
		var imageshover = '<?php echo get_template_directory_uri(); ?>/assets_uff/img/common/icon_arrow_w.svg';
	});
</script>
<?php endif; ?>
<?php if ( is_page('wholesaler') ) : ?>
<script>
    $(slider01).slick({
        autoplay: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 10000,
        dots: false,
	    prevArrow: '<img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/wholesaler/slider_arrow_prev.png" width="68" height="98" class="slide-arrow prev-arrow">',
	    nextArrow: '<img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/wholesaler/slider_arrow_next.png" width="68 height="98" class="slide-arrow next-arrow">',
	    asNavFor: '#slider02'
    });
    $(slider02).slick({
        autoplay: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 10000,
        dots: false,
        slidesToShow: 5,
        focusOnSelect: true,
        asNavFor: '#slider01'
    });
/*
    $(slider03).slick({
        autoplay: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 10000,
        dots: false,
	    prevArrow: '<img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/wholesaler/slider_arrow_prev.png" width="68" height="98" class="slide-arrow prev-arrow">',
	    nextArrow: '<img src="<?php echo get_template_directory_uri(); ?>/assets_uff_b/img/wholesaler/slider_arrow_next.png" width="68 height="98" class="slide-arrow next-arrow">',
	    asNavFor: '#slider04'
    });
    $(slider04).slick({
        autoplay: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 10000,
        dots: false,
        slidesToShow: 5,
        focusOnSelect: true,
        asNavFor: '#slider03'
    });
*/
</script>
<?php elseif ( is_page('karuizawa') ) : ?>
<script>
    $(slider).slick({
        autoplay: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 10000,
        dots: true,
        arrows: false,
    });
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>