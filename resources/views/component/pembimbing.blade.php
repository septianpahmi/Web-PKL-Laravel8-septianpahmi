
@include('component.layout.header')
@include('component.layout.topbar')
@include('component.layout.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Daftar Pembimbing</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Daftar Pembimbing</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Daftar Pembimbing</h5>
        <a href="{{url('/pembimbing/tambah')}}" class="btn btn-success">
          Tambah Pembimbing
        </a>
        <br><br>
        <!-- Table with hoverable rows -->
        <table class="table table-hover">
          <thead>
            <tr align="center">
              <th scope="col">#</th>
              <th scope="col">NIP</th>
              <th scope="col">Nama</th>
              <th scope="col">Pembimbing Siswa</th>
              <th scope="col">Tempat PKL Siswa</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          @foreach ($data as $item)
          <tbody>
            <tr align="center">
              <th scope="col">{{$loop->iteration}}</th>
              <td scope="col">{{$item->nip}}</td>
              <td scope="col">{{$item->nama}}</td>
              <td scope="col">{{$item->Pemb_siswa}}</td>
              <td scope="col">{{$item->temp_pkl}}</td>
              <td>
                <a href="{{url('pembimbing/edit', $item->id)}}" class="btn btn-warning">Edit</a>
                <a href="{{url('/pembimbing/delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus?')">Hapus</a>
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