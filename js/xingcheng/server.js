/**
 * Created by Administrator on 2017/6/20.
 */

//解决安卓机的软键盘把flex导航栏顶上去
(function () {
    var allHeight = window.innerHeight;

    setInterval(function () {
        if (allHeight != window.innerHeight){
            allHeight - window.innerHeight
            $("nav").css("display","none");
            $(".send").css("bottom","0");
        }else {
            $("nav").css("display","flex");
            $(".send").css("bottom","8rem");
        }
    },0)
})();

function ser() {

}

ser.prototype = {
    turnToIndex: function () {
        var index = document.getElementsByTagName("nav")[0].getElementsByClassName("home")[0];
        index.addEventListener("click",function (e) {
            window.location.href = "index.html";
            // window.event.returnValue=false;
        })
    },
    turnToDingdan: function () {
        var footPrint = document.getElementsByTagName("nav")[0].getElementsByClassName("footprint")[0];
        footPrint.addEventListener("click",function (e) {
            window.location.href = "dingdan.ejs";
            // window.event.returnValue=false;
        })
    },

}

var ser = new ser();
ser.turnToIndex();
ser.turnToDingdan();
