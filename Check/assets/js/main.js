jQuery(function($) {
	 new WOW().init();
	setTimeout(function() { $(".preloader-text, .preloader-percent").addClass('active'); }, 1000); 
	//setTimeout(function() { $(".preloader-container, .fader").addClass('hidden'); }, 4100); 
 
 $('.menu .menu-btn').click(function(e) {
    $('.menu-container').addClass('active');
});
$('.menu-container .cross').click(function(e) {
    $('.menu-container').removeClass('active');
});
// // if ( $( ".fullSection" ).length ) {
// 		$(function () {
// 			$('#fullpage').fullpage({
// 			  lockAnchors: true,
// 			  anchors:['home', 'our_story', 'real_estate', 'Private_equity','innovation', 'israel', 'europe', 'apac', 'usa'],
// 			  navigation: true,
// 			  navigationPosition: 'right',
// 			  navigationTooltips: ['Home', 'Our Story', 'Real Estate', 'Private Equity', 'Innovation', 'Global Reach', 'Global Reach', 'Global Reach', 'Global Reach'],
// 			  showActiveTooltip: true,
// 			  slidesNavigation: true,
// 			  slidesNavPosition: 'top',

// 			  //Скроллинг
// 			  css3: true,
// 			  scrollingSpeed: 400,
// 			  autoScrolling: true,
// 			  fitToSection: true,
// 			  fitToSectionDelay: 1000,
// 			  scrollBar: false,
// 			  easing: 'easeInOutCubic',
// 			  easingcss3: 'ease',
// 			//  scrollOverflow:true,
// 			//scrollOverflowOptions: {
// 			//	scrollbars: true,
// 			//	mouseWheel: true,
// 			//	hideScrollbars: false,
// 			//	fadeScrollbars: false,
// 			//	disableMouse: true,
// 			 // },
// 			  //normalScrollElements: '.iti__country-list',
// 			  //Доступ
// 			  keyboardScrolling: true,
// 			  animateAnchor: true,
// 			  recordHistory: true,

// 			  //Дизайн
// 			  controlArrows: true,
// 			  verticalCentered: true,
// 			  sectionsColor : ['#ccc', '#fff'],
// 			  paddingTop: '3em',
// 			  paddingBottom: '10px',

// 			  //Настроить селекторы
// 			  sectionSelector: '.fullSection',
// 				slideSelector: '.fullSlide',
// 			  lazyLoading: true,

// 			  //события
// 			  onLeave: function(isLast, origin, index){
// 				  //if(index === $('#fullpage .fullSection').length){ $('.header, .fp-show-active').addClass( "lower" ); }else{$('.header, .fp-show-active').removeClass( "lower" );} 

// 			  },
// 			  afterLoad: function(item, isLast, index){
//               //  Section indexes in fullpage start at 1
// 			  	//if($('.footer').hasClass('active')){
// 					//$(".header").addClass("scrolled");
// 				//} else{
// 				//	$(".header").removeClass("scrolled");
// 				//}
// 			  },
// 			  afterLoad: function(anchorLink, index){
//           		//$('.toanimateFirst').addClass('animated fadeInLeftBig');
// 				//$('.header .inner-container').addClass('animated fadeInRightBig');
// 			  },
// 			   onLeave: function(index, nextIndex, direction) {
// 			  // first animation
// 		//  if( index == 1 && nextIndex == 2 ) { 
// 		//	$isAnimatedSecond.addClass('animated fadeInRightBig'); 
// 		 // }
// 		 // else if( ( index == 1 || index == 2 ) && nextIndex == 3 ) {
// 		//	$isAnimatedThird.addClass('animated fadeInLeftBig'); 
// 		 // }
// 		 // else if( ( index == 1 || index == 2 || index == 3 ) && nextIndex == 4 ) {
// 		//	$isAnimatedFourth.addClass('animated zoomIn');
// 		//  }
// 		//  else if( ( index == 1 || index == 2 || index == 3 || index == 4) && nextIndex == 5 ) {
// 		//	$isAnimatedFifth.addClass('animated fadeInRightBig');
// 		  //}
// 	  },
// 			  afterRender: function(){},
// 			  afterResize: function(width, height){},
// 			  afterReBuild: function(){},
// 			  afterResponsive: function(isResponsive){},
// 			});
// 		});
// 	} 
// 	
// 	
// 	
// 	
// 	
});