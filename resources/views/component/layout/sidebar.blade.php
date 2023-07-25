<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('/dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      @if (Auth::User()->role== 'staf')
      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ url('/datasiswa')}}">
          <i class="bi bi-menu-button-wide"></i><span>Kelola data Siswa</span>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{url('/suratpengantar')}}">
          <i class="bi bi-journal-text"></i><span>Surat Pengantar</span>
        </a>
      </li><!-- End Forms Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/balsan')}}">
          <i class="bi bi-journal-text"></i><span>Surat Balasan</span>
        </a>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{url('/rekap')}}">
          <i class="bi bi-layout-text-window-reverse"></i><span>Rekap</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/pembimbing')}}">
          <i class="bi bi-person"></i>
          <span>Daftar Pembimbing</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/sertifikat')}}">
          <i class="bi bi-card-list"></i>
          <span>Sertifikat</span>
        </a>
      </li><!-- End Register Page Nav -->
      @endif
      @if (Auth::User()->role == 'hubin')
          
      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ url('/datasiswa')}}">
          <i class="bi bi-menu-button-wide"></i><span>Siswa</span>
        </a>
      </li><!-- End Components Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/nilai')}}">
          <i class="bi bi-card-list"></i>
          <span>Input Nilai</span>
        </a>
      </li>
      @endif
      
    </ul>
    
  </aside><!-- End Sidebar-->