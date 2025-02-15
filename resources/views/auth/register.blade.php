<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4" style="width: 50%; max-width: 300px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">
        <h3 class="text-center mb-4">registrasi</h3>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        <form action="{{url('/register')}}" method="post">

            @method("POST")

            @csrf

            <!-- Input Username -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="name" id="name" class="form-control" required placeholder="Masukan username">
            </div>
            {{-- input email --}}
            <div class="form-group">
                <label for="username">email</label>
                <input type="text" name="email" id="email" class="form-control" required placeholder="Masukan email">
            </div>
            <!-- Input Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required placeholder="Masukan password">
            </div>
            <!-- Tombol Login -->
            <button type="submit" name="login" class="btn btn-primary btn-block" style="margin-top: 15px">registrasi</button>
            <div class="mt-3">
                <span>sudah punya akun ? <a href="{{url('/login')}}">login</a></span>
            </div>
        </form>
    </div>
</div>

</body>
</html>
