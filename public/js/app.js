document.querySelector('.menu a[href="#tentang-kami"]').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('#tentang-kami').scrollIntoView({
        behavior: 'smooth'
    });
});

document.querySelector('.menu a[href="#mobil"]').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('#produk kami').scrollIntoView({
        behavior: 'smooth'
    });
});

document.querySelector('.menu a[href="#mobil"]').addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector('#produk kami').scrollIntoView({
        behavior: 'smooth'
    });
});

const carousel = document.querySelector('.carousel');
const items = document.querySelectorAll('.carousel-item');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');

let currentIndex = 0;

function updateCarousel() {
    items.forEach((item, index) => {
        item.style.transform = `translateX(${(index - currentIndex) * 100}%)`;
    });
}

prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : items.length - 1;
    updateCarousel();
});

nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex < items.length - 1) ? currentIndex + 1 : 0;
    updateCarousel();
});

updateCarousel();