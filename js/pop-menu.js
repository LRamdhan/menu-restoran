const boxMenu = document.getElementById('box-menu');

document.addEventListener('click', event => {
   if(event.target.dataset['el'] == 'pop-menu') {
        boxMenu.classList.toggle('pop-menu-muncul');
        boxMenu.classList.toggle('pop-menu-hilang');
        return;
   }
   if(event.target.dataset['el'] == 'pop') return;
   boxMenu.classList.remove('pop-menu-muncul');
   if(!(Array.from(boxMenu.classList).includes('pop-menu-hilang')))
      boxMenu.classList.toggle('pop-menu-hilang');
});