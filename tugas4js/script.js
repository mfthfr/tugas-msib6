// Data pegawai
let pegawai = [
    {nama : "Alex", jabatan : "Manager", status : "Menikah"},
    {nama : "Asep", jabatan : "Asisten Manager", status : "Menikah"},
    {nama : "Ucup", jabatan : "Staff", status : "Belum Menikah"}
];

// Fungsi untuk menghitung gaji
function hitungGaji(jabatan, status){
    let gajiPokok;
    switch (jabatan){
        case "Manager": 
            gajiPokok = 15000000;
            break;
        case "Asisten Manager":
            gajiPokok = 10000000;
            break;
        case "Staff":
            gajiPokok = 5000000;
            break;
    }

    let tunjJabatan = 0.15 * gajiPokok;
    let bpjs = 0.10 * gajiPokok;

    if(status == "Menikah"){
        tunjKeluarga = 0.20 * gajiPokok;
    }else{
        tunjKeluarga = 0 * gajiPokok;
    }

    let totalGaji = gajiPokok + tunjJabatan + bpjs + tunjKeluarga;

    return{
        gajiPokok,
        tunjJabatan,
        bpjs,
        tunjKeluarga,
        totalGaji
    };
}

// menambahkan data pegawai ke dalam tabel
let pegawaiData = document.getElementById('dataPegawai');
for(let i = 0; i < pegawai.length; i++){
    let gaji = hitungGaji(pegawai[i].jabatan, pegawai[i].status);
    let row = `<tr>
                    <td>${pegawai[i].nama}</td>
                    <td>${pegawai[i].jabatan}</td>
                    <td>${pegawai[i].status}</td>
                    <td>${gaji.gajiPokok.toLocaleString('id-ID')}</td>
                    <td>${gaji.tunjJabatan.toLocaleString('id-ID')}</td>
                    <td>${gaji.bpjs.toLocaleString('id-ID')}</td>
                    <td>${gaji.tunjKeluarga.toLocaleString('id-ID')}</td>
                    <td>${gaji.totalGaji.toLocaleString('id-ID')}</td>
                </tr>`;
                pegawaiData.innerHTML += row;
}

// Menghitung total gaji dan menambahkannya ke dalam tabel
const totalGajiElement = document.getElementById('totalGaji');
const totalGaji = pegawai.reduce((acc, curr) => {
    const gaji = hitungGaji(curr.jabatan, curr.status);
    return acc + gaji.totalGaji;
}, 0);
const totalRow = `<tr>
                    <td colspan="7">Total Gaji</td>
                    <td>${totalGaji.toLocaleString('id-ID')}</td>
                </tr>`;
totalGajiElement.innerHTML = totalRow;