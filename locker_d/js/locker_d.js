window.onload = function(){
    // 선택시 색상변경
    $(".select_wrap > div").click(function(){
        $(this).css({"border-color":"#ff4628", background : "#fff"}).children("i").css({color:"#ff4628"}).siblings().css({color:"#000"});
        $(this).siblings().css({"border-color":"", background : ""}).children("i").css({color:""}).siblings().css({color:""});
    });

    $(".select_menu").click(function(){
        $(".select_menu li").css({"border-bottom":"0.5px solid #ff4628"});
        $(this).children("ul").slideToggle();
    });

    $(".main_img li").click(function(){
        $(this).css({background:"#ff4628"}).siblings().css({background:""}).parents().siblings().find("li").css({background:""});
        $(".select_locker").css({background:"#dcdcdc"});
        $(".hide_text").css({opacity:1});
        $(".main_btn").css({"border-color":"#ff4628", opacity:1});
        $(".main_btn i").css({color:"#ff4628"});
        $(".main_btn span").css({color:"#000"});
    });

     // 축소화면 이동
     $(".preview .fa-arrow-right").click(function(){
        $(".preview div").animate({left:"50%"}, function(){
            $(".preview .fa-arrow-left").addClass("locker_on");
            $(".preview .fa-arrow-right").removeClass("locker_on");
            $(".main_img").scrollLeft(768);
        });
    });

    $(".preview .fa-arrow-left").click(function(){
        $(".preview div").animate({left:"25%"}, function(){
            $(".preview .fa-arrow-right").addClass("locker_on");
            $(".preview .fa-arrow-left").removeClass("locker_on");
            $(".main_img").scrollLeft(0);
        });
    });

}