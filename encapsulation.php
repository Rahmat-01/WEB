<?php
class Person
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($age > 0) {
            $this->age = $age;
        } else {
            echo "Age must be a positive number.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Encapsulation Example</title>
</head>
<body id="encapsulation-page">
    <header>
        <h1>Encapsulation in OOP</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="classMethodPbo.php">Kelas Method Objek</a>
        <a href="encapsulation.php">Encapsulation</a>
    </nav>
    <main>
        <div class="container">
            <section class="box">
                <h2>Code</h2>
                <div class="code">
                    <pre>
<code>&lt;
    ?php
class Person
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($age > 0) {
            $this->age = $age;
        } else {
            echo "Age must be a positive number.";
        }
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
                    $person = new Person("Rahmat", 20);
                    echo "Name: " . $person->getName() . "<br>";
                    echo "Age: " . $person->getAge() . "<br>";

                    // Update properties
                    $person->setName("rahmat");
                    $person->setAge(21);

                    echo "Updated Name: " . $person->getName() . "<br>";
                    echo "Updated Age: " . $person->getAge() . "<br>";
                    ?>
                </div>
            </section>
        </div>
    </main>
    <footer>&copy; 2024 Rahmat Hidayah</footer>
</body>
</html>
