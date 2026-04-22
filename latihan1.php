<?php
class Counter {
    public static $jumlah = 0;

    public function tambah() {
        self::$jumlah++;
    }

    public static function reset() {
        self::$jumlah = 0;
    }
}

// Eksekusi 5 objek
$c1 = new Counter(); $c2 = new Counter(); $c3 = new Counter();
$c4 = new Counter(); $c5 = new Counter();

$c1->tambah(); $c2->tambah(); $c3->tambah(); $c4->tambah(); $c5->tambah();

echo "<h3>Latihan 1: Static Counter</h3>";
echo "Nilai Counter (Sebelum Reset): " . Counter::$jumlah . "<br>";

Counter::reset();
echo "Nilai Counter (Setelah Reset): " . Counter::$jumlah;
?>