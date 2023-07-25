<base href="/public">
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
          <h5 class="card-title">Tambah Surat</h5>

          <!-- No Labels Form -->
          <form class="row g-3" action="{{url('/balasan/tambah/post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
              <input type="number" name="no_surat" class="form-control" placeholder="Nomor surat">
            </div>
            <div class="col-md-12">
              <input type="date" name="tanggal" class="form-control" placeholder="Tanggal">
            </div>
            <div class="col-md-12">
              <input type="file" name="file" class="form-control" placeholder="Upload gambar">
            </div>
            
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form><!-- End No Labels Form -->

        </div>
      </div>
  </main><!-- End #main -->
@include('component.layout.footer')