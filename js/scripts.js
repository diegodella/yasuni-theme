$(function(){
    $('#news article').not(':first').toggle();
    $('#news article:first').toggleClass('selected');
    $('#news .thumb').click(function(){
        target = $($(this).attr('href'))[0];
        selected = $('#news .selected')[0];
        if (selected.id !== target.id) {
            $(selected).toggle('fade').toggleClass('selected');
         
            $(target).toggle('fade').toggleClass('selected');
        }
        return false;
    })
})
