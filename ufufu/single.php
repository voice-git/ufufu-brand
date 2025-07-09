<?php
if ( in_category('pressrelease') ) {
  get_template_part( 'single-pressrelease' );
}else{
  get_template_part( 'single-everyday' );
}

?>