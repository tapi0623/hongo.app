$(function() {
    $('.accordion-content').hide();
    $('.accordion-click').click(function() {
        $(this).next().slideToggle("fast");
    });
});