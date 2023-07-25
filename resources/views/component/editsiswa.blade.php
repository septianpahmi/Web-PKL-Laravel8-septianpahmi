<base href="/public">
@include('component.layout.header')
@include('component.layout.topbar')
@include('component.layout.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Siswa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Kelola Data Siswa</a></li>
          <li class="breadcrumb-item active">Tambah Siswa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tambah Siswa</h5>

          <!-- No Labels Form -->
          <form class="row g-3" action="{{url('/datasiswa/edit/post', $data->id)}}" method="POST">
            @csrf
            <div class="col-md-12">
              <input type="text" name="nis" class="form-control" placeholder="NIS Siswa" value="{{$data->nis}}">
            </div>
            <div class="col-md-12">
              <input type="text" name="name" class="form-control" placeholder="Nama siswa" value="{{$data->name}}">
            </div>
            <div class="col-md-6">
              <input type="text" name="kelas" class="form-control" placeholder="Kelas" value="{{$data->kelas}}">
            </div>
            <div class="col-6">
              <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{$data->jurusan}}">
            </div>
            <div class="col-md-6">
              <input type="text" name="gender" class="form-control" placeholder="Jenis kelamin" value="{{$data->gender}}">
            </div>
            <div class="col-md-6">
              <input type="text" name="instansi" class="form-control" placeholder="Nama perusahaan" value="{{$data->instansi}}">
            </div>
            <div class="col-md-12">
              <input type="text" name="alamat" class="form-control" placeholder="Alamat"value="{{$data->alamat}}">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form><!-- End No Labels Form -->

        </div>
      </div>

  </main><!-- End #main -->
@include('component.layout.footer')