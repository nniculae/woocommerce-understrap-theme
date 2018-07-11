(function ($) {
    $(function () {
        $('#search-icon').on('click', function (e) {
            e.stopPropagation();
            e.preventDefault();
            console.log(this);
            
            $(this).parent().toggleClass('active');
        });
    });
})(jQuery);