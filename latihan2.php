<?php
class Matematika {
    public static function tambah($a, $b) { return $a + $b; }
    public static function kurang($a, $b) { return $a - $b; }
    public static function kali($a, $b) { return $a * $b; }
    public static function luasPersegi($sisi) { return $sisi * $sisi; }
}

echo "<h3>Latihan 2: Kalkulator Statis</h3>";
echo "10 + 5 = " . Matematika::tambah(10, 5) . "<br>";
echo "10 - 5 = " . Matematika::kurang(10, 5) . "<br>";
echo "Luas Persegi (sisi 4) = " . Matematika::luasPersegi(4);
?>