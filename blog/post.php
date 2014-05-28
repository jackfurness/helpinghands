<?php include('../perch/runtime.php'); ?>
<?php perch_layout('global.head', array(
	'title'=>'Blog'
));?>
	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-9 ">
					<?php perch_blog_post(perch_get('s')); ?>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
                <?php perch_blog_post_categories(perch_get('s')); ?>
                <?php perch_blog_post_tags(perch_get('s')); ?>
	    	<!-- COMMENTS
	    		<?php perch_blog_post_comments(perch_get('s')); ?>
	    		<?php perch_blog_post_comment_form(perch_get('s')); ?>
    		-->
			</div>
		</div>
	</div>
    <!--<h2>Archive</h2>-->
    <!-- The following functions are different ways to display archives. You can use any or all of these. 
    
    All of these functions can take a parameter of a template to overwrite the default template, for example:
    
    perch_blog_categories('my_template.html');
    
    --> 
    <!--  By category listing -->
    <!--<?php perch_blog_categories(); ?>-->
    <!--  By tag -->
    <!--<?php perch_blog_tags(); ?>-->
    <!--  By year -->
    <!--<?php perch_blog_date_archive_years(); ?>-->
    <!--  By year and then month - can take parameters for two templates. The first displays the years and the second the months see the default templates for examples -->
    <!--<?php perch_blog_date_archive_months(); ?>-->
<?php perch_layout('global.footer'); ?>