<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="myfooter">	

	<div class="row myfooterrow">
		<!-- col-xs-6 表示窄屏时显示两列 -->
        <div class="col-xs-6 col-md-3 col-md-offset-3">
            <img src="<?php $this->options->themeUrl('images/4.jpg'); ?>" width="80px" height="80px" class="img-circle">
			<div class="caption">
				<p></p>
                <p><h5>这条路下去</h5></p>
            </div>
        </div>
		<div class="col-xs-6 col-md-3 ">
            <img src="<?php $this->options->themeUrl('images/5.jpg'); ?>" width="80px" height="80px" class="img-circle">
			<div class="caption">
                <p></p>
                <p><h5>我们会有故事的</h5></p>
            </div>
        </div>

    </div>


	<ul class="list-unstyled list-inline ">
		<li><a href="mailto:13160724868@163.com"><span class="fa fa-envelope fa-lg iconlink"></span></a></li>
		<li><a href="https://github.com/pinsily"><span class="fa fa-github fa-lg iconlink"></span></a></li>
		<li><a href="https://weibo.com/p/1005052296507381/home"><span class="fa fa-weibo fa-lg iconlink"></span></a></li>
		
	</ul>
	

<script data-no-instant=""> 

	function show_date_time() {
		window.setTimeout("show_date_time()",1e3);
		var BirthDay = new Date("August 15,2017 18:19:35"),
		today        = new Date,
		timeold      = today.getTime()-BirthDay.getTime(),
		msPerDay     = 864e5,
		e_daysold    = timeold/msPerDay,
		daysold      = Math.floor(e_daysold),
		e_hrsold     = 24*(e_daysold-daysold),
		hrsold       = Math.floor(e_hrsold),
		e_minsold    = 60*(e_hrsold-hrsold),
		minsold      = Math.floor(60*(e_hrsold-hrsold)),
		seconds      = Math.floor(60*(e_minsold-minsold));

		$("#blog_age").html("<font color='black'>"+daysold+"</font> 天 <font color='black'>"+hrsold+"</font> 时 <font color='black'>"+minsold+"</font> 分 <font color='black'>"+seconds+"</font> 秒");
		// ="<font color=black>"+daysold+"</font> 天 <font color=black>"+hrsold+"</font> 时 <font color=black>"+minsold+"</font> 分 <font color=black>"+seconds+"</font> 秒";
	} 
	show_date_time();

</script>


<span class="visiters" id="vvvvvv">
	
</span>

<script language="JavaScript"> 
	var caution = false;
	function setCookie(name, value, expires, path, domain, secure) { 
		var curCookie = name + "=" + escape(value) + ((expires) ? "; expires=" + expires.toGMTString() : "") + ((path) ? "; path=" + path : "") + ((domain) ? "; domain=" + domain : "") + ((secure) ? "; secure" : "");
		if (!caution || (name + "=" + escape(value)).length <= 4000) 
			document.cookie = curCookie; 
		else if (confirm("Cookie exceeds 4KB and will be cut!")) 
			document.cookie = curCookie; 
	} 

	function getCookie(name) { 
		var prefix = name + "="; 
		var cookieStartIndex = document.cookie.indexOf(prefix); 
		if (cookieStartIndex == -1) 
			return null;
		var cookieEndIndex = document.cookie.indexOf(";", cookieStartIndex + prefix.length);
		if (cookieEndIndex == -1) 
			cookieEndIndex = document.cookie.length; 
		return unescape(document.cookie.substring(cookieStartIndex + prefix.length, cookieEndIndex)); 
	} 

	function deleteCookie(name, path, domain) { 
		if (getCookie(name)) { 
			document.cookie = name + "=" + ((path) ? "; path=" + path : "") + ((domain) ? "; domain=" + domain : "") + "; expires=Thu, 01-Jan-70 00:00:01 GMT";
		} 
	} 

	function fixDate(date) { 
		var base = new Date(0); 
		var skew = base.getTime(); 
		if (skew > 0) 
			date.setTime(date.getTime() - skew); 
	} 


	var now = new Date(); 
	console.log("1");
	fixDate(now); 
	console.log("2");
	now.setTime(now.getTime() + 365 * 24 * 60 * 60 * 1000); 
	console.log("3");
	var visits = getCookie("counter");
	console.log("4"); 
	if (!visits) 
		visits = 1; 
	else 
		visits = parseInt(visits) + 1;
	console.log("5"); 
	setCookie("counter", visits, now);
	console.log("6"); 
	//document.write("您是第" + visits + "访客！")
	//window.alret("您是第" + visits + "访客！")

	$("#vvvvvv").html("<p>您是第" + visits + "访客！</p>")
	console.log("7");

	$(".visiters").prepend("<p>您是第" + visits + "访客！</p>");

	$("#vvvvvv").html("<p>您是第" + visits + "访客！</p>")

</script>






<p style="color: grey;"><h6>本站已运行: <span id="blog_age"></span></h6></p>
<p style="color:grey;"><h6>@Copyright 2017 by pinsily,@Power by typecho</h6></p> 


</footer>

</div> <!-- container -->


    
	<script src="<?php $this->options->themeUrl('js/baguetteBox.min.js');?>"></script>
	<script src="<?php $this->options->themeUrl('js/love.js');?>"></script>
	<script type="text/javascript" color="0,0,0" opacity='0.7' zIndex="-2" count="99" src="//cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script>
	
	<script type="text/javascript">
		baguetteBox.run('.tz-gallery');
	</script>

<?php $this->footer(); ?>
</body></html>
