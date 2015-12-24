//Javascript file to control the Slider 
//Last Updated: 
//Author: Fred Feyzi

var width = 900;
var pauseTime = 3000;

//cache DOM
var $slider = $('#slider');
var $slidesContainer = $slider.find('.slides');
var $slides = $slidesContainer.find('.slide');

$(function() {
	setInterval(function() {
		$slidesContainer.animate({'margin-left': '-='+width}, 1000);
	}, pauseTime);
});
