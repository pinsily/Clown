<?php
/**
 * xingcheng
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

        
		
		<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
		<link href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>" rel="stylesheet">
	    <link href="<?php $this->options->themeUrl('css/comment.css'); ?>" rel="stylesheet">

	    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/xingcheng.css'); ?>" /> 
       
        <title>行橙文化 - 留言板</title>

        

    </head>

	<body>

		<div class="container">

			<div class="xc_head">

				<label  class="xc_head_a"><a href="http://yx.uoffer.net"><span class="fa fa-angle-double-left fa-3x"></span></a></label>
				<h3>GuestBook</h3>

			</div>

			<div class="picture">

				<img src="<?php $this->options->themeUrl('images/header-img.png'); ?>" >

			</div>



			<div class="comment-box">

				<!--方法定义-->
			    <?php function threadedComments($comments, $options) {
			    ?>
			
				<!-- 评论内容样式(新) -->
		            <ul class="comment-contents">
		                <li class="list-unstyled">
		                    <label>
		                    	<span class="comment-username"><?php $comments->author(); ?></span>
		                   		<span class="comment-time"><?php $comments->date('Y/m/d H:i'); ?></span>
		                    </label>
		                    <p class="comment-content">
		                        <?php $comments->content(); ?>
		                    </p>
		                </li>
		            </ul>
				
		    	<?php } ?>

		    	<div>
			    <?php $this->comments()->to($comments); ?>
			    
			    <?php if ($comments->have()): ?>
			    
			      <?php $comments->listComments(); ?>
			    
			    <?php endif; ?>
			      
			       
		        <form method="post" action="<?php $this->commentUrl() ?>" class="basic-grey" role="form" id="publish-box">
		            <h1>留言栏</h1>
		            <div style="margin:0 auto;">

		                <label>
		                <span>昵称 :</span>
		                    <input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
		                </label>
		                
		                <label>
		                <span>Message :</span>
		                <textarea id="message" name="text" placeholder="Your Message to Us" required><?php $this->remember('text'); ?></textarea>
		                </label>
		                
		                <label>
		                <span>&nbsp;</span>
		                <button type="submit" class="button"><?php _e('提交评论'); ?></button>
		                </label>

		            </div>
		        </form>
			</div>
		</div>  
		</div>
	</body>
</html>
