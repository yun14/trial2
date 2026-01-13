<nav class="navbar navbar-expand-lg navbar-light bg-light px-0 px-lg-4 py-lg-0">
  <div class="container-fluid px-lg-5">

    <!-- Tombol Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
    </button>

    <!-- Menu Navigasi -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-lg-center">
        <li class="nav-item">
          <a href="{{ route('beranda') }}" class="nav-link">Beranda</a>
        </li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Blora
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a href="{{ route('visimisi') }}" class="dropdown-item">Visi Misi</a></li>
            <li><a href="https://blorakab.go.id/" target="_blank" class="dropdown-item">Portal Resmi</a></li>
          </ul>
        </li>

        <li class="nav-item"><a href="https://google.com/" target="_blank" class="nav-link">Bantuan</a></li>
        <li class="nav-item"><a href="https://google.com/" target="_blank" class="nav-link">Panduan</a></li>
        <li class="nav-item"><a href="https://google.com/" target="_blank" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="https://google.com/" target="_blank" class="nav-link">HAKI</a></li>
        <li class="nav-item"><a href="https://csirt.blorakab.go.id/" target="_blank" class="nav-link">CSIRT</a></li>
      </ul>

      <!-- Tombol Masuk -->
      <div class="nav-btn">
        <a href="#" class="btn-masuk d-flex align-items-center">
          <i class="fas fa-sign-in-alt me-2"></i>Masuk
        </a>
      </div>
    </div>
  </div>
</nav>
