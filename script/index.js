$(document).ready(function() {
    $('.tab').hide();
    $('#home').show();
    
    $('.button').on('click', function() {
        $('.button').removeClass('active'); 
        $(this).addClass('active');
        
        $('.tab').hide(); 
        
        let targetTab = $(this).data('target');
        $(targetTab).show();
    });

    $('.container').on('click', function (e) {
        e.stopPropagation();
        $(this).addClass('active').hide();
        $('#main-nav').show();

        if($('.container').hasClass('active')){
            $(document).on('click', function (e) {
                if (!$(e.target).closest('.container, #main-nav').length) {
                    $('#main-nav').hide();
                    $('.container').show().removeClass('active');
                }
            });
        }
    });
});
