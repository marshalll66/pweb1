<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Alumni</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Tracer Alumni</h1>

    <form id="alumniForm">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br><br>
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="major">Jurusan:</label><br>
        <input type="text" id="major" name="major" required><br><br>
        <label for="year">Angkatan:</label><br>
        <input type="text" id="year" name="year" required><br><br>
        <button type="submit">Tambah Data</button>
    </form>

    <h2>Daftar Alumni</h2>
    <table id="alumniTable">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data akan dimuat dengan JavaScript -->
        </tbody>
    </table>

    <script src="script.js"></script>
</body>
</html>