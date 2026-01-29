<a id="fixed-button" class="btn btn-accent-1">Book Now</a>
    <script>
        var btn = $('#fixed-button');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });
    </script>