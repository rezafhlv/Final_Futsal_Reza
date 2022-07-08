<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Futsal Reza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">FUTSAL REZA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/menu">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profil">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/layanan">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/kontak">Kontak</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="card bg-dark text-white">
        <img src="{{ asset('img/2.jpg') }}" class="card-img" alt="...">
        <div class="card-img-overlay">
          <div class="p-4" style="background-color: black; opacity: .80; border-radius:.8rem;">
          <h1 class="card-title text-center">LAYANAN</h1><br>
          <div class="container">
            <div class="row mt-5 text-center mb-5">
              <div class="col-md-4">
                <img src="{{ asset('img/icon3.png') }}" class="card-img" alt="...">
                <h3>LAPANGAN</h3>
                <P>Menyediakan layanan booking lapangan futsal untuk kegiatan olahraga anda</P>
              </div>
              <div class="col-md-4">
                <img src="{{ asset('img/icon1.png') }}" class="card-img" alt="...">
                <H3>EVENT TURNAMEN</H3>
                <P>Memberikan harga dan layanan terbaik untuk anda yang akan mengadakan acara serta turnamen olahraga</P>
              </div>
              <div class="col-md-4">
                <img src="{{ asset('img/icon2.png') }}" class="card-img" alt="...">
                <h3>PERLENGKAPAN</h3>
                <P>Menyediakan perlengkapan olahraga dengan kualitas terbaik demi kenyamanan anda <br><br><br><br></P>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>