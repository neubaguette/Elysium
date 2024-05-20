function showDetailsButton(element) {
    var button = element.querySelector('.details-button');
    button.style.opacity = '1';
}

function hideDetailsButton(element) {
    var button = element.querySelector('.details-button');
    button.style.opacity = '0';
}


function openModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "block";
    startSlider(modal); 
}


function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "none";
    stopSlider(modal); 
}

function startSlider(modal) {
    let currentIndex = 0;
    const slides = modal.querySelectorAll('.gallery-item'); 
    const totalSlides = slides.length;

    function moveSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
    }

    function updateSlider() {
        const galleryInner = modal.querySelector('.gallery-inner'); 
        galleryInner.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    
    modal.sliderInterval = setInterval(moveSlide, 7000);
}

function stopSlider(modal) {
    clearInterval(modal.sliderInterval); 
}
