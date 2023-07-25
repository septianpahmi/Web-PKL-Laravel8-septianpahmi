
@include('component.layout.header')
@include('component.layout.topbar')
@include('component.layout.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kelola Data Siswa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Kelola Data Siswa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Siswa</h5>
        @if (Auth::User()->role== 'staf')
            
        <a href="{{url('/datasiswa/tambah')}}" class="btn btn-success">
          Tambah Siswa
        </a>
        <br><br>
        @endif
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
              <th scope="col">Action</th>
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
              <td>
                <a href="{{url('datasiswa/edit', $item->id)}}" class="btn btn-warning">Edit</a>
                <a href="{{url('/datasiswa/delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus?')">Hapus</a>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
        <!-- End Table with hoverable rows -->

      </div>
    </div>

  </main><!-- End #main -->
@include('component.layout.footer')