<?php

//add scripts
function ca_add_script_n_style()
{
    wp_enqueue_style('ca-main-style', plugins_url().'/facebook-footer-link/css/ca_style.css');
    wp_enqueue_script('ca-main-script', plugins_url().'/facebook-footer-link/js/ca_main.js');
}

add_action('wp_enqueue_scripts', 'ca_add_script_n_style');