<section class='blog-holder'>
<div id='single-blog-holder'></div>
<div id='blog-index-holder'>
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
							<strong class="navbar-brand blog-link" href="javascript:void(0)">Blog</strong>
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
								<img src="{{URL::to('img/blog/profile-pic.png')}}" data-email="{{$post->user->email}}" class="author-picture">
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
										<a href="{{URL::to('/')}}#!blog/{{date('Y-m-d',strtotime($post->created_at)).'/'.$post->slug}}" data-disqus-identifier="post_{{$post->id}}"><span class='color-orange'>0</span>
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
							<script type="text/javascript">
							var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';
							try {
								var jqueryLoaded=jQuery;
								jqueryLoaded=true;
							} catch(err) {
								var jqueryLoaded=false;
							}
							var head= document.getElementsByTagName('head')[0];
							if (!jqueryLoaded) {
								var script = document.createElement('script');
								script.type = 'text/javascript';
								script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
								head.appendChild(script);
								if (script.readyState && script.onload!==null){
									script.onreadystatechange= function () {
										if (this.readyState == 'complete') mce_preload_check();
									}    
								}
							}

							var err_style = '';
							try{
								err_style = mc_custom_error_style;
							} catch(e){
								err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
							}
							var head= document.getElementsByTagName('head')[0];
							var style= document.createElement('style');
							style.type= 'text/css';
							if (style.styleSheet) {
								style.styleSheet.cssText = err_style;
							} else {
								style.appendChild(document.createTextNode(err_style));
							}
							head.appendChild(style);
							setTimeout('mce_preload_check();', 250);

							var mce_preload_checks = 0;
							function mce_preload_check(){
								if (mce_preload_checks>40) return;
								mce_preload_checks++;
								try {
									var jqueryLoaded=jQuery;
								} catch(err) {
									setTimeout('mce_preload_check();', 250);
									return;
								}
								var script = document.createElement('script');
								script.type = 'text/javascript';
								script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
								head.appendChild(script);
								try {
									var validatorLoaded=jQuery("#fake-form").validate({});
								} catch(err) {
									setTimeout('mce_preload_check();', 250);
									return;
								}
								mce_init_form();
							}
							function mce_init_form(){
								jQuery(document).ready( function($) {
									var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
									var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
      options = { url: 'http://blogspot.us7.list-manage.com/subscribe/post-json?u=6b2d34917e695197e11d857ce&id=806c396012&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
      beforeSubmit: function(){
      	$('#mce_tmp_error_msg').remove();
      	$('.datefield','#mc_embed_signup').each(
      		function(){
      			var txt = 'filled';
      			var fields = new Array();
      			var i = 0;
      			$(':text', this).each(
      				function(){
      					fields[i] = this;
      					i++;
      				});
      			$(':hidden', this).each(
      				function(){
      					var bday = false;
      					if (fields.length == 2){
      						bday = true;
                                            fields[2] = {'value':1970};//trick birthdays into having years
                                        }
                                        if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                        	this.value = '';
                                        } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                        	this.value = '';
                                        } else {
                                        	if (/\[day\]/.test(fields[0].name)){
                                        		this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
                                        	} else {
                                        		this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
                                        	}
                                        }
                                    });
});
$('.phonefield-us','#mc_embed_signup').each(
	function(){
		var fields = new Array();
		var i = 0;
		$(':text', this).each(
			function(){
				fields[i] = this;
				i++;
			});
		$(':hidden', this).each(
			function(){
				if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
					this.value = '';
				} else {
					this.value = 'filled';
				}
			});
	});
return mce_validator.form();
}, 
success: mce_success_cb
};
$('#mc-embedded-subscribe-form').ajaxForm(options);


});
}
function mce_success_cb(resp){
	$('#mce-success-response').hide();
	$('#mce-error-response').hide();
	if (resp.result=="success"){
		$('#mce-'+resp.result+'-response').show();
		$('#mce-'+resp.result+'-response').html(resp.msg);
		$('#mc-embedded-subscribe-form').each(function(){
			this.reset();
		});
	} else {
		var index = -1;
		var msg;
		try {
			var parts = resp.msg.split(' - ',2);
			if (parts[1]==undefined){
				msg = resp.msg;
			} else {
				i = parseInt(parts[0]);
				if (i.toString() == parts[0]){
					index = parts[0];
					msg = parts[1];
				} else {
					index = -1;
					msg = resp.msg;
				}
			}
		} catch(e){
			index = -1;
			msg = resp.msg;
		}
		try{
			if (index== -1){
				$('#mce-'+resp.result+'-response').show();
				$('#mce-'+resp.result+'-response').html(msg);            
			} else {
				err_id = 'mce_tmp_error_msg';
				html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';

				var input_id = '#mc_embed_signup';
				var f = $(input_id);
				if (ftypes[index]=='address'){
					input_id = '#mce-'+fnames[index]+'-addr1';
					f = $(input_id).parent().parent().get(0);
				} else if (ftypes[index]=='date'){
					input_id = '#mce-'+fnames[index]+'-month';
					f = $(input_id).parent().parent().get(0);
				} else {
					input_id = '#mce-'+fnames[index];
					f = $().parent(input_id).get(0);
				}
				if (f){
					$(f).append(html);
					$(input_id).focus();
				} else {
					$('#mce-'+resp.result+'-response').show();
					$('#mce-'+resp.result+'-response').html(msg);
				}
			}
		} catch(e){
			$('#mce-'+resp.result+'-response').show();
			$('#mce-'+resp.result+'-response').html(msg);
		}
	}
}

</script>
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
</section>