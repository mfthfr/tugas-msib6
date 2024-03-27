<?php
$namaPelanggan = "";
$produkPilihan = "";
$jmlhBeli = "";
$hargaSatuan = "";
$totalBelanja = "";
$diskon = "";
$ppn = "";
$hargaBersih = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaPelanggan = $_POST["namaPelanggan"];
    $produkPilihan = $_POST["produkPilihan"];
    $jmlhBeli = $_POST["jmlhBeli"];

    // harga satuan produk
    $hargaSatuan = 0;
    switch($produkPilihan){
        case "TV":
            $hargaSatuan = 8000000;
            break;
        case "Laptop":
            $hargaSatuan = 15000000;
            break;
        case "Handphone":
            $hargaSatuan = 2500000;
            break;
        case "Kulkas":
            $hargaSatuan = 12000000;
            break;
        case "AC":
            $hargaSatuan = 5500000;
            break;
        default:
            $hargaSatuan =0;
            break;
    }

    // hitung total belanja
    $totalBelanja = $jmlhBeli * $hargaSatuan;
    
    // hitung diskon dan ppn
    $diskon = 0.20 * $totalBelanja;
    $ppn = 0.10 * ($totalBelanja - $diskon);

    // hitung harga bersih
    $hargaBersih = ($totalBelanja - $diskon) + $ppn;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Tabel Harga Produk -->
    <h1>DAFTAR HARGA PRODUK</h1>
    <table id="tabelHarga">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Harga Produk</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>TV</td>
                <td>Rp 8.000.000</td>
            </tr>
            <tr>
                <td>Laptop</td>
                <td>Rp 15.000.000</td>
            </tr>
            <tr>
                <td>Handphone</td>
                <td>Rp 2.500.000</td>
            </tr>
            <tr>
                <td>Kulkas</td>
                <td>Rp 12.000.000</td>
            </tr>
            <tr>
                <td>AC</td>
                <td>Rp 5.500.000</td>
            </tr>
        </tbody>
    </table>
    
    <hr>
    <!-- Form Belanja -->
    <h1>FORM BELANJA</h1>
    <form action="" id="formBelanja" method="post">
        <table>
            <tr>
                <td>
                    <label for="">Nama Pelanggan</label>
                </td>
                <td>
                    <input type="text" name="namaPelanggan" id="namaPelanggan" placeholder="Masukkan nama pelanggan" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Produk Pilihan</label>
                </td>
                <td>
                    <select name="produkPilihan" id="produkPilihan">
                        <option value="Pilihan produk---">--- Pilihan produk ---</option>
                        <option value="TV">TV</option>
                        <option value="Laptop">Laptop</option>
                        <option value="Handphone">Handphone</option>
                        <option value="Kulkas">Kulkas</option>
                        <option value="AC">AC</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Jumlah Beli</label>
                </td>
                <td>
                    <input type="number" name="jmlhBeli" id="jmlhBeli" placeholder="Masukkan jumlah beli">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" id="submitBtn" onclick="redirectToTable()">Submit</button>
                    <button type="reset">Batal</button>
                </td>
            </tr>
        </table>
    </form>

    <hr>
    <!-- Tabel Hasil Belanja -->
    <h1>Laporan Hasil Belanja</h1>
    <table id="tabelHasil" border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Pelanggan</th>
                <th>Produk Pilihan</th>
                <th>Jumlah Beli</th>
                <th>Harga Satuan</th>
                <th>Total Belanja</th>
                <th>Potongan Diskon</th>
                <th>PPN</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    echo "<tr>
                        <td>$namaPelanggan</td>
                        <td>$produkPilihan</td>
                        <td>$jmlhBeli</td>
                        <td>Rp " . number_format($hargaSatuan, 0, ",", ".") . " </td>
                        <td>Rp " . number_format($totalBelanja, 0, ",", ".") . " </td>
                        <td>Rp " . number_format($diskon, 0, ",", ".") . " </td>
                        <td>Rp " . number_format($ppn, 0, ",", ".") . " </td>
                    </tr>";
                }
            ?>
        </tbody>
        <tfoot>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    echo "<tr>
                            <td colspan='3'>Harga Bersih</td>
                            <td colspan='4'>Rp " . number_format($hargaBersih, 0, ",", ".") . "</td>
                        </tr>";
                }
            ?>
        </tfoot>
    </table>
    <script>
        function redirectToTable() {
            window.location = '#tabelHasil';
        }
    </script>
</body>
</html>