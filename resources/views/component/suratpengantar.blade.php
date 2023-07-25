
@include('component.layout.header')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
@include('component.layout.topbar')
@include('component.layout.sidebar')
<style>
  .page-break {
      page-break-after: always;
  }
  </style>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Surat Pengantar</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Surat Pengantar</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <div class="card">
    <div class="card-body">
            <!-- Table with hoverable rows -->
            <table class="table table-hover">
              <thead>
                <tr align="center">
                  <th scope="col">#</th>
                  <th scope="col">NIS</th>
                  <th scope="col">Name</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Jurusan</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Nama Perusahaan</th>
                  <th scope="col">Alamat</th>
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
      <!-- End Table with hoverable rows -->
      <a href="{{url('/download')}}" target="_blank" class="btn btn-danger">Download PDF</a>
      <a href="{{url('/print')}}" target="_blank" class="btn btn-success">Print</a>
      
    </div>
  </div>
  
</main><!-- End #main -->
@include('component.layout.footer')