<style>
    .navbar-nav .nav-item {
      margin-right: 15px;
    }
    .navbar-brand, .nav-link {
      padding-left: 15px; 
      padding-right: 15px;
    }
    .text-white {
      margin-left: 15px;
    }
  </style>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('storage/bootstrap-5.3.3/img/logo-unwaha.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        <span class="text-white">Informatika</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" aria-current="page" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Data</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
              <li><a class="dropdown-item" href="{{ url('/mahasiswa/tambah') }}">Mahasiswa+</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ url('/matakuliah') }}">Mata Kuliah</a></li>
              <li><a class="dropdown-item" href="{{ url('/matakuliah/tambah') }}">Mata Kuliah+</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ url('/krs') }}">Krs</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


