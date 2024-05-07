<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print PDF</title>
    <style>
        body {
            border: 1px solid #000;
            padding: 20px;
        }

        .column {
            width: 25%;
            float: left;
        }

        p {
            font-size: 0.8rem;
            margin-bottom: -8px;
            font-weight:bold;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .judul {
            font-size: 2rem;
            margin-left:-1rem;
            margin-top:1.8rem;
            text-align: center;
            font-weight: bold;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .text {
            font-size: 0.6rem;
            margin-left:-1rem;
            color: #333;
            text-align: center;
            font-weight: bold;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-style: italic;
        }

        .small {
            margin-top : 7px;
            font-size : 0.35rem;
        }
    </style>
</head>
<body>
    <div class="column">
        <div class="judul">Bengkelin</div>
        <div class="text">Profesional x Reliable x Affordable</div>
    </div>
    <div class="column">
        <p>NO.SPK: {{ $no_spk }}</p>
        <p>TANGGAL: {{ $tanggal }}</p>
        <p>PEMILIK: {{ $pemilik }}</p>
        <p>NO.TELP: {{ $no_telp }}</p>
        <p>ALAMAT: {{ $alamat }}</p>
    </div>
    <div class="column">
        <p>JENIS MOBIL: {{ $jenis_mobil }}</p>
        <p>NO.POLISI: {{ $no_polisi }}</p>
        <p>KM MASUK: {{ $km_masuk }}</p>
        <p>MEKANIK: {{ $mekanik }}</p>
    </div>
    <div class="column">
        <p>JAM MASUK: {{ $jam_masuk }}</p>
        <p>JAM SELESAI: {{ $jam_selesai }}</p>
        <div class="small">*Di konfirmasi ulang oleh mekanik</div>
    </div>
</body>
</html>