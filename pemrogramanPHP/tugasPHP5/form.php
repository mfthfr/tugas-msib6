<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>FORM NILAI UJIAN MAHASISWA</h1>
    <hr>
    <form action="objMahasiswa.php" method="POST" id="formNilai">
        <table>
            <tr>
                <td>
                    <label for="">NIM</label>
                </td>
                <td>
                    <input type="text" name="nim" id="nim" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Nama</label>
                </td>
                <td>
                    <input type="text" name="nama" id="nama" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Kuliah</label>
                </td>
                <td>
                    <select name="kuliah" id="kuliah">
                        <option value="">Pilihan Kuliah ---</option>
                        <option value="Universitas Serba Bisa">Universitas Serba Bisa</option>
                        <option value="Universitas Keren Abies">Universitas Keren Abies</option>
                        <option value="Universitas Serba Guna">Universitas Serba Guna</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Mata Kuliah</label>
                </td>
                <td>
                    <select name="matkul" id="matkul">
                        <option value="">Pilihan Mata Kuliah ---</option>
                        <option value="Pemrograman PHP">Pemrograman PHP</option>
                        <option value="Pemrograman JavaScript">Pemrograman JavaScript</option>
                        <option value="Desain Web">Desain Web</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Nilai</label>
                </td>
                <td>
                    <input type="text" name="nilai" id="nilai" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Submit</button>
                    <button type="reset">Clear</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>