/**
 * Created by Lenovo on 2017/6/11.
 */
function Address() {

}

Address.prototype = {
    returnIndex:function () {
        document.getElementsByClassName("add-return")[0].addEventListener("click",function (e) {
            // window.location.href = "index.html";
            // if (history.length == 0){
            //     window.location.href = "index.html";
            // }else {
                history.go(-1);
            // }
        })
    },
    turnToDingdan:function () {
        var footPrint = document.getElementsByTagName("nav")[0].getElementsByClassName("footprint")[0];
        footPrint.addEventListener("click",function (e) {
            window.location.href = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx6fb6e4ec250d3079&redirect_uri=http%3A%2F%2Fyx.uoffer.net%2Fweb%2Fdingdan&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
            // window.event.returnValue=false;
        })
    },
    turnToServer:function () {
        var self = document.getElementsByTagName("nav")[0].getElementsByClassName("self")[0];
        self.addEventListener("click",function (e) {
            window.location.href = "https://mp.weixin.qq.com/s?__biz=MzIyMDcxNzIyOQ==&mid=2247483675&idx=1&sn=81da99fcf7ddcf9b8d2134aafee6b957&chksm=97c688d9a0b101cfe1c715e63d7d0a09eb956dd103e076b994742f543dafae2c17690abd6d08#rd";
        })
    },    
    turntoIndex:function () {
        var add = document.getElementById("address");
        
        add.addEventListener("keydown",function (e) {
            var cityname = add.value;
            //有没有市的判断
            var test = /市/;
            var hasshi = test.test(cityname);
            if(!hasshi){
                cityname = cityname+"市";
            }

            if (e.keyCode == 13){
                //console.log(cityname)
                $.ajax({
                    type:"post",
                    url:"/api/city",
                    data:{
                        cityName: cityname
                    },
                    success:function (date) {
                        window.location.href ="/web/" + cityname;   //跳转到渲染好的Index页面
                    },
                    error:function (msg) {
                        alert("暂不支持该城市");
                    }
                })
            }
        })
    },
    clickHotCity:function () {
        var hotCity = document.getElementsByClassName("hot-city")[0];
        var cities = hotCity.getElementsByTagName("label");
        for (var i=0;i<cities.length;i++){
            cities[i].addEventListener("click",function (e) {
                var target = e.target;
                var cityname = target.innerText;
                //console.log(cityname);
                var test = /市/;
                var hasshi = test.test(cityname);
                if(!hasshi){
                cityname = cityname+"市";
                }
                $.ajax({
                    type:"post",
                    url:"/api/city",
                    data:{
                        cityName: cityname
                    },
                    success:function (date) {
                        window.location.href ="/web/" + cityname;   //跳转到渲染好的Index页面
                    },
                    error:function (msg) {
                        alert("暂不支持该城市");
                    }
                })
            })
        }
    }
}


var addr = new Address();
addr.returnIndex();
addr.turnToDingdan();
addr.turnToServer();
addr.turntoIndex();
addr.clickHotCity();
