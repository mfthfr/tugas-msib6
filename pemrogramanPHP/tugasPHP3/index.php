<?php

    $m1 = ['nama' => 'Alex Excelen', 'nim' => '36210001', 'nilai' => '97'];
    $m2 = ['nama' => 'Asep Surasep', 'nim' => '36210002', 'nilai' => '78'];
    $m3 = ['nama' => 'Atang Suratang', 'nim' => '36210003', 'nilai' => '60'];
    $m4 = ['nama' => 'Esih Sukaesih', 'nim' => '36210004', 'nilai' => '82'];
    $m5 = ['nama' => 'Maman Suherman', 'nim' => '36210005', 'nilai' => '75'];
    $m6 = ['nama' => 'Tatang Privat', 'nim' => '36210006', 'nilai' => '100'];
    $m7 = ['nama' => 'Eneng Nuraeni', 'nim' => '36210007', 'nilai' => '50'];
    $m8 = ['nama' => 'Jajang Jackpot', 'nim' => '36210008', 'nilai' => '90'];
    $m9 = ['nama' => 'Bambang jurgen', 'nim' => '36210009', 'nilai' => '65'];
    $m10 = ['nama' => 'Siti Citata', 'nim' => '36210010', 'nilai' => '88'];

    $array_mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

    $array_judul = ['No', 'Nama', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

    $nilai = array_column($array_mahasiswa, 'nilai');
    $totalNilai = array_sum($nilai);
    $nilaiTertinggi = max($nilai);
    $nilaiTerendah = min($nilai);
    $jumlahMahasiswa = count($array_mahasiswa);
    $nilaiRata2 = $totalNilai / $jumlahMahasiswa;

    $ket = [
        'Nilai Tertinggi' => $nilaiTertinggi,
        'Nilai Terendah' => $nilaiTerendah,
        'Nilai Rata-Rata' => $nilaiRata2,
        'Jumlah Mahasiswa' => $jumlahMahasiswa,
        'Jumlah Keseluruhan Nilai' => $totalNilai
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>DAFTAR NILAI MAHASISWA</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <?php foreach ($array_judul as $judul){ ?>
                    <th><?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                foreach ($array_mahasiswa as $mahasiswa){
                    // keterangan
                    $keterangan = ($mahasiswa['nilai'] >= 65 ) ? 'Lulus' : 'Tidak Lulus';
                    // grade
                    if ($mahasiswa['nilai'] >= 85){
                        $grade = 'A';
                    }else if ($mahasiswa['nilai'] >= 75){
                        $grade = 'B';
                    }else if ($mahasiswa['nilai'] >= 65){
                        $grade = 'C';
                    }else if ($mahasiswa['nilai'] >= 55){
                        $grade = 'D';
                    }else{
                        $grade = 'E';
                    }
                    // predikat
                    switch ($grade){
                        case 'A':
                            $predikat = 'Memuaskan';
                            break;
                        case 'B':
                            $predikat = 'Bagus';
                            break;
                        case 'C':
                            $predikat = 'Cukup';
                            break;
                        case 'D':
                            $predikat = 'Kurang';
                            break;
                        default:
                            $predikat = 'Buruk';
                    }
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mahasiswa['nama'] ?></td>
                <td><?= $mahasiswa['nim'] ?></td>
                <td><?= $mahasiswa['nilai'] ?></td>
                <td><?= $keterangan ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="8">Hasil Akhir</th>
            </tr>
            <?php 
                foreach($ket as $hasil => $hasilAkhir){
            ?>
                <tr>
                    <th colspan="4"><?= $hasil ?></th>
                    <th colspan="4"><?= $hasilAkhir ?></th>
                </tr>
            <?php } ?>
        </tfoot>
    </table>
    <footer>
        <p>Copyright &copy; Miftah Farid Ramdhani | MSIB 6</p>
    </footer>
</body>
</html>