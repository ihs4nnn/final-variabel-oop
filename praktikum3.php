<?php
// ==========================================
// 1. DEFINISI CLASS
// ==========================================

class Produk {
    public $nama;
    public $harga;
    // Properti static untuk menghitung total semua jenis produk
    public static $jumlahProduk = 0;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
        // Panggil method static untuk menambah hitungan setiap objek dibuat
        self::tambahProduk();
    }

    public static function tambahProduk() {
        self::$jumlahProduk++;
    }

    public function getInfo() {
        return "Produk: " . $this->nama . " | Harga: Rp" . number_format($this->harga, 0, ',', '.');
    }
}

// Inheritance (Pewarisan)
class Transaksi extends Produk {
    // Final method: Logika transaksi ini tidak bisa diubah oleh class turunan manapun
    final public function prosesTransaksi($jumlahBeli) {
        $total = $this->harga * $jumlahBeli;
        return "Berhasil Membeli $jumlahBeli unit <b>$this->nama</b>. <br>Total Bayar: <b>Rp" . number_format($total, 0, ',', '.') . "</b>";
    }
}

// ==========================================
// 2. EKSEKUSI & TAMPILAN
// ==========================================
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 3 - Sistem Produk</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; margin: 40px; background-color: #f9f9f9; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 600px; }
        .produk-list { background: #eef2f7; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
        .total-box { background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; font-weight: bold; }
        .transaksi-box { border-left: 5px solid #007bff; background: #f0f7ff; padding: 10px; margin-top: 10px; }
        h2, h3 { color: #333; }
        hr { border: 0; border-top: 1px dashed #ccc; }
    </style>
</head>
<body>

<div class="container">
    <h2>Praktikum 3: Sistem Produk Sederhana</h2>
    <p><i>Menggunakan konsep Static Property & Final Method</i></p>
    <hr>

    <h3>Daftar Produk:</h3>
    <div class="produk-list">
        <?php
        // Membuat minimal 3 produk berbeda sesuai perintah
        $p1 = new Transaksi("Laptop Gaming", 12500000);
        $p2 = new Transaksi("Mouse Wireless", 350000);
        $p3 = new Transaksi("Keyboard Mechanical", 800000);

        echo $p1->getInfo() . "<br>";
        echo $p2->getInfo() . "<br>";
        echo $p3->getInfo() . "<br>";
        ?>
    </div>

    <div class="total-box">
        Total Jenis Produk Terdaftar: <?php echo Produk::$jumlahProduk; ?>
    </div>

    <hr>

    <h3>Simulasi Transaksi:</h3>
    <div class="transaksi-box">
        <?php 
        // Memanggil final method
        echo $p1->prosesTransaksi(1); 
        ?>
    </div>
    <div class="transaksi-box">
        <?php 
        echo $p2->prosesTransaksi(3); 
        ?>
    </div>
</div>

</body>
</html>