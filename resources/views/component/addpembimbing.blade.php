<base href="/public">
@include('component.layout.header')
@include('component.layout.topbar')
@include('component.layout.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Pembimbing</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Pembimbing</a></li>
          <li class="breadcrumb-item active">Tambah Pembimbing</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tambah Pembimbing</h5>
                
            <!-- No Labels Form -->
            <form class="row g-3" action="{{url('/pembimbing/tambah/post')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <input type="number" name="nip" class="form-control" placeholder="NIP">
                </div>
            <div class="col-md-12">
              <input type="text" name="nama" class="form-control" placeholder="Nama pembimbing">
            </div>
            <div class="col-md-12">
              <input type="text" name="Pemb_siswa" class="form-control" placeholder="Pembimbing siswa">
            </div>
            <div class="col-md-12">
                <input type="text" name="temp_pkl" class="form-control" placeholder="Tempat PKL Siswa">
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form><!-- End No Labels Form -->
          
        </div>
    </div>
</main><!-- End #main -->
@include('component.layout.footer')