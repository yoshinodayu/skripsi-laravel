<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minat Membaca | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #b0abc9;">
        <div class="container">
            <div class="col-sm-8">
                <a class="navbar-brand mb-0 h1" href="/beranda">MINAT MEMBACA BERITA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-sm-4">
                <ul class="navbar-nav nav-justified" id="navbarNav">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Perhitungan") ? 'active' : '' }}" href="/perhitungan">Perhitungan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Hasil") ? 'active' : '' }}" href="/hasil">Hasil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-0">
        @yield('container')
    </div>

    <footer class="border-top footer text-muted p-3" style="background-color: #b0abc9;">
        <div class="container">
            <div class="copyright text-center my-auto text-white">
                <span>Copyright ©<span id="copyrightYear">2022</span><b> Minat Membaca</b></span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>