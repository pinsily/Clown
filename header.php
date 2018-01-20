<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php $this->options->themeUrl('images/title.ico'); ?>" type="image/x-icon" />
		
		<title>
		  <?php $this->archiveTitle(array(
		            'category'  =>  _t('%s'),
		            'search'    =>  _t('%s'),
		            'tag'       =>  _t('%s'),
		            'author'    =>  _t('%s')
		        ), '', ' - '); ?>
		        
		   <?php $this->options->title(); ?>
		</title>
	
		<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
		<link href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>" rel="stylesheet">
	    <link href="<?php $this->options->themeUrl('css/style.css'); ?>" rel="stylesheet">
	    <script src="<?php $this->options->themeUrl('js/bootstrap.min.js');?>"></script>
		<link href="<?php $this->options->themeUrl('css/post-format.css'); ?>" rel="stylesheet">
		<script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>

	</head>

<body>

	<div class="container self-container">
		<header>
			<div class="headimage">
				<div class="headimage_"></div>
			</div>

			<div class="headone" style="border:1px solid #96c2f1;">

				<p style="padding-top: 5px; margin: 5px;"><span><script type="text/javascript" src="https://api.lwl12.com/hitokoto/main/get?encode=js&charset=utf-8"></script><script>lwlhitokoto()</script></span></p>
			</div>

			<div class="headnvg">

				<!-- 响应式导航条 -->
				<div class="mynav">
				<div class="navbar navbar-default navbar-fixed-top navbar-inner" role="navigation" style="width: 100%;max-width: 800px;margin: 0 auto;">
				  <div class="navbar-header">
				       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				         <span class="sr-only">Toggle Navigation</span>
				         <span class="icon-bar"></span>
				         <span class="icon-bar"></span>
				         <span class="icon-bar"></span>
				       </button>
				      <a href="http://pinsily.site" class="navbar-brand">Clown</a> 
				  </div>
				  <div class="collapse navbar-collapse navbar-responsive-collapse">
				    	<ul class="nav navbar-nav" style="padding:0;margin: 0;">
				      		<li><a href='<?php $this->options->siteUrl(); ?>'><?php _e('Home'); ?></a></li>
					    	<li class="dropdown">
						        <a href="##" data-toggle="dropdown" class="dropdown-toggle">Classify<span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
						        </ul>
					     	</li>

					     	<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
					    	<?php while($pages->next()): ?>
					    		<?php if (($pages->slug != 'guangxi')&&($pages->slug != 'desktop')): ?>
								<li><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
								<?php endif;?>
							<?php endwhile; ?>
							
					   		<form id="search-header" method="post" action="<?php $this->options ->siteUrl(); ?>" name="search-header" class="navbar-form navbar-left">
	                            <li><input width="25px" type="text" name="s" class="form-control" placeholder="Search?" autocomplete="off"></li>
	                        </form>
					 	</ul>
				  </div>
				</div>
				</div>
			</div>
		</header>

