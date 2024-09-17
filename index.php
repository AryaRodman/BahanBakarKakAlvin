<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "user">
    <h1>Pembelian bahan bakar Shell</h1>
    <form method="post" action="struk.php">
    Masukkan Jumlah Liter : <input type="number" name="jumlah" required><br> 
    Pilih Tipe Bahan Bakar :
        <select name="jenis" required>
            <option value="" selected hidden disabled>Pilih jenis bahan bakar</option>
            <option value="S Super">Shell Super</option>
            <option value="S V-Power">Shell V-Power</option>
            <option value="S V-Power Diesel">Shell V-Power Diesel</option>
            <option value="S V-Power Nitro">Shell V-Power Nitro</option>
        </select><br>
        <input type="submit" value="Beli">
        <input type="hidden" name="ppn" value="0.10">
    </form>
    </div>

    <footer>
        <p>Copyright &copy Arya Rodman Karale | 2024</p>
    </footer>
</body>
</html>

