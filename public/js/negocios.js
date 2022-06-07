window.addEventListener('load', function() {
    var slider = new Glider(document.querySelector('.glider'), {
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
        /* dots: '.dots', */
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        },
        responsive: [{
            // screens greater than >= 775px
            breakpoint: 360,
            settings: {
                // Set to `auto` and provide item width to adjust to viewport
                slidesToShow: 1,
                slidesToScroll: 1,
                itemWidth: 150,
                duration: 0.25
            }
        }, {
            // screens greater than >= 1024px
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                itemWidth: 150,
                duration: 0.25
            }
        }]
    })

    slideAutoPaly(slider, '.glider');

    function slideAutoPaly(glider, selector, delay = 2000, repeat = true) {
        let autoplay = null;
        const slidesCount = glider.track.childElementCount;
        let nextIndex = 3;
        let pause = true;

        function slide() {
            autoplay = setInterval(() => {
                if (nextIndex >= slidesCount) {
                    if (!repeat) {
                        clearInterval(autoplay);
                    } else {
                        nextIndex = 0;
                    }
                }
                glider.scrollItem(nextIndex++);
            }, delay);
        }

        slide();

        var element = document.querySelector(selector);
        element.addEventListener('mouseover', (event) => {
            if (pause) {
                clearInterval(autoplay);
                pause = false;
            }
        }, 300);

        element.addEventListener('mouseout', (event) => {
            if (!pause) {
                slide();
                pause = true;
            }
        }, 300);
    }
})
