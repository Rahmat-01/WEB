<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Profil Website Sederhana</title>
</head>
<body>
    <div class="container text-center">
        <header class="my-4">
            <h1>Rahmat Hidayah</h1>
            <p>Bersemangat tentang coding, teknologi, dan kopi.</p>
            <img src="cr1.jpg" alt="Profile Image" class="profile-img img-thumbnail">
        </header>
        <nav class="mb-4">
            <a href="index.php" class="btn btn-primary">Home</a>
            <a href="classMethodPbo.php" class="btn btn-primary">Kelas Method Objek</a>
            <a href="encapsulation.php" class="btn btn-primary">Encapsulation</a>
            
        </nav>
        <main>
            <div class="code-section">
                <h2>Cari Kode</h2>
                <form method="GET" action="">
                    <div class="form-group">
                        <input type="text" name="query" class="form-control" placeholder="Masukkan kata kunci...">
                    </div>
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>

                <?php
                if (isset($_GET['query'])) {
                    $query = strtolower($_GET['query']);
                    $codes = [
                        ["title" => "Method Objek", "content" => "<?php\nrequire_once 'classMethodPbo.php';\n\$myObject = new Mobil();\n\$myObject->jumlahRoda();\n\$myObject->aktifkanJalan();\n?>"],
                        ["title" => "Encapsulation", "content" => "<?php\nclass Person {\n    private \$name;\n    private \$age;\n    public function __construct(\$name, \$age) {\n        \$this->name = \$name;\n        \$this->age = \$age;\n    }\n    public function getName() {\n        return \$this->name;\n    }\n    public function getAge() {\n        return \$this->age;\n    }\n    public function setName(\$name) {\n        \$this->name = \$name;\n    }\n    public function setAge(\$age) {\n        if (\$age > 0) {\n            \$this->age = \$age;\n        } else {\n            echo 'Age must be a positive number.';\n        }\n    }\n}\n\$person = new Person('Rahmat', 20);\n\$person->setName('rahmat hidayah');\n\$person->setAge(21);\necho \$person->getName();\necho \$person->getAge();\n?>"],
                        ["title" => "Jumlah Kelas", "content" => "<?php\nclass School {\n    private \$classCount;\n    public function __construct(\$classCount) {\n        \$this->classCount = \$classCount;\n    }\n    public function getClassCount() {\n        return \$this->classCount;\n    }\n    public function setClassCount(\$classCount) {\n        if (\$classCount > 0) {\n            \$this->classCount = \$classCount;\n        } else {\n            echo 'Jumlah kelas harus positif.';\n        }\n    }\n}\n\n\$school = new School(10);\necho 'Jumlah kelas: ' . \$school->getClassCount();\n\$school->setClassCount(15);\necho '<br>Jumlah kelas baru: ' . \$school->getClassCount();\n?>"]
                    ];

                    $results = array_filter($codes, function($code) use ($query) {
                        return strpos(strtolower($code['title']), $query) !== false || strpos(strtolower($code['content']), $query) !== false;
                    });

                    if (!empty($results)) {
                        echo '<h3>Hasil Pencarian:</h3>';
                        foreach ($results as $result) {
                            echo '<div class="card mb-3">';
                            echo '<div class="card-body">';
                            echo '<h5 class="card-title">' . $result['title'] . '</h5>';
                            echo '<pre class="card-text">' . htmlspecialchars($result['content']) . '</pre>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p>Tidak ada hasil ditemukan.</p>';
                    }
                }
                ?>
            </div>
        </main>
        <footer class="mt-4">
            &copy; 2024 Rahmat Hidayah
        </footer>
    </div>
</body>
</html>
