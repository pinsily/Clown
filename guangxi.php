<?php
/**
 * guangxi
 *
 * @package custom
 *
 */
?>

<?php $this->need('header.php'); ?>

	<div class="mainbody gallery-container">

		<div style="border-bottom: 1px solid #96c2f1; ">

			<ul class="list-inline gallery-link" style="padding-top: 20px;">
			<li><button class="btn btn-default" type="button"><a href="gallery.html">Gallery</a></button></li>
				<li><button class="btn btn-default" type="button"><a href="gallery.html">Desktop</a></button></li>
				<li><button class="btn btn-default active" type="button"><a href="guangxi.html">Guangxi</a></button></li>
				<li><button class="btn btn-default" type="button"><a href="wind.html">风之谷</a></button></li>
				<li><button class="btn btn-default" type="button"><a href="desktop.html">雨之林</a></button></li>
				<li><button class="btn btn-default" type="button"><a href="guangxi.html">霜之城</a></button></li>
			</ul>

		</div>


		<div class="tz-gallery">

			<div class="row">
				<?php $x=0; ?>
				<?php while($x<50): ?>
					<?php $x++; ?>
					<?php $imgurl='http://oxx624c2r.bkt.clouddn.com/'.$x.'.jpg' ?>
		            <div class="col-sm-12 col-md-4">
		                <a class="lightbox" href="<?php echo $imgurl ?>">
		                    <img src="<?php echo $imgurl ?>">
		                </a>
		            </div>

		            <?php $x++; ?> 
		            <?php $imgurl='http://oxx624c2r.bkt.clouddn.com/'.$x.'.jpg' ?>

		            <div class="col-sm-6 col-md-4">
		                <a class="lightbox" href="<?php echo $imgurl ?>">
		                    <img src="<?php echo $imgurl ?>">
		                </a>
		            </div>

		            <?php $x++; ?> 
		            <?php $imgurl='http://oxx624c2r.bkt.clouddn.com/'.$x.'.jpg' ?>

		            <div class="col-sm-6 col-md-4">
		                <a class="lightbox" href="<?php echo $imgurl ?>">
		                    <img src="<?php echo $imgurl ?>">
		                </a>
		            </div>

		            <?php $x++; ?> 
		            <?php $imgurl='http://oxx624c2r.bkt.clouddn.com/'.$x.'.jpg' ?>

		            <div class="col-sm-12 col-md-8">
		                <a class="lightbox" href="<?php echo $imgurl ?>">
		                    <img src="<?php echo $imgurl ?>">
		                </a>
		            </div>

		            <?php $x++; ?> 
		            <?php $imgurl='http://oxx624c2r.bkt.clouddn.com/'.$x.'.jpg' ?>

		            <div class="col-sm-6 col-md-4">
		                <a class="lightbox" href="<?php echo $imgurl ?>">
		                    <img src="<?php echo $imgurl ?>">
		                </a>
		            </div> 

		            <?php $x++; ?> 
		            <?php $imgurl='http://oxx624c2r.bkt.clouddn.com/'.$x.'.jpg' ?>

		            <div class="col-sm-6 col-md-4">
		                <a class="lightbox" href="<?php echo $imgurl ?>">
		                    <img src="<?php echo $imgurl ?>">
		                </a>
		            </div>

				<?php endwhile; ?>
	        </div>
		</div>
	</div>

	

<?php $this->need('footer.php'); ?>