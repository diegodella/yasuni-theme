$(function(){
    $('#news article').not(':first').toggle();
    $('#news .thumb:first').parent().toggleClass('active');
    $('#news article:first').toggleClass('selected');
    $('#news .thumb').click(function(){
        active = $('.active').parent()[0];
        
        if (active !== $(this)) {
            $('.active').toggleClass('active');
            $(this).parent().toggleClass('active');
        };
        target = $($(this).attr('href'))[0];
        selected = $('#news .selected')[0];
        if (selected.id !== target.id) {
            $(selected).toggle('fade').toggleClass('selected');
         
            $(target).toggle('fade').toggleClass('selected');
        }
        return false;
    })
})
