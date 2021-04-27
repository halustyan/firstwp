
            $(document).on('ready', function() {

            $(".regular").slick({
                dots: false,
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [

                    {
                        breakpoint: 1400,
                        settings: {
                            arrows: true,
                        }
                    }, {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                            arrows: true,
                            slidesToScroll: 1
                        }
                    }, {
                        breakpoint: 795,
                        settings: {
                            slidesToShow: 1,
                            arrows: true,
                            slidesToScroll: 1
                        }
                    }
                ],
            });

        });