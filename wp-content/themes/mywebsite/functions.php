<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function MyWebSite_script()
{
    wp_enqueue_style('customestyle',get_template_directory().'/css/mywebsite.css','array()','1.0.0','all');
    //wp_enqueue_scripts('customjs','get_template_directory()./js/mywensite.js','array()','1.0.0',true);
    
    
}
add_action('wp_enqueue_scripts','MyWebSite_script');
?>