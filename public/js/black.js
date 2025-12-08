// Sidebar toggle for mobile view
document.addEventListener('DOMContentLoaded', function() {
    const toggler = document.querySelector('.navbar-toggler');
    const sidebar = document.querySelector('.sidebar');

    if(toggler && sidebar){
        toggler.addEventListener('click', () => {
            sidebar.classList.toggle('show-sidebar');
        });
    }
});

// Optional: Add shadow on scroll
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if(window.scrollY > 20){
        navbar.classList.add('shadow-lg');
    } else {
        navbar.classList.remove('shadow-lg');
    }
});
