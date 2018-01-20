/**
 * Created by Lenovo on 2017/6/10.
 */

window.onload = function () {
    var u = navigator.userAgent;
    var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1; //android终端
    var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
    var inputs = document.getElementsByTagName("input");

    if (isAndroid){
        for (var i=0;i<inputs.length;i++){
            inputs[i].style.top = "1.5px";
        }
    }else if (isiOS){
        for (var i=0;i<inputs.length;i++){
            inputs[i].style.top = "-3px";
        }
    }

    //解决安卓机的软键盘把flex导航栏顶上去
    (function () {
        var allHeight = window.innerHeight;

        setInterval(function () {
            if (allHeight != window.innerHeight){
                allHeight - window.innerHeight
                $(".yuyue").css("display","none");
            }else {
                $(".yuyue").css("display","flex");
            }
        },0)
    })();

}




function yuyueForm() {

}

yuyueForm.prototype = {
    baoxian: function () {
        function seclet() {
            if (document.getElementsByClassName("buy-baoxian")[0].checked){
                if (document.getElementsByClassName("unchoose")[0]){
                    document.getElementsByClassName("unchoose")[0].className = "choose";
                }
                if (document.getElementsByClassName("uncicle")[0]){
                    document.getElementsByClassName("uncicle")[0].className = "cicle";
                }
            }else {
                if (document.getElementsByClassName("choose")[0]){
                    document.getElementsByClassName("choose")[0].className = "unchoose";
                }
                if (document.getElementsByClassName("cicle")[0]){
                    document.getElementsByClassName("cicle")[0].className = "uncicle";
                }
            }
        }
        setInterval(seclet,0);
    },
    checkPhone: function () {
        function phoneNum() {
            var phoneNumber = document.getElementsByClassName("yuyue-phone")[0].getElementsByTagName("input")[0].value;
            var mobile=/^\d{11}$/;
            if (mobile.test(phoneNumber)) {
                document.getElementsByClassName("yuyue-phone")[0].getElementsByTagName("i")[0].className = "";
            } else {
                document.getElementsByClassName("yuyue-phone")[0].getElementsByTagName("i")[0].className = "phone-err";
            }
        }
        setInterval(phoneNum,0);
    },
    chooseYouType:function () {
        document.getElementsByClassName("yuyue-type")[0].getElementsByTagName("i")[0].addEventListener("click",function (e) {
            var target = e.target;
            var yuyueTypeItems = target.parentNode.parentNode.getElementsByClassName("yuyue-type-items")[0];
            if (yuyueTypeItems.style.display == "none"){

                $(yuyueTypeItems).slideDown();
                document.getElementsByClassName("yuyue-wechat")[0].style.top = "2.8rem";
                document.getElementsByClassName("yuye-baoxian")[0].style.top = "2.8rem";
                document.getElementsByClassName("yuyue-liuyan")[0].style.top = "2.8rem";
                document.getElementsByClassName("yuye-baoxian")[0].style.top = "2.8rem";


                var typeSelect = document.getElementsByClassName("type-selete")[0];
                if (typeSelect){
                    document.getElementsByClassName("type-selete")[0].className = "type-selete-out";
                }

            }else {
                $(yuyueTypeItems).slideUp();
                document.getElementsByClassName("yuyue-wechat")[0].style.top = "0";
                document.getElementsByClassName("yuye-baoxian")[0].style.top = "0";
                document.getElementsByClassName("yuyue-liuyan")[0].style.top = "0";
                var typeSelectOut = document.getElementsByClassName("type-selete-out")[0];
                if (typeSelectOut){
                    document.getElementsByClassName("type-selete-out")[0].className = "type-selete";
                }
            }
        });
        var typeItems = document.getElementsByClassName("yuyue-type-items")[0].getElementsByTagName("label");
        for (var g=0;g<typeItems.length;g++){
            typeItems[g].addEventListener("click",function (e) {
                document.getElementsByClassName("yuyue-type")[0].getElementsByTagName("span")[0].innerText = this.innerText;
                var target = e.target;
                var yuyueTypeItems = target.parentNode;

                $(yuyueTypeItems).slideUp();
                document.getElementsByClassName("yuyue-wechat")[0].style.top = "0";
                document.getElementsByClassName("yuye-baoxian")[0].style.top = "0";
                document.getElementsByClassName("yuyue-liuyan")[0].style.top = "0";

                var typeSelectOut = document.getElementsByClassName("type-selete-out")[0];
                if (typeSelectOut){
                    document.getElementsByClassName("type-selete-out")[0].className = "type-selete";
                }
            })
        }
    },
    calMoney: function () {
        function calculate() {
            // var baoxianMoney = 30.88;
            // var zhongxiaoMoney = 250;
            // var gaoMoney = 230;
            // var daMoney = 210;
            var baoxianMoney = 0;
            var zhongxiaoMoney = 188;
            var gaoMoney = 188;
            var daMoney = 188;
            var totalMoney = 0;
            var youxueType = document.getElementsByClassName("yuyue-type")[0].getElementsByTagName("span")[0].innerText;
            if (youxueType == "中小学体验游学"){
                if (document.getElementsByClassName("yuye-baoxian")[0].getElementsByTagName("input")[0].checked){
                    totalMoney = baoxianMoney +　zhongxiaoMoney;
                }else {
                    totalMoney = zhongxiaoMoney;
                }

            }else if (youxueType == "高中生择校游学"){
                if (document.getElementsByClassName("yuye-baoxian")[0].getElementsByTagName("input")[0].checked){
                    totalMoney = baoxianMoney +　gaoMoney;
                }else {
                    totalMoney = gaoMoney;
                }

            }else if (youxueType == "大学生专业社交游学"){
                if (document.getElementsByClassName("yuye-baoxian")[0].getElementsByTagName("input")[0].checked){
                    totalMoney = baoxianMoney +　daMoney;
                }else {
                    totalMoney = daMoney;
                }
            }
            if (totalMoney != 0){
                var moneyCon =  document.getElementsByClassName("yuyue-money")[0];
                moneyCon.getElementsByTagName("span")[0].innerText = totalMoney + "元";
                moneyCon.style.color = "#2ABB9C";
                moneyCon.getElementsByTagName("label")[0].style.color = "#2ABB9C";
            }
        }
        setInterval(calculate,500);
    },
    subYuyue: function () {
        var tijiaoYuyue = document.getElementsByClassName("tijiao-yuyue")[0];
        tijiaoYuyue.addEventListener("click",function (e) {
            if (document.getElementsByClassName("yuyue-phone")[0].getElementsByTagName("i")[0].className == "phone-err") {
                alert("请正确填写手机号码");
            } else if (document.getElementsByTagName("textarea")[0].value.length > 200) {
                alert("留言不能超过200字");
            } else if(document.getElementsByClassName("yuyue-name")[0].getElementsByTagName("input")[0].value == "" || document.getElementsByClassName("yuyue-address")[0].getElementsByTagName("input")[0].value == "" || document.getElementsByClassName("yuyue-type")[0].getElementsByTagName("span")[0].innerText == "" || document.getElementsByClassName("yuyue-wechat")[0].getElementsByTagName("input")[0].value == ""){
                alert("请填写完整信息");
            } else {
                //提交的数据
                var yuyueName = document.getElementsByClassName("yuyue-name")[0].getElementsByTagName("input")[0].value;
                var yuyuePhone = document.getElementsByClassName("yuyue-phone")[0].getElementsByTagName("input")[0].value;
                var yuyueAddress = document.getElementsByClassName("yuyue-address")[0].getElementsByTagName("input")[0].value;

                var yuyueTypeWord = document.getElementsByClassName("yuyue-type")[0].getElementsByTagName("span")[0].innerText;
                var yuyueType;
                if (yuyueTypeWord == "中小学体验游学"){
                    yuyueType = 1;
                }else if (yuyueTypeWord == "高中生择校游学"){
                    yuyueType = 2;
                }else if (yuyueTypeWord == "大学生专业社交游学"){
                    yuyueType = 3;
                }



                var yuyueWechat = document.getElementsByClassName("yuyue-wechat")[0].getElementsByTagName("input")[0].value;
                var yuyueBaoxian = document.getElementsByClassName("yuye-baoxian")[0].getElementsByTagName("input")[0].checked;
                var yuyueLiuyan = document.getElementsByClassName("yuyue-liuyan")[0].getElementsByTagName("textarea")[0].value;
                var yuyueMoney = document.getElementsByClassName("yuyue-money")[0].getElementsByTagName("span")[0].innerText.split("元")[0];

                var payment = false;

                var comment = false;

                var openid = document.getElementsByClassName("yuyue-form")[0].id;


                $.ajax({
                    url:"/api/order",
                    type:"post",
                    data:{
                        openid:openid,
                        name:yuyueName,
                        phone:yuyuePhone,
                        school:yuyueAddress,
                        tourType:yuyueType,
                        weixin:yuyueWechat,
                        insurance:yuyueBaoxian,
                        msg:yuyueLiuyan,
                        payment:payment,
                        comment:comment,
                        money:yuyueMoney
                    },
                    success:function () {
                        //跳转到完成预约页面
                        window.location.href = "/finished.html";    // 前面要加斜杠才能正确跳转
                        window.event.returnValue=false;
                    }


                })




            }
        })

    }
}

var yuyue = new yuyueForm();
yuyue.baoxian();
yuyue.checkPhone();
yuyue.chooseYouType();
yuyue.calMoney();
yuyue.subYuyue();