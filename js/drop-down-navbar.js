const hamberger = document.querySelector('nav .hamberger');
const dropDown = hamberger.nextElementSibling;

hamberger.addEventListener('click', event => {
    const child = hamberger.children;
    child[0].classList.toggle('miring-kiri');
    child[1].classList.toggle('mengecil');
    child[2].classList.toggle('miring-kanan');
    dropDown.classList.toggle('drop-down-panjang');
});



