import './bootstrap';
import 'bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('blog-image-preview');

    if (!imageInput || !imagePreview) {
        return;
    }

    function updateImagePreview() {
        const url = imageInput.value.trim();

        if (!url) {
            imagePreview.innerHTML = `
                <span>
                    <i class="bi bi-image"></i>
                    Image preview will appear here
                </span>
            `;

            imagePreview.classList.remove('error');

            return;
        }

        const img = new Image();

        img.onload = function () {
            imagePreview.classList.remove('error');

            imagePreview.innerHTML = '';
            imagePreview.appendChild(img);
        };

        img.onerror = function () {
            imagePreview.classList.add('error');

            imagePreview.innerHTML = `
                <span>
                    <i class="bi bi-exclamation-circle"></i>
                    Unable to load image
                </span>
            `;
        };

        img.src = url;
    }

    imageInput.addEventListener('input', updateImagePreview);

    updateImagePreview();
});


document.addEventListener('DOMContentLoaded', function () {
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');

    if (!titleInput || !slugInput) {
        return;
    }

    let slugManuallyEdited = false;

    slugInput.addEventListener('input', function () {
        slugManuallyEdited = this.value.trim() !== '';
    });

    titleInput.addEventListener('input', function () {
        if (slugManuallyEdited) {
            return;
        }

        const slug = this.value
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');

        slugInput.value = slug;
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const excerptInput = document.getElementById('excerpt');
    const excerptCount = document.getElementById('excerpt-count');

    if (!excerptInput || !excerptCount) {
        return;
    }

    function updateExcerptCount() {
        excerptCount.textContent = excerptInput.value.length;
    }

    excerptInput.addEventListener('input', updateExcerptCount);

    updateExcerptCount();
});

document.addEventListener('DOMContentLoaded', function () {
    const contentInput = document.getElementById('content');
    const contentCount = document.getElementById('content-count');

    if (!contentInput || !contentCount) {
        return;
    }

    function updateContentCount() {
        contentCount.textContent = contentInput.value.length;
    }

    contentInput.addEventListener('input', updateContentCount);

    updateContentCount();
});

/* =========================================
   HERO SLIDER
========================================= */

document.addEventListener('DOMContentLoaded', function () {

    const hero = document.querySelector('.hero-section');

    if (!hero) {
        return;
    }

    const subtitle = hero.querySelector('.hero-subtitle');
    const title = hero.querySelector('.col-lg-7 h1');
    const description = hero.querySelector('.col-lg-7 p');

    const primaryButton = hero.querySelector('.hero-primary-btn');
    const secondaryButton = hero.querySelector('.hero-secondary-btn');

    const dots = hero.querySelectorAll('.hero-dots span');

    const prevButton = hero.querySelector('.hero-arrow-left');
    const nextButton = hero.querySelector('.hero-arrow-right');


    const slides = [
        {
            subtitle: 'BUILDING A SAFER TOMORROW',

            title: `Professional Safety<br>Training & Consultancy`,

            description:
                'Empowering individuals and organisations with the knowledge, skills and solutions to create safer workplaces.',

            primaryText: 'Explore Courses',

            primaryIcon: 'bi-mortarboard-fill',

            primaryUrl: '/training',

            secondaryText: 'Contact Us',

            secondaryUrl: '/contact',

            background:
                'url("https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=2000&q=85")'
        },

        {
            subtitle: 'PROFESSIONAL SAFETY TRAINING',

            title: `Develop Skills.<br>Improve Safety.`,

            description:
                'Practical safety training programs designed to develop workplace knowledge, awareness and competency.',

            primaryText: 'View Training',

            primaryIcon: 'bi-mortarboard-fill',

            primaryUrl: '/training',

            secondaryText: 'Contact Us',

            secondaryUrl: '/contact',

            background:
                'url("https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=2000&q=85")'
        },

        {
            subtitle: 'SAFETY CONSULTANCY',

            title: `Practical Solutions<br>for Safer Workplaces`,

            description:
                'Supporting organisations with practical safety consultancy and workplace improvement solutions.',

            primaryText: 'Our Consultancy',

            primaryIcon: 'bi-briefcase-fill',

            primaryUrl: '/consultancy',

            secondaryText: 'Contact Us',

            secondaryUrl: '/contact',

            background:
                'url("https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=2000&q=85")'
        }
    ];


    let currentSlide = 0;
    let autoSlide;


    function showSlide(index) {

        if (index >= slides.length) {
            index = 0;
        }

        if (index < 0) {
            index = slides.length - 1;
        }

        const slide = slides[index];


        subtitle.textContent = slide.subtitle;

        title.innerHTML = slide.title;

        description.textContent = slide.description;


        primaryButton.innerHTML =
            `<i class="bi ${slide.primaryIcon}"></i>
             ${slide.primaryText}
             <i class="bi bi-arrow-right"></i>`;

        primaryButton.href = slide.primaryUrl;


        secondaryButton.innerHTML =
            `<i class="bi bi-telephone-fill"></i>
             ${slide.secondaryText}`;

        secondaryButton.href = slide.secondaryUrl;


        hero.style.backgroundImage = slide.background;


        dots.forEach(function (dot, dotIndex) {
            dot.classList.toggle('active', dotIndex === index);
        });


        currentSlide = index;
    }


    nextButton.addEventListener('click', function () {

        showSlide(currentSlide + 1);

        restartAutoSlide();

    });


    prevButton.addEventListener('click', function () {

        showSlide(currentSlide - 1);

        restartAutoSlide();

    });


    dots.forEach(function (dot, index) {

        dot.style.cursor = 'pointer';

        dot.addEventListener('click', function () {

            showSlide(index);

            restartAutoSlide();

        });

    });


    function startAutoSlide() {

        autoSlide = setInterval(function () {

            showSlide(currentSlide + 1);

        }, 5000);

    }


    function restartAutoSlide() {

        clearInterval(autoSlide);

        startAutoSlide();

    }


    showSlide(0);

    startAutoSlide();

});


/* CERTIFICATIONS SLIDER */
document.addEventListener('DOMContentLoaded', function () {

    const track = document.querySelector('.certifications-track');
    const items = document.querySelectorAll('.certification-item');
    const prevButton = document.querySelector('.cert-arrow-left');
    const nextButton = document.querySelector('.cert-arrow-right');
    const dotsContainer = document.querySelector('.certification-dots');

    if (!track || !items.length || !prevButton || !nextButton) {
        return;
    }

    let currentIndex = 0;

    function getVisibleItems() {
        if (window.innerWidth <= 575) {
            return 2;
        }

        if (window.innerWidth <= 991) {
            return 2;
        }

        return 4;
    }

    function getMaxIndex() {
        return Math.max(
            0,
            items.length - getVisibleItems()
        );
    }

    function createDots() {

        if (!dotsContainer) {
            return;
        }

        const maxIndex = getMaxIndex();

        dotsContainer.innerHTML = '';

        for (let i = 0; i <= maxIndex; i++) {

            const dot = document.createElement('span');

            if (i === currentIndex) {
                dot.classList.add('active');
            }

            dot.style.cursor = 'pointer';

            dot.addEventListener('click', function () {
                currentIndex = i;
                updateSlider();
            });

            dotsContainer.appendChild(dot);
        }
    }

    function updateSlider() {

        const visibleItems = getVisibleItems();
        const maxIndex = getMaxIndex();

        if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }

        if (items.length === 1) {
            track.style.transform = 'translateX(0)';
            track.style.justifyContent = 'center';
        } else {

            track.style.justifyContent = 'flex-start';

            const itemWidth = items[0].getBoundingClientRect().width;
            const gap = parseFloat(
                window.getComputedStyle(track).gap
            ) || 0;

            const moveAmount = currentIndex * (itemWidth + gap);

            track.style.transform =
                `translateX(-${moveAmount}px)`;
        }

        createDots();
    }

    nextButton.addEventListener('click', function () {

        const maxIndex = getMaxIndex();

        if (currentIndex < maxIndex) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }

        updateSlider();
    });

    prevButton.addEventListener('click', function () {

        const maxIndex = getMaxIndex();

        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = maxIndex;
        }

        updateSlider();
    });

    window.addEventListener('resize', function () {
        updateSlider();
    });

    updateSlider();

});