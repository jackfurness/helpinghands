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
<section class="get-involved">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="text-center"><span class="ribbon">Karibu! Welcome</span></h3>
				<div class="col-xs-12 col-sm-4 col-sm-push-2">
					<p>The Helping Hands Organisation of Kenya is dedicated to meeting the training needs of the local community and, specifically, the needs of disabled and disadvantaged people with limited financial and educational resources.</p>
					<p>Based near Lake Naivasha, the project is growing and now involves over 100 students. The students inspire us daily and help us to keep pushing the project further, but we cannot do this alone...</p>
				</div>
				<div class="col-xs-12 col-sm-3 col-sm-push-2">
					<span class="map-pin"><span class="map-pin-text">Naivasha,&nbsp;Kenya</span></span>
					<img src="dist/img/africa-map.svg" class="img-responsive" />
				</div>
				<div class="col-xs-12 col-sm-4">
				</div>
			</div>
		</div>
		<div class="row row-border">
			<div class="col-xs-12 col-sm-4 col-sm-push-4">
				<a href="#" class="btn btn-default btn-block">Find out more &gt;</a>
			</div>
		</div>
	</div>
</section>	
<section class="recent-blogs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<h3 class="text-center"><span class="ribbon">Blog</span></h3>
				<?php perch_blog_custom($recentBlogs);?>
				<div class="row">
					<div class="col-xs-12 col-sm-3">
						<a href="#" class="btn btn-default btn-block">See all posts ></a>
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
					<div class="col-xs-12 col-sm-6 col-md-5 col-md-push-1">
						<div class="bucket">
							<div class="contact-bubble"><span class="icon-bubbles"></span></div>
							<h4>Keep in touch</h4>
							<p>We have many ways for you to keep in touch with the latest that is happening at Helping Hands. Read our blog, newsletter or follow us on Facebook.</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-5 col-md-push-1">
						<div class="bucket">
							<div class="contact-bubble"><span class="icon-plane"></span></div>
							<h4>Volunteer</h4>
							<p>Helping Hands always needs people to sponsor centre participants, programs and employees. In addition volunteers who bring their expertise and skill to our programs have always been a mainstay of our success.</p>
						</div>
					</div>
				</div>
				<div class="row row-border">
					<div class="col-xs-12 col-sm-4 col-sm-push-4">
						<a href="#" class="btn btn-default btn-block">Get involved ></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="donate">
	<div class="container">
		<div class="row">
			<h3 class="text-center"><span class="ribbon">Donate today</span></h3>
			<p class="text-center">We rely on the support of individuals around the world to keep the project going and moving on. We welcome donations of any amount.</p>
				<div class="row row-border">
					<div class="col-xs-12 col-sm-4">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="D7P8ZAK24BRBL">
							<button class="donate-bucket" type="submit" name="submit" alt="PayPal – The safer, easier way to pay online.">
								<span class="donate-amount">£5</span>
								<span class="donate-text">We have many ways for you to keep in touch with the latest that is happening at Helping Hands. Read our blog, newsletter or follow us on Facebook.</span>
							</button>
						</form>
					</div>
					<div class="col-xs-12 col-sm-4">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="JQYNR3ZW8FJWL">
							<button class="donate-bucket" type="submit" name="submit" alt="PayPal – The safer, easier way to pay online.">
								<span class="donate-amount">£15</span>
								<span class="donate-text">We have many ways for you to keep in touch with the latest that is happening at Helping Hands. Read our blog, newsletter or follow us on Facebook.</span>
							</button>
						</form>
					</div>
					<div class="col-xs-12 col-sm-4">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="X9PZWJW4XLLDE">
							<button class="donate-bucket" type="submit" name="submit" alt="PayPal – The safer, easier way to pay online.">
								<span class="donate-amount">£25</span>
								<span class="donate-text">We have many ways for you to keep in touch with the latest that is happening at Helping Hands. Read our blog, newsletter or follow us on Facebook.</span>
							</button>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-sm-push-4">
						<a href="#" class="btn btn-default btn-block">Find out more about donating ></a>
					</div>
				</div>
		</div>
	</div>
</section>
<?php perch_layout('global.footer'); ?>