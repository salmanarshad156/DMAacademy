window.onscroll = function () {
    myFunction();
};

(function ($) {

    var slide = function (ele, options) {
        var $ele = $(ele);
        var setting = {
            speed: 1000,
            interval: 3000,

        };
        $.extend(true, setting, options);
        var states = [
            // {$zIndex: 1, width: 170, height: 230, top: 60, left: 134, $opacity: 0.2},
            {$zIndex: 1, width: 320, height: 340, top: 40, left: 0, $opacity: 0.4},
            {$zIndex: 2, width: 320, height: 370, top: 20, left: 100, $opacity: 0.7},
            {$zIndex: 3, width: 320, height: 400, top: 0, left: 300, $opacity: 1},
            {$zIndex: 2, width: 320, height: 370, top: 20, left: 500, $opacity: 0.7},
            {$zIndex: 1, width: 320, height: 340, top: 40, left: 600, $opacity: 0.4},
            // {$zIndex: 1, width: 170, height: 230, top: 60, left: 500, $opacity: 0.2}
        ];

        var $lis = $ele.find('li');
        var timer = null;

        // 事件
        $ele.find('.hi-next').on('click', function () {
            next();
        });
        $ele.find('.hi-prev').on('click', function () {
            states.push(states.shift());
            move();
        });
        $ele.on('mouseenter', function () {
            clearInterval(timer);
            timer = null;
        }).on('mouseleave', function () {
            autoPlay();
        });

        move();
        autoPlay();

        function move() {
            $lis.each(function (index, element) {
                var state = states[index];
                $(element).css('zIndex', state.$zIndex).finish().animate(state, setting.speed).find('img').css('opacity', state.$opacity);
            });
        }

        function next() {
            states.unshift(states.pop());
            move();
        }

        function autoPlay() {
            timer = setInterval(next, setting.interval);
        }
    }
    $.fn.hiSlide = function (options) {
        $(this).each(function (index, ele) {
            slide(ele, options);
        });
        return this;
    }
})(jQuery);
