document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.slider .list .item');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentIndex = 0;

    function showItem(index) {
        items.forEach((item, i) => {
            item.style.zIndex = (i === index) ? 1 : 0;
            item.classList.toggle('active', i === index);
        });
    }

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : items.length - 1;
        showItem(currentIndex);
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex < items.length - 1) ? currentIndex + 1 : 0;
        showItem(currentIndex);
    });

    // Initial display
    showItem(currentIndex);
});