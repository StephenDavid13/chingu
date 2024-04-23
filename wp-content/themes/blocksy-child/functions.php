<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

require_once get_stylesheet_directory() . '/how-many-chingu/how-many-chingu.php';


function add_custom_javascript_to_footer() {
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myRange = document.getElementById('myRange');
            var div1 = document.getElementById('div1');
            var div2 = document.getElementById('div2');

            myRange.addEventListener('input', function() {
                var value = parseInt(this.value);

                // Example logic to change CSS of divs based on range input value
                if (value <= 50) {
                    div1.style.backgroundColor = '#ff0000';
                    div2.style.backgroundColor = '#00ff00';
                } else {
                    div1.style.backgroundColor = '#00ff00';
                    div2.style.backgroundColor = '#ff0000';
                }
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'add_custom_javascript_to_footer');

