<?php
$servername = "localhost";
$username = "id11550485_root";
$password = "e!7p*SQ({=h\IRM)";
$dbname = "id11550485_newsletter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO id11550485_newsletter(prenom, nom, email)
VALUES ('$_POST[prenomnews]', '$_POST[nomnews]', '$_POST[emailnews]')";

if ($conn->query($sql) === TRUE) {
  echo "Vous êtes enregistrés pour la newsletter! Vous pouvez revenir en arrière";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>