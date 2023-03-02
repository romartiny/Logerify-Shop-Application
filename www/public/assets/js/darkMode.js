const bodySel = document.querySelector('body'),
    modeToggle = body.querySelector('.mode-toggle');

let getMode = localStorage.getItem('mode');

if(getMode && getMode === 'dark') {
    bodySel.classList.toggle('dark');
} else {
    bodySel.classList.toggle('light');
}

modeToggle.addEventListener('click', () => {
    bodySel.classList.toggle('dark');
    if(bodySel.classList.contains('dark')) {
        localStorage.setItem('mode', 'dark');
    } else {
        localStorage.setItem('mode', 'light');
    }
});
