$(document).ready(function() {
	
	$('body').addClass('loaded');

	$('.gall__list').lightGallery({
	    thumbnail: false,
	    // animateThumb: false,
	    selector: '.gall__it-zoom',
	    // showThumbByDefault: false
	});

	$('.m-slider').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  prevArrow: ".m-slider__prev",
	  nextArrow: ".m-slider__next",
		dots: true,
		appendDots: ".m-slider__dots",
	});
	
	var categ__gall =	$('.categ__gall').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	});

	
	
	$('body').on('click', '.categ__gall-prev', function(e){
		e.preventDefault();
		var objj = {
			curr: $(this),
			init: function(){
				this.gall = this.curr.parent().siblings('.categ__gall');
				this.zoom = this.curr.siblings('.categ__gall-zoom');
			}	
		};
		objj.init();
		objj.gall.slick('slickPrev');
		objj.linnk = objj.gall.find('.slick-slide.slick-current.slick-active img').attr('data-full');
		objj.zoom.attr('href', objj.linnk);
	});

	$('body').on('click', '.categ__gall-next', function(e){
		e.preventDefault();
		var objj = {
			curr: $(this),
			init: function(){
				this.gall = this.curr.parent().siblings('.categ__gall');
				this.zoom = this.curr.siblings('.categ__gall-zoom');
			}	
		};
		objj.init();
		objj.gall.slick('slickNext');
		objj.linnk = objj.gall.find('.slick-slide.slick-current.slick-active img').attr('data-full');
		objj.zoom.attr('href', objj.linnk);

	});
	
	$('.categ__gall-zoom').lightGallery({
	    selector: 'this'
	});


	// (function(){
		
	// 	$('body').on('click','.txt-blck-2',function(){
	// 		// $(this).text( objj.sum );
	// 		console.log(objj);
	// 	})

	// 	var objj =	{
	// 		name : "Sweety",
	// 		surname: "Douglas",
	// 		el: $('.sect-title.c-grn.txt-cent'),
	// 		init: function(){
	// 			this.sum = this.name + ' ' + this.surname;
	// 		}
	// 		// clicked: 
	// 	}

	// 	objj.init();

	// })();

	// alert('wewe');
});


// $(window).on('load',function(){
// 	$('body').addClass('loaded');
// });
