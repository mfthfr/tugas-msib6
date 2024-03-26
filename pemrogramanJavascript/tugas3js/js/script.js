function dataPerson(){
    let forms = document.getElementById('frm');
    let nama = forms.nama.value;
    let pekerjaan = forms.pekerjaan.value;
    let hobi = forms.hobi.value;
    let input = nama + '<br>' + pekerjaan + '<br>' + hobi + '<br>'
    let no_input = 'Data harus diisi semua!';
    let hasil = (nama && pekerjaan && hobi != '') ? input : no_input;

    document.getElementById('hasil').innerHTML = hasil;
}