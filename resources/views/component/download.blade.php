<!DOCTYPE html>
<head>
    <title>Surat Pengantar</title>
    <meta charset="utf-8">
    <style>
      table, th, td {
        border: 1px solid;
      }

      table {
        width: 100%;
        border-collapse: collapse;
      }

      td{
        text-align: center;
      }

      th {
        height: 70px;
      }
    </style>
</head>

<body>
  <p style="text-align: center; line-height: 1;">YAYASAN PENDIDIKAN DASAR DAN MENENGAH (YPDM)</p>
<p style="text-align: center; line-height: 1;"><strong>SEKOLAH MENENGAH KEJURUAN (SMK) PASUNDAN 1 CIANJUR</strong></p>
<p style="text-align: center; line-height: 1;"><span style="font-size: 12px;">SK. KANWIL DEPDIKBUD PROP. JAWABARAT NO.839/102/KEP/E-1988. TGL 19 OKTOBER 1988</span></p>
<p style="text-align: center; line-height: 1;"><span style="font-size: 16px;"><strong><em>TERAKREDITASI A ( AMAT BAIK )</em></strong></span></p>
<hr>
<p>Nomor : 421/192/139/SMKPasCjr/2023</p>
<p>Lamp. : 1 (Satu) Lembar</p>
<p>Hal : Permohonan Kesempatan Melaksanakan Praktik Kerja Lapangan (PKL)</p>
<p><br></p>
<p>Kepada</p>
<p>Yth. Kepala/Pimpinan Kantor</p>
<p style="margin-left: 60px;"><strong>KECAMATAN KOTA</strong></p>
<p style="margin-left: 60px;">Jalan Siliwangi, No. 40 (Pamoyanan)</p>
<p style="margin-left: 60px;">&nbsp;Kec. Cianjur Kota</p>
<p style="margin-left: 60px;">Cianjur</p>
<p><br></p>
<p style="margin-left: 60px; text-align: justify;">Sehubungan dengan hal tersebut, kami mohon kesediaan Ibu/ Bapak untuk &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; memberikesempatan kepada peserta didik kami yang namanya tercantum di &nbsp; &nbsp; &nbsp; &nbsp; bawah ini untuk melaksanakan Praktek Kerja Lapangan ( PKL ) di Insatnsi/ &nbsp; &nbsp; &nbsp; Perusahaan yang Ibu/ Bapak pimpin.</p>
<table>
  <thead >
    <tr align="center" >
      <th scope="col-3">No.</th>
      <th scope="col-3">NIS</th>
      <th scope="col-3">Name</th>
      <th scope="col-3">Kelas</th>
      <th scope="col-3">Jurusan</th>
      <th scope="col-3">Jenis Kelamin</th>
      <th scope="col-3">Nama Perusahaan</th>
      <th scope="col-3">Alamat</th>
    </tr>
  </thead>
  @foreach ($data as $item)
  <tbody>
    <tr align="center">
      <th scope="col">{{$loop->iteration}}</th>
      <td scope="col">{{$item->nis}}</td>
      <td scope="col">{{$item->name}}</td>
      <td scope="col">{{$item->kelas}}</td>
      <td scope="col">{{$item->jurusan}}</td>
      <td scope="col">{{$item->gender}}</td>
      <td scope="col">{{$item->instansi}}</td>
      <td scope="col">{{$item->alamat}}</td>
      
    </tr>
  </tbody>
@endforeach

</table>
<p style="margin-left: 60px;">Bersama ini kami lampirkan daftar isian PKL, mohon secepatnya dikembalikan ke pihak kami.&nbsp;</p>
<p style="margin-left: 60px;">Atas perhatian dan kerjasama Ibu/ Bapak kami ucapkan terimakasih.</p>
<p style="text-align: left; line-height: 1;"><br></p>
<p style="text-align: right; line-height: 1;">Cianjur, ................ &nbsp; &nbsp;</p>
<p style="text-align: right; line-height: 1;">Kepala Sekolah, &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p style="text-align: right; line-height: 1;"><br></p>
<p style="text-align: right; line-height: 1;"><br></p>
<p style="text-align: right; line-height: 1;"><strong>NAMA LENGKAP &nbsp;</strong></p>
<p style="text-align: right; line-height: 1;"><strong>NIP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></p>
</body>

</html>
          