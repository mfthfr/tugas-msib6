var gajiPokok = 0;
var tunjJabatan = 0;
var bpjs = 0;
var tunjKeluarga = 0;
var totalGaji = 0;

var jabatan = document.getElementById("jabatan").innerText;
var status = document.getElementById("status").innerText;

// Menghitung gaji pokok berdasarkan jabatan
if (jabatan === "Manager"){
    gajiPokok = 15000000;
} else if (jabatan === "Asisten Manager"){
    gajiPokok = 10000000;
}else{
    gajiPokok = 5000000;
}

// Menghitung tunjangan jabatan, bpjs dan tunjangan keluarga
tunjJabatan = 0.15 * gajiPokok;
bpjs = 0.10 * gajiPokok;

// Menghitung tunjangan keluarga
if (status === "Menikah"){
    tunjKeluarga = 0.20 * gajiPokok;
}else{
    tunjKeluarga = 0;
}

// Menghitung total gaji
totalGaji = gajiPokok + tunjJabatan + bpjs + tunjKeluarga;

// Menampilkan ke dalam tabel
document.getElementById("gajiPokok").innerText = 'Rp' + gajiPokok.toLocaleString();
document.getElementById("tunjJabatan").innerText = 'Rp' + tunjJabatan.toLocaleString();
document.getElementById("bpjs").innerText = 'Rp' + bpjs.toLocaleString();
document.getElementById("tunjKeluarga").innerText = 'Rp' + tunjKeluarga.toLocaleString();
document.getElementById("totalGaji").innerText = 'Rp' + totalGaji.toLocaleString();