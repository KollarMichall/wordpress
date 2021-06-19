<?php
//Advanced custom fields 

$video_title = get_field('video_title');
$video_body = get_field('video_body');
?>

<!-- VIDEO FEATURETTE
	================================================== -->
	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2><?php echo $video_title?></h2>

					<?php if(!empty($video_body)) : ?>
					<?php echo $video_body?>
					<?php endif?>

				</div><!-- end col -->
			</div><!-- row -->			
		</div><!-- container -->
	</section><!-- featurette -->
	