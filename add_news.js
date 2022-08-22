$(function(){
    $('#showmore-button').click(function (){
        var $target = $(this);
        var page = $target.attr('data-page');
        page++;

        $.ajax({
            url: '/ajax.php?page=' + page,
            dataType: 'html',
            success: function(data){
                $('#showmore-list').append(data);
            }
        });

        $target.attr('data-page', page);
        if (page ==  $target.attr('data-max')) {
            $target.hide();
        }

        return false;
    });
});
