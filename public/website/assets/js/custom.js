        $(document).ready(function () {

            $(".nav-item").click(function () {
                $(this).addClass("active").siblings().removeClass("active");
            });
        });

        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function () {
            $('.js-example-basic-single').select2();
        });

 
        $('.owl-carousel1').owlCarousel({
            loop: true,
            margin: 10,
            rtl: true,
            autoplay: true,
            autoplayTimeout: 1500,
            responsiveClass: true,
            nav: true,
            responsive: {
                0: {
                    items: 2,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        })
        $('.owl-carousel2').owlCarousel({
            loop: true,
            margin: 10,
            rtl: true,
            autoplay: true,
            autoplayTimeout: 1500,
            responsiveClass: true,
            nav: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: false,
                    loop: false
                }
            }
        })

        var btn = $('#button');

        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });


        function ScrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }




