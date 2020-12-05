<?php
// nogal wiedes
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "avdveen";

// variabelen die verwijzen naar de HTML waarden
$vanWie = $_POST['vanWie'];
$emailInvoer = $_POST['emailInvoer'];
$telefoonNummer = $_POST['telefoonNummer'];
$berichtBodyFull = $_POST['berichtBodyFull'];


// Verbinding maken
$conn = new mysqli($servername, $username, $password, $dbname);

// Verinding controleren
if ($conn->connect_error) { die("Verbinding mislukt: " . $conn->connect_error); }


// Query om bericht aan te maken
$sql = "INSERT INTO berichten (vanWie, emailInvoer, telefoonNummer,
                              berichtBodyFull)
        VALUES ('$vanWie', '$emailInvoer', '$telefoonNummer', '$berichtBodyFull')";

if ($conn->query($sql) === TRUE)
{
    echo "Bedankt voor je bericht! Wij nemen zo snel mogelijk contact met u op.";
}
    else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// brengt gebruiker naar home
header("Location: http://localhost/contactpage/");

exit();



?>
