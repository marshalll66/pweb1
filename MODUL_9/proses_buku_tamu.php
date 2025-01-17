<?php
include 'latihan_09_config.php'; // Pastikan file konfigurasi database ada dan sudah benar

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = htmlspecialchars($_POST['nama']); // Menghindari XSS
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);
    $tanggal = date('Y-m-d H:i:s');

    $sql = "INSERT INTO buku_tamu (nama, email, pesan, tanggal) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nama, $email, $pesan, $tanggal);

    if ($stmt->execute()) {
        echo "<div class='container mt-5'><div class='alert alert-success'>Pesan berhasil dikirim.</div></div>";
    } else {
        echo "<div class='container mt-5'><div class='alert alert-danger'>Error: " . $stmt->error . "</div></div>";
    }

    $stmt->close();
    $conn->close();
}
?>
