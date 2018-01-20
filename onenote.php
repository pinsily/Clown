<?php
/**
 * onenote
 *
 * @package custom
 *
 */
?>

<?php $this->need('header.php'); ?>

	<link href="<?php $this->options->themeUrl('css/onenote.css'); ?>" rel="stylesheet">

	<script type="text/javascript" src="<?php $this->options->themeUrl('js/mp.mansory.min.js'); ?>"></script>

	<div class="mainbody container" style="width: 100%;">

		<div class="row" id="row">

			<!-- <div class="col-md-4 col-sm-6"> -->
				<div class="onenote">
					<div class="on-title"><p>Tulip.18-01-08</p></div>
					<div class="on-picture"><img src="http://owgxfd8jv.bkt.clouddn.com/30837-106.jpg"></div>
					<div class="on-body" style="text-align: center;">
						<p>我们在世上</p>
						<p>边看繁华</p>
						<p>边向地狱行去</p>
					</div>
					<div class="on-from"><p>From 小林一茶</p></div>
				</div>
			<!-- </div> -->

			<!-- <div class="col-md-4 col-sm-6"> -->
				<div class="onenote">
					<div class="on-title"><p>Tulip.18-01-07</p></div>
					<div class="on-picture"><img src="http://owgxfd8jv.bkt.clouddn.com/341191-106.jpg"></div>
					<div class="on-body" style="text-indent: 28px;">
						<p>- Please use one word to describe your girlfriend.</p>
						<p>- Where?</p>
					</div>
					<div class="on-from"><p>From No</p></div>
				</div>
			<!-- </div> -->

			<!-- <div class="col-md-4 col-sm-6"> -->
				<div class="onenote">
					<div class="on-title"><p>Tulip.18-01-06</p></div>
					<div class="on-picture"><img src="http://owgxfd8jv.bkt.clouddn.com/357249-106.jpg"></div>
					<div class="on-body" style="text-align: center;">
						<p>入夜饮马，黎明磨刀</p>
						<p>世事如乱草，茎茎催人老</p>
						<p>岁月飞跑，一把短藏刀</p>
						<p>我一生的好时光引颈就屠</p>
					</div>
					<div class="on-from"><p>张子选《慈航》</p></div>
				</div>
			<!-- </div> -->


			<!-- <div class="col-md-4 col-sm-6"> -->
				<div class="onenote">
					<div class="on-title"><p>Tulip.18-01-05</p></div>
					<div class="on-picture"><img src="http://owgxfd8jv.bkt.clouddn.com/102475-106.jpg"></div>
					<div class="on-body" style="text-indent: 28px;">
						<p>我终将遗忘梦境中的那些路径、山峦与田野，遗忘那些永远不能实现的梦</p>
					</div>
					<div class="on-from"><p>From 普鲁斯特</p></div>
				</div>
			<!-- </div> -->

			<!-- <div class="col-md-4 col-sm-6"> -->
				<div class="onenote">
					<div class="on-title"><p>Tulip.18-01-04</p></div>
					<div class="on-picture"><img src="http://owgxfd8jv.bkt.clouddn.com/248913-106.jpg"></div>
					<div class="on-body" style="text-indent: 28px;">
						<p>黑夜里的你，拥有看不见的世界，和清晰的自己</p>
					</div>
					<div class="on-from"><p>From 博尔赫斯</p></div>
				</div>
			<!-- </div> -->

			<!-- <div class="col-md-4 col-sm-6"> -->
				<div class="onenote">
					<div class="on-title"><p>Tulip.18-01-03</p></div>
					<div class="on-picture"><img src="http://owgxfd8jv.bkt.clouddn.com/239869-0.jpg"></div>
					<div class="on-body" style="text-align: center;">
						<p>我总爱自贬身份</p>
						<p>和自己的灵魂争论</p>
						<p>有一年我吸足了海风</p>
						<p>那一年我是所有人的陌生人</p>
					</div>
					<div class="on-from"><p>巴尔蒙特《双重生活》</p></div>
				</div>
			<!-- </div> -->

			<!-- <div class="col-md-4 col-sm-6"> -->
				<div class="onenote" >
					<div class="on-title"><p>Tulip.18-01-02</p></div>
					<div class="on-picture"><img src="http://owgxfd8jv.bkt.clouddn.com/130796-106.jpg"></div>
					<div class="on-body" style="text-indent: 28px;">
						<p>有些事只适合收藏，不能说，也不能想，却又不能忘。它们不能变成语言，它们无法变成语言，一旦变成语言就不是它们了。它们是一片朦胧的温馨与寂寥，是一片成熟的希望和绝望</p>
					</div>
					<div class="on-from"><p>From 史铁生</p></div>
				</div>
			<!-- </div> -->

			<!-- <div class="col-md-4 col-sm-6"> -->
				<div class="onenote">
					<div class="on-title"><p>Tulip.18-01-01</p></div>
					<div class="on-picture"><img src="http://owgxfd8jv.bkt.clouddn.com/320684-106.jpg"></div>
					<div class="on-body" style="text-align: center;">
						<p>在醒来时</p>
						<p>世界都远了</p>
						<p>我需要</p>
						<p>最狂的风</p>
						<p>和最静的海</p>
					</div>
					<div class="on-from"><p>From 顾城</p></div>
				</div>
			<!-- </div> -->
		</div>
	</div>


<script>

jQuery(document).ready(function ( $ ) {
  $("#row").mpmansory(
	  	{
	      childrenClass: 'onenote', // default is a div
	      // columnClasses: '', //add classes to items
	      breakpoints:{
	        lg: 4, 
	        md: 4, 
	        sm: 6,
	        xs: 12
	      },
	      distributeBy: { order: false, height: false, attr: 'data-order', attrOrder: 'asc' }, 
	      onload: function (items) {
	        //make somthing with items
	      } 
	    }
  	);
});

</script>


<?php $this->need('footer.php'); ?>
