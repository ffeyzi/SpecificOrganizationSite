//Javascript file to control the Slider 
//Last Updated: 
//Author: Fred Feyzi

var width = 900;
var pauseTime = 4000;
var currentSlide = 1;

//cache DOM
var $slider = $('#slider');
//the ul element.
var $slidesContainer = $slider.find('.slides');
//each individual slide
var $slides = $slidesContainer.find('.slide');

//set up interval in global scope
var interval;

function startSlider() {
	interval = setInterval(function() {
		$slidesContainer.animate({'margin-left': '-='+width}, 1000, function() {
			currentSlide++;
			if (currentSlide == $slides.length) {
				currentSlide = 1;
				$slidesContainer.css('margin-left', 0);
			}
		});
	}, pauseTime);
}

function stopSlider() {
	clearInterval(interval);
}

$slider.on('mouseenter', stopSlider).on('mouseleave', startSlider);

//in case user refreshes the page
startSlider();