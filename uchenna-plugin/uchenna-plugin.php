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


        function activate(){
            echo "Plugin activated";
        }

        function deactivate(){
            echo "Plugin deactivated";
        }

        function uninstall(){
            
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

