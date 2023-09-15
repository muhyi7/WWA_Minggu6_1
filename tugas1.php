<?php
interface hitungLuas {
    public function hitungLuasPersegi();
    public function hitungLuasSegitiga();
    public function hitungLuasLingkaran();
}


class Persegi implements hitungLuas {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuasPersegi() {
        return $this->sisi * $this->sisi;
    }

    public function hitungLuasSegitiga() {
        return 0; // Tidak ada segitiga dalam persegi
    }

    public function hitungLuasLingkaran() {
        return 0; // Tidak ada lingkaran dalam persegi
    }
}

class Segitiga implements hitungLuas {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuasPersegi() {
        return 0; // Tidak ada persegi dalam segitiga
    }

    public function hitungLuasSegitiga() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function hitungLuasLingkaran() {
        return 0; // Tidak ada lingkaran dalam segitiga
    }
}

class Lingkaran implements hitungLuas {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function hitungLuasPersegi() {
        return 0; // Tidak ada persegi dalam lingkaran
    }

    public function hitungLuasSegitiga() {
        return 0; // Tidak ada segitiga dalam lingkaran
    }

    public function hitungLuasLingkaran() {
        return M_PI * pow($this->radius, 2);
    }
}


$persegi = new Persegi(5);
echo "Luas Persegi: " . $persegi->hitungLuasPersegi() . " \n <p>";

$segitiga = new Segitiga(4, 6);
echo "Luas Segitiga: " . $segitiga->hitungLuasSegitiga() . " \n <p>";

$lingkaran = new Lingkaran(10);
echo "Luas Lingkaran: " . $lingkaran->hitungLuasLingkaran() . " \n <p>";


