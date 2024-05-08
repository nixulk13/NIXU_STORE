<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "nixu_store";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM utilisateurs WHERE email='$email' AND mot_de_passe='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    header("Location: welcome.php");
} else {
   
    echo "Identifiants invalides. Veuillez réessayer.";
}

$conn->close();
?>
