<?php
// ==========================================
// 1. DEFINISI CLASS MATEMATIKA
// ==========================================
class Matematika {
    // Method dasar dari modul
    public static function kali($a, $b) {
        return $a * $b;
    }

    // TUGAS: Tambahkan method Tambah()
    public static function Tambah($a, $b) {
        return $a + $b;
    }

    // TUGAS: Tambahkan method Kurang()
    public static function Kurang($a, $b) {
        return $a - $b;
    }

    // TUGAS: Fungsi untuk menghitung luas persegi
    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}

// ==========================================
// 2. LOGIKA PROSES FORM
// ==========================================
$hasilTambah = $hasilKurang = $hasilKali = $hasilLuas = null;
$n1 = $n2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST['angka1'];
    $n2 = $_POST['angka2'];

    // Memanggil static method langsung (tanpa 'new')
    $hasilTambah = Matematika::Tambah($n1, $n2);
    $hasilKurang = Matematika::Kurang($n1, $n2);
    $hasilKali   = Matematika::kali($n1, $n2);
    $hasilLuas   = Matematika::luasPersegi($n1);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 2 - Static Method</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 40px; background-color: #f4f7f6; }
        .card { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); max-width: 450px; }
        h2 { color: #333; margin-top: 0; }
        input[type="number"] { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #218838; }
        .result-box { margin-top: 20px; padding: 15px; background: #e9ecef; border-radius: 4px; }
        hr { border: 0; border-top: 1px solid #ccc; margin: 15px 0; }
    </style>
</head>
<body>

<div class="card">
    <h2>Kalkulator Statis</h2>
    <form method="post">
        <label>Angka 1 / Sisi Persegi:</label>
        <input type="number" name="angka1" value="<?php echo $n1; ?>" required>

        <label>Angka 2:</label>
        <input type="number" name="angka2" value="<?php echo $n2; ?>" required>

        <button type="submit">Hitung Sekarang</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="result-box">
            <strong>Hasil Perhitungan:</strong><br>
            Tambah: <?php echo $hasilTambah; ?><br>
            Kurang: <?php echo $hasilKurang; ?><br>
            Kali: <?php echo $hasilKali; ?><br>
            <hr>
            <strong>Luas Persegi (Sisi <?php echo $n1; ?>):</strong><br>
            Hasil: <?php echo $hasilLuas; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>