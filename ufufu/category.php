<?php
if ( in_category('pressrelease') ) {
  get_template_part( 'category-pressrelease' );
}else{
  get_template_part( 'category-everyday' );
}

?>