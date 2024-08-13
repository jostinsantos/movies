    $(document).ready(function() {
        $('#movieSeriesSlider').swipe({
            swipe: function(event, direction) {
                if (direction === 'left') {
                    $(this).carousel('next');
                } else if (direction === 'right') {
                    $(this).carousel('prev');
                }
            },
            threshold: 0
        });
    });
