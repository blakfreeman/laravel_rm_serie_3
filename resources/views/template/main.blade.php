<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slidefolio</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="{{ asset('css/slidefolio.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
</head>

<body>
    @yield("content")
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('js/jquery.vegas.js') }}"></script>
    <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <!-- Slideshow Background  -->
    <script>
        $.vegas('slideshow', {
            delay: 5000,
            backgrounds: [{
                    src: '{{ asset('img/nature1.jpg') }}',
                    fade: 2000
                },
                {
                    src: '{{ asset('img/bw1.jpg') }}',
                    fade: 2000
                },
                {
                    src: '{{ asset('img/portrait1.jpg') }}',
                    fade: 2000
                },
                {
                    src: '{{ asset('img/portrait5.jpg') }}',
                    fade: 2000
                },
                {
                    src: '{{ asset('img/portrait2.jpg') }}',
                    fade: 2000
                },
                {
                    src: '{{ asset('img/portrait3.jpg') }}',
                    fade: 2000
                },
                {
                    src: '{{ asset('img/portrait4.jpg') }}',
                    fade: 2000
                },
                {
                    src: '{{ asset('img/forest.jpg') }}',
                    fade: 2000
                }
            ]
        })('overlay', {
            src: '{{ asset('img/overlay.png') }}'
        });
    </script>
    <!-- /Slideshow Background -->

    <!-- Mixitup : Grid -->
    <script>
        $(function() {
            $('#Grid').mixitup();
        });
    </script>
    <!-- /Mixitup : Grid -->

    <!-- Custom JavaScript for Smooth Scrolling - Put in a custom JavaScript file to clean this up -->
    <script>
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||
                    location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>
    <!-- Navbar -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#nav').scrollToFixed();
        });
    </script>
    <!-- /Navbar-->

</body>

</html>
