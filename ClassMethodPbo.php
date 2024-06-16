<?php
class Kelas
{
    private $namaKelas;
    private $jumlahMurid;

    public function __construct($namaKelas, $jumlahMurid)
    {
        $this->namaKelas = $namaKelas;
        $this->jumlahMurid = $jumlahMurid;
    }

    public function getNamaKelas()
    {
        return $this->namaKelas;
    }

    public function getJumlahMurid()
    {
        return $this->jumlahMurid;
    }

    public function setNamaKelas($namaKelas)
    {
        $this->namaKelas = $namaKelas;
    }

    public function setJumlahMurid($jumlahMurid)
    {
        if ($jumlahMurid > 0) {
            $this->jumlahMurid = $jumlahMurid;
        } else {
            echo "Jumlah murid harus positif.";
        }
    }
}

class Universitas
{
    private $namaUniversitas;
    private $lokasi;

    public function __construct($namaUniversitas, $lokasi)
    {
        $this->namaUniversitas = $namaUniversitas;
        $this->lokasi = $lokasi;
    }

    public function getNamaUniversitas()
    {
        return $this->namaUniversitas;
    }

    public function getLokasi()
    {
        return $this->lokasi;
    }

    public function setNamaUniversitas($namaUniversitas)
    {
        $this->namaUniversitas = $namaUniversitas;
    }

    public function setLokasi($lokasi)
    {
        $this->lokasi = $lokasi;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Class Method Objek</title>
</head>
<body id="class-page">
    <header>
        <h1>Class Method Objek</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="classMethodObjek.php">Class Method Objek</a>
        <a href="encapsulation.php">Encapsulation</a>
    </nav>
    <main>
        <div class="container">
            <section class="box">
                <h2>Kelas Code</h2>
                <div class="code">
                    <pre>
<code>&lt;
    ?php
class Kelas
{
    private $namaKelas;
    private $jumlahMurid;

    public function __construct($namaKelas, $jumlahMurid)
    {
        $this->namaKelas = $namaKelas;
        $this->jumlahMurid = $jumlahMurid;
    }

    public function getNamaKelas()
    {
        return $this->namaKelas;
    }

    public function getJumlahMurid()
    {
        return $this->jumlahMurid;
    }

    public function setNamaKelas($namaKelas)
    {
        $this->namaKelas = $namaKelas;
    }

    public function setJumlahMurid($jumlahMurid)
    {
        if ($jumlahMurid > 0) {
            $this->jumlahMurid = $jumlahMurid;
        } else {
            echo "Jumlah murid harus positif.";
        }
    }
}

class Universitas
{
    private $namaUniversitas;
    private $lokasi;

    public function __construct($namaUniversitas, $lokasi)
    {
        $this->namaUniversitas = $namaUniversitas;
        $this->lokasi = $lokasi;
    }

    public function getNamaUniversitas()
    {
        return $this->namaUniversitas;
    }

    public function getLokasi()
    {
        return $this->lokasi;
    }

    public function setNamaUniversitas($namaUniversitas)
    {
        $this->namaUniversitas = $namaUniversitas;
    }

    public function setLokasi($lokasi)
    {
        $this->lokasi = $lokasi;
    }
}
?&gt;
                    </code></pre>
                </div>
            </section>
            <section class="box">
                <h2>Result</h2>
                <div class="result">
                    <?php
                    $kelas = new Kelas("INFORMATIKA 3", 27);
                    echo "<p>Nama Kelas: " . $kelas->getNamaKelas() . "</p>";
                    echo "<p>Jumlah Murid: " . $kelas->getJumlahMurid() . "</p>";

                    $universitas = new Universitas("Universitas IAIN", "Kota PALU");
                    echo "<p>Nama Universitas: " . $universitas->getNamaUniversitas() . "</p>";
                    echo "<p>Lokasi: " . $universitas->getLokasi() . "</p>";

                    // Update properties
                    $universitas->setNamaUniversitas("Universitas UIN DATIKARAMA PALU");
                    $universitas->setLokasi("Kota PALU");

                    echo "<p>Updated Nama Universitas: " . $universitas->getNamaUniversitas() . "</p>";
                    echo "<p>Updated Lokasi: " . $universitas->getLokasi() . "</p>";
                    ?>
                </div>
            </section>
        </div>
    </main>
    <footer>&copy; 2024 Rahmat Hidayah</footer>
</body>
</html>
