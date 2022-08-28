$(function(){
    $('#showmore-works-button').click(function (){
        let $target = $(this);
        let page = $target.attr('data-page');
        page++;

        $.ajax({
            url: 'ajax/ajaxAddWorks.php?page=' + page,
            dataType: 'html',
            success: function(data){
                $('#showMoreWorks-list').append(data);
            }
        });

        $target.attr('data-page', page);
        if (page ==  $target.attr('data-max')) {
            $target.hide();
        }
        return false;
    });
});
