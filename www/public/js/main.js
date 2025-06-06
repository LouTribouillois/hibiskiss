document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mainNav = document.querySelector('.main-nav');
    
    mobileMenuBtn.addEventListener('click', function() {
        mainNav.classList.toggle('active');
        mobileMenuBtn.classList.toggle('active');
    });

    let lastScroll = 0;
    const header = document.querySelector('.main-header');
    
    

    if (document.querySelector('.beer-grid')) {
        loadBeers();
    }

    if (document.querySelector('.beer-list')) {
        loadBeerPage();
    }

    if (document.querySelector('.faq-list')) {
        initFAQ();
    }

    initScrollAnimations();
});


function initScrollAnimations() {
    const animateElements = document.querySelectorAll('[data-animate]');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });
    
    animateElements.forEach(element => {
        observer.observe(element);
    });
}
