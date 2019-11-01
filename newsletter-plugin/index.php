<?php
/*
* Plugin Name: Newsletter Plugin
* Plugin URI: http://plamena.dk/cheers/
* Description: A pop-up subscribe form plugin
* Version: 0.6.0
* Author: Cheers
* Author: http://plamena.dk/cheers/
* License: GPL2
*/

function newsletter_form()
{

     $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<div class="login-face">';
    $content .= '<img src=" '.plugins_url("newsletter-plugin/img/logo-circle.png").' " ';
    $content .= 'alt="login-face"></div>';
    $content .= '<div id="promotion-header">';
    $content .= '<h1 id="promotion-header-title">STAY ON BOARD</h1></div>';
    $content .= '<section class="form">';
    $content .= '<form action="#">';
    $content .= '<div id="promotion-body">';
    $content .= '<p id="promotion-body-text">Click the SUBSCRIBE button to get all the best events and news from Cheers!</p>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="text" id="username" placeholder="Name" name="username" required><i class="fa fa-user fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="E-mail" name="email" required><i class="fa fa-envelope fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="City" name="city" required><i class="fa fa-home fa-1x"></i>'; 
    $content .= '</div>';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitBtn" name="submitBtn" value="Subscribe">';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
    
}

    add_shortcode('show_newsletter','newsletter_form');

    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        
        wp_enqueue_style('CustomFontKanit','https://fonts.googleapis.com/css?family=Kanit:900&display=swap');
        
        wp_enqueue_style('CustomFontKanit2', 'https://fonts.googleapis.com/css?family=Kanit&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('newsletter-plugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('newsletter-plugin/js/script.js'), array('jquery'), null, true);
    }













