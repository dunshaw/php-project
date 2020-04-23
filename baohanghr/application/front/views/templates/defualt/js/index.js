// 导航区域nav_li_active切换
$(function () {
    var lis = $('#nav_a li a');
    // console.log(lis);
    lis.click(function () {
        lis.removeClass();
    });
})
// // 导航hover切换效果
// $(function () {
//     var lis = $('#nav_a li');
//     var nav_2 = $('.nav_2');
//     var uls =  $('.nav_list_2')
//     for(var i=0;i<lis.length;i++){
//         lis[i].onmouseover = function () {
//             lis[i].index = i;
//             console.log(i)
//             for(var k=0;k<lis.length;k++){
//                 uls[k].className = "nav_list_2";
//             }
//             if(i==0||i==3||i==6||i==7||i==8){
//                 return false ;
//             }else {
//                 nav_2.addClass('on');
//                 uls.eq(i).addClass('show');
//             }
//         }
//         lis[i].onmouseleave = function () {
//             nav_2.removeClass('on');
//         }
//     }
//
//     for(var i=0;i<nav_2.length;i++){
//         nav_2[i].onmouseleave = function () {
//             nav_2.removeClass('on');
//         }
//     }
//     for(var i=0;i<nav_2.length;i++){
//         nav_2[i].onmouseover = function () {
//             nav_2.addClass('on');
//         }
//     }
//     var bh_nav = $('.bh_nav');
//     for(var i=0;i<nav_2.length;i++){
//         bh_nav[i].onmouseleave = function () {
//             nav_2.removeClass('on');
//         }
//     }
// })


// 导航hover切换效果
$(function () {
    var lis = $('#nav_a li');
    var nav_2 = $('.nav_2');
    var uls =  $('.nav_list_2')
    for(var i=0;i<lis.length;i++){
        lis[i].onmouseover = function () {
            var i = lis.index(this)  //jquery 获取当前元素索引号
            // lis.eq(i).index = i;
            // console.log(i)
            // console.log(lis.eq(i))
            console.log(i)
            for(var k=0;k<lis.length;k++){
                uls[k].className = "nav_list_2";
            }
            if(i==0||i==3||i==6||i==7||i==8){
                return false ;
            }else {
                nav_2.addClass('on');
                uls.eq(i).addClass('show');
            }
        }
        lis[i].onmouseleave = function () {
            nav_2.removeClass('on');
        }
    }

    for(var i=0;i<nav_2.length;i++){
        nav_2[i].onmouseleave = function () {
            nav_2.removeClass('on');
        }
    }
    for(var i=0;i<nav_2.length;i++){
        nav_2[i].onmouseover = function () {
            nav_2.addClass('on');
        }
    }
    var bh_nav = $('.bh_nav');
    for(var i=0;i<nav_2.length;i++){
        bh_nav[i].onmouseleave = function () {
            nav_2.removeClass('on');
        }
    }
})
// 滚动条控制导航是否吸附在顶部
$(function () {
    var bh_nav = $('.bh_nav');
    var nav_2 = $('.nav_2');
    var windowTop = 0;
    window.onscroll = function () {
        if(IsPC()){
            // console.log($(document).scrollTop());   $(document).scrollTop()滚动条距离顶部滚动的距离
            if($(document).scrollTop() >0) {
                bh_nav.addClass('min');
            }
            if($(document).scrollTop() == 0) {
                bh_nav.removeClass('min');
            }
            if($(document).scrollTop() >0) {
                nav_2.addClass('min2');
            }
            if($(document).scrollTop() == 0) {
                nav_2.removeClass('min2');
            }  
        }
    }
})

// 聚焦宝航的企业文化效果
$(function () {
    $('.culture_01').mouseenter(function () {
        // console.log ($('.culture_01').index(this))
        $('.culture_01').removeClass('culture_this');
        $('.culture_01').eq($('.culture_01').index(this)).addClass('culture_this');
    })
})
// 锚点跳转
$(function () {
    var mien_container01 = $('#mien_container01');
    var mien_container02 = $('#mien_container02');
    var mien_container03 = $('#mien_container03');
    var Activity = $('#Activity0');
    var Annual = $('#Activity1');
    var Annual02 = $('#Activity2');

    Activity.click(function () {
        $('html,body').animate({scrollTop:mien_container01.offset().top-80},200)
    })

    Annual.click(function () {
        $('html,body').animate({scrollTop:mien_container02.offset().top-80},200)
    })

    Annual02.click(function () {
        $('html,body').animate({scrollTop:mien_container03.offset().top-80},200)
    })
})
// 人才招聘版块手风琴效果
$(function(){
    var an = $('.an')
    var windowWidth = $(window).width();
    an.click(function(){
        var _this = this;
        var PHeight = $(_this).parent().outerHeight();
        if(PHeight < 400){
            if(windowWidth<768) {
                $(_this).parent().animate({height:460+'px'},100);
                $(_this).parent().siblings('.bh_recruitment_content').animate({height:40},100);
            }else {
                $(_this).parent().animate({height:460+"px"},200);
                $(_this).parent().siblings('.bh_recruitment_content').animate({height:40},200);
            }

            $(_this).parent().parent().find('a.an').html('展开');   
            $(_this).html('收起');
        }else{
            $(_this).parent().animate({height:40+'px'},100);
            $(_this).parent().parent().find('a.an').html('展开');   
        }
    })
})
// 首页返回顶部
$(function () {
    $('.contact_jiantou').click(function () {
        $('html,body').animate({scrollTop:0},200);
    })
})

// 判断客户端
function IsPC() {
 var userAgentInfo = navigator.userAgent;
 var Agents = ["Android", "iPhone",
             "SymbianOS", "Windows Phone",
             "iPad", "iPod"];
 var flag = true;
 for (var v = 0; v < Agents.length; v++) {
     if (userAgentInfo.indexOf(Agents[v]) > 0) {
         flag = false;
         break;
     }
 }
 return flag;
}

// 菜单吸附
function scrollLis(obj,offs){
    var toTop = offs.top-$(window).scrollTop();
    if(toTop==90 || toTop< 90){
        if(!obj.hasClass('ab')){
            obj.after('<div class="zhanwei"></div>');
            obj.addClass('ab');
        }
    }else{
        $('.zhanwei').remove();
        obj.removeClass('ab')
    }
}

