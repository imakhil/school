<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'fontawesome' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

//custom post type

function mycustom_posttyp_staff(){

$labels=array(
'name'=>'Staff',
'singular_name'=>'staff',
'add_new'=>'Add Teacher',
'all_items'=>'All Teachers',
'add_new_item'=>'Add Teacher',
'edit_item'=>'Edit Teacher',
'new_item'=>'New Teacher',
'view_item'=>'View Teacher',
'search_item'=>'search staff',
'not_found'=>'No staff found',
'not_found_in_trash'=>'No data found in trash',
'parent_item_colon'=>'Parent Teacher'
);
$args=array(
'labels'=>$labels,
'public'=>true,
'has_archive'=>true,
'publicly_queryable'=>true,
'query_var'=>true,
'rewrite'=>true,
'capability_type'=>'post',
'hierarichal'=>false,
'supports'=>array(
'title',
'thumbnail',
'editor',
'excerpt',
'revisions',
),
'taxonomies'=>array('category','post_tag'),
'menu_position'=>5,
'exclude_form_search'=>false,
);

register_post_type('Staff',$args);

}
add_action('init','mycustom_posttyp_staff');

function learnword_script_enqueue(){


	//wp_enqueue_style('customstyle',get_template_directory_uri().'/css/learnword.css','','','all');


  wp_enqueue_style('bootstrap', site_url() . '/wp-content/themes/education-hub-child/css/bootstrap.min.css', array(), null);

	//wp_enqueue_script('customjs',get_template_directory_uri().'/js/learnword.js','','',true);
}


add_action('wp_enqueue_scripts','learnword_script_enqueue');
