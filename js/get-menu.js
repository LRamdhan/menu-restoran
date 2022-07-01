let request = (url, done, fall) => {
    const xhr = new XMLHttpRequest();
    xhr.onload = () => {
        (xhr.status == 200) ? done(xhr) : fall(xhr);
    }
    xhr.open('POST', url);
    xhr.send();
}

let card = (gambar, nama, kategori, deskripsi, harga, inputKategori) => {
    let showKategori = () => {
        return (inputKategori == 'all') ? `<div class="kategori">
                                         <div class="sub-kate ${kategori}">${kategori}</div>
                                      </div>` : ' ';
    };
            
    return `<div class="column">
                    <div class="card">
                        <img src="img/menu/${gambar}" alt="">
                        <div class="deskripsi">
                            <h3 class="nama">${nama}</h3>
                            ${showKategori()}
                            <p class="detail">${deskripsi}</p>
                            <p class="harga">Harga : Rp ${harga}</p>
                            <div class="tbl-pesan">
                                <div class="pesan">pesan</div>
                            </div>
                        </div>
                    </div>
                </div>`
};

let showError = (responseText) => {
    menu.style.display = 'block';
    menu.style.height = `${window.innerHeight}px`;
    menu.innerHTML = `${responseText}`;
};

let isiKonten = (menuFilter, kategori) => {
    let daftarMenu = [];
    menuFilter.forEach(el => {
        daftarMenu.push(card(el.gambar, el.nama, el.kategori, el.deskripsi, el.harga, kategori));
    });
    daftarMenu = daftarMenu.join('');
    if(kategori == 'all') kategori = 'semua kategori';
    judul.innerHTML = kategori;
    menu.innerHTML = daftarMenu;
};

const judul = document.getElementById('kategori-menu');
const menu = document.getElementById('menu');
const listLink2 = document.getElementById('list-link');
const boxMenu2 = document.getElementById('box-menu');
let links1 = Array.from(listLink2.querySelectorAll('li a'));
let links2 = Array.from(boxMenu2.querySelectorAll('li a'));
let links = links1.concat(links2);
let kategori = ['all'];

links.forEach(el => {
    el.addEventListener('click', event => {
        event.preventDefault();
        let kategori = event.target.dataset.kategori;
        request('json/menu.json', ajax => {
            const isiMenu = Array.from(JSON.parse(ajax.responseText).menu);
            let menuFilter = [];
            if(kategori != 'all') {
                isiMenu.forEach(el => {
                    if(el.kategori == kategori) {
                        menuFilter.push(el);
                    }
                });
            } else {
                menuFilter = isiMenu;
            }
            isiKonten(menuFilter, kategori);
        }, ajax => showError(ajax.responseText));
    });
});

request('json/menu.json', ajax => {
    const isiMenu = Array.from(JSON.parse(ajax.responseText).menu);
    let daftarMenu = [];
    isiMenu.forEach(el => {
        daftarMenu.push(card(el.gambar, el.nama, el.kategori, el.deskripsi, el.harga, 'all'));
        if(!kategori.includes(el.kategori)) kategori.push(el.kategori);
    });
    daftarMenu = daftarMenu.join('');
    menu.innerHTML = daftarMenu;
    judul.innerHTML = 'semua kategori';
}, ajax => showError(ajax.responseText));


// pencarian dengan keyword all dan mengurus tampilan card