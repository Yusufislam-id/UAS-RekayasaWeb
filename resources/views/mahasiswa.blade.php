<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    @livewireStyles
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">SIMA</a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/dosen">Dosen</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/makul">Makul</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-3">
            @livewire('mahasiswa')
        </div>
    </div>
    @livewireScripts

</body>

</html>
