jQuery(function($){
    $(window).scroll(function(){
        var bottomOffset = 2000; // отступ от нижней границы сайта, до которого должен доскроллить пользователь, чтобы подгрузились новые посты
        var data = {
            'action': 'loadmore',
            'query': true_posts,
            'page' : current_page
        };
        if( $(document).scrollTop() > ($(document).height() - bottomOffset) && !$('body > .preloader').hasClass('is-show')){
            $.ajax({
                url:ajaxurl,
                data:data,
                type:'POST',
                beforeSend: function( xhr){
                    $('body > .preloader').addClass('is-show');
                },
                success:function(data){
                    if( data ) {
                        $('#true_loadmore').before(data);
                        $('body > .preloader').removeClass('is-show');
                        current_page++;
                    }
                }
            });
        }
    });
});