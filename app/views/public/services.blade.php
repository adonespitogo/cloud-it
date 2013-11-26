<div class='nav-top-holder' id="services">
	<div class='container'>
		<div class='row'>
			<div class='col-lg-3'>
				<span class='color-white'>
					<img src="{{URL::to('img/services/scroll-icon.png')}}">
					<span class='color-white page-nav-text scrollable' href='#services'>SERVICES</span>
				</span>
			</div>
		</div>
	</div>
</div>
<div class='container' id='services-inner-holder'>
	<div class='row'>
		<div class='col-lg-3'>
			<h1 class='page-h'>SERVICES WE OFFER</h1>
		</div>
	</div>
	<div class='row'>
		<div class='col-lg-12'>
			<p class='regular-text'>The  quick brown fox jumps over the lazy dog..The  quick brown fox jumps over the lazy dog..The  quick brown fox jumps over the lazy dog..The  quick brown fox jumps over the lazy dog..The  quick brown fox jumps over the lazy dog..</p>
		</div>
	</div>
	<div class='row serv-navs-con'>
		<ul id="serviceTab" class="nav nav-tabs">
			<li class='col-lg-3 serv-nav'>
				<a href="#nav1" data-toggle="tab" id='tab1'>
					<img src="{{URL::to('img/services/services-nav-1.png')}}">
					<span class='service-nav-cap'>COMPUTING WORKSHOP</span>
				</a>
			</li>
			<li class='col-lg-3 serv-nav'>
				<a href="#nav2" data-toggle="tab" id='tab2'>
					<img src="{{URL::to('img/services/services-nav-2.png')}}">
					<span class='service-nav-cap'>DESIGN & IMPLEMENTATION</span>
				</a>
			</li>
			<li class='col-lg-3 serv-nav'>
				<a href="#nav3" data-toggle="tab" id='tab3'>
					<img src="{{URL::to('img/services/services-nav-3.png')}}">
					<span class='service-nav-cap'>ACCELERATED ROAD MAP</span>
				</a>
			</li>
			<li class='col-lg-3 serv-nav'>
				<a href="#nav4" data-toggle="tab" id='tab4'>
					<img src="{{URL::to('img/services/services-nav-4.png')}}">
					<span class='service-nav-cap'>CLOUD LAB</span>
				</a>
			</li>
		</ul>
	</div>
</div>
<div class='serv-bottom-holder'>
	<div class='container'>
		<div class='row'>
			<div class='row arrows'>
				<span class='col-lg-3 active arrow-select' id='tab1_arrow'>&nbsp;
				</span>
				<span class='col-lg-3 arrow-select'  id='tab2_arrow'>&nbsp;
				</span>
				<span class='col-lg-3 arrow-select'  id='tab3_arrow'>&nbsp;
				</span>
				<span class='col-lg-3 arrow-select'  id='tab4_arrow'>&nbsp;
					&nbsp;
				</span>
			</div>	
		</div>
	      <div id="serviceTabContent" class="tab-content color-white">
		        <div class="tab-pane fade margin-tp-27" id="nav1">
		          <h1 class='page-h pad-top-0'>SERVICES WE OFFER</h1>
		          <p class='regular-text'>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
		        </div>
		        <div class="tab-pane fade active in margin-tp-27" id="nav2">
		           <h1 class='page-h pad-top-0'>SERVICES WE OFFER</h1>
		          <p class='regular-text'>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
		        </div>
		        <div class="tab-pane fade active in margin-tp-27" id="nav3">
		           <h1 class='page-h pad-top-0'>SERVICES WE OFFER</h1>
		          <p class='regular-text'>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
		        </div>
		        <div class="tab-pane fade active in margin-tp-27" id="nav4">
		          <h1 class='page-h pad-top-0'>SERVICES WE OFFER</h1>
		          <p class='regular-text'>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
		        </div>
	      </div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#serviceTab a:first').tab('show');
		$('#serviceTab li a').click(function (e) {
			  e.preventDefault();
			  $(this).tab('show');
			  var id = $(this).attr('id');
			  $('.arrow-select').removeClass('active');
			  $('#'+id+'_arrow').addClass('active');
		});
	});
</script>