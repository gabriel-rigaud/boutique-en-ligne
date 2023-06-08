function togglePromo() {
    var button = document.querySelector('.promo-btn');
    button.classList.toggle('active');
}

const zoomImage = document.getElementById('image-boutique');

zoomImage.addEventListener('mouseenter', () => {
    zoomImage.style.transform = 'scale(1.2)';
});

zoomImage.addEventListener('mouseleave', () => {
    zoomImage.style.transform = 'scale(1)';
});