<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Topupmas Topup Termurah</title>

    {{-- CSS Bootstrap --}}
    <link href="{{asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- JS bootstrap --}}
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}} "
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <h1>Blog Masum
            <a href="{{ url('posts/create') }}" class="btn btn-success">+ Buat Postingan</a>
        </h1>
        @foreach ($posts as $post)
        @php($post = explode(",", $post))
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post[1]}} </h5>
                <p class="card-text">{{ $post[2]}}</p>
                <p class="card-text"><small class="text-body-secondary">Last updated at {{ date("d M Y H:i",
                        strtotime($post[3])) }}</small></p>
                <a href="{{ url("posts/$post[0]") }}" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
        @endforeach
    </div>

</body>

</html>