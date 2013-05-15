// DOM Ready
$(function() {
	
	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

});

(function (w, doc, $) {
    'use strict';

    $(function () {
        console.log($('.figure').length);

    if ($('.figure').length > 0) {


        var div = $('.figure'),
        	divWidth = div.width(),
            imgs = div.find('img'),
            imgWidth = imgs.eq(0).width(),
            imgHeight = imgs.eq(0).height(),
            i = 0,
            limit = imgs.length,
            btnLeft = $('<div/>', {
                'class': 'crsl-btn crsl-left',
                'html': '<div class="crsl-inner">'
            }),
            btnRight = $('<div/>', {
                'class': 'crsl-btn crsl-right',
                'html': '<div class="crsl-inner">'
            }), 
            mask = $('<div/>', {
                'class': 'mask'
            }),
            temp = $('<div/>');

        if(divWidth !== imgWidth) {
        	var prop = divWidth/imgWidth;
        	imgWidth = divWidth;
        	imgHeight *= prop;
        }
    	
    	for(var j=0; j<limit; j++) {
    		$(imgs[j]).attr('width', 100/limit + '%');
    		$(imgs[j]).attr('height', imgHeight);
    	}

        mask.css({'left': 0, 'width': 100 * limit + '%'});
        imgs.wrapAll(mask);
        div.css('height', imgHeight).addClass('carousel').append(btnLeft).append(btnRight);

        div.on('click', '.crsl-btn', function(evt){
            var btn = $(this),
                mask = btn.parent('.figure').find('.mask'),
                dir = btn.hasClass('crsl-left') ? -1 : 1;

            i += dir;

            if (i < 0 ) {
                i = limit -1;
            } else if (i >= limit ) {
                i = 0
            }
            
            mask.animate({'left': -100 * i + '%'}, 500);

        });
    }
    });

}(this, this.document, this.jQuery));