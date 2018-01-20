<?php
/**
 * tags
 *
 * @package custom
 *
 */
?>

<!--
<?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
<?php if($tags->have()): ?>
    <?php while ($tags->next()): ?>
    <a style="color:rgb(<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>,
           <?php echo(rand(0,255)); ?>)" href="<?php $tags->permalink();?>">
         <?php $tags->name(); ?></a>
    <?php endwhile; ?>
<?php endif; ?>
-->





<?php $this->need('header.php'); ?>

<script src="<?php $this->options->themeUrl('js/tagcanvas.min.js');?>"></script>

<script type="text/javascript">

window.onload = function () {
	try {
		var i, et = document.getElementById('tags').childNodes;
		for (i in et) {
			et[i].nodeName == 'A' && et[i].addEventListener('click', function (e) {
				e.preventDefault();
			});
		}

		TagCanvas.Start('myCanvas', 'tags', {
			textColour: '#222',
			outlineColour: '#fff',
			reverse: true,
			depth: 0.8,
			dragControl: true,
			decel:0.95,
			maxSpeed: 0.05,
			initial: [-0.2, 0]
		});
	} catch (e) {
		// something went wrong, hide the canvas container
		//document.getElementById('myCanvasContainer').style.display = 'none';
	}
};
</script>


<div class="tags">
    <div class="b_10_3">
	<canvas width="300" height="300" id="myCanvas"></canvas>
	<div id="tags">
		
		
		<a href="http://pinsily.site/index.php/tag/linux/">linux</a>
		<a href="http://pinsily.site/index.php/tag/python/">python</a>
		<a href="http://pinsily.site/index.php/tag/typecho/">typecho</a>
		<a href="http://pinsily.site/index.php/tag/css/">css</a>
		<a href="http://pinsily.site/index.php/tag/html/">html</a>
		<a href="http://pinsily.site/index.php/tag/docker/">docker</a>
		<a href="http://pinsily.site/index.php/tag/github/">github</a>
		<a href="http://pinsily.site/index.php/tag/git/">git</a>
		<a href="http://pinsily.site/index.php/tag/js/">js</a>
		<a href="http://pinsily.site/index.php/tag/树莓派/">树莓派</a>
		<a href="http://pinsily.site/index.php/tag/mysql/">mysql</a>
		<a href="http://pinsily.site/index.php/tag/心理/">心理</a>
		<a href="http://pinsily.site/index.php/tag/注册表/">注册表</a>
		<a href="http://pinsily.site/index.php/tag/django/">django</a>
		<a href="http://pinsily.site/index.php/tag/chrome/">chrome</a>
		<a href="http://pinsily.site/index.php/tag/mongodb/">mongodb</a>
		<a href="http://pinsily.site/index.php/tag/android/">android</a>
        </div>
    </div>
</div>

<!--
<p>标签:</p>
<?php if($this->slug=="tags"): ?>
<?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
<?php if($tags->have()): ?>
    <?php while ($tags->next()): ?>
    <a style="color:rgb(<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>,
           <?php echo(rand(0,255)); ?>)" href="<?php $tags->permalink();?>">
         <?php $tags->name(); ?></a>
    <?php endwhile; ?>
<?php endif; ?>
<?php else: ?>
<?php $this->content(); ?>
<?php endif; ?>

-->

<?php $this->need('footer.php'); ?>