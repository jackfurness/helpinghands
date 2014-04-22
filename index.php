<?php include('perch/runtime.php'); ?>
<?php perch_layout('global.head', array(
	'title'=>'Homepage'
));?>

<?php $recentBlogs = array(
    'count'=>'3',
    'sort-order'=>'DESC',
    'template'=>'blog/recent-blogs.html'
    );
?>

<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="banner-homepage-heading">Empowerment through education</h2>
				 <div id="banner-slider">
			        <ul>
			            <li>
			            	<div data-image="dist/img/slides/slide-1.jpg">
			            		<div class="slider-caption">Empowering local people through education</div>
			            	</div>
			            </li>
			            <li>
			            	<div data-image="dist/img/slides/slide-2.jpg">
			            		<div class="slider-caption">Training local church leaders and young adults; equipping them to get new skills and qualifications</div>
			            	</div>
			            </li>
			            <li>
			            	<div data-image="dist/img/slides/slide-3.jpg">
			            		<div class="slider-caption">Providing education for pre-school and primary aged children</div>
			            	</div>
			            </li>
			            <li>
			            	<div data-image="dist/img/slides/slide-4.jpg">
			            		<div class="slider-caption">Investing in on-going professional development programmes for our teachers</div>
			            	</div>
			            </li>
			            <li>
			            	<div data-image="dist/img/slides/slide-5.jpg">
			            		<div class="slider-caption">Modelling the integration of disabled and able bodied children; raising community awareness and working together to break down stereotypes and prejudices</div>
			            	</div>
			            </li>
			            <li>
			            	<div data-image="dist/img/slides/slide-6.jpg">
			            		<div class="slider-caption">Preparation for life through vocational and skills training</div>
			            	</div>
			            </li>
			        </ul>
			    </div>
			</div>
		</div>
	</div>
</section>
<section class="welcome">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="text-center"><span class="ribbon">Karibu! Welcome</span></h3>
				<div class="col-xs-12 col-sm-4">
					<p>The Helping Hands Organisation of Kenya is dedicated to meeting the training needs of the local community and, specifically, the needs of disabled and disadvantaged people with limited financial and educational resources.</p>
					<p>Based near Lake Naivasha, the project is growing and now involves over 100 students. The students inspire us daily and help us to keep pushing the project further, but we cannot do this alone...</p>
				</div>
				<div class="col-xs-12 col-sm-4">
				</div>
				<div class="col-xs-12 col-sm-4">
				</div>
			</div>
		</div>
	</div>
</section>	
<section class="recent-blogs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<h3 class="text-center"><span class="ribbon">Most recent posts</span></h3>
				<?php perch_blog_custom($recentBlogs);?>
				<div class="row">
					<div class="col-xs-12 col-sm-3">
						<a href="#" class="btn btn-default btn-block">See all posts</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="get-involved">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="text-center"><span class="ribbon">Get involved</span></h3>
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<div class="bucket">
							<div class="contact-bubble"><span class="icon-bubbles"></span></div>
							<h4>Keep in touch</h4>
							<p>We have many ways for you to keep in touch with the latest that is happening at Helping Hands. Read our blog, newsletter or follow us on Facebook.</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="bucket">
							<div class="contact-bubble"><span class="icon-gbp"></span></div>
							<h4>Donate</h4>
							<p>We rely on the support of individuals around the world to keep the project going and moving on. We welcome donations of anything from money to equipment and supplies.</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="bucket">
							<div class="contact-bubble"><span class="icon-plane"></span></div>
							<h4>Volunteer</h4>
							<p>Helping Hands always needs people to sponsor centre participants, programs and employees. In addition volunteers who bring their expertise and skill to our programs have always been a mainstay of our success.</p>
						</div>
					</div>
				</div>
				<div class="row row-border">
					<div class="col-xs-12 col-sm-4 col-sm-push-4">
						<a href="#" class="btn btn-default btn-block">Get involved</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>		

<?php perch_layout('global.footer'); ?>