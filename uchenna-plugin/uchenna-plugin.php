<?php
   /*
   Plugin Name: Uchenna Plugin
   Plugin URI: http://my-awesomeness-emporium.com
   description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim eum, commodi vel fugiat quod dignissimos ratione facere et molestiae rerum nulla dolores sapiente nam cum. Vitae hic tenetur placeat quas!
  a plugin to create awesomeness and spread joy
   Version: 1.2
   Author: Mr. Awesome
   Author URI: http://mrtotallyawesome.com
   License: GPL2
   */

   if(! defined('ABSPATH')){
       die;
   }

   //My root class for the whole plugin
   class UchennaPlugin{


        function __construct() {
            add_action( 'init', array( $this, 'custom_post_type' ) );
        }

        function activate(){
            // generated a CPT
		        $this->custom_post_type();
             // flush rewrite rules
	    	    flush_rewrite_rules();
         }

        function deactivate(){
             //Flush the rewrite rules
        }

        function uninstall(){
            //delete CPT
            //delete all plugin database data
        }

        function custom_post_type() {
            register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
        }

   }

   //Initialize this class only if it exists
   if(class_exists('UchennaPlugin')){
       $uchennaPlugin = new UchennaPlugin();
   }

   //Activation
    register_activation_hook( __FILE__, array($uchennaPlugin, 'activate'));
   //Deactivation
   register_deactivation_hook( __FILE__, array($uchennaPlugin, 'deactivate') );
   //Uninstall

