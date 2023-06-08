window.onload = function(){
$(".pay_menu li").click(function(){
    $(this).css({"border-color":"#ff4628"}).siblings().css({"border-color":""});
    $(".pay_menu div, .pay_menu span").css({"border-color":"#ff4628", opacity:1}).children().css({color:"#000"});
    $(".pay_menu div").css({"border-color":"#ff4628", opacity:1}).children().find("i").css({color:"#ff4628"});
});
}