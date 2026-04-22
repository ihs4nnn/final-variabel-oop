<?php
// ==========================================
// 1. DEFINISI CLASS
// ==========================================
class Counter {
    // Properti static: nilainya tetap tersimpan di level class
    public static $jumlah = 0;

    // Method untuk menambah nilai
    public function tambah() {
        self::$jumlah++;
    }

    // Method reset: Mengembalikan nilai static ke nol
    public static function reset() {
        self::$jumlah = 0;
    }
}

// --- Tampilan Output di Browser ---
echo "<h2>Hasil Tugas Praktikum 1: Static & Reset</h2>";
echo "<hr>";

// ==========================================
// 2. KONDISI BEFORE RESET (5 OBJEK)
// ==========================================
echo "<b>[ KONDISI BEFORE RESET ]</b><br>";

// Membuat 5 objek sesuai instruksi
$o1 = new Counter();
$o2 = new Counter();
$o3 = new Counter();
$o4 = new Counter();
$o5 = new Counter();

// Memanggil method tambah untuk masing-masing objek
$o1->tambah();
$o2->tambah();
$o3->tambah();
$o4->tambah();
$o5->tambah();

echo "Status: Berhasil membuat 5 objek dan memanggil method tambah().<br>";
echo "Nilai Counter saat ini: <b>" . Counter::$jumlah . "</b><br>";
echo "<br>";

// ==========================================
// 3. KONDISI AFTER RESET
// ==========================================
echo "<b>[ KONDISI AFTER RESET ]</b><br>";

// Memanggil method reset secara statis
Counter::reset();

echo "Status: Method Counter::reset() telah dijalankan.<br>";
echo "Nilai Counter setelah di-reset: <b>" . Counter::$jumlah . "</b><br>";
?>