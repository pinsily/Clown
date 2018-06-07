/**
 * Created by Lenovo on 2017/6/10.
 */

// function changeStatusChange() {
//     var startX,startY,moveEndX,moveEndY,X,Y;
//     $('#change').on('touchstart',function(e){
//         //使得页面不能上下滚动
//         // e.preventDefault();
//         startX = e.originalEvent.changedTouches[0].pageX;
//         startY = e.originalEvent.changedTouches[0].pageY;
//     });
//
//     $('#change').on('touchmove',function(e){
//         // e.preventDefault();
//         moveEndX = e.originalEvent.changedTouches[0].pageX;
//         moveEndY = e.originalEvent.changedTouches[0].pageY;
//
//         X = moveEndX - startX;
//         Y = moveEndY - startY;
//
//         console.log(X)
//
//
//         if ( Math.abs(X) > Math.abs(Y) && X > 0 ) {
//
//
//             var swiperWrapper = document.getElementsByClassName("swiper-wrapper")[0];
//             if (swiperWrapper.style.transform == "translate3d(0px, 0px, 0px)"){
//                 document.getElementsByClassName("tittle")[0].getElementsByClassName("all-dingdan")[0].className = "all-dingdan select";
//                 document.getElementsByClassName("tittle")[0].getElementsByClassName("wait-pay")[0].className = "wait-pay unselect";
//
//             }
//
//         }else if ( Math.abs(X) > Math.abs(Y) && X < 0 ){
//             var swiperWrapper = document.getElementsByClassName("swiper-wrapper")[0];
//             if (swiperWrapper.style.transform == "translate3d(-980px, 0px, 0px)") {
//                 document.getElementsByClassName("tittle")[0].getElementsByClassName("all-dingdan")[0].className = "all-dingdan unselect";
//                 document.getElementsByClassName("tittle")[0].getElementsByClassName("wait-pay")[0].className = "wait-pay select";
//             }
//
//
//         }
//
//     });
// }
// changeStatusChange();


function changeStatus() {
    var swiperWrapper = document.getElementsByClassName("swiper-wrapper")[0];
    if (swiperWrapper.style.transform == "translate3d(0px, 0px, 0px)"){
        document.getElementsByClassName("tittle")[0].getElementsByClassName("all-dingdan")[0].className = "all-dingdan select";
        document.getElementsByClassName("tittle")[0].getElementsByClassName("wait-pay")[0].className = "wait-pay unselect";
    }
    if (swiperWrapper.style.transform == "translate3d(-980px, 0px, 0px)") {
        document.getElementsByClassName("tittle")[0].getElementsByClassName("all-dingdan")[0].className = "all-dingdan unselect";
        document.getElementsByClassName("tittle")[0].getElementsByClassName("wait-pay")[0].className = "wait-pay select";
    }
}
setInterval(changeStatus,0);


var DingDan = function () {

};

