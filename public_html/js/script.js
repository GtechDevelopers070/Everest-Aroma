
//this is the part of contactUs (ayush ghimire starts)
$(function () { //after email click, black window come up from bottom
    $(".buttonCircle").click(function () {
        $('#emailUs').css("height", "75vh");
        $(".emailHolder").css("opacity", "1");
        $('.buttonCircle').hide();
    });
    
    $(".removeIcon").click(function () {
        $('#emailUs').css("height", "0vh");
        $(".emailHolder").css("opacity", "0");
        $('.buttonCircle').show();
    });

});


$(function () {
    $(".processCircle").hover(
            function () {
                $(this).find(".processStep").css('display','none');
                $(this).find(".specificWriting").css('display','block');

            },
            function () {
                  $(this).find(".specificWriting").css('display','none');
                  $(this).find(".processStep").css('display','block');
            })
});
//end of contact us part (ayush ghimire stops)//


