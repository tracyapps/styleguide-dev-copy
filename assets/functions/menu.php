<?php
// Register menus
register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu', 'start' ),
		// Main nav in header
		'style-side-nav' => __( 'The Styleguide Side Menu', 'start' ),
		// Side nav for style pages
		'footer-links' => __( 'Footer Links', 'start' )
		// Secondary nav in footer
	)
);

// The Top Menu
function start_top_nav() {
	wp_nav_menu( array(
		'container' => false,
		// Remove nav container
		'menu_class' => 'vertical medium-horizontal menu',
		// Adding custom nav class
		//'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown" data-close-on-click-inside="false">%3$s</ul>',
		'items_wrap'	=> '%3$s',
		'theme_location' => 'main-nav',
		// Where it's located in the theme
		'depth' => 5,
		// Limit the depth of the nav
		'fallback_cb' => false,
		// Fallback function (see below)
		//'walker' => new Sidebar_Menu_Walker()
	) );
}

// The Side Menu
function start_side_nav() {
	wp_nav_menu( array(
		'container' => false,
		// Remove nav container
		//'menu_class' => 'page-tree',
		// Adding custom nav class
		//'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown" data-close-on-click-inside="false">%3$s</ul>',
		'items_wrap'	=> '%3$s',
		'theme_location' => 'style-side-nav',
		// Where it's located in the theme
		'depth' => 5,
		// Limit the depth of the nav
		'fallback_cb' => false,
		// Fallback function (see below)
		'walker' => new Start_Walker_Nav_Menu()
	) );
}

// Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
class Topbar_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"menu\">\n";
	}
}

class Sidebar_Menu_Walker extends Walker_Nav_Menu {
	function start_el( &$output, $item, $depth=0, $args=array(), $id = 0 ) {
		$output .= sprintf(
			"\n<li><a href='%s'%s> <span>%s</span></a></li>\n",
			$item->url,
			( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
			$item->title
		);
	}
}

class Page_Tree_Menu_Walker extends Walker_Nav_Menu {
	function start_el( &$output, $item, $depth=0, $args=array(), $id = 0 ) {
		$output .= sprintf(
			"\n<li><a data-toggle='collapse' href='%s'%s> <span>%s</span></a></li>\n",
			$item->url,
			( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
			$item->title
		);
	}
}


// The Footer Menu
function start_footer_links() {
	wp_nav_menu( array(
		'container' => 'false',
		// Remove nav container
		'menu' => __( 'Footer Links', 'start' ),
		// Nav name
		'menu_class' => 'menu',
		// Adding custom nav class
		'theme_location' => 'footer-links',
		// Where it's located in the theme
		'depth' => 0,
		// Limit the depth of the nav
		'fallback_cb' => ''
		// Fallback function
	) );
} /* End Footer Menu */

// Header Fallback Menu
function start_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
		'menu_class' => '',
		// Adding custom nav class
		'include' => '',
		'exclude' => '',
		'echo' => true,
		'link_before' => '',
		// Before each link
		'link_after' => ''
		// After each link
	) );
}

// Footer Fallback Menu
function start_footer_links_fallback() {
	/* You can put a default here if you like */
}

// Add Foundation active class to menu
function required_active_nav_class( $classes, $item ) {
	if ( $item->current == 1 || $item->current_item_ancestor == true ) {
		$classes[] = 'active';
	}
	return $classes;
}

add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );

// Add the category class to nav items
function start_add_category_nav_class( $classes, $item ){
	if( 'category' == $item->object ){
		$classes[] = 'menu-category-' . $item->object_id;
		if( in_category( $item->object_id ) || is_category( $item->object_id ) ) {
			$classes[] = ' active_category';
		}
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'start_add_category_nav_class', 10, 2 );