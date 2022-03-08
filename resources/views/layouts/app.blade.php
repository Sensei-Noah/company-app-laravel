<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company catalog</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
        font-size: 3.5rem;
        }
    }
    .active{
        color: red;
    }
    </style>
</head>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">This is an app for viewing and adding companies into a list</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Pages</h4>
            <ul class="list-unstyled">
                <li><a href="/" class="text-decoration-none {{ request()->is('/') ? 'active' : 'text-white' }}">Home</a></li>
                <li><a href="/companies" class="text-decoration-none {{ request()->is('companies') ? 'active' : 'text-white' }}">Company List</a></li>
            </ul>
            </div>
        </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
        <a href="" class="navbar-brand d-flex align-items-center">
            <strong>Navigation</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
            aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </div>
</header>



<body class="d-flex flex-column h-100">

    <main class="flex-shrink-0">
        @yield('content')
    </main>

    <footer class="footer mt-auto py-5 text-muted bg-light">
        <div class="container">
            <p class="float-right mb-1">
            <a href="">Back to top</a>
            </p>
            <p class="mb-1">Company catolog app, made by Nojus Murauskas</p>
            <p class="mb-0"><a href="/">Back to Home page</a>
        </div>
    </footer>
</body>

</html>
