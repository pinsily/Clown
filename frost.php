<?php
/**
 * frost
 *
 * @package custom
 *
 */
?>

<?php $this->need('header.php'); ?>
<!-- 
<link href="<?php $this->options->themeUrl('css/frost/frost_gallery.css'); ?>" rel="stylesheet">
<link href="<?php $this->options->themeUrl('css/frost/frost.css'); ?>" rel="stylesheet">
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('js/frost.js');?>"></script>

<script>
  $(document).ready( function() {
    $(".frost-gallery").frost_gallery({
      enableScroll: true,
      autoplay: 2000
    });
    
    $(".next").click(function() {
      $(".frost-gallery").flipForward();
      return false;
    });
    $(".prev").click(function() {
      $(".frost-gallery").flipBackward();
      return false;
    });
  });
	
</script>
 -->
<div class="mainbody gallery-container">

	<div style="border-bottom: 1px solid #96c2f1; ">

		<ul class="list-inline gallery-link" style="padding-top: 20px;">
			<li><button class="btn btn-default" type="button"><a href="gallery.html">Gallery</a></button></li>
			<li><button class="btn btn-default" type="button"><a href="desktop.html">Desktop</a></button></li>
			<li><button class="btn btn-default" type="button"><a href="guangxi.html">Guangxi</a></button></li>
			<li><button class="btn btn-default" type="button"><a href="wind.html">风之谷</a></button></li>
			<li><button class="btn btn-default" type="button"><a href="rainy.html">雨之林</a></button></li>
			<li><button class="btn btn-default  active" type="button"><a href="frost.html">霜之城</a></button></li>
		</ul>

	</div>
		

<!-- 
	<div class="frost-gallery">

		<a href="#" data-caption="素材1"><img src="<?php $this->options->themeUrl('images/bg_image.jpg'); ?>"></a>
		<a href="#" data-caption="素材2"><img src="<?php $this->options->themeUrl('images/bg_image.jpg'); ?>"></a>
		<a href="#" data-caption="素材3"><img src="<?php $this->options->themeUrl('images/bg_image.jpg'); ?>"></a>
		<a href="#" data-caption="素材4"><img src="<?php $this->options->themeUrl('images/bg_image.jpg'); ?>"></a>
		<a href="#" data-caption="素材5"><img src="<?php $this->options->themeUrl('images/bg_image.jpg'); ?>"></a>
		<a href="#" data-caption="素材6"><img src="<?php $this->options->themeUrl('images/bg_image.jpg'); ?>"></a>
		<a href="#" data-caption="素材7"><img src="<?php $this->options->themeUrl('images/bg_image.jpg'); ?>"></a>
		<a href="#" data-caption="素材8"><img src="<?php $this->options->themeUrl('images/bg_image.jpg'); ?>"></a>
		<a href="#" data-caption="素材9"><img src="<?php $this->options->themeUrl('images/bg_image.jpg'); ?>"></a>
		<a href="#" data-caption="素材10"><img src="<?php $this->options->themeUrl('images/bg_image.jpg'); ?>"></a>
		
    </div>

    <div class="navigation">
	  <a href="#" class="btn prev">上一张</a>
	  <a href="#" class="btn next">下一张</a>
	</div> 
</div>
 -->

<?php $this->need('footer.php'); ?>