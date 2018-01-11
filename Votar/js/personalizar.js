$(document).ready(function(){
    $('.img-thumbnail').hover(
        function() {
            $(this).find('.caption').fadeIn(250);
        },
        function() {
            $(this).find('.caption').fadeOut(450);
        }
    )
});