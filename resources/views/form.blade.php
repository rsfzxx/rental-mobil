<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Service Kendaraan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-3">Formulir Service Kendaraan</h2>
        <form action="/print" method="post">
            @csrf
            <div class="form-group">
                <label for="no_spk">NO.SPK</label>
                <input type="text" class="form-control" id="no_spk" name="no_spk">
            </div>
            <div class="form-group">
                <label for="tanggal">TANGGAL</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
            <div class="form-group">
                <label for="pemilik">PEMILIK</label>
                <input type="text" class="form-control" id="pemilik" name="pemilik">
            </div>
            <div class="form-group">
                <label for="no_telp">NO.TELP</label>
                <input type="tel" class="form-control" id="no_telp" name="no_telp">
            </div>
            <div class="form-group">
                <label for="alamat">ALAMAT</label>
                <textarea class="form-control" id="alamat" name="alamat"></textarea>
            </div>
            <div class="form-group">
                <label for="jenis_mobil">JENIS MOBIL</label>
                <input type="text" class="form-control" id="jenis_mobil" name="jenis_mobil">
            </div>
            <div class="form-group">
                <label for="no_polisi">NO.POLISI</label>
                <input type="text" class="form-control" id="no_polisi" name="no_polisi">
            </div>
            <div class="form-group">
                <label for="km_masuk">KM MASUK</label>
                <input type="number" class="form-control" id="km_masuk" name="km_masuk">
            </div>
            <div class="form-group">
                <label for="mekanik">MEKANIK</label>
                <input type="text" class="form-control" id="mekanik" name="mekanik">
            </div>
            <div class="form-group">
                <label for="jam_masuk">JAM MASUK</label>
                <input type="time" class="form-control" id="jam_masuk" name="jam_masuk">
            </div>
            <div class="form-group">
                <label for="jam_selesai">JAM SELESAI</label>
                <input type="time" class="form-control" id="jam_selesai" name="jam_selesai">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
