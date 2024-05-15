<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print PDF</title>
    <style>
        body {
            border: 2px solid #000;
        }
        .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .row {
            flex: 1;
        }

        .row:nth-child(1) {
            height: 12%;
        }

        .row:nth-child(2) {
            height: 5%;
        }

        .row:nth-child(3) {
            height: 15%;
        }

        .row:nth-child(4) {
            height: 20%;
        }

        .row:nth-child(5) {
            height: 11%;
        }

        .row:nth-child(6) {
            height: 35%;
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

        .smalllast {
            margin-top : 7px;
            font-size : 0.6rem;
            width: 80%;
        }

        .payment-box {
            width: 10px;
            height: 10px;
            display: inline-block;
            border: 1px solid black;
            margin-top : 10px;
            vertical-align: middle;
        }

        .payment {
            border-top:1px solid #000;
            padding: 12px;
            font-weight:bold;
            text-align:center;
            font-size: 0.8rem;
        }

        .pemeriksaan {
            border-top:1px solid #000;
            padding :12px;
            font-weight:bold;
            font-size: 0.8rem;
        }

        .servis {
            border-top:1px solid #000;
            padding :12px;
            font-weight:bold;
        }

        .item {
            margin: 3px;
            margin-top:10px;
            margin-left:10px;
            font-size:0.7rem;
            font-weight: bold;
            letter-spacing: -0.5px;
        }

        .tambahan{
            font-size:0.7rem;
        }
        .box{
            width: 7px;
            margin-right:1px;
            height: 7px;
            display: inline-block;
            border: 1px solid black;
            vertical-align: middle;
            margin-top: 3px;
        }

        .boxservis {
            width: 15px;
            height: 15px;
            display: inline-block;
            border: 1px solid black;
            vertical-align: middle;
            margin-right: 5px;
            margin-left: 10px;
            margin-top:8px;
        }

        .catatan{
            border-top:1px solid #000;
            font-weight:bold;
        }

        .catatan::after {
            content: ' ..............................................................................................................................................................................................................';
            font-size: 10px;
        }
        .titik::after {
            content: '............................................................................................................................................................................................................................................................................';
            font-size: 10px;
            font-weight: bold;
            padding:12px;
        }

        .borderlast{
            border-right:1px solid #000;
        }

        .itemlast{
            font-weight:bold;
        }

        .textlast{
            font-size:10px;
            padding:5px;
        }

        .itemboxlast{
            margin: 3px;
            margin-top:5px;
            margin-left:10px;
            font-size:1rem;
            font-weight: bold;
            letter-spacing: -0.5px;
        }

        .boxmobil{
            width: 10px;
            margin-right:1px;
            height: 10px;
            display: inline-block;
            border: 1px solid black;
            vertical-align: middle;
            margin-top: 5px;
            margin-left:15px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
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
        </div>
        <div class="row">
            <div class="payment">
                <div class="column" style="text-align:left; font-size:20px; width: 25%;">PEMBAYARAN</div>
                <div class="column" style="width: 17%;">
                    <div class="payment-box"></div> CASH
                </div>
                <div class="column" style="width: 17%;">
                    <div class="payment-box"></div> DEBET
                </div>
                <div class="column" style="width: 17%;">
                    <div class="payment-box"></div> CREDIT
                </div>
                <div class="column" style="text-align:left; width: 24%;">
                    <div class="payment-box"></div> LAINNYA..........
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pemeriksaan">
                <div class="row" style="margin-bottom:10px; text-align:left; font-size:20px; width: 50%;">PEMERIKSAAN AWAL</div>
                <div class="column">
                    <div class="item"><div class="box"></div> OLI MESIN</div>
                    <div class="item"><div class="box"></div> OLI TRANSMISI</div>
                    <div class="item"><div class="box"></div> REM</div>
                    <div class="item"><div class="box"></div> MASTER REM</div>
                </div>
                <div class="column">
                    <div class="item"><div class="box"></div> MINYAK POWER STEERING</div>
                    <div class="item"><div class="box"></div> RADIATOR</div>
                    <div class="item"><div class="box"></div> AIR RADIATOR</div>
                    <div class="item"><div class="box"></div> FAN BELT</div>
                </div>
                <div class="column">
                    <div class="item"><div class="box"></div> SARINGAN UDARA</div>
                    <div class="item"><div class="box"></div> SARINGAN AC</div>
                    <div class="item"><div class="box"></div> LAMPU LAMPU</div>
                    <div class="item"><div class="box"></div> WIPER</div>
                </div>
                <div class="column">
                    <div class="item"><div class="box"></div> AIR WIPER</div>
                    <div class="item"><div class="box"></div> AKI</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="servis">
                <div class="row" style="margin-bottom:10px; text-align:left; font-size:20px; width: 50%;">SERVIS TAMBAHAN</div>
                <div class="column" style="width: 50%;">
                    <div class="tambahan"><div class="boxservis"></div>.......................................................................................</div>
                    <div class="tambahan"><div class="boxservis"></div>.......................................................................................</div>
                    <div class="tambahan"><div class="boxservis"></div>.......................................................................................</div>
                    <div class="tambahan"><div class="boxservis"></div>.......................................................................................</div>
                    <div class="tambahan"><div class="boxservis"></div>.......................................................................................</div>
                    <div class="tambahan"><div class="boxservis"></div>.......................................................................................</div>
                </div>
                <div class="column" style="width: 50%;">
                    <div class="tambahan"><div class="boxservis"></div>.......................................................................................</div>
                    <div class="tambahan"><div class="boxservis"></div>.......................................................................................</div>
                    <div class="tambahan"><div class="boxservis"></div>.......................................................................................</div>
                    <div class="tambahan"><div class="boxservis"></div>.......................................................................................</div>
                    <div class="tambahan"><div class="boxservis"></div>.......................................................................................</div>
                    <div class="tambahan"><div class="boxservis"></div>.......................................................................................</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="catatan" style="padding-top:10px; font-size:20px; width:100%;"><span style="padding-left:12px;">CATATAN LAIN</span></div>
            <div class="titik" style="margin-top:8px"></div>
            <div class="titik" style="margin-top:10px"></div>
            <div class="titik" style="margin-top:10px"></div>
        </div>
        <div class="row">
            <div class="column" style="width: 50%; border-top: 1px solid black;">
                <div class="itemlast" style="height: 50%;">
                    <div class="textlast" style="padding:10px; font-size:20px;"> INSPEKSI MOBIL</div>
                    <div class="itemboxlast"><div class="boxmobil"></div> DONGKRAK</div>
                    <div class="itemboxlast"><div class="boxmobil"></div> TOOL KIT</div>
                    <div class="itemboxlast"><div class="boxmobil"></div> BAN CADANGAN</div>
                    <div class="itemboxlast"><div class="boxmobil"></div> STNK</div>
                    <div class="itemboxlast"><div class="boxmobil"></div> CHARGER HP</div>
                    <div class="itemboxlast"><div class="boxmobil"></div> UANG RP ....................................................</div>
                </div>
                <div class="itemlast" style="height: 50%;">
                    <div class="column" style="width: 100%; margin-top:10px; margin-left:10px;">
                        <div class="textlast" style="padding:10px; font-size:15px;"> BARANG BERHARGA LAIN NYA</div>
                        <div class="tambahan"><div class="boxservis"></div>.........................................................................................</div>
                        <div class="tambahan"><div class="boxservis"></div>.........................................................................................</div>
                        <div class="tambahan"><div class="boxservis"></div>.........................................................................................</div>
                        <div class="tambahan"><div class="boxservis"></div>.........................................................................................</div>
                        <div class="smalllast" style="padding-left:10px;">*Jangan tinggalkan barang berharga di dalam mobil, kami tidak bertanggung jawab apabila terdapat kehilangan barang berharga anda di dalam mobil</div>
                    </div>
                </div>
            </div>
            <div class="column" style="width: 50%; border-left: 1px solid black; border-top: 1px solid black;">
                <div class="itemlast" style="height: 40%;">
                    <div class="textlast" style="padding:5px; font-size:15px;"> HISTORY/RIWAYAT SERVIS</div>
                    <div class="textlast">TANGGAL TERAKHIR SERVIS :</div>
                    <div class="textlast">KM :</div>
                    <div class="textlast">PEKERJAAN :</div>
                </div>
                <div class="itemlast" style="border-top:1px solid #000; height: 20%;">
                    <div class="textlast" style="padding:5px; font-size:15px;"> ESTIMASI BIAYA</div>
                    <div class="textlast">RP. ........................................................................................................................</div>
                    <div class="small" style="padding-left:5px;">*Di konfirmasi oleh sa/mekanik</div>
                </div>
                <div class="itemlast" style="border-top: 1px solid #000; height: 40%;">
                    <div class="textlast" style="padding: 5px; font-size: 15px;">TANDA TANGAN
                        <div class="textlast" style="font-size: 15px; display: flex; justify-content: space-between;">
                            <span class="textlast" style="font-size: 15px; padding-right:100px;">SA/MEKANIK</span>
                            <span class="textlast" style="font-size: 15px;">CUSTOMER</span>
                        </div>         
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>