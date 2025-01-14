$(document).ready(function () {
    // Fungsi untuk memuat data dari alumni.json
    function loadAlumni() {
        $.getJSON("data/alumni.json", function (data) {
            let rows = "";
            data.forEach((alumni, index) => {
                rows += `
                    <tr>
                        <td>${alumni.nim}</td>
                        <td>${alumni.name}</td>
                        <td>${alumni.major}</td>
                        <td>${alumni.year}</td>
                        <td><button class="delete" data-index="${index}">Hapus</button></td>
                    </tr>
                `;
            });
            $("#alumniTable tbody").html(rows);
        });
    }

    // Muat data saat halaman dimuat
    loadAlumni();

    // Tambah data baru
    $("#alumniForm").submit(function (e) {
        e.preventDefault();

        const newAlumni = {
            nim: $("#nim").val(),
            name: $("#name").val(),
            major: $("#major").val(),
            year: $("#year").val()
        };

        $.getJSON("data/alumni.json", function (data) {
            data.push(newAlumni);

            // Simpan kembali ke alumni.json (butuh PHP untuk ini)
            $.post("proses.php", { data: JSON.stringify(data) }, function () {
                loadAlumni();
                $("#alumniForm")[0].reset();
            });
        });
    });

    // Hapus data
    $(document).on("click", ".delete", function () {
        const index = $(this).data("index");

        $.getJSON("data/alumni.json", function (data) {
            data.splice(index, 1);

            // Simpan kembali ke alumni.json
            $.post("proses.php", { data: JSON.stringify(data) }, function () {
                loadAlumni();
            });
        });
    });
});