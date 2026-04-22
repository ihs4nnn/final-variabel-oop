<?php
class Produk {
    public static $totalProduk = 0;
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
        self::$totalProduk++;
    }
}

class Penjualan extends Produk {
    // Final agar proses bayar tidak bisa diubah
    final public function bayar($harga) {
        return "Pembayaran produk [$this->nama] sebesar Rp" . number_format($harga) . " berhasil.";
    }
}

echo "<h3>Latihan 4: Sistem Produk</h3>";
$p1 = new Penjualan("Laptop");
$p2 = new Penjualan("Smartphone");
$p3 = new Penjualan("Tablet");

echo "Total Produk Terdaftar: " . Produk::$totalProduk . "<br>";
echo $p1->bayar(15000000);
?>