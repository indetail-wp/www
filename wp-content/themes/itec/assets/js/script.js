$(function(){

	if($("#gmap-sapporo")[0]){
		/*------------------------
		gmap-sapporo
		------------------------*/
		if($(window).innerWidth()>767){
			var iconW = 55;
			var iconH = 71;
		}else{
			var iconW = 27;
			var iconH = 35;
		}

		function gmapSapporo() {
			var latlng = new google.maps.LatLng(43.060045, 141.343019);
			var latlng_train01 = new google.maps.LatLng(43.058556, 141.341391);
			var latlng_train02 = new google.maps.LatLng(43.060308, 141.352500);
			var latlng_train03 = new google.maps.LatLng(43.068658, 141.350595);
			var centerlatlng = new google.maps.LatLng(43.064316, 141.344228);
			var myOptions = {
				zoom: 14,
				center: centerlatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				scrollwheel: false,
				disableDefaultUI: true,
				draggable: false
			};
			var map = new google.maps.Map(document.getElementById('gmap-sapporo'), myOptions);


			/* アイコン設定 */
			var icon_office = new google.maps.MarkerImage('/common/img/base/map_pin_indetail.png',
				new google.maps.Size(iconW,iconH),
				new google.maps.Point(0,0)
			);
			var icon_train = new google.maps.MarkerImage('/common/img/base/map_pin_train.png',
				new google.maps.Size(iconW,iconH),
				new google.maps.Point(0,0)
			);

			if($(window).innerWidth()>767){
			}else{
				icon_office.scaledSize = new google.maps.Size(27, 35);
				icon_train.scaledSize = new google.maps.Size(27, 35);
			}



			var markerOptions_office = {
				position: latlng,
				map: map,
				icon: icon_office
				// shadow: shadow
			};
			var marker_office = new google.maps.Marker(markerOptions_office);

			var markerOptions_train01 = {
				position: latlng_train01,
				map: map,
				icon: icon_train
				// shadow: shadow
			};
			var marker_train01 = new google.maps.Marker(markerOptions_train01);

			var markerOptions_train02 = {
				position: latlng_train02,
				map: map,
				icon: icon_train
				// shadow: shadow
			};
			var marker_train02 = new google.maps.Marker(markerOptions_train02);

			var markerOptions_train03 = {
				position: latlng_train03,
				map: map,
				icon: icon_train
				// shadow: shadow
			};
			var marker_train03 = new google.maps.Marker(markerOptions_train03);


		  /* スタイル付き地図 */
			var styleOptions = [{
				featureType: 'all',
				elementType: 'labels',
				stylers: [{ visibility: 'on' }]
			}, {
				featureType: 'all',
				elementType: 'all'
				// stylers: [
				// { hue: '#799B89' },
				// { saturation: '-100' },
				// { lightness: '0' },
				// { gamma: '1.5' }]
			}];
			var lopanType = new google.maps.StyledMapType(styleOptions);
			map.mapTypes.set('', lopanType);
			map.setMapTypeId('');

		}
		gmapSapporo();

	}

	if($("#mod-mainContent")[0] && location.hash=="" && $(this).scrollTop() <=10 && $(window).innerWidth()>=768){
		if($("#top")[0] || $("#cat-sitemap")[0] || $("#cat-privacy")[0] || $("#cat-isms")[0] ){
		}else{
			var scrollMainContent = setTimeout(function(){
				$('body,html').stop().animate({
					scrollTop: $("#mod-mainContent").offset().top
				}, 800);
			 },2000);

			$(window).scroll(
				function(){
					clearTimeout(scrollMainContent);
				}
			);
		}

	}


});

