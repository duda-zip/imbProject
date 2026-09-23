const navbar = document.getElementById('navbar');
const menuButton = document.getElementById('menuButton');
const mobileMenu = document.getElementById('mobileMenu');

if (navbar) {
    function updateNavbar() {
        navbar.classList.toggle('scrolled', window.scrollY > 24);
    }
    updateNavbar();
    window.addEventListener('scroll', updateNavbar, { passive: true });
}

if (menuButton && mobileMenu) {
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('open');
    });

    document.querySelectorAll('.mobile-menu a').forEach(link => {
        link.addEventListener('click', () => mobileMenu.classList.remove('open'));
    });
}

document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        button.closest('.faq-item').classList.toggle('open');
    });
});

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.08 });

document.querySelectorAll('.reveal').forEach(element => observer.observe(element));
