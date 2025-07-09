<?php if(get_field('商品03', 10)): ?>
	<?php if( get_field('商品03', 10)['写真']){ $imgid = get_field('商品03', 10)['写真'];$img = wp_get_attachment_image_src( $imgid , 'full' ); ?>
	<div class="imgwrap" style="background-image: url(<?php echo $img[0]; ?>);background-position: center center;background-size: cover;"></div>
	<?php }else{ ?>
	<div class="imgwrap" style="background-image: url(https://ufufu-ufufu.com/wufufu/wp-content/themes/ufufu/assets_uff/img/news/noimage.jpg);background-position: center center;background-size: cover;"></div>
	<?php } ?>
	<p class="text"><?php echo get_field('商品03', 10)['商品名'] ?></p>
	<p class="price">¥<?php echo get_field('商品03', 10)['価格'] ?></p>
<?php endif; ?>


