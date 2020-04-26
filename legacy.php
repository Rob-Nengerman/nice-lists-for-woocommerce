<?php 

$orderby = 'name';
$order = 'asc';
$hide_empty = true ;
$cat_args = array(
    'orderby'    => $orderby,
    'order'      => $order,
    'hide_empty' => $hide_empty,
);
 
$product_categories = get_terms( 'product_cat', $cat_args );
 
if( !empty($product_categories) ){
    foreach ($product_categories as $key => $category) {

		if($category->count >= 75){
			echo '<a href="'.get_term_link($category).'">';
			echo '<div class="tag-link-store gold-tag">';
			echo '<i class="fas fa-tags"></i>'.$category->name.' <i>('.$category->count.')</i>';
			echo '</div>';
			echo '</a>';			
		} else {
			echo '<a href="'.get_term_link($category).'">';
			echo '<div class="tag-link-store">';
			echo '<i class="fas fa-tags"></i>'.$category->name.' <i>('.$category->count.')</i>';
			echo '</div>';
			echo '</a>';
		}
    }
}

$product_tags = get_terms( 'product_tag', $cat_args );
 
if( !empty($product_tags) ){
    foreach ($product_tags as $tag) {
		if($tag->count >= 75) {	
			echo '<a href="'.get_term_link($tag).'">';
			echo '<div class="tag-link-store gold-tag">';
			echo '<i class="fas fa-tags"></i>'.$tag->name.' <i>('.$tag->count.')</i>';
			echo '</div>';
			echo '</a>';
		} else {
			echo '<a href="'.get_term_link($tag).'">';
			echo '<div class="tag-link-store">';
			echo '<i class="fas fa-tags"></i>'.$tag->name.' <i>('.$tag->count.')</i>';
			echo '</div>';
			echo '</a>';	
		}

    }
} 

?>