<?php 
add_action( 'init', 'custom_post_type_offers', 0 );
add_action( 'init', 'custom_post_type_holiday', 0 );
add_action( 'init', 'custom_post_type_property', 0 );
add_action( 'init', 'custom_post_type_intproperty', 0 );

// ====== Special Offers
function custom_post_type_offers() {

    $labels = array(
        'name'                => _x( 'Special Offer', 'Post Type General Name'),
        'singular_name'       => _x( 'Special Offer',  'Post Type Singular Name'),
        'menu_name'           => __( 'Special Offers'),
        'parent_item_colon'   => __( 'Parent Safari'),
        'all_items'           => __( 'All Offers'),
        'view_item'           => __( 'View Offers'),
        'add_new_item'        => __( 'Add New Special Offer'),
        'add_new'             => __( 'Add Special Offer' ),
        'edit_item'           => __( 'Edit Special Offer' ),
        'update_item'         => __( 'Update Special Offer' ),
        'search_items'        => __( 'Search Special Offers' ),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash')
    );

    $args = array(
        'label'               => __( 'offer' ),
        'description'         => __( 'offer'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'taxonomies', 'thumbnail', 'page-attributes' ),
        'menu_icon'           => 'dashicons-tickets-alt',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );

    register_post_type( 'offer', $args );
}
// ====== Holidays
function custom_post_type_holiday() {

    $labels = array(
        'name'                => _x( 'Holiday', 'Post Type General Name' ),
        'singular_name'       => _x( 'Holiday',  'Post Type Singular Name' ),
        'menu_name'           => __( 'Holidays' ),
        'parent_item_colon'   => __( 'Parent Holiday'),
        'all_items'           => __( 'All Holidays' ),
        'view_item'           => __( 'View Holiday' ),
        'add_new_item'        => __( 'Add New Holiday' ),
        'add_new'             => __( 'Add Holiday' ),
        'edit_item'           => __( 'Edit Holiday' ),
        'update_item'         => __( 'Update Holiday' ),
        'search_items'        => __( 'Search Holiday' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' )
    );

    $args = array(
        'label'               => __( 'holiday' ),
        'description'         => __( 'holiday' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'taxonomies', 'thumbnail' ),
        'menu_icon'           => 'dashicons-airplane',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );

    register_post_type( 'holiday', $args );
}
// ====== Properties
function custom_post_type_property() {

    $labels = array(
        'name'                => _x( 'Property', 'Post Type General Name'),
        'singular_name'       => _x( 'Property',  'Post Type Singular Name'),
        'menu_name'           => __( 'Properties'),
        'parent_item_colon'   => __( 'Parent Property'),
        'all_items'           => __( 'All Properties'),
        'view_item'           => __( 'View Property'),
        'add_new_item'        => __( 'Add New Property'),
        'add_new'             => __( 'Add Property' ),
        'edit_item'           => __( 'Edit Property' ),
        'update_item'         => __( 'Update Property' ),
        'search_items'        => __( 'Search Properties' ),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash')
    );

    $args = array(
        'label'               => __( 'property' ),
        'description'         => __( 'property'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'taxonomies', 'thumbnail' ),
        'menu_icon'           => 'dashicons-admin-multisite',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );

    register_post_type( 'property', $args );
}
add_action( 'init', 'taxonomy_location', 0 );
add_action( 'init', 'taxonomy_facility', 0 );

// ====== International Property
function custom_post_type_intproperty() {

    $labels = array(
        'name'                => _x( 'International Property', 'Post Type General Name'),
        'singular_name'       => _x( 'International Property',  'Post Type Singular Name'),
        'menu_name'           => __( 'International Properties'),
        'parent_item_colon'   => __( 'International Property'),
        'all_items'           => __( 'All International Properties'),
        'view_item'           => __( 'View International Property'),
        'add_new_item'        => __( 'Add New International Property'),
        'add_new'             => __( 'Add International Property' ),
        'edit_item'           => __( 'Edit International Property' ),
        'update_item'         => __( 'Update International Property' ),
        'search_items'        => __( 'Search International Property' ),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash')
    );

    $args = array(
        'label'               => __( 'intproperty' ),
        'description'         => __( 'intproperty'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'taxonomies', 'thumbnail', 'page-attributes' ),
        'menu_icon'           => 'dashicons-admin-site-alt3',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );

    register_post_type( 'intproperty', $args );
}

// ====== Type Location
function taxonomy_location() {

    $labels = array(
        'name'              => _x( 'Location', 'taxonomy general name' ),
        'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Locations'   ),
        'all_items'         => __( 'All Locations'     ),
        'parent_item'       => __( 'Parent Location'   ),
        'parent_item_colon' => __( 'Parent Location:'  ),
        'edit_item'         => __( 'Edit Location'     ),
        'update_item'       => __( 'Update Location'   ),
        'add_new_item'      => __( 'Add New Location'  ),
        'new_item_name'     => __( 'New Location' ),
        'menu_name'         => __( 'Locations'         )
    );

    register_taxonomy( 'location', array( 'offer' , 'holiday' , 'property', 'intproperty' ), array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'location', 'hierarchical' => true )
    ));
}
// ====== Type Facility
function taxonomy_facility() {

    $labels = array(
        'name'              => _x( 'Facility', 'taxonomy general name' ),
        'singular_name'     => _x( 'Facility', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Facilities'   ),
        'all_items'         => __( 'All Facilities'     ),
        'parent_item'       => __( 'Parent Facility'   ),
        'parent_item_colon' => __( 'Parent Facility:'  ),
        'edit_item'         => __( 'Edit Facility'     ),
        'update_item'       => __( 'Update Facility'   ),
        'add_new_item'      => __( 'Add New Facility'  ),
        'new_item_name'     => __( 'New Facility' ),
        'menu_name'         => __( 'Facilities'         )
    );

    register_taxonomy( 'facility', array( 'property', 'intproperty' ), array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'facility', 'hierarchical' => true )
    ));
}