$(function(){
	if($("#gmap-tokyo")[0]){
		/*------------------------
		gmap-tokyo
		------------------------*/
		if($(window).innerWidth()>767){
			var iconW = 55;
			var iconH = 71;
		}else{
			var iconW = 27;
			var iconH = 35;
		}
		function gmapTokyo() {
			var latlng = new google.maps.LatLng(35.646168, 139.744671);
			var latlng_train01 = new google.maps.LatLng(35.645798, 139.747667);
			var centerlatlng = new google.maps.LatLng(35.646626, 139.746601);
			var myOptions = {
				zoom: 15,
				center: centerlatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				scrollwheel: false,
				disableDefaultUI: true,
				draggable: false
			};
			var map = new google.maps.Map(document.getElementById('gmap-tokyo'), myOptions);

			/* アイコン設定 */
			var icon_office = new google.maps.MarkerImage('/common/img/base/map_pin_indetail.png',
				new google.maps.Size(iconW,iconH),
				new google.maps.Point(0,0)
			);
			var icon_train = new google.maps.MarkerImage('/common/img/base/map_pin_train.png',
				new google.maps.Size(iconW,iconH),
				new google.maps.Point(0,0)
			);

			if($(window).innerWidth()>767){
			}else{
				icon_office.scaledSize = new google.maps.Size(27, 35);
				icon_train.scaledSize = new google.maps.Size(27, 35);
			}

			var markerOptions_office = {
				position: latlng,
				map: map,
				icon: icon_office
				// shadow: shadow
			};
			var marker_office = new google.maps.Marker(markerOptions_office);

			var markerOptions_train01 = {
				position: latlng_train01,
				map: map,
				icon: icon_train
				// shadow: shadow
			};
			var marker_train01 = new google.maps.Marker(markerOptions_train01);



		  /* スタイル付き地図 */
			var styleOptions = [{
				featureType: 'all',
				elementType: 'labels',
				stylers: [{ visibility: 'on' }]
			}, {
				featureType: 'all',
				elementType: 'all'
				// stylers: [
				// { hue: '#799B89' },
				// { saturation: '-100' },
				// { lightness: '0' },
				// { gamma: '1.5' }]
			}];
			var lopanType = new google.maps.StyledMapType(styleOptions);
			map.mapTypes.set('', lopanType);
			map.setMapTypeId('');

		}
		gmapTokyo();

	}

});


