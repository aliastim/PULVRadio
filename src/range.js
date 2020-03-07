/*
var rangeSlider = function(){
    var slider = $('.range-slider'),
        range = $('.range-slider__range'),
        value = $('.range-slider__value');

    var player = document.querySelector('#' + "audioPlayer");

    slider.each(function(){

        value.each(function(){
            var value = $(this).prev().attr('value');
            $(this).html(value);
        });

        range.on('input', function(){
            $(this).next(value).html(this.value);
            console.log((this.value)/100);
            player.volume = ((this.value)/100);
        });
    });
};

rangeSlider();
*/
function volume(idPlayer) {
    var player = document.querySelector('#' + idPlayer);

    var rangeSlider = function(){
        var slider = $('.range-slider'),
            range = $('.range-slider__range'),
            value = $('.range-slider__value');

        slider.each(function(){

            value.each(function(){
                var value = $(this).prev().attr('value');
                $(this).html(value);

            });

            range.on('input', function(){
                $(this).next(value).html(this.value);
                console.log((this.value)/100);
                player.volume = ((this.value)/100);
            });
        });
    };

    rangeSlider();

}