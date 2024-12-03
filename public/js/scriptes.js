$(document).ready(function() {
    const slider = $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager'
    });
    slider.startAuto();

    // Add a click effect on the buttons
    $('.button').on('click', function() {
        $(this).css('transform', 'scale(0.95)');
        setTimeout(() => {
            $(this).css('transform', 'scale(1)');
        }, 100);
    });
});
