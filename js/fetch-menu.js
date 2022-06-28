let request = (url, done, fall) => {
    const xhr = new XMLHttpRequest();
    xhr.onload = () => {
        (xhr.status == 200) ? done(xhr) : fall(xhr);
    }
    xhr.open('POST', url);
    xhr.send();
}

const menu = document.getElementById('menu');

request('json/menu.json', ajax => {
    const isiMenu = Array.from(JSON.parse(ajax.responseText).menu);
    let daftarMenu = [];
    isiMenu.forEach(el => {
        daftarMenu.push(`<div class="column">
                            <div class="card">
                                <img src="img/pizza/${el.gambar}" alt="">
                                <div class="deskripsi">
                                    <h3 class="nama">${el.nama}</h3>
                                    <div class="kategori">
                                        <div class="sub-kate ${el.kategori}">${el.kategori}</div>
                                    </div>
                                    <p class="detail">${el.deskripsi}</p>
                                    <p class="harga">Harga : Rp ${el.harga}</p>
                                    <div class="tbl-pesan">
                                        <div class="pesan">pesan</div>
                                    </div>
                                </div>
                            </div>
                        </div>`);

    });
    daftarMenu = daftarMenu.join('');
    menu.innerHTML = daftarMenu;
}, ajax => {
    alert('request gagal');
});
