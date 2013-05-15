
(function (w, doc, $) {
    'use strict';

    // SVG fallback
    // toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
    if (!Modernizr.svg) {
        var imgs = doc.getElementsByTagName('img'),
            dotSVG = /.*\.svg$/,
            i;
        for (i = 0; i !== imgs.length; ++i) {
            if (imgs[i].src.match(dotSVG)) {
                imgs[i].src = imgs[i].src.slice(0, -3) + "png";
            }
        }
    }

    $(function () {

        if ($('.figure').length > 0) {

            var div = $('.figure'),
                divWidth = div.width(),
                imgs = div.find('img'),
                imgWidth = imgs.eq(0).width(),
                imgHeight = imgs.eq(0).height(),
                i = 0,
                prop,
                j,
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
                });

            if (divWidth !== imgWidth) {
                prop = divWidth / imgWidth;
                imgWidth = divWidth;
                imgHeight *= prop;
            }

            for (j = 0; j < limit; j += 1) {
                $(imgs[j]).attr('width', 100 / limit + '%');
                $(imgs[j]).attr('height', imgHeight);
            }

            mask.css({'left': 0, 'width': 100 * limit + '%'});
            imgs.wrapAll(mask);
            div.css('height', imgHeight).addClass('carousel').append(btnLeft).append(btnRight);

            div.on('click', '.crsl-btn', function() {
                var btn = $(this),
                    mask = btn.parent('.figure').find('.mask'),
                    dir = btn.hasClass('crsl-left') ? -1 : 1;

                i += dir;

                if (i < 0) {
                    i = limit - 1;
                } else if (i >= limit) {
                    i = 0;
                }

                mask.animate({'left': -100 * i + '%'}, 500);

            });
        }
    });

    $(function() {

        if ($('.slider').length > 0) {
            var slider = $('.slider'),
                ul = slider.find('ul'),
                imgs = slider.find('li'),
                qtde = imgs.length,
                i = 0,
                ulWidth = 100 * qtde + '%',
                liWidth = 100 / qtde + '%',
                rotate = function rotate() {
                    if (i >= qtde) {
                        i = 0;
                    }
                    var per = -1 * i * 100 + "%";
                    ul.animate({left: per}, 1000, function() { i += 1; });
                    w.setTimeout(rotate, 5000);
                };

            if (qtde < 2) { return; }

            imgs.each(function() {
                $(this).css('width', liWidth);
            });
            ul.css('width', ulWidth);

            w.setTimeout(rotate, 3000);
        }
    });

}(this, this.document, this.jQuery));