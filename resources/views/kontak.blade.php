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
                <a class="nav-link" href="/layanan">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/kontak">Kontak</a>
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
        <img src="{{ asset('img/4.jpg') }}" class="card-img" alt="...">
        <div class="card-img-overlay">
          <div class="p-4" style="background-color: black; opacity: .90; border-radius:.8rem;">
            <h1 class="card-title text-center mt-2">KONTAK</h1>
          <div class="row mt-5">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Detail Pesanan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
            <div class="col-md-6 p-3 text-center mt-5">
              <ul type="none">
                <br><br>
                <li>WhatsApp : 0895601568492</li>
                <li>Instagram : <a href="https://www.instagram.com/reza.fhlv_/">@reza.fhlv_</a></li>
                <li>Githhub : <a href="https://github.com/rezafhlv">rezafhlv</a></li>
              </ul>
            </div>
          </div>
          </div>
    </div>
</div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>