<?php
/*
Plugin Name: Show Post Listings Row Actions
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Shows the row action links ( Edit | Quick Edit | Trash | View ) for every post/page without hovering
Version: 1.0.0
Author: Scott Pinkelman
Author URI: http://scottpinkelman.com
License: A "Slug" license name e.g. GPL2
*/

// Prevent this file from being accessed directly.
if ( ! defined( 'WPINC' ) ) {
	die;
}

class PostListingsRowActions {

	/*
	 * Hook into admin_enqueue_scripts
	 */
	function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'register_assets' ) );
        add_filter( 'post_row_actions', array( $this, 'add_quicklinks_link'), 10, 2);
        add_filter( 'page_row_actions', array( $this, 'add_quicklinks_link'), 10, 2);
	}

	/*
	 * Register and enqueue row actions stylesheet
	 */
	public function register_assets() {
		wp_register_style( 'row-actions', plugin_dir_url( __FILE__ ) . 'styles/row-actions.css', false, 1.0 );
        wp_register_script( 'row-actions', plugin_dir_url( __FILE__ ) . 'assets/js/row-actions.js', array('jquery'), 1.0, true );
		wp_enqueue_style('row-actions');
        wp_enqueue_script('row-actions');
	}

	public function add_quicklinks_link ( $actions ) {
	    $new_actions = array(
	        'show-actions-trigger' => '<a href="#">Show Actions</a>',
        );
	    foreach ($actions as $class => $action_name) {
	        $class .= ' hide-row-actions';
	        $new_actions[$class] = $action_name;
        }

        return $new_actions;
	}

}

new PostListingsRowActions();