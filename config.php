<?php
$servername = "localhost"; // De naam van de server (standaard "localhost" als je lokaal werkt)
$username = "root"; // Je MySQL-gebruikersnaam
$password = "mysql"; // Je MySQL-wachtwoord
$database = "onderwerpen"; // De naam van je database

// Verbinding maken met de database
$conn = new mysqli($servername, $username, $password, $database);

// Controleren op eventuele fouten tijdens het verbinden
if ($conn->connect_error) {
    die("Kan geen verbinding maken met de database: " . $conn->connect_error);
}
?>
<?php
// Voeg de databaseconfiguratiecode toe (stap 3)

// Een voorbeeldquery uitvoeren
$sql = "SELECT * FROM sport";
$result = $conn->query($sql);

// Controleren of er resultaten zijn
if ($result->num_rows > 0) {
    // Gegevens ophalen en weergeven
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " Naam: " . $row["naam"] . "<br>";
    }
} else {
    echo "Geen resultaten gevonden.";
}

// De verbinding sluiten
$conn->close();
?>