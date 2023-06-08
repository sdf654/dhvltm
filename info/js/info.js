window.onload = function(){
    // 선택시 색상변경
    $(".info_wrap tr input, .phone_info_wrap input").click(function(){
        $(this).css({"border-color":"#ff4628", background : "#fff"});
        $(this).parents("tr").siblings().find("input, div").css({"border-color":"", background : ""});
        $(this).parents().siblings().find("input,div").css({"border-color":"", background : ""});
    });

    $(".mail_wrap").click(function(){
        $(this).children("div, input").css({"border-color":"#ff4628", background : "#fff"});
        $(".mail_wrap li").css({"border-bottom":"0.5px solid #ff4628"});
        $(this).find("ul").slideToggle();
    });

    $(".mail_box").click(function(){
        $(this).children("div, input").css({"border-color":"#ff4628", background : "#fff"});
        $(".mail_box li").css({"border-bottom":"0.5px solid #ff4628"});
        $(this).find("ul").slideToggle();
    });

}