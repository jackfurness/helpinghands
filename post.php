<?php perch_layout('global.head', array(
	'title'=>'Homepage'
));?>
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
		    	<?php perch_blog_post(perch_get('s')); ?>

		    	<?php perch_blog_author_for_post(perch_get('s')); ?>
		    
                <?php perch_blog_post_categories(perch_get('s')); ?>

                <?php perch_blog_post_tags(perch_get('s')); ?>
		    	
		    	<?php perch_blog_post_comments(perch_get('s')); ?>
		    	
		    	<?php perch_blog_post_comment_form(perch_get('s')); ?>
	        </div>
		</div>
	</div>
</section>
<?php perch_layout('global.footer'); ?>
	