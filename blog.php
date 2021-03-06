<?php include('perch/runtime.php'); ?>
<?php perch_layout('global.head', array(
	'title'=>'Blog'
));?>

<?php $blogList = array(
	'count'=>5,
    'sort-order'=>'DESC',
    'template'=>'blog/blog-list.html'
    );
?>

<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-push-2">
			    <h2 class="text-center"><span class="ribbon">Blog</span></h2>
				<!-- this is an example blog homepage showing a simple call to perch_blog_recent_posts()
				
				Posts are displayed using the templates stored in perch/apps/perch_blog/templates/blog you can edit these as you wish, making sure that the 
				paths used in these templates are correct for your installation.
				 -->
			    <?php perch_blog_custom($blogList);?>
			    
			    <!--<p><a href="archive.php">More posts</a></p>-->
				<!--<h2>Archive</h2>-->
			    <!-- The following functions are different ways to display archives. You can use any or all of these. 
			    
			    All of these functions can take a parameter of a template to overwrite the default template, for example:
			    
			    perch_blog_categories('my_template.html');
			    
			    --> 
			    <!--  By category listing -->
			    <!-- <?php perch_blog_categories(); ?>-->
			    <!--  By tag -->
			    <!-- <?php perch_blog_tags(); ?>-->
			    <!--  By year -->
			    <!-- <?php perch_blog_date_archive_years(); ?>-->
			    <!--  By year and then month - can take parameters for two templates. The first displays the years and the second the months see the default templates for examples -->
			    <!-- <?php perch_blog_date_archive_months(); ?>-->
				
			</div>
		</div>
	</div>
</section>
<?php perch_layout('global.footer'); ?>