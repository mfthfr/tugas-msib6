<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
</head>
<body>
    <div class="containerPesan">
        <h1>Form Pemesanan</h1>
        <form action="">
            <div class="form-group">
                <label for="">Produk:</label>
                <select id="produk" name="produk">
                    <option value="shoes">Sepatu</option>
                    <option value="watches">Jam Tangan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Jumlah:</label>
                <input type="number" id="jumlah" name="jumlah" min="1" required>
            </div>
            <div class="form-group">
                <label for="">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>