	<div class='blogs-summary-temp' style="display: none;">
		<div class='blog-header-holder'>
			<div class="navbar navbar-default">
				<div class='container'>
					<div class='row'>
						<div class='col-lg-4 col-md-4 col-sm-4 pull-right'>
							<ul class='nav navbar-nav pull-left'>
								<li>
									<button class='close close-blog'>Close &times;</button>
								</li>
							</ul>
						</div>
						<div class='col-lg-8 col-md-8 col-sm-8 pull-left'>
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<strong class="navbar-brand blog-link" href="#blog">Blog</strong>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
		<div class='blog-page-holder'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-8 col-md-8 col-sm-12'>
						<div class='blog-list-holder'>
							<!-- start one blog -->
							@foreach($posts as $i => $post)
							<div class='blog-content-holder'>
								<h1>
									{{$post->title}}
								</h1>
								<div class='post-by-holder'>
									<img src="{{URL::to('img/blog/profile-pic.png')}}">
									<span class='color-light-gray'>
										by <strong class='color-orange'>{{$post->user->first_name.' '.$post->user->last_name}}</strong>
										on {{date('M d, Y',strtotime($post->created_at))}}
									</span>
								</div>
								<br>
								<p class='color-gray'>
									<article class='post-content'>{{$post->content}} </article> <a class='see-more' href="#!blog/{{date('Y-m-d',strtotime($post->created_at)).'/'.$post->slug}}"><strong class='color-orange'>more</strong></a>
								</p>
								<br>
								<div class='row'>
									<div class='col-lg-12'>
										<strong class='color-light-gray'>SHARE THIS ARTICLE</strong>
									</div>
									<br/>
									<div class='col-lg-9'>
										<span class='st_sharethis_large' displayText='ShareThis' st_url="{{URL::to('/')}}#!blog/{{date('Y-m-d',strtotime($post->created_at)).'/'.$post->slug}}"></span>
										<span class='st_facebook_large' displayText='Facebook' st_url="{{URL::to('/')}}#!blog/{{date('Y-m-d',strtotime($post->created_at)).'/'.$post->slug}}"></span>
										<span class='st_twitter_large' displayText='Tweet' st_url="{{URL::to('/')}}#!blog/{{date('Y-m-d',strtotime($post->created_at)).'/'.$post->slug}}"></span>
										<span class='st_linkedin_large' displayText='LinkedIn' st_url="{{URL::to('/')}}#!blog/{{date('Y-m-d',strtotime($post->created_at)).'/'.$post->slug}}"></span>
										<span class='st_pinterest_large' displayText='Pinterest' st_url="{{URL::to('/')}}#!blog/{{date('Y-m-d',strtotime($post->created_at)).'/'.$post->slug}}"></span>
										<span class='st_email_large' displayText='Email' st_url="{{URL::to('/')}}#!blog/{{date('Y-m-d',strtotime($post->created_at)).'/'.$post->slug}}"></span>
									</div>
								</div>
								<br>
								<div class='row'>
									<div class='col-lg-3'>
										<strong class='color-light-gray'>
											<a href="{{URL::to('/')}}#!blog/{{date('Y-m-d',strtotime($post->created_at)).'/'.$post->slug}}"  data-disqus-identifier="post_{{$post->id}}"><span  class='color-orange'>0</span>
												COMMENTS</a>
											</strong>
										</div>
										<div class='col-lg-3'>
											<strong class='color-light-gray'>
												<span class='color-orange'>{{count($post->tags)}}</span>
												TAGS
											</strong>
										</div>
									</div>
									<hr>
									<p class='color-gray'>
										<strong class='color-dark-gray'>Tags: </strong>
										<?php $sp = '';?>
										@foreach($post->tags as $tag)
										{{$sp.$tag->tag}}
										<?php $sp = ', ';?>
										@endforeach
									</p>

									<br>
									<br>
								</div>
								@endforeach
								<!-- end one blog -->

							</div>
						</div>
						<div class='col-lg-4 col-md-4 col-sm-12'>
							<div class='blog-newsletter-holder'>

								<div class='row'>
									<div class='col-lg-6 col-lg-offset-3 col-md-12 col-md col-sm-12'>
										<img src="{{URL::to('img/blog/logo.png')}}" class='center img-responsive'>
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-12'>
										<br>
										<h2 class='color-white'>Get free updates on how we do things here in Cloud I.T Canada</h2>
										<br>
									</div>
								</div>
								<div class='row'>
									<div class='col-lg-12'>
										<!-- Begin MailChimp Signup Form -->
										
										<div id="mc_embed_signup">
										<form action="http://blogspot.us7.list-manage.com/subscribe/post?u=6b2d34917e695197e11d857ce&amp;id=806c396012" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
												<div class="mc-field-group">
													<input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL"  placeholder='Your email address'>
												</div>
												<br>
												<div id="mce-responses" class="clear">
													<div class="response alert alert-danger" id="mce-error-response" style="display:none"></div>
													<div class="response alert alert-success" id="mce-success-response" style="display:none"></div>
												</div>	<div class="clear"><button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button form-control btn btn-orange"><strong>Send me updates</strong>
												</button>
												</div>
											</form>
									</div>
										 
<!--End mc_embed_signup--> 
</div>
</div>
<div class='row'>
	<div class='col-lg-12 color-white'>
		<h2>New here? Start with our best hits:</h2>
		<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<hr class='color-orange' style='border-top: 1px solid orange'>
			<br/>
			<div class='col-lg-12'>
				<span class='st_sharethis_large' displayText='ShareThis' st_url="{{URL::to('/')}}"></span>
				<span class='st_facebook_large' displayText='Facebook' st_url="{{URL::to('/')}}"></span>
				<span class='st_twitter_large' displayText='Tweet' st_url="{{URL::to('/')}}"></span>
				<span class='st_linkedin_large' displayText='LinkedIn' st_url="{{URL::to('/')}}"></span>
				<span class='st_pinterest_large' displayText='Pinterest' st_url="{{URL::to('/')}}"></span>
				<span class='st_email_large' displayText='Email' st_url="{{URL::to('/')}}"></span>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>			