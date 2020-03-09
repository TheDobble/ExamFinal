
<?php
/**
 * The template for displaying front page
 *
 * @package Astral
 * @since 0.1
 */
get_header();
if ( get_option( 'show_on_front' ) == 'page' ) {
	$astral_frontpage_show = get_theme_mod( 'astral_frontpage_show' );
	if ( $astral_frontpage_show ) {
		get_template_part( 'content', 'frontpage' );
	} else {
		get_template_part( 'index' );
	}
} else {
	get_template_part( 'index' );
}

echo "<nav><ul class='menu_container'>";

    echo "<li><a class='menu' href='http://127.0.0.1/2020-veille/wordpress/category/atelier/'>Ateliers</a></li>";
    echo "<li><a class='menu' href='http://127.0.0.1/2020-veille/wordpress/category/nouvelle/'>Nouvelles</a></li>";
    echo "<li><a class='menu' href='http://127.0.0.1/2020-veille/wordpress/category/cours/'>Cours</a></li>";
echo "</nav></ul>";

$args = array(
    "category_name" => "atelier",
    "posts_per_page" => -1,
    "orderby" => "title",
    "order" => "asc"
    
);
$query1 = new WP_Query( $args );
 
 echo "<h2>" . category_description(get_category_by_slug('atelier')) . "</h2>";

echo "<ol>"; 
while ( $query1->have_posts() ) {
    $query1->the_post();
    echo "<li><p>" . get_the_title()."____<span style='color:red'>".get_post_field("post_name")."</span> <span style='color:blue'>___".get_the_author_meta( 'display_name', $post->post_author ). "</span></p></li>";


}
echo "</ol>";

wp_reset_postdata();

echo "<div class='wrapper'>";
$args02 = array(
    "category_name" => "atelier",
    "posts_per_page" => -1,
    "orderby" => "title",
    "order" => "asc", 

);
$query2 = new WP_Query( $args02 );
while ( $query2->have_posts() ) {
    $query2->the_post();
    echo "<div class='heure08'>";  
    echo "<p>".get_the_title()."</p>";
    echo "<p>".get_post_field("post_name")."</p>";//.get_the_author_meta( 'display_name', $post->post_author ). "</p></li>";
    echo "</div>";
}

echo "</div>";

?>