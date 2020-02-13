jQuery(function($) {


    $('.upload-img-btn').on('click', function(e) {
        e.preventDefault();
        var inputUrl = $(this).prevAll('.imgUrl');
        var inputTitle = $(this).prevAll('.imgTitle');
        var prevImg = $(this).prevAll('.imgPrev');
        console.log(prevImg.attr('src'));

        var frame              =  wp.media({
            title:                'Choose or load image',
            button:               {text: 'Use this image'},
            multiple:             false
        });
        frame.open();
        frame.on('select', function() {
            var attachment = frame.state().get('selection').first().toJSON();
            inputUrl.val(attachment.url);
            inputTitle.val(attachment.title);
            prevImg.attr("src", attachment.url);
        });
    });


});