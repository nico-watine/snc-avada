<?php
// Following is controlled by front-end Avada Global Options

// Don't load Emoji scripts
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'print_emoji_detection_script', 7);
