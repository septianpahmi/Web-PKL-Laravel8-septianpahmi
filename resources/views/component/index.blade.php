@include('component.layout.header')
@include('component.layout.topbar')
@include('component.layout.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Kelola Siswa</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-menu-button-wide"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$data}}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            @if (Auth::User()->role == 'staf')
                
            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">
                
                <div class="card-body">
                  <h5 class="card-title">Surat Pengantar</span></h5>
                  
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-text"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$data}}</h6>
                    </div>
                  </div>
                </div>
                
              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-4">
              
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Rekap</span></h5>
                  
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-layout-text-window-reverse"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$data}}</h6>
                    </div>
                  </div>
                  
                </div>
              </div>
              
            </div><!-- End Customers Card -->
            
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-4">

              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Sertifikat</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-card-list"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$data}}</h6>
                    </div>
                  </div>
                  
                </div>
              </div>
              
            </div><!-- End Customers Card -->
            @endif

      </div>
    </section>

  </main><!-- End #main -->
@include('component.layout.footer')