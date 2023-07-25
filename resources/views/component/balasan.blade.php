
@include('component.layout.header')
@include('component.layout.topbar')
@include('component.layout.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Surat Balasan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Surat Balasan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Surat Balasan</h5>
          <a href="{{url('/balasan/tambah')}}" class="btn btn-success">
            Buat Surat Balasan
          </a>
          <br><br>
          <!-- Table with hoverable rows -->
          <table class="table table-hover">
            <thead>
              <tr align="center">
                <th scope="col">#</th>
                <th scope="col">Nomor Surat</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Gambar</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            @foreach ($data as $item)
            <tbody>
              <tr align="center">
                <th scope="col">{{$loop->iteration}}</th>
                <th scope="col">{{$item->no_surat}}</th>
                <td scope="col">{{$item->tanggal}}</td>
                <td scope="col">{{$item->image}}</td>
                <td>
                  <a href="{{url('/balsan/delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus?')">Hapus</a>
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