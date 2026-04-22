<?php
class Pegawai {
    public $nama;
    public function __construct($nama) { $this->nama = $nama; }

    // Final agar aturan absen tidak bisa dimodifikasi
    final public function absen() {
        return $this->nama . " telah melakukan absen pada: " . date("H:i:s");
    }
}

class Manager extends Pegawai {
    // Tidak bisa override method absen()
}

$m = new Manager("Fikri");
echo "<h3>Latihan 3: Final Method</h3>";
echo $m->absen();
?>