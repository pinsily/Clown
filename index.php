<?php
/**
 * @package Clown
 * @author pinsily
 * @version 1.0.0
 * @link http://pinsily.size
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
	$this->need('header.php');
?>



<div class="mainbody">
	
	<!-- mod-archive__list -->
	<ul class="mod-archive__list">
		<?php while($this->next()): ?>
  		<li style="list-style-type:circle;">
   			<a href="<?php $this->permalink() ?>" class="left-to-right"><?php $this->title() ?></a>
   			<time class="mod-archive__time" datetime="<?php $this->date('Y/m/d'); ?>"><?php $this->date('Y/m/d');  ?></time>
  		</li>
		<?php endwhile; ?>
	</ul>

	<div class="posts-nav">

		<!-- <?php $this->pageLink("<span >下一页</span>",'next'); ?>
		<?php $this->pageLink("<span >上一页</span>"); ?> -->
		<?php $this->pageNav('|<', '>|',10,'',array('wrapTag' => 'div', 'wrapClass' => 'page-nav','itemTag' =>'li','currentClass' => 'current',)); ?>

	</div>
</div>

<?php $this->need('footer.php'); ?>
