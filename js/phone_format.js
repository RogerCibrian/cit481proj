$(function () {
    $('.phone').keydown(function(e){
            var key = e.charCode || e.keyCode || 0;
            var $text = $(this);
            if (key !== 8 && key !== 9) {
                    if($text.val().length === 3){
                        $text.val($text.val() + '-');
                    }
                    if($text.val().length === 7){
                        $text.val($text.val() + '-');
                    }
            }
            (key == 8 || key == 9 || key == 46 || (key >= 48 && key <=57) || (key >= 96 && key <= 105));
    })
});