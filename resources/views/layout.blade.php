
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('cssfile/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MSEUF Concert Singers</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('login')}}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About MSEUF CS</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    </div>
    <div>
        @yield('layout')
    </div>
    <script src="style/js/bootstrap.bundle.min.js"></script>
</body>
</html>