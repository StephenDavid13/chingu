jQuery(document).ready(function($) {
    $('#myRange').on('input', function() {
        let value = $(this).val();

        console.log(value);

        // Example logic to change CSS of divs based on range input value
        if (value <= 50) {
            
            $('#div1').css('background-color', '#ff0000');
            $('#div2').css('background-color', '#00ff00');
        } else {
            $('#div1').css('background-color', '#00ff00');
            $('#div2').css('background-color', '#ff0000');
        }
    });
});
