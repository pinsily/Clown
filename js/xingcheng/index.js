/**
 * Created by Lenovo on 2017/6/8.
 */

//解决安卓机的软键盘把flex导航栏顶上去
(function () {
    var allHeight = window.innerHeight;

    setInterval(function () {
        if (allHeight != window.innerHeight){
            allHeight - window.innerHeight
            $("nav").css("display","none");
        }else {
            $("nav").css("display","flex");
        }
    },0)
})();


//点击学校
function indexSchool(){

}

indexSchool.prototype = {
    clickSchool: function () {
        var schoolItems = document.getElementsByClassName("school-item");
        for (var i=0;i<schoolItems.length;i++){
            $(schoolItems[i]).on("click",function (e) {
                var schoolname = $(this).find(".school-name").text();


                $.ajax({
                    type:"post",
                    url:"/api/school",
                    data:{
                        schoolName:schoolname
                    },
                    success:function (date) {
                        //window.location.href = '/web/school'
                        window.location.href = '/web/school/' + schoolname
                    },
                    error:function (msg) {
                        alert("暂不支持该学校");
                    }
                })


                // if (schoolName == "汕头大学"){
                //     //跳转到学校页面
                //     window.location.href = "shantouSchool.html";
                //     window.event.returnValue=false;
                // }else if (schoolName == "韩山师范学院"){
                //     window.location.href = "hanshiSchool.html";
                //     window.event.returnValue=false;
                // }else if (schoolName == "汕头职业技术学院"){
                //     window.location.href = "shanzhiyuanSchool.html";
                //     window.event.returnValue=false;
                // }
            })
        }
    },
    turnToDingdan: function () {
        var footPrint = document.getElementsByTagName("nav")[0].getElementsByClassName("footprint")[0];
        footPrint.addEventListener("click",function (e) {
            window.location.href = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx6fb6e4ec250d3079&redirect_uri=http%3A%2F%2Fyx.uoffer.net%2Fweb%2Fdingdan&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
            // window.event.returnValue=false;
        })
    },
    turnAddress: function () {
        var add = document.getElementsByTagName("label")[0];
        var cityname = add.innerText;
        document.getElementsByClassName("curren-add")[0].addEventListener("click",function (e) {
    
            $.ajax({
                    type:"post",
                    url:"/api/address",
                    data:{
                        cityName: cityname
                    },
                    success:function (date) {
                        window.location.href = '/web/address/' + cityname
                    },
                    error:function (msg) {
                        alert("暂不支持该城市");
                    },
                 
            })
        })
    },
    // turnSchoolSearch:function () {
    //
    //     document.getElementsByClassName("address-con")[0].getElementsByTagName("input")[0].addEventListener('keypress',function(e){
    //         if(e.keyCode === 13) {
    //             window.location.href = "school-search.html";
    //             window.event.returnValue=false;
    //         }
    //     });
    //
    //     document.getElementsByClassName("address")[0].getElementsByClassName("search-word")[0].addEventListener("click",function (e) {
    //         window.location.href = "school-search.html";
    //         window.event.returnValue=false;
    //     })
    //
    // },
    showSchoolSarch:function () {
        var searchInput = document.getElementsByClassName("show-index")[0].getElementsByClassName("address")[0].getElementsByTagName("input")[0];
        searchInput.addEventListener("focus",function () {
            $(document.getElementsByClassName("show-search")[0]).slideDown();
            document.getElementsByClassName("show-index")[0].style.display = "none";
            document.getElementsByClassName("show-search")[0].getElementsByClassName("sch-search")[0].getElementsByTagName("input")[0].focus();
        })
    },
    returnIndexShow:function () {
        var returnIndexShow = document.getElementsByClassName("show-search")[0].getElementsByClassName("add-return")[0];
        returnIndexShow.addEventListener("click",function (e) {
            var add = document.getElementById("address");
            var cityname = add.innerText;
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
            // $(document.getElementsByClassName("show-index")[0]).slideDown();
            // document.getElementsByClassName("show-search")[0].style.display = "none";
            // window.location.href = "index.html";
            // window.event.returnValue=false;
            // $(document.getElementsByClassName("show-search")[0]).slideUp();
            // document.getElementsByClassName("show-index")[0].style.display = "inline-block";
        })
    },
    turnToServer:function () {
        var self = document.getElementsByTagName("nav")[0].getElementsByClassName("self")[0];
        self.addEventListener("click",function (e) {
            window.location.href = "https://mp.weixin.qq.com/s?__biz=MzIyMDcxNzIyOQ==&mid=2247483675&idx=1&sn=81da99fcf7ddcf9b8d2134aafee6b957&chksm=97c688d9a0b101cfe1c715e63d7d0a09eb956dd103e076b994742f543dafae2c17690abd6d08#rd";
        })
            },
    //修改
    searchSchool:function () {
        var sch = document.getElementById("school");
        var schoolname = sch.value;
        //console.log(school)
        sch.addEventListener("keydown",function (e) {
            var schoolname = sch.value;
            if (e.keyCode == 13){
                $.ajax({
                    type:"post",
                    url:"/api/school",
                    data:{
                        schoolName:schoolname
                    },
                    success:function (date) {
                        //window.location.href = '/web/school'
                        window.location.href = '/web/school/' + schoolname
                     },
                    error:function (msg) {
                        alert("暂不支持该学校");
                    }
                })
            }
        })

    }


}

var inSch = new indexSchool();
inSch.clickSchool();
inSch.turnToDingdan();
inSch.turnAddress();
// inSch.turnSchoolSearch();
inSch.showSchoolSarch();
inSch.returnIndexShow();
inSch.turnToServer();
inSch.searchSchool();
