<?php

//アイキャッチ画像
add_theme_support( 'post-thumbnails' );


/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
function pagination( $pages, $paged, $range = 6, $show_only = false ) {

    $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
    $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

    //表示テキスト
    $text_first   = "« 最初へ";
    $text_before  = "‹ 前へ";
    $text_next    = "次へ ›";
    $text_last    = "最後へ »";

    if ( $show_only && $pages === 1 ) {
        // １ページのみで表示設定が true の時
        echo '<div class="pagination"><span class="current pager">1</span></div>';
        return;
    }

    if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合
    if ( 1 !== $pages ) {
        //２ページ以上の時
        if ( $paged > 1 ) {
            // 「前へ」 の表示
            echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">PREV</a>';
        }
        echo '<div class="page">';
        for ( $i = 1; $i <= $pages; $i++ ) {

            if ( $i <= $paged + $range && $i >= $paged - $range ) {
                // $paged +- $range 以内であればページ番号を出力
                if ( $paged === $i ) {
	                echo '<span class="current">', $i ,'</span>';
                } else {
	                echo '<a href="', get_pagenum_link( $i ) ,'">', $i ,'</a>';
                }
            }
        }
        echo '</div>';
        if ( $paged < $pages ) {
            // 「次へ」 の表示
            echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">NEXT</a>';
        }
    }
}

// スマートフォン ｜ タブレットPC を判別
function is_mobile(){
	$useragents = array(
	'iPhone', // iPhone
	'iPod', // iPod touch
	'Android.*Mobile', // 1.5+ Android *** Only mobile
	'Windows.*Phone', // *** Windows Phone
	'dream', // Pre 1.5 Android
	'CUPCAKE', // 1.5+ Android
	'blackberry9500', // Storm
	'blackberry9530', // Storm
	'blackberry9520', // Storm v2
	'blackberry9550', // Storm v2
	'blackberry9800', // Torch
	'webOS', // Palm Pre Experimental
	'incognito', // Other iPhone browser
	'webmate' // Other iPhone browser
);
$pattern = '/'.implode('|', $useragents).'/i';
	return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

// アーカイブページ カテゴリー制限
function twpp_exclude_category( $query ){
	if ( is_admin() || ! $query->is_main_query() ){
		return;
	}
	if ( $query->is_archive() ){
		$query->set( 'category__not_in', array(1, 3) );
	}
}
add_action( 'pre_get_posts', 'twpp_exclude_category' );