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

    if (matchMedia("screen and (max-width: 768px)").matches) {
        $(".select_menu ul li").eq(0).attr("location.href", "../locker_a/locker_a_mo.php");
      }


}