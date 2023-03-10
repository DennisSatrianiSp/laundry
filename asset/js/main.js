var hargaBarang = document.getElementById("harga-barang");
hargaBarang.innerHTML = "Rp " + 0;

function radioClicked() {
// Ambil elemen harga barang
var hargaBarang = document.getElementById("harga-barang");
var radioButtons = document.getElementsByName("paketId");
if (radioButtons[0].checked) {
var paket = parseInt(document.getElementById("barang").value);
var jumlahBarang = parseInt(document.getElementById("jumlah").value);
const harga1 = 20000;
let totalHarga = (paket + harga1) * jumlahBarang;
hargaBarang.innerHTML = "Rp " + totalHarga.toLocaleString();
document.getElementById('database').value = totalHarga;
} else if (radioButtons[1].checked) {
var paket = parseInt(document.getElementById("barang").value);
var jumlahBarang = parseInt(document.getElementById("jumlah").value);
const harga2 = 10000;
let totalHarga = (paket + harga2) * jumlahBarang;
hargaBarang.innerHTML = "Rp " + totalHarga.toLocaleString();
document.getElementById('database').value = totalHarga;
}
}
