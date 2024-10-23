function hitungHarga() {
    const tipeKamar = parseInt(document.getElementById('tipeKamar').value);
    const jumlahHari = parseInt(document.getElementById('jumlahHari').value);
    const lantaiKamar = parseInt(document.getElementById('lantaiKamar').value);
    const diskon = parseInt(document.getElementById('diskon').value);

    let totalHargaSebelumDiskon = tipeKamar * jumlahHari;

    if (lantaiKamar > 5) {
        totalHargaSebelumDiskon += 50000;
    }

    let diskonHarga = 0;

    if (diskon === 10) {
        diskonHarga = totalHargaSebelumDiskon * 0.1;
    } else if (diskon === 100000) {
        diskonHarga = 100000;
    }

    const totalHargaSetelahDiskon = totalHargaSebelumDiskon - diskonHarga;

    document.getElementById('hargaSebelumDiskon').innerText = `Rp ${totalHargaSebelumDiskon}`;
    document.getElementById('diskonHarga').innerText = `Rp ${diskonHarga}`;
    document.getElementById('totalHarga').innerText = `Rp ${totalHargaSetelahDiskon}`;
}
