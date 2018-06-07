<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<link rel="stylesheet" href="<?php $this->options->themeUrl('css/comment.css'); ?>" /> 


<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
 
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
 
<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php 
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">

    <div id="<?php $comments->theId(); ?>">
        <div class="comment-author">
            <cite>@<?php $comments->author(); ?></cite>
        </div>
        <div class="comment-meta">
            <?php $comments->date('Y-m-d H:i'); ?>
            <span class="comment-reply"><?php $comments->reply(); ?></span>
        </div>
        <span><?php $comments->content(); ?></span>
    </div>

    
<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
</li>
<?php } ?>



<div id="comments" class="mycomments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    
      <?php $comments->listComments(); ?>

      <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
      
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
      		<?php $comments->cancelReply(); ?>
        </div>
    
     
        <form method="post" action="<?php $this->commentUrl() ?>" class="basic-grey" role="form" id="publish-box">
            <h1>留言栏</h1>
            <?php if($this->user->hasLogin()): ?>
                <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>    
                <label>
                <span>昵称 :</span>
                    <input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
                </label>
                
                
            <?php endif; ?>

                <label>
                <span>留言 :</span>
                <textarea id="comment-message" name="text" placeholder="Your Message to Me" required><?php $this->remember('text'); ?></textarea>
                </label>

                <label>
                <span>&nbsp;</span>
                <button type="submit" class="button"><?php _e('提交评论'); ?></button>
                </label>
        </form>
      
    </div>

    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
