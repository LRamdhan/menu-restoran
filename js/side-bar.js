// munculkan dan hilangkan sidebar
const hamberger = Array.from(document.getElementsByClassName('hamberger'));
const sideBar = document.getElementById('side-bar');
hamberger.forEach(el => {
    el.addEventListener('click', event => {
        sideBar.classList.toggle('aside-muncul');
    });
});


// drop down menu sidebar
const down = document.getElementById('down');
const listLink = document.getElementById('list-link');
down.addEventListener('click', event => {
    event.target.classList.toggle('down-bawah');
    event.target.classList.toggle('down-kiri');
    listLink.classList.toggle('memanjang');
});