<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
 

<section class="home-title">
    <!-- <h1 style="text-align: center;"><?php $this->archiveTitle(array(
                    'category'  =>  _t('%s 分类'),
                    'search'    =>  _t('含关键词 %s 的文章'),
                    'tag'       =>  _t('含标签 %s 的文章'),
                    'author'    =>  _t('%s 发布的文章')
                ), '', ''); ?></h1> -->

    <?php if ($this->is('category')) : ?><span style="text-align: center;"><?php echo $this->getDescription(); ?><?php endif; ?></span>

</section>


<div class="mainbody">

  <div class="title" style="text-align: center;"><h3 style="margin-top: 0;padding-top: 10px;">

    <?php $this->archiveTitle(array(
          'category'  =>  _t('%s'),
          'search'    =>  _t('含关键词 %s 的文章'),
          'tag'       =>  _t('含标签 %s 的文章'),
          'author'    =>  _t('%s 发布的文章')
      ), '', ''); ?>
  </h3></div>

  <ul class="mod-archive__list">
    <?php while($this->next()): ?>
      <li style="list-style-type:circle;">
        <a href="<?php $this->permalink() ?>" style=""><?php $this->title() ?></a>
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