<?php
class Mahasiswa
{
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Simulasi overloading untuk mengatur data berdasarkan jumlah argumen
    public function setData()
    {
        $args = func_get_args();
        $num_args = func_num_args();

        if ($num_args == 3) {
            $this->nama = $args[0];
            $this->nim = $args[1];
            $this->jurusan = $args[2];
        } elseif ($num_args == 2) {
            $this->nama = $args[0];
            $this->nim = $args[1];
            $this->jurusan = "Belum ditentukan";
        } else {
            echo "Error: Jumlah argumen tidak sesuai";
        }
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }
}

// Membuat objek Mahasiswa dan mengatur data menggunakan simulasi overloading
$mahasiswa = new Mahasiswa("Rahmat Hidayah", "123456789", "Teknik Informatika");
echo "<p>Nama: " . $mahasiswa->getNama() . "</p>";
echo "<p>NIM: " . $mahasiswa->getNim() . "</p>";
echo "<p>Jurusan: " . $mahasiswa->getJurusan() . "</p>";

// Mengatur ulang data mahasiswa dengan jumlah argumen berbeda
$mahasiswa->setData("Rahmat", "987654321");
echo "<p>Updated Nama: " . $mahasiswa->getNama() . "</p>";
echo "<p>Updated NIM: " . $mahasiswa->getNim() . "</p>";
echo "<p>Updated Jurusan: " . $mahasiswa->getJurusan() . "</p>";

?>
