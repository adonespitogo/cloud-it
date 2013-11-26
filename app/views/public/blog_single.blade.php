@foreach($posts as $i => $post)
<div class="blog-holder-single " data-id="{{$post->id}}" name = "#!blog/{{date('Y-m-d',strtotime($post->created_at)).'/'.$post->slug}}" style='display: none;'>
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
							<strong class="navbar-brand blog-link" href="javascript:void(0)" >Blog</strong>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class='blog-page-holder'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12 col-md-12 col-sm-12'>
					<div class='blog-list-holder'>
						<!-- start one blog -->
						<div class='blog-content-holder'>
							<h1>
								{{$post->title}}
							</h1>
							<div class='post-by-holder'>
								<img src="{{URL::to('img/blog/profile-pic.png')}}" data-email="{{$post->user->email}}" class="author-picture">
								<span class='color-light-gray'>
									by <strong class='color-orange'>{{$post->user->first_name.' '.$post->user->last_name}}</strong>
									on {{date('M d, Y',strtotime($post->created_at))}}
								</span>
							</div>
							<br>
							<p class='color-gray'>
								<article class='post-single-content'>{{$post->content}} </article> 
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
										<a href="{{URL::to('/')}}#!blog/{{date('Y-m-d',strtotime($post->created_at)).'/'.$post->slug}}"  data-disqus-identifier="post_{{$post->id}}"><span class='color-orange'>0</span>
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
								<div id="disqus_thread" data-href="{{URL::to('/')}}#!blog/{{date('Y-m-d',strtotime($post->created_at)).'/'.$post->slug}}"></div>
								<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
								<br>
							</div>
							<!-- end one blog -->

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach		
	<!-- End For Single post display-->