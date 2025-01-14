<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['data'];

    file_put_contents('data/alumni.json', $data);

    echo "Data berhasil disimpan!";
} else {
    echo "Metode tidak valid!";
}
?>
