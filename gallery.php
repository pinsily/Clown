<?php
/**
 * gallery
 *
 * @package custom
 *
 */
?>


<?php $this->need('header.php'); ?>

	<div class="mainbody gallery-container">

		<div style="border-bottom: 1px solid #96c2f1; ">

			<ul class="list-inline gallery-link" style="padding-top: 20px;">
				<li><button class="btn btn-default active" type="button"><a href="gallery.html">Gallery</a></button></li>
				<li><button class="btn btn-default" type="button"><a href="desktop.html">Desktop</a></button></li>
				<li><button class="btn btn-default" type="button"><a href="guangxi.html">Guangxi</a></button></li>
				<li><button class="btn btn-default" type="button"><a href="wind.html">风之谷</a></button></li>
				<li><button class="btn btn-default" type="button"><a href="rainy.html">雨之林</a></button></li>
				<li><button class="btn btn-default" type="button"><a href="guangxi.html">霜之城</a></button></li>
			</ul>


		</div>

		<div class="gallery-statement">

			<h3 style="text-align: center;">关于照片墙</h3>
			<h5>2017.10.24</h5>
			<p>关于此照片墙，主要是想当成自己的照片收集站，不管是自己身边的，还是网上找的</p>
			<p>前端只是简单看了一遍教程，很多东西都还实现不了，只能一点点完善这些界面,够自己折腾很久的了</p>
			<p>照片主要是存放在七牛云服务器上，学生价的服务器的速度太 low</p>
			<p>没有弄分页效果，照片只能加载到底</p>
			<p>lightbox 样式使用了 <a href="http://www.jq22.com/jquery-info14235">4款超酷Bootstrap图片画廊和lightbox效果模板</a>，虽然只用了其中一种，还是不错，反正自己也不会 js</p>
			<p><a href="http://pinsily.site/index.php/desktop.html">Desktop</a> 收录了一直以来的电脑桌面图片，有些视觉厌倦许久没用了</p>
			<p><a href="http://pinsily.site/index.php/guangxi.html">Guangxi</a> 收录了 2017 暑假广西平南三下乡的一些照片，怎样，还是一份挺好的回忆</p>
			<p>由于前端还是能力有限，可能之后还是会利用别人写好的照片墙样式来摆放照片，稍后继续增加上来</p>

			<h5>2017.10.27</h5>
			<p>增加了 <a href="http://pinsily.site/index.php/wind.html">风之谷</a>，是轮播图形式，直接使用了 bootstrap 框架的 js，但是效果不怎样来着</p>

		</div>
		
	</div>

	

<?php $this->need('footer.php'); ?>
