<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>

    <header>
        @include('includes.header')
    </header>


    <div class="container">
    <div id="main" class="row">
        @yield('content')
    </div>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