$(function(){

	/*------------------------
	mod-gnavBtn
	------------------------*/
	$('.mod-gnavBtn').on('click',function(event) {
		event.preventDefault();
		if($(".mod-gnavBtn").hasClass("on")){
			$(".mod-gnavBtn").removeClass('on');
			$(".mod-gnav-folding").removeClass('on');

		}else{
			$(".mod-gnavBtn").addClass('on');
			$(".mod-gnav-folding").addClass('on');
		}
	});
	$('.mod-gnav-linksItem-openBtn').on('click',function(event) {
		event.preventDefault();
		var n = $('.mod-gnav-linksItem-openBtn').index(this);
		if($(this).hasClass("on")){
			$(this).removeClass('on');
			$(".mod-gnav-subLinks").eq(n).slideUp(200);
		}else{
			$('.mod-gnav-linksItem-openBtn').removeClass('on');
			$(this).addClass('on');
			$(".mod-gnav-subLinks").slideUp(200);
			$(".mod-gnav-subLinks").eq(n).slideDown(200);
		}
	});
	$('.mod-gnav-linksItem-openBtn').on('click',function(event) {
	});

	function scrollHeader(){
		if(
			$(this).scrollTop() > 50 && !$('.mod-header').hasClass('fixed')
		){
			$('.mod-header').addClass('fixed on');
		}else if(
			$(this).scrollTop() <= 50 && $('.mod-header').hasClass('fixed')
		){
			$('.mod-header').removeClass('fixed');
		}
	}
	$(window).scroll(scrollHeader);
	scrollHeader();


	/*------------------------
	mod-mv-en
	------------------------*/
	if($(".mod-mv-en")[0]){
		setTimeout(function(){ $(".mod-mv-en").addClass('on'); },400);
	}
	if($(".mod-mv-h")[0]){
		setTimeout(function(){ $(".mod-mv-h").addClass('on'); },400);
	}



	/*------------------------
	recruit
	------------------------*/


	var arg = new Object;
	var pair=location.search.substring(1).split('&');
	for(var i=0;pair[i];i++) {
	    var kv = pair[i].split('=');
	    arg[kv[0]]=kv[1];
	}

	$(function(){
		var index = (!arg.index) ? 0 : arg.index;
		tabOpen(index);
	});

	$(".recruit-job-jobBtnsItem").click(function(event) {
		var index = $(".recruit-job-jobBtnsItem").index(this);
		tabOpen(index);
	});

	function tabOpen(index){
		$(".recruit-job-jobBtnsItem, .recruit-job-jobSecItem").removeClass('on');
		$(".recruit-job-jobBtnsItem").eq(index).addClass('on');
		$(".recruit-job-jobSecItem").eq(index).addClass('on');
	}



	if($(".lightbox")[0]){
		$( '.lightbox' ).swipebox( {
			useCSS : true, // false will force the use of jQuery for animations
			useSVG : true, // false to force the use of png for buttons
			initialIndexOnArray : 0, // which image index to init when a array is passed
			hideCloseButtonOnMobile : false, // true will hide the close button on mobile devices
			hideBarsDelay : 3000, // delay before hiding bars on desktop
			videoMaxWidth : 1140, // videos max width
			removeBarsOnMobile : false,
			beforeOpen: function() {}, // called before opening
			afterOpen: null, // called after opening
			afterClose: function() {}, // called after closing
			loopAtEnd: false // true will return to the first image after the last image is reached
		} );
	}
	if($(".lightbox_youtube")[0]){
		$( '.lightbox_youtube' ).swipebox( {
		  autoplayVideos: true,
		  useCSS : true, // false will force the use of jQuery for animations
		  useSVG : true, // false to force the use of png for buttons
		  initialIndexOnArray : 0, // which image index to init when a array is passed
		  hideCloseButtonOnMobile : false, // true will hide the close button on mobile devices
		  hideBarsDelay : 3000, // delay before hiding bars on desktop
		  videoMaxWidth : 1140, // videos max width
		  removeBarsOnMobile : false,
		  beforeOpen: function() {}, // called before opening
		  afterOpen: null, // called after opening
		  afterClose: function() {}, // called after closing
		  loopAtEnd: false // true will return to the first image after the last image is reached
		} );
	}


	if($("#top")[0]){
		setTimeout(function(){ $(".home-mv-d").addClass('online01'); },400);
		setTimeout(function(){ $(".home-mv-d").addClass('onfill'); },2000);
		setTimeout(function(){ $(".home-mv-bg").addClass('on'); },2000);
		setTimeout(function(){ $(".mod-header").addClass('on'); },6000);
		setTimeout(function(){ $(".home-mv-h").addClass('on'); },3000);
		setTimeout(function(){ $(".home-mv-h-line").addClass('on'); },3000);
		setTimeout(function(){ $(".home-mv-lead").addClass('on'); },6000);
		setTimeout(function(){ $(".mod-mv-arrow").addClass('on'); },6800);

		$('path').each(function(i){
			var $this = $(this);
			var path = this;
			var len = path.getTotalLength();
			$this.css({
				'stroke-dashoffset':len,
				'stroke-dasharray':len
			});
		});




		function scrollHome(){
			if(
				$(this).scrollTop() > $(".home-technology").offset().top - $(window).innerHeight()/2 &&
				$(this).scrollTop() <= $(".mod-advantage-wrap").offset().top - $(window).innerHeight()/2
			){
				$(".home-technology").addClass('on');

			// }else if(
			// 	$(this).scrollTop() > $(".mod-advantage-wrap").offset().top - $(window).innerHeight()/2 &&
			// 	$(this).scrollTop() <= $(".home-arrowSec.item-growthcloud").offset().top - $(window).innerHeight()/2
			// ){
			// 	setTimeout(function(){ $(".mod-advantage-pentagonsItem").addClass('on'); },100);
			// 	setTimeout(function(){ $(".mod-advantage-listItem").addClass('on'); },1400);


			}else if(
				$(this).scrollTop() <= $(".home-arrowSec.item-growthcloud").offset().top - $(window).innerHeight()/2
			){
				$(".home-arrowSec-pentagon").removeClass('on');

			}else if(
				$(this).scrollTop() > $(".home-arrowSec.item-growthcloud").offset().top - $(window).innerHeight()/2 &&
				$(this).scrollTop() <= $(".home-arrowSec.item-moremall").offset().top - $(window).innerHeight()/2
			){
				$(".home-arrowSec.item-growthcloud").addClass('on');
				$(".home-arrowSec-pentagon").removeClass('on');
				$(".home-arrowSec.item-growthcloud .home-arrowSec-pentagon").addClass('on');

			}else if(
				$(this).scrollTop() > $(".home-arrowSec.item-moremall").offset().top - $(window).innerHeight()/2 &&
				$(this).scrollTop() <= $(".home-arrowSec.item-socialgame").offset().top - $(window).innerHeight()/2
			){
				$(".home-arrowSec.item-moremall").addClass('on');
				$(".home-arrowSec-pentagon").removeClass('on');
				$(".home-arrowSec.item-moremall .home-arrowSec-pentagon").addClass('on');

			// mediaあり
			// }else if(
			// 	$(this).scrollTop() > $(".home-arrowSec.item-socialgame").offset().top - $(window).innerHeight()/2 &&
			// 	$(this).scrollTop() <= $(".home-media").offset().top - $(window).innerHeight()/2
			// ){
			// 	$(".home-arrowSec.item-socialgame").addClass('on');
			// 	$(".home-arrowSec-pentagon").removeClass('on');
			// 	$(".home-arrowSec.item-socialgame .home-arrowSec-pentagon").addClass('on');

			// }else if(
			// 	$(this).scrollTop() > $(".home-media").offset().top - $(window).innerHeight()/2 &&
			// 	$(this).scrollTop() <= $(".home-recruit").offset().top - $(window).innerHeight()/2

			//mediaなし
			}else if(
				$(this).scrollTop() > $(".home-arrowSec.item-socialgame").offset().top - $(window).innerHeight()/2 &&
				$(this).scrollTop() <= $(".home-recruit").offset().top - $(window).innerHeight()/2
			){
				$(".home-arrowSec.item-socialgame").addClass('on');
				$(".home-arrowSec-pentagon").removeClass('on');
				$(".home-arrowSec.item-socialgame .home-arrowSec-pentagon").addClass('on');

			}else if(
				$(this).scrollTop() > $(".home-recruit").offset().top - $(window).innerHeight()/2
			){
				$(".home-arrowSec-pentagon").removeClass('on');
				$(".home-recruit").addClass('on');
			}
		}
		$(window).scroll(scrollHome);
		scrollHome();
	}

	if($(".mod-advantage-list")[0]){
		function scrollAdvantage(){
			if(
				$(this).scrollTop() > $(".mod-advantage-wrap").offset().top - $(window).innerHeight()/2
			){
				setTimeout(function(){ $(".mod-advantage-pentagonsItem").addClass('on'); },100);
				setTimeout(function(){ $(".mod-advantage-listItem").addClass('on'); },1400);
			}
		}
		$(window).scroll(scrollAdvantage);
		scrollAdvantage();
	}

	if($("#cat-service.page-index")[0]){
		function scrollServiceIndex(){
			if(
				$(this).scrollTop() <= $(".service-index-advantagesItem.item01").offset().top - $(window).innerHeight()/2
			){
				$(".service-index-advantages-ico").removeClass('on');
			}else if(
				$(this).scrollTop() > $(".service-index-advantagesItem.item01").offset().top - $(window).innerHeight()/2 &&
				$(this).scrollTop() <= $(".service-index-advantagesItem.item02").offset().top - $(window).innerHeight()/2
			){
				$(".service-index-advantages-ico").removeClass('on');
				$(".service-index-advantagesItem.item01 .service-index-advantages-ico").addClass('on');
			}else if(
				$(this).scrollTop() > $(".service-index-advantagesItem.item02").offset().top - $(window).innerHeight()/2 &&
				$(this).scrollTop() <= $(".service-index-advantagesItem.item03").offset().top - $(window).innerHeight()/2
			){
				$(".service-index-advantages-ico").removeClass('on');
				$(".service-index-advantagesItem.item02 .service-index-advantages-ico").addClass('on');

			}else if(
				$(this).scrollTop() > $(".service-index-advantagesItem.item03").offset().top - $(window).innerHeight()/2 &&
				$(this).scrollTop() <= $(".service-index-advantagesItem.item04").offset().top - $(window).innerHeight()/2
			){
				$(".service-index-advantages-ico").removeClass('on');
				$(".service-index-advantagesItem.item03 .service-index-advantages-ico").addClass('on');

			}else if(
				$(this).scrollTop() > $(".service-index-advantagesItem.item04").offset().top - $(window).innerHeight()/2 &&
				$(this).scrollTop() <= $(".service-index-advantagesItem.item05").offset().top - $(window).innerHeight()/2
			){
				$(".service-index-advantages-ico").removeClass('on');
				$(".service-index-advantagesItem.item04 .service-index-advantages-ico").addClass('on');

			}else if(
				$(this).scrollTop() > $(".service-index-advantagesItem.item05").offset().top - $(window).innerHeight()/2 &&
				$(this).scrollTop() <= $(".mod-footerBnrs").offset().top - $(window).innerHeight()/2
			){
				$(".service-index-advantages-ico").removeClass('on');
				$(".service-index-advantagesItem.item05 .service-index-advantages-ico").addClass('on');

			}else if(
				$(this).scrollTop() > $(".mod-footerBnrs").offset().top - $(window).innerHeight()/2
			){
				$(".service-index-advantages-ico").removeClass('on');
			}
		}
		$(window).scroll(scrollServiceIndex);
		scrollServiceIndex();

	}


});

$(function(){

	/* smooth scroll */
	$('a[href^="#"], a[href^="' + location.pathname + '#"]').on('click', function() {
		var hash = $(this).attr("href");
		if(hash === "#"){
			return;
		}
		smoothScroll(hash);
		return false;
	});

	function smoothScroll(hash) {
		var target = $(hash).offset().top;

		$('body,html').stop().animate({
			scrollTop: target-55
		}, 800, function() {
			$(this).unbind("mousewheel DOMMouseScroll");
		}).bind("mousewheel DOMMouseScroll", function() {
			$(this).queue([]).stop();
			$(this).unbind("mousewheel DOMMouseScroll");
		});


		$(".mod-gnavBtn").removeClass('on');
		$(".mod-gnav-folding").removeClass('on');
	}

});