DingDan.prototype = {
    turnToIndex : function () {
        var index = document.getElementsByTagName("nav")[0].getElementsByClassName("home")[0];
        index.addEventListener("click",function (e) {
            window.location.href = '/';
            // window.event.returnValue=false;
        })
    },
    clickAll:function () {
        var all = document.getElementsByClassName("all-dingdan")[0];
        all.addEventListener("click",function () {
            var swiperWrapper = document.getElementsByClassName("swiper-wrapper")[0];
            // swiperWrapper.style = "transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);"
            $(swiperWrapper).css("transform","translate3d(0px, 0px, 0px)");
            $(swiperWrapper).css("transition-duration","0ms");
            swiperWrapper.getElementsByTagName("section")[0].className = "swiper-slide items-same dingdan-items swiper-slide-active";
            swiperWrapper.getElementsByTagName("section")[1].className = "swiper-slide items-same dingdan-items swiper-slide-next";

            document.getElementsByClassName("tittle")[0].getElementsByClassName("all-dingdan")[0].className = "all-dingdan select";
            document.getElementsByClassName("tittle")[0].getElementsByClassName("wait-pay")[0].className = "wait-pay unselect";

        })
    },
    clickUnpay: function () {
        var waitPay = document.getElementsByClassName("wait-pay")[0];
        waitPay.addEventListener("click",function () {
            var swiperWrapper = document.getElementsByClassName("swiper-wrapper")[0];
            // swiperWrapper.style = "transition-duration: 0ms; transform: translate3d(-980px, 0px, 0px);";
            $(swiperWrapper).css("transform","translate3d(-980px, 0px, 0px)");
            $(swiperWrapper).css("transition-duration","0ms");
            swiperWrapper.getElementsByTagName("section")[0].className = "swiper-slide items-same dingdan-items swiper-slide-prev";
            swiperWrapper.getElementsByTagName("section")[1].className = "swiper-slide items-same dingdan-items swiper-slide-active";

            document.getElementsByClassName("tittle")[0].getElementsByClassName("all-dingdan")[0].className = "all-dingdan unselect";
            document.getElementsByClassName("tittle")[0].getElementsByClassName("wait-pay")[0].className = "wait-pay select";

        })
    },

    turnToComment:function () {
        var cal = document.getElementsByClassName("calculate");
        for (var i=0;i<cal.length;i++){
            cal[i].getElementsByTagName("span")[0].addEventListener("click",function (e) {
                var target = e.target;
                var id = target.parentNode.parentNode.id;
                var comment = target.parentNode;
                
                if (target.innerText == "评价"){
                       
                    $.ajax({
                        type:"post",
                        url:"/api/comment/jia",
                        data:{
                            _id:id,
                        },
                        success:function () {
                            comment.getElementsByClassName("no-comment")[0].className = "has-comment";
                            comment.getElementsByTagName("span")[0].innerText = "已评价";
                            comment.getElementsByClassName("comment-tipe")[0].innerText = "";
                            window.location.href = "https://sojump.com/jq/14969300.aspx";
                        }

                    })

                }
            })
        }
    },
    turnToServer:function () {
        var self = document.getElementsByTagName("nav")[0].getElementsByClassName("self")[0];
        self.addEventListener("click",function (e) {
            window.location.href = "https://mp.weixin.qq.com/s?__biz=MzIyMDcxNzIyOQ==&mid=2247483675&idx=1&sn=81da99fcf7ddcf9b8d2134aafee6b957&chksm=97c688d9a0b101cfe1c715e63d7d0a09eb956dd103e076b994742f543dafae2c17690abd6d08#rd";
        })
    },
    turnTohasCom:function () {
        var cal = document.getElementsByClassName("calculate");
        for (var i=0;i<cal.length;i++){
            cal[i].getElementsByTagName("span")[0].addEventListener("click",function (e) {



                var target = e.target;

                var id = target.parentNode.parentNode.id;

                if (target.innerText == "去付款"){

                    $.ajax({
                        type:"post",
                        url:"/api/payment/pay",
                        data:{
                            _id:id,
                        },
                        success:function (result) {
                            WeixinJSBridge.invoke('getBrandWCPayRequest', result,function(res) {
                                /**
                                 *  get_brand_wcpay_request:ok	支付成功
                                 get_brand_wcpay_request:cancel	支付过程中用户取消
                                 get_brand_wcpay_request:fail	支付失败
                                 */
                                if(res.err_msg == "get_brand_wcpay_request:ok") {
                                    window.location.href = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx6fb6e4ec250d3079&redirect_uri=http%3A%2F%2Fyx.uoffer.net%2Fweb%2Fdingdan&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
                                } // 使用以上方式判断前端返回,微信团队郑重提示：res.err_msg将在用户支付成功后返回    ok，但并不保证它绝对可靠。
                            }
                            )
                        }

                    })

                    // window.location.href = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx6fb6e4ec250d3079&redirect_uri=http%3A%2F%2Fyx.uoffer.net%2Fweb%2Fdingdan&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
                    // window.event.returnValue=false;

                    // var cal = target.parentNode;
                    // cal.getElementsByClassName("comment-tipe")[0].innerText = "期待您游学完成后的评价哟~";
                    // cal.getElementsByClassName("go-to-pay")[0].className = "no-comment";
                    // cal.getElementsByTagName("span")[0].innerText = "评价";
                    // var unPay = cal.parentNode.getElementsByClassName("you-address")[0].getElementsByTagName("label")[2];
                    //
                    // unPay.innerText = "已付款";
                    // unPay.className = "haspay";

                }
            })
        }
    },
    placeholdChange:function () {

        var all = document.getElementsByClassName("dingdan-item").length;
        var unpay = document.getElementsByClassName("unpay").length;

        var len;
        if (all == unpay){
            len = all/2;
        }else {
            len = document.getElementsByClassName("dingdan-item").length - document.getElementsByClassName("unpay").length / 2;
        }

        if (len == 0){
            $(".placehold").css("height","1500px");
        }else if (len == 1){
            $(".placehold").css("height","1050px");
        }else if (len == 2){
            $(".placehold").css("height","700px");
        }



    }
}

var dingdan = new DingDan();
dingdan.turnToIndex();
dingdan.clickAll();
dingdan.clickUnpay();
dingdan.turnToComment();
dingdan.turnToServer();
dingdan.turnTohasCom();
dingdan.placeholdChange();