<base href="/public">
@include('component.layout.header')
@include('component.layout.topbar')
@include('component.layout.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Input Nilai</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Input Nilai</a></li>
          <li class="breadcrumb-item active">Input Nilai</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Input Nilai</h5>

          <!-- No Labels Form -->
          <form class="row g-3" action="{{url('/nilai/edit/post', $data->id)}}" method="POST">
            @csrf
            <div class="col-md-12">
              <input type="number" name="nis" class="form-control" placeholder="NIS Siswa" value="{{$data->nis}}">
            </div>
            <div class="col-md-12">
              <input type="text" name="nama" class="form-control" placeholder="Nama siswa" value="{{$data->nama}}">
            </div>
            <div class="col-md-6">
              <input type="text" name="kelas" class="form-control" placeholder="Kelas" value="{{$data->kelas}}">
            </div>
            <div class="col-6">
              <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{$data->jurusan}}">
            </div>
            <h5 class="card-title">Indikator Nilai</h5>
            <div class="col-md-6">
              <input type="number" name="disiplin" class="form-control" placeholder="Disiplin dalam kerja" value="{{$data->disiplin}}">
            </div>
            <div class="col-md-6">
              <input type="number" name="kerjasama" class="form-control" placeholder="Kerja sama tim" value="{{$data->kerjasama}}">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form><!-- End No Labels Form -->

        </div>
      </div>

  </main><!-- End #main -->
@include('component.layout.footer')