<?php
    require_once 'Mahasiswa.php';

    if (isset($_POST['nim'], $_POST['nama'], $_POST['kuliah'], $_POST['matkul'], $_POST['nilai'])){
        $mahasiswa = new Mahasiswa ($_POST['nim'], $_POST['nama'], $_POST['kuliah'], $_POST['matkul'], $_POST['nilai']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Ujian Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Daftar Nilai Ujian Mahasiswa</h1>
    <hr>
    <button class="kembali" onclick="window.location.href='form.php'">Kembali</button>
    <table border="1" cellpadding='10' cellspacing='0' class="tabelNilai">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kuliah</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                echo '<tr>';
                echo '<td>' . $mahasiswa->nim . '</td>';
                echo '<td>' . $mahasiswa->nama . '</td>';
                echo '<td>' . $mahasiswa->kuliah . '</td>';
                echo '<td>' . $mahasiswa->matkul. '</td>';
                echo '<td>' . $mahasiswa->nilai . '</td>';
                echo '<td>' . $mahasiswa->getGrade() . '</td>';
                echo '<td>' . $mahasiswa->getPredikat() . '</td>';
                echo '<td>' . $mahasiswa->getStatus() . '</td>';
                echo '</tr>';
            ?>
        </tbody>
    </table>
</body>
</html>