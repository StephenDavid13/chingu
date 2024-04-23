<?php
function how_many_chingus_shortcode() {
    ob_start(); ?>
    <div>
        <input type="range" id="chinguRange" min="1" max="100" value="50">
    </div>
    <div id="div1" style="background-color: #ff0000; width: 100px; height: 100px;">Div 1</div>
    <div id="div2" style="background-color: #00ff00; width: 100px; height: 100px;">Div 2</div>
    <?php
    $output = ob_get_clean();
    return $output;
}
add_shortcode('how_many_chingus', 'how_many_chingus_shortcode');
