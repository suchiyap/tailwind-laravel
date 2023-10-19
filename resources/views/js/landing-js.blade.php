@vite(['node_modules/slick-carousel/slick/slick.min.js'])
<script>
   document.addEventListener("DOMContentLoaded", () => {
    $('.banner-slider').slick({
        dots: true,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '230px',
        asNavFor: '.banner-desc',
        responsive: [
            {
            breakpoint: 1200,
            settings: {
                centerPadding: '150px',
            }
            },
            {
            breakpoint: 1028,
            settings: {
                centerPadding: '100px',
                dots:false,
            }
            },
            {
            breakpoint: 768,
            settings: {
                centerMode: false,
            }
            },
        ]
    });

    $('.banner-desc').slick({
        arrows: false,
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '230px',
        asNavFor: '.banner-slider',
        responsive: [
            {
            breakpoint: 1200,
            settings: {
                centerPadding: '150px',
                
            }
            },
            {
            breakpoint: 1028,
            settings: {
                centerPadding: '100px',
            }
            },
            {
            breakpoint: 768,
            settings: {
                centerPadding: '40px',
                centerMode: false,
            }
            },
        ]
    });

    $('.category-slider').slick({
        arrows: true,
        slidesToShow: 7,
        infinite: false,
        responsive:[
            {
            breakpoint: 1200,
            settings: {
                slidesToShow: 5,
                
            }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    arrows: false,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 2,
                    arrows: false,
                }
            }
        ]
    });

    $('.upcoming-events').slick({
        rows: 3,
        slidesPerRow: 3,
        infinite: false,
        responsive:[
            {
            breakpoint: 1200,
            settings: {
                slidesPerRow: 2,
            }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesPerRow: 1,
                    arrows: false,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesPerRow: 1,
                    arrows: false,
                }
            }
        ]
    });

    $('.ongoing-events').slick({
        rows: 3,
        slidesPerRow: 3,
        infinite: false,
        responsive:[
            {
            breakpoint: 1200,
            settings: {
                slidesPerRow: 2,
            }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesPerRow: 1,
                    arrows: false,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesPerRow: 1,
                    arrows: false,
                }
            }
        ]
    });

    $('.past-events').slick({
        rows: 3,
        slidesPerRow: 4,
        infinite: false,
        responsive:[
            {
            breakpoint: 1200,
            settings: {
                slidesPerRow: 3,
            }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesPerRow: 2,
                    arrows: false,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesPerRow: 1,
                    arrows: false,
                }
            }
        ]
    });
  });
</script>