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
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="form-group col-md-12 mb-3">
                            <label for="no_spk">NO.SPK</label>
                            <input type="text" class="form-control" id="no_spk" name="no_spk">
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label for="tanggal">TANGGAL</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label for="pemilik">PEMILIK</label>
                            <input type="text" class="form-control" id="pemilik" name="pemilik">
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label for="no_telp">NO.TELP</label>
                            <input type="tel" class="form-control" id="no_telp" name="no_telp">
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label for="alamat">ALAMAT</label>
                            <textarea class="form-control" id="alamat" name="alamat"></textarea>
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label for="jenis_mobil">JENIS MOBIL</label>
                            <input type="text" class="form-control" id="jenis_mobil" name="jenis_mobil">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="form-group col-md-12 mb-3">
                            <label for="no_polisi">NO.POLISI</label>
                            <input type="text" class="form-control" id="no_polisi" name="no_polisi">
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label for="km_masuk">KM MASUK</label>
                            <input type="number" class="form-control" id="km_masuk" name="km_masuk">
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label for="mekanik">MEKANIK</label>
                            <input type="text" class="form-control" id="mekanik" name="mekanik">
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label for="jam_masuk">JAM MASUK</label>
                            <input type="time" class="form-control" id="jam_masuk" name="jam_masuk">
                        </div>
                        <div class="form-group col-md-12 mb-3">
                            <label for="jam_selesai">JAM SELESAI</label>
                            <input type="time" class="form-control" id="jam_selesai" name="jam_selesai">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group col-md-12 mb-3">
                        <label for="jam_selesai">Servis Tambahan 1</label>
                        <input type="text" class="form-control" id="servis_tambahan1" name="servis_tambahan1">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="jam_selesai">Servis Tambahan 2</label>
                        <input type="text" class="form-control" id="servis_tambahan2" name="servis_tambahan2">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="jam_selesai">Servis Tambahan 3</label>
                        <input type="text" class="form-control" id="servis_tambahan3" name="servis_tambahan3">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="jam_selesai">Servis Tambahan 4</label>
                        <input type="text" class="form-control" id="servis_tambahan4" name="servis_tambahan4">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="jam_selesai">Servis Tambahan 5</label>
                        <input type="text" class="form-control" id="servis_tambahan5" name="servis_tambahan5">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="jam_selesai">Servis Tambahan 6</label>
                        <input type="text" class="form-control" id="servis_tambahan6" name="servis_tambahan6">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group col-md-12 mb-3">
                        <label for="jam_selesai">Servis Tambahan 7</label>
                        <input type="text" class="form-control" id="servis_tambahan7" name="servis_tambahan7">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="jam_selesai">Servis Tambahan 8</label>
                        <input type="text" class="form-control" id="servis_tambahan8" name="servis_tambahan8">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="jam_selesai">Servis Tambahan 9</label>
                        <input type="text" class="form-control" id="servis_tambahan9" name="servis_tambahan9">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="jam_selesai">Servis Tambahan 10</label>
                        <input type="text" class="form-control" id="servis_tambahan10" name="servis_tambahan10">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="jam_selesai">Servis Tambahan 11</label>
                        <input type="text" class="form-control" id="servis_tambahan11" name="servis_tambahan11">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="jam_selesai">Servis Tambahan 12</label>
                        <input type="text" class="form-control" id="servis_tambahan12" name="servis_tambahan12">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
