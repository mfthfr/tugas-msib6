<?php
    include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web MFR</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <h1>TOKO ONLINE JAM TANGAN & SEPATU</h1>
    </div>
    <div class="navbar">
        <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
        <?php
            // looping foreach dari webmenu.php
            foreach ($menu_atas as $key => $value){
                // echo "$key $value <br>";
                echo "<a href='index.php?hal=$key'>$value</a> | ";
            }
        ?>
    </div>