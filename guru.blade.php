<html>
    <head>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <title>Data guru</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/siswa">Data siswa</a>
                    </li>
                    <li>
                        <a class="nav-link active" href="/guru">Data guru</a>
                    </li>
                    <li>
                        <a class="nav-link active" href="/gallery">gallery</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container text-center mt-3 p-4 bg-white">
            <h1 class="mb-3">Data guru</h1>
                <div class="row">
                    <div class="col-sm-8 col-md-6 m-auto">
                        <ol class="list-group">
                        @forelse ($guru as $val)
                            <li class="list-group-item">{{$val}}</li>
                        @empty
                            <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                        @endforelse
                        </ol>
                    </div>
                </div>
            </div>
        <footer class="bg-dark py-4 text-white mt-4">
            <div class="container">
                sistem informasi guru | copyright &#169; {{ date("Y") }} Reza
            </div>
        </footer>
    </body>
</html>