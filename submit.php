<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kritik_saran";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$name = $_POST['name'];
$message = $_POST['message'];

// Simpan ke database
$sql = "INSERT INTO feedback (name, message) VALUES ('$name', '$message')";

if ($conn->query($sql) === TRUE) {
    // Redirect ke halaman utama
    header("Location: index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
