<!DOCTYPE html>
<head>
    <title>Sertifikat</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
        }

        #halaman{
            width: auto; 
            height: auto; 
            position: absolute; 
            border: 1px solid; 
            padding-top: 30px; 
            padding-left: 30px; 
            padding-right: 30px; 
            padding-bottom: 80px;
        }

    </style>

</head>

<body>
    <div id=halaman>
        <h3 id=judul>SERTIFIKAT</h3>
        <p id=judul>Praktek Kerja Lapangan</p>
        <p id=judul>No./ .. /..</p>

        <p>Diberikan Kepada :</p>

        <table>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$data->name}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Jurusan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$data->jurusan}}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat PKL</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{$data->instansi}}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Alamat</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{$data->alamat}}</td>
            </tr>
        </table>
        <p>Nama diatas telah dinyatakan telah menyelesaikan masa prakerin selama 3 Bulan penuh</p><br>
        <div style="width: 50% text-align: left; float: right;">Tanggal, .....................</div><br>
        <div style="width: 50% text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 50% text-align: left; float: right;">{{$data->name}}</div>

    </div>
</body>

</html>