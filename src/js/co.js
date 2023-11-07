let data;

fetch("api/produk.json")
.then(
    hasil => hasil.json()
)
.then(
    result => data = result
)

setTimeout(() => {
    const tombol = document.querySelectorAll(".order");
    tombol.forEach(el => {
        el.addEventListener("click", (e) =>{
            let namabarang = data[el.classList[1]].nama;
            let hargabarang = data[el.classList[1]].harga;
            let deskripsibarang = data[el.classList[1]].deskripsi;
            let coverbarang = data[el.classList[1]].cover;

            const nb = document.querySelector("#namaprodcheck");
            nb.innerHTML = namabarang;
            const dp = document.querySelector("#deskprodcheck");
            dp.innerHTML = deskripsibarang;
            const hb = document.querySelector("#hargabarang");
            hb.innerHTML = `Rp. ${hargabarang}`;
            const cb = document.querySelector("#imageproduk");
            cb.src = coverbarang;
        });
    });
}, 500);