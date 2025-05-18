//Slider 1
document.addEventListener('DOMContentLoaded', function () {
    const carouselElement = document.querySelector('#carouselExampleCaptions1');
    const carousel = new bootstrap.Carousel(carouselElement, {
        interval: 10000, // 10 Sekunden
        ride: 'carousel',
        pause: false 
    });

    // Pausieren beim Hovern
    carouselElement.addEventListener('mouseenter', () => {
        carousel.pause();
    });

    // Fortsetzen beim Verlassen
    carouselElement.addEventListener('mouseleave', () => {
        carousel.cycle();
    });
});

//Slider 2
document.addEventListener('DOMContentLoaded', function () {
    const carouselElement = document.querySelector('#carouselExampleCaptions2');
    const carousel = new bootstrap.Carousel(carouselElement, {
        interval: 10000, // 10 Sekunden
        ride: 'carousel',
        pause: false 
    });

    // Pausieren beim Hovern
    carouselElement.addEventListener('mouseenter', () => {
        carousel.pause();
    });

    // Fortsetzen beim Verlassen
    carouselElement.addEventListener('mouseleave', () => {
        carousel.cycle();
    });
});

//Slider 3
document.addEventListener('DOMContentLoaded', function () {
    const carouselElement = document.querySelector('#carouselExampleCaptions3');
    const carousel = new bootstrap.Carousel(carouselElement, {
        interval: 10000, // 10 Sekunden
        ride: 'carousel',
        pause: false 
    });

    // Pausieren beim Hovern
    carouselElement.addEventListener('mouseenter', () => {
        carousel.pause();
    });

    // Fortsetzen beim Verlassen
    carouselElement.addEventListener('mouseleave', () => {
        carousel.cycle();
    });
});

//Slider 4
document.addEventListener('DOMContentLoaded', function () {
    const carouselElement = document.querySelector('#carouselExampleCaptions4');
    const carousel = new bootstrap.Carousel(carouselElement, {
        interval: 10000, // 10 Sekunden
        ride: 'carousel',
        pause: false 
    });

    // Pausieren beim Hovern
    carouselElement.addEventListener('mouseenter', () => {
        carousel.pause();
    });

    // Fortsetzen beim Verlassen
    carouselElement.addEventListener('mouseleave', () => {
        carousel.cycle();
    });
});