
const clickButton = document.querySelector('.toggle-icon');

clickButton.addEventListener('click', ()=> {
    document.querySelector('nav').classList.toggle('is-active');
});

clickButton.addEventListener('click', ()=> {
    document.querySelector('.toggle-icon').classList.toggle('active-toggle');
});