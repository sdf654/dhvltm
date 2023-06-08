window.onload = function(){
    // 선택시 색상변경
    $(".content input").click(function(){
        $(this).parent().css({"border-color" : "#ff4628"});
    });

    $(".content_mobile input").click(function(){
        $(this).css({"border-color" : "#ff4628"});
    });

    $(".content .excess_charge").click(function(){
        $(this).parent().css({opacity:0});
        $(".input_text, .main_btn").css({"border-color":"#ff4628", opacity:1});
        $(".main_btn").children().css({color:"#000"});
    });

    $(".content_mobile .excess_charge").click(function(){
        $(".content_mobile > div").css({opacity:1});
        $(this).parent().css({opacity:0});
        $(".input_text, .main_btn").css({"border-color":"#ff4628", opacity:1});
        $(".main_btn").children().css({color:"#000", "border-color":"#ff4628"});
        $(".main_btn").children().find("i").css({color:"#000"});
    });
}