function displaySlick() {
    $('.slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 4,
        slidesToScroll: 4,
        dots: true,
        arrows: false,
        variableWidth: false,
        responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
            }
        }, ]
    });
};
displaySlick();
    
$('.sliderP').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: true,
    arrows: false,
    variableWidth: false,
    responsive: [{
        breakpoint: 767,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
        }
    }, ]
});