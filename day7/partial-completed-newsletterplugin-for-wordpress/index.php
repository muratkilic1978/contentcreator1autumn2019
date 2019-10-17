<?php
/*
* Plugin Name: WordPress Newsletter
* Plugin URI: https://kilic.dk/basicwordpress/
* Description: This is a WordPress Newsletter based on HTML5, CSS, JS and PHP
* Version: 1.5.6
* Author: Murat Kilic
* Author URI: https://kilic.dk/basicwordpress/
* License: GPL2 
*/


function newsletterform()
{

    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<div class="login-face">';
    $content .= '<img src=" '.plugins_url("newsletterplugin/img/bog-billede.png").' " ';
    $content .= 'alt="login-face"></div>';
    $content .= '<div id="promotion-header">';
    $content .= '<h1 id="promotion-header-title">STRONG AND FIT IN <span>2019</span></h1></div>';
    $content .= '<section class="form">';
    $content .= '<form action="#">';
    $content .= '<div id="promotion-body">';
    $content .= '<p id="promotion-body-text">Sign up for our Newsletter and learn to get fit at home with 5 Effective Low-Impact Workouts!</p>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="text" id="username" placeholder="John Mckinsey" name="username" required><i class="fa fa-user fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="mckinsey@hotmail.com" name="email" required><i class="fa fa-envelope fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitBtn" name="submitBtn" value="Subscribe Newsletter!">';
    $content .= '</div>';
    $content .= '<div id="promotion-footer">';
    $content .= '<p id="promotion-footer-text">Yes, I would like to receive I FORM\'s newsletter with exciting articles as well as marketing about I FORM via e-mail. You can unsubscribe at any time. Read more!</p>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
    
}
    
    
}

?>
    
    
    
    

