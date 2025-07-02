$(document).ready(function() {

    $('.tab').hide();
    $('#contact-us-con').show();
    
    $('.button').on('click', function() {
        $('.button').removeClass('active'); 
        $(this).addClass('active');
        
        $('.tab').hide(); 
        
        let targetTab = $(this).data('target');
        $(targetTab).show();
    });

   




});



