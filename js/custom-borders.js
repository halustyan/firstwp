"use strict";
	var underSliderItems = document.querySelectorAll('.under-slider-item');
	var circleUnderSlider = document.querySelectorAll('.circle-under-slider');
	for (var i = 0; i<underSliderItems.length; i++){
		for(var i = 0; i<circleUnderSlider.length;i++){
			circleUnderSlider[i].onmouseover = backgroundred;
		circleUnderSlider[i].onmouseout = backgroundredout;
		}
		
	}
	function backgroundred(){
       
		   this.style.backgroundColor = 'red';
	  
	}
	function backgroundredout(){
       
		   this.style.backgroundColor = '';
	   
	}
	

	