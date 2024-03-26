document.getElementById('formPegawai').addEventListener("submit", function(event){
    event.preventDefault();

    var nama = document.getElementById("nama").value;
    var jabatan = document.getElementById("jabatan").value;
    var status = document.querySelector('input[name="status"]:checked').value;
    var gajiPokok = 0;

    switch(jabatan){
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

    var tunjJabatan = 0.15 * gajiPokok;
    var bpjs = 0.10 * gajiPokok;
    var tunjKeluarga = (status === "Menikah") ? (0.20 * gajiPokok): 0;
    var totalGaji = gajiPokok + tunjJabatan + bpjs + tunjKeluarga;

    // menambahkan data pada bagian tbody
    var pegawaiData = document.getElementById('dataPegawai');
    pegawaiData.innerHTML = `<tr>
                                <td>${nama}</td>
                                <td>${jabatan}</td>
                                <td>${status}</td>
                                <td>Rp${gajiPokok.toLocaleString()}</td>
                                <td>Rp${tunjJabatan.toLocaleString()}</td>
                                <td>Rp${bpjs.toLocaleString()}</td>
                                <td>Rp${tunjKeluarga.toLocaleString()}</td>
                            </tr>`;
    
    // menambahkan data pada bagian tfoot
    var gajiTotal = document.getElementById('totalGaji');
    gajiTotal.innerHTML = `<tr>
                                <td colspan="3">Total Gaji</td>
                                <td colspan="4">Rp${totalGaji.toLocaleString()}</td>
                            </tr>`
    
    document.getElementById("formPegawai").reset();
});