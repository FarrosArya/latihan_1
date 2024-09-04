<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Pegawai</title>
    <!-- Include Bootstrap CSS -->
     <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Form Registrasi Pegawai</h1>
        <form action="proses_registrasi.php" method="post">
            <!-- <div class="mb-3">
                <label for="id" class="form-label">ID:</label>
                <input type="text" id="id" name="id" class="form-control" required>
            </div> -->

            <div class="mb-3">
                <label for="nik" class="form-label">NIK:</label>
                <input type="text" id="nik" name="nik" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea id="alamat" name="alamat" class="form-control" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="no_tlp" class="form-label">Nomor Telepon:</label>
                <input type="tel" id="no_tlp" name="no_tlp" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                <!-- Format: xxx-xxx-xxxx -->
            </div>

            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" id="jabatan" name="jabatan" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
