(function (w, doc, $) {
    'use strict';

    $(function () {
        var div = $('.figure'),
            imgs = div.find('img'),
            i = 0,
            limit = imgs.length,
            btnLeft = $('<div/>', {
                class: 'crsl-btn crsl-left',
                html: '<div class="crsl-inner">'
            }),
            btnRight = $('<div/>', {
                class: 'crsl-btn crsl-right',
                html: '<div class="crsl-inner">'
            }), 
            mask = $('<div/>', {
                class: 'mask'
            }),
            temp = $('<div/>');

        mask.css({'left': 0, 'width': 100 * limit + '%'});
        imgs.wrapAll(mask);
        div.addClass('carousel').append(btnLeft).append(btnRight);

        div.on('click', '.crsl-btn', function(evt){
            var btn = this,
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
    });

}(this, this.document, this.jQuery));