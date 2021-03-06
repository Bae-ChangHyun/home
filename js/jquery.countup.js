/**
 * @name		jQuery Count-UP Plugin
 * @author		Martin Angelov
 * @version 	1.0
 * @url			http://tutorialzine.com/2012/09/count-up-jquery/
 * @license		MIT License
 */

(function($){

	// Number of seconds in every time division
	var days	= 24*60*60,
		hours	= 60*60,
		minutes	= 60;

	// Creating the plugin
	// Creating the plugin
	$.fn.countup = function(prop){

	    var options = $.extend({
	        callback    : function(){},
	        start       : new Date()    // Changing this to "start"
	    },prop);

	    // Tename the "left" variable to "passed"
	    var passed = 0, d, h, m, s,
	        positions;

	    init(this, options);

	    positions = this.find('.position');

	    (function tick(){

	        // Calculate the passed time
	        passed = Math.floor((new Date() - options.start) / 1000);



	        // Calculate the passed minutes, hours and days

					d = Math.floor(passed / days );
			    updateTrio(0, 1, 2, d);
			    passed -= d*days;

	        h = Math.floor(passed / hours);
	        updateDuo(3, 4, h);
	        passed -= h*hours;

	        m = Math.floor(passed / minutes);
	        updateDuo(5, 6, m);
	        passed -= m*minutes;

	        // Number of seconds passed
	        s = passed;
	        updateDuo(7, 8, s);

	        // Calling an optional user supplied callback
	        options.callback(d, h, m, s);

	        // Scheduling another call of this function in 1s
	        setTimeout(tick, 1000);
	    })();

	    // This function updates two digit positions at once
	    function updateDuo(minor,major,value){
	        switchDigit(positions.eq(minor),Math.floor(value/10)%10);
	        switchDigit(positions.eq(major),value%10);
	    }

			function updateTrio(minor, middle, major,value){
        switchDigit(positions.eq(minor),Math.floor(value/100)%10);
        switchDigit(positions.eq(middle),Math.floor(value/10)%10);
        switchDigit(positions.eq(major),value%10);
    }
	    return this;
	};


	function init(elem, options){
		elem.addClass('countdownHolder');

		$('<span class="countDays">').html(
		            '<span class="position">\
		                <span class="digit static">0</span>\
		            </span>\
		            <span class="position">\
		                <span class="digit static">0</span>\
		            </span>\
		          <span class="position">\
		                <span class="digit static">0</span>\
		            </span>'
		        ).appendTo(elem);
		  elem.append('<span class="countDiv countDivDays"></span>');


		// Creating the markup inside the container
		$.each(['Hours','Minutes','Seconds'],function(i){
			$('<span class="count'+this+'">').html(
				'<span class="position">\
					<span class="digit static">0</span>\
				</span>\
				<span class="position">\
					<span class="digit static">0</span>\
				</span>'
			).appendTo(elem);

			if(this!="Seconds"){
				elem.append('<span class="countDiv countDiv'+i+'"></span>');
			}
		});

	}

	// Creates an animated transition between the two numbers
	function switchDigit(position,number){

		var digit = position.find('.digit')

		if(digit.is(':animated')){
			return false;
		}

		if(position.data('digit') == number){
			// We are already showing this number
			return false;
		}

		position.data('digit', number);

		var replacement = $('<span>',{
			'class':'digit',
			css:{
				top:'-2.1em',
				opacity:0
			},
			html:number
		});

		// The .static class is added when the animation
		// completes. This makes it run smoother.

		digit
			.before(replacement)
			.removeClass('static')
			.animate({top:'2.5em',opacity:0},'fast',function(){
				digit.remove();
			})

		replacement
			.delay(100)
			.animate({top:0,opacity:1},'fast',function(){
				replacement.addClass('static');
			});
	}
})(jQuery);
