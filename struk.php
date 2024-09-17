
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk</title>
    <style>
        .result{
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 100%;
            box-shadow: 0px 0px 5px 0px black ;
        }
        h2, h1{
            color: blue;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        class Shell {
            public $jumlah;
            public $jenis; 
            public $ppn = 0.1;
            public $data_harga = [
                "S Super" => 15420,
                "S V-Power" => 16130,
                "S V-Power Diesel" => 18310,
                "S V-Power Nitro" => 16510
            ];
            public $harga_dasar;
            public $hargaPPN;
    
            public function __construct($jumlah,$jenis,$ppn) {
                $this->jumlah = $jumlah;
                $this->jenis = $jenis;
                $this->ppn = $ppn;
            }
    
            public function getJumlah() {
                return $this->jumlah; 
            }
    
            public function getJenis() {
                return $this->jenis; 
            }
        }
        
        //membuat class beli yang mewarisi kelas sheell
        class Beli extends Shell {
            public function getTotal() {
                $this->harga_dasar = ($this->jumlah * $this->data_harga[$this->jenis]);
                $this->hargaPPN = $this->harga_dasar * 0.1;
                $hasilAkhir = $this->harga_dasar + $this->hargaPPN;
                return $hasilAkhir;
            }
    
        }
        //membuat objek dari kelas shell dengan mengirimkan data yang diinput oleh user
        $Beli = new Beli($_POST['jumlah'],$_POST['jenis'], $_POST['ppn']);
    
        echo "<div class = 'result'>";
            $total = $Beli->getTotal();
            echo "<h2><br> BUKTI TRANSAKSI PEMBELIAN </h2>";
            echo "Jenis Bahan Bakar : ".$Beli->getJenis(). "<br>" ;
            echo "Jumlah Bahan Bakar : ". $Beli->getJumlah() ." Liter <br>";
            echo "Harga per liter : Rp.  ". number_format($Beli->data_harga[$Beli->jenis],0,',','.'). "<br>";
            echo "Harga dasar : Rp. ". number_format($Beli->harga_dasar,0,',','.'). "<br>";
            echo "PPN (10%) : Rp. ". number_format($Beli->hargaPPN,0,',','.'). "<hr>";
            echo "Total : Rp. ". number_format($total,0,',','.') . "<br><br>";
        echo "</div>";
    }
    ?>
    </div> 
</body>

</html>