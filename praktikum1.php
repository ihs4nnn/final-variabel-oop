<?php
/**
 * File: praktikum1.php
 * Tugas: Static Property & Reset Method
 */

// 1. DEFINISI CLASS
class Counter {
    // Properti static untuk menyimpan data secara global di level class
    public static $jumlah = 0;

    // Method untuk menambah nilai
    public function tambah() {
        self::$jumlah++;
    }

    // Method static untuk mereset nilai kembali ke 0
    public static function reset() {
        self::$jumlah = 0;
    }
}

// --- TAMPILAN OUTPUT ---
echo "<h2>Hasil Tugas Praktikum 1: Static Variable</h2>";
echo "<hr>";

// 2. PROSES KONDISI BEFORE RESET
// Membuat 5 objek sesuai instruksi tugas
$obj1 = new Counter();
$obj2 = new Counter();
$obj3 = new Counter();
$obj4 = new Counter();
$obj5 = new Counter();

// Menjalankan method tambah untuk kelima objek
$obj1->tambah();
$obj2->tambah();
$obj3->tambah();
$obj4->tambah();
$obj5->tambah();

echo "<b>[ KONDISI BEFORE RESET ]</b><br>";
echo "Jumlah objek yang dibuat: 5<br>";
echo "Nilai Counter saat ini (Hasil Akumulasi): " . Counter::$jumlah . "<br>";
echo "<br>";

// 3. PROSES KONDISI AFTER RESET
// Memanggil method reset
Counter::reset();

echo "<b>[ KONDISI AFTER RESET ]</b><br>";
echo "Nilai Counter setelah fungsi reset() dipanggil: " . Counter::$jumlah . "<br>";
?>