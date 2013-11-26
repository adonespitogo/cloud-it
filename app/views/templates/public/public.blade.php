@extends('templates.base')

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<!--     <link href="css/style.css" rel="stylesheet" media="screen"> -->
	{{ stylesheet_link_tag('public') }}
@stop

@section('header')
	@include('templates.public.header')
@stop

@section('content')
    
@stop

@section('footer')
	@include('templates.public.footer')
@stop

{{ HTML::script('js/jquery.js') }}

{{ HTML::script('js/marked.min.js')}}

{{ HTML::script('js/jquery.summarize.js') }}

{{ HTML::script('js/blog.js') }}

{{ HTML::script('js/bootstrap.min.js') }}

{{ HTML::script('js/jquery.scrollto.js') }}

{{ HTML::script('js/public.js') }}

  <script type="text/javascript">
/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
var disqus_shortname = 'cloudit'; // required: replace example with your forum shortname

/* * * DON'T EDIT BELOW THIS LINE * * */
(function () {
    var s = document.createElement('script'); s.async = true;
    s.type = 'text/javascript';
    s.src = '//' + disqus_shortname + '.disqus.com/count.js';
    (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script>
<script type="text/javascript">
	        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	        window.disqus_shortname = 'cloudit';
		var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		dsq.src = '//' + window.disqus_shortname + '.disqus.com/embed.js';
    function initDisqus(id) {
		
		$.getScript(dsq.src)
		        .done(function () {
		            DISQUS.reset({
	                config: function () {
	                    this.page.identifier = 'post_'+id; 
	                    this.page.url=window.location.href;
	                },
	                reload: true,
	            });
	        });
 
	}
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "2b3c0f7a-b8b6-4939-897f-1d5baf0c03b6", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>