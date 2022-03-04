(function ($) {
 "use strict";
    
		//---------------------------------------------
		//Nivo slider
		//---------------------------------------------
			 $('#ensign-nivoslider').nivoSlider({
				effect: 'random',
				slices: 15,
				boxCols: 8,
				boxRows: 4,
				animSpeed: 500,
				pauseTime: 5000,
				startSlide: 0,
				directionNav: false,
				controlNavThumbs: false,
				pauseOnHover: false,
				manualAdvance: false
			 });
			 
			$('#ensign-nivoslider-2').nivoSlider({
				effect: 'slideInRight',
				slices: 15,
				boxCols: 8,
				boxRows: 4,
				animSpeed: 500,
				pauseTime: 5000,
				startSlide: 0,
				directionNav: true,
				controlNavThumbs: true,
				pauseOnHover: true,
				manualAdvance: false
			 });

			$('#ensign-nivoslider-3').nivoSlider({
				effect: 'fade',
				slices: 15,
				boxCols: 8,
				boxRows: 4,
				animSpeed: 500,
				pauseTime: 5000,
				startSlide: 0,
				directionNav: true,
				controlNavThumbs: false,
				pauseOnHover: true,
				manualAdvance: false
			 }); 
})(jQuery); 