<?php 
/**
 * Plugin Name: Operator Plugin
 * Author: JeremT8
 */
add_action('init', function() {
	register_post_type('operator', [
		'label' => __('operator', 'operator'),
		'menu_icon' => 'dashicons-superhero',
		'labels' => [
		'name'                     => __('Operator', 'operator'),
        'singular_name'            => __('Operator', 'operator'),
        'edit_item'                => __('Edit Operator', 'operator'),
        'new_item'                 => __('New Operator', 'operator'),
        'view_item'                => __('View Operator', 'operator'),
        'view_items'               => __('View Operators', 'operator'),
        'search_items'             => __('Search Operators', 'operator'),
        'not_found'                => __('No Operators found.', 'operator'),
        'not_found_in_trash'       		=> __('No Operators found in Trash', 'operator'),
        'all_items'                => __('All Operators', 'operator'),
        'archives'                 => __('Operator archive', 'operator'),
        'attributes'               => __('Operator attributes', 'operator'),
        'insert_into_item'         => __('Insert into Operator', 'operator'),
        'uploaded_to_this_item'    => __('Upload to this Operator', 'operator'),
        'filter_items_list'        => __('Filter Operators list', 'operator'),
        'items_list_navigation'    => __('Operators list navigation', 'operator'),
        'items_list'               => __('Operators list', 'operator'),
        'item_published'           => __('Operator published.', 'operator'),
        'item_published_privately' => __('Operator published privately.', 'operator'),
        'item_reverted_to_draft'   => __('Operator reverted to draft.', 'operator'),
        'item_scheduled'           => __('Operator scheduled.', 'operator'),
        'item_updated'             => __('Operator updated.', 'operator'),
		],
        'show-in-rest' => true,
        'has_archive' => true,
		'public' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'taxonomies' => ['operator_type', 'operator_arme'],
		'supports' => ['title', 'editor', 'thumbnail']

	]);
	register_taxonomy('operator_type', 'operator', [
		'meta_box_cb' => 'post_categories_meta_box',
		'labels' => [
		'name'                       => __( 'Types', 'operator' ),
        'singular_name'              => __( 'Type', 'operator' ),
        'search_items'               => __( 'Search Types', 'operator' ),
        'popular_items'              => __( 'Popular Types', 'operator' ),
        'all_items'                  => __( 'All Types', 'operator' ),
        'parent_item'                => __( 'Parent Category', 'operator' ),
        'parent_item_colon'          => __( 'Parent Category:', 'operator' ),
        'edit_item'                  => __( 'Edit Type', 'operator' ),
        'view_item'                  => __( 'View Type', 'operator' ),
        'update_item'                => __( 'Update Type', 'operator' ),
        'add_new_item'               => __( 'Add New Type', 'operator' ),
        'new_item_name'              => __( 'New Type Name', 'operator' ),
        'separate_items_with_commas' => __( 'Separate Types with commas', 'operator' ),
        'add_or_remove_items'        => __( 'Add or remove Types', 'operator' ),
        'choose_from_most_used'      => __( 'Choose from the most used Types', 'operator' ),
        'not_found'                  => __( 'No Types found.', 'operator' ),
        'no_terms'                   => __( 'No Types', 'operator' ),
        'items_list_navigation'      => __( 'Types list navigation', 'operator' ),
        'items_list'                 => __( 'Types list', 'operator' ),
        'most_used'                  => __( 'Most used', 'operator' ),
        'back_to_items'              => __( '&larr; Back to Types', 'operator' ),
        ],
        'rewrite' => true,
	]);

    register_taxonomy('operator_arme', 'operator', [
		'meta_box_cb' => 'post_categories_meta_box',
		'labels' => [
		'name'                       => __( 'Armes', 'operator' ),
        'singular_name'              => __( 'Arme', 'operator' ),
        'search_items'               => __( 'Search armes', 'operator' ),
        'popular_items'              => __( 'Popular armes', 'operator' ),
        'all_items'                  => __( 'All armes', 'operator' ),
        'parent_item'                => __( 'Parent Category', 'operator' ),
        'parent_item_colon'          => __( 'Parent Category:', 'operator' ),
        'edit_item'                  => __( 'Edit arme', 'operator' ),
        'view_item'                  => __( 'View arme', 'operator' ),
        'update_item'                => __( 'Update arme', 'operator' ),
        'add_new_item'               => __( 'Add New arme', 'operator' ),
        'new_item_name'              => __( 'New arme Name', 'operator' ),
        'separate_items_with_commas' => __( 'Separate armes with commas', 'operator' ),
        'add_or_remove_items'        => __( 'Add or remove armes', 'operator' ),
        'choose_from_most_used'      => __( 'Choose from the most used armes', 'operator' ),
        'not_found'                  => __( 'No armes found.', 'operator' ),
        'no_terms'                   => __( 'No armes', 'operator' ),
        'items_list_navigation'      => __( 'armes list navigation', 'operator' ),
        'items_list'                 => __( 'armes list', 'operator' ),
        'most_used'                  => __( 'Most used', 'operator' ),
        'back_to_items'              => __( '&larr; Back to armes', 'operator' ),
        ],
	]);
	
});

register_activation_hook(__FILE__, 'flush_rewrite_rules');
register_deactivation_hook(__FILE__, 'flush_rewrite_rules');

/**
 * @param WP_Post | int|null $post 
 */

