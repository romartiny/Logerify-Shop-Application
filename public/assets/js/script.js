const body = document.querySelector('body'),
    sidebarToggle = body.querySelector('.sidebar-toggle'),
    sidebar = body.querySelector('nav'),
    modeToggle = body.querySelector('.mode-toggle');

modeToggle.addEventListener('click', () => {
    body.classList.toggle('dark');
});

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('close');
})
