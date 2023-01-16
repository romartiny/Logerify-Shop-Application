const body = document.querySelector('body'),
    sidebarToggle = body.querySelector('.sidebar-toggle'),
    sidebar = body.querySelector('nav'),
    modeToggle = body.querySelector('.mode-toggle');

let getMode = localStorage.getItem('mode');
let getStatus = localStorage.getItem('status');

if(getMode && getMode === 'dark') {
    body.classList.toggle('dark');
} else {
    body.classList.toggle('light');
}

if(getStatus && getStatus === 'close') {
    sidebar.classList.toggle('close');
} else {
    sidebar.classList.toggle('open');
}

modeToggle.addEventListener('click', () => {
    body.classList.toggle('dark');
    if(body.classList.contains('dark')) {
        localStorage.setItem('mode', 'dark');
    } else {
        localStorage.setItem('mode', 'light');
    }
});

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('close');
    if(sidebar.classList.contains('close')) {
        localStorage.setItem('status', 'close');
    } else {
        localStorage.setItem('status', 'open');
    }
})
