<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<article class="article">
	<header class="titleinfo">
		<h3><?php $this->title() ?></h3>
		<p id="mod-post__meta">by <?php $this->author() ?>&#160;&#124;&#160;<?php $this->date('Y/m/d'); ?>&#160;&#124;&#160;in <?php $this->category(','); ?></p>
	</header>

	<div class="articleinfo">
      <?php $this->content(); ?>
	</div>

</article>
<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
