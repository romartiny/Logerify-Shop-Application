const body = document.querySelector('body'),
    sidebarToggle = body.querySelector('.sidebar-toggle'),
    sidebar = body.querySelector('nav');

let getStatus = localStorage.getItem('status');

if(getStatus && getStatus === 'close') {
    sidebar.classList.toggle('close');
} else {
    sidebar.classList.toggle('open');
}

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('close');
    if(sidebar.classList.contains('close')) {
        localStorage.setItem('status', 'close');
    } else {
        localStorage.setItem('status', 'open');
    }
})
