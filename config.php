<?php
    $servername = "localhost"; // De naam van de server (meestal localhost voor lokale ontwikkeling)
    $username = "root"; // Je phpMyAdmin-gebruikersnaam
    $password = "mysql"; // Je phpMyAdmin-wachtwoord
    $database = "databank_php"; // De naam van je database

    // Verbinding maken met de database
    $conn = new mysqli($servername, $username, $password, $database);

    // Controleren op eventuele fouten tijdens het verbinden
    if ($conn->connect_error) {
        die("Kan geen verbinding maken met de database: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM onderwerpen";
    $result = $conn->query($sql);

    if ($result) {
        $row_count = mysqli_num_rows($result);

        if ($row_count > 0) {
        // Itereren over de resultaten en gegevens verwerken
        while ($row = $result->fetch_assoc()) {
            // Toegang tot de velden van elk resultaat
            $id = $row["id"];
            $name = $row["name"];
            $description = $row["description"];
            $image = $row["image"];
            if ($file_name == $name){ ?>
                <section>
                    <h1><?php echo $name ?></h1>
                    <img src= <?php echo $image?> alt="Game 1 afbeelding">
                    <p><?php echo $description ?></p>
                </section>
                <?php
          
            }
        }
        } else {
            echo "Geen resultaten gevonden.";
        }
    }
    // Sluit de databaseverbinding
    $conn->close();
?>