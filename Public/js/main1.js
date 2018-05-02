    // Vue.component('child1',{
    //     template:"<div class='tab-img'>" +
    //     "one" +
    //     "</div>"
    // })
    //
    // Vue.component('child2',{
    //     template:"<div class='yoga-img'>" +
    //     "two" +
    //     "</div>"
    // })
    // Vue.component('child3',{
    //     template:"<div class='phab-img'>" +
    //     "three" +
    //     "</div>"
    // })
    var tab = new Vue({
        el:"#tab",
        data:{
            tabs:['TAB','YOGA','PHAB'],
            nowindex:0,
            active:0
        },
        methods:{
            toggleTabs:function(index) {
                this.nowindex = index;
                this.active = index;
            }
        }
    });


    var $aside = $(".aside");
        $asideUp = $(".aside-up");
        $loginPwd = $(".login-pwd");
        $loginPwds = $(".login-pwds");

    //login时，密码的显现隐藏
        function loginPwd(){
            $loginPwds.mousedown(function () {
                $loginPwd.attr('type','tex t');
            })
            $loginPwds.mouseup(function () {
                $loginPwd.attr('type','password');
            })
        }



    $(window).on('scroll',function () {
        var scrollTop = $(this).scrollTop();
        scrollTop >= 700 ? $asideUp.slideDown():$asideUp.slideUp();
    });

    $('.aside-up').on('click',function () {
        $('html,body').animate({scrollTop:0},500);
    });


    loginPwd();