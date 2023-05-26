<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "databank_php";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Verbinding met de database is succesvol tot stand gebracht.";

    $sql = "SELECT * FROM onderwerpen";
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {
        foreach ($result as $row) {
            $id = $row["id"];
            $name = $row["name"];
            $description = $row["description"];
            $image = $row["image"];

            if ($file_name == $name) {
                ?>
                <section>
                    <h1><?php echo $name ?></h1>
                    <img src="<?php echo $image ?>" alt="Game 1 afbeelding">
                    <p><?php echo $description ?></p>
                </section>
                <?php
            }
        }
    } else {
        echo "Geen resultaten gevonden.";
    }
} catch (PDOException $e) {
    die("Fout bij het verbinden met de database: " . $e->getMessage());
}
?>