	$(document).ready(function(){
		$('.scrollable').click(function(){
			var target = $($(this).attr('href'));
			var offset = target.offset().top;
			$('html body').animate({
				scrollTop: offset - 80
			}, 1000);
			return false;
		});


		$(window).scroll(function(){
			// console.log($(window).scrollTop() + ">>" + $('#home').offset().top);
			if($(window).scrollTop() > $('#home').offset().top -120 ){
				$('.navigation li.active').removeClass('active');
				$('.navigation li a[href="#home"]').parents('li:first').addClass('active');
			}
			if($(window).scrollTop() > $('#partners').offset().top -120 ){
				$('.navigation li.active').removeClass('active');
				$('.navigation li a[href="#partners"]').parents('li:first').addClass('active');
			}
			if($(window).scrollTop() > $('#company').offset().top -120 ){
				$('.navigation li.active').removeClass('active');
				$('.navigation li a[href="#company"]').parents('li:first').addClass('active');
			}
			if($(window).scrollTop() > $('#contact').offset().top -120 ){
				$('.navigation li.active').removeClass('active');
				$('.navigation li a[href="#contact"]').parents('li:first').addClass('active');
			}

			//start paralax
			var gap = $(window).scrollTop() - $('#home').offset().top;
			$('#home').css({
				"backgroundPosition" : function(){
					console.log($(this).css('backgroundPositionY'));
					return "0px "+ gap/1.2+ "px";
				}
			});
			gap = $(window).scrollTop() - $('.partners-holder:first').offset().top + 100;
			$('.partners-holder').css({
				"backgroundPosition" : function(){
					return "0px "+ gap/2+ "px";
				}
			});
			gap = $(window).scrollTop() - $('.contact-content-holder:first').offset().top + 100;
			$('.contact-content-holder').css({
				"backgroundPosition" : function(){
					return "0px "+ gap/2+ "px";
				}
			});
			gap = $(window).scrollTop() - $('.profile-holder:first').offset().top + 100;

			// $('.profile-holder').css({
			// 	"backgroundPosition" : function(){
			// 		return "0px "+ gap/2+ "px";
			// 	}
			// });
		});

		// $('.profile-list li a').tooltip({
		// 	placement: 'top'
		// }).click(function(){
		// 	$('.profile-list li.active').removeClass('active');
		// 	$(this).parents('li:first').addClass('active');
		// 	var bg = $(this).data('bg');
		// 	$('.container.profile-holder').css({backgroundImage: 'url("' + bg + '")'});
		// 	var bio = $($(this).data('tab-one')).html();
		// 	var inv = $($(this).data('tab-two')).html();
		// 	console.log(bio + inv);
		// 	$('#profile-tabs-holder #bio-tab').html(bio);
		// 	$('#profile-tabs-holder #invest-tab').html(inv);
		// 	return false;
		// });

		// //profile-tabs
		// //$('#profile-tabs').tab();
		// $('#profile-tabs a').click(function (e) {
		// 	e.preventDefault();
		// 	$(this).tab('show');
		// });

		//start paralax

		//start we invest in
		var i = 0;
		changeInvest = function(){
			var texts = [
				"with System Integrators",
				"with Managed Service Providers",
				"with Value Added Resellers",
				"with Independent Software Vendors",
				"with Independent Hardware Vendors",
				"with Enterprise I.T. Departments",
				"with SaaS Providers",
				"with I.T. Service Providers "
			];

			var text = texts[i];
			i++;

			if(i > texts.length - 1) i = 0;

			$("#invest-in").fadeOut(1000, function(){
				$(this).html(text);
				$(this).fadeIn(1000);
			});
		}

		var switching = setInterval("changeInvest()", 6000);
		//end we invest in

	});