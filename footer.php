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

		span_dt_dt.innerHTML="<font color=black>"+daysold+"</font> 天 <font color=black>"+hrsold+"</font> 时 <font color=black>"+minsold+"</font> 分 <font color=black>"+seconds+"</font> 秒";} 
	show_date_time();

</script>




<p style="color: grey;"><h6>本站已运行: <span id="span_dt_dt"></span></h6></p>
<p style="color:grey;"><h6>@Copyright 2017 by pinsily,@Power by typecho</h6></p> 


</footer>

</div> <!-- container -->


    
	
	<!-- <script src="<?php $this->options->themeUrl('js/baguetteBox.min.js');?>"></script> -->
	<script src="<?php $this->options->themeUrl('js/love.js');?>"></script>
	<script type="text/javascript" color="0,0,0" opacity='0.7' zIndex="-2" count="99" src="//cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script>
	
	<script type="text/javascript">
		baguetteBox.run('.tz-gallery');
	</script>

<?php $this->footer(); ?>
</body></html>
