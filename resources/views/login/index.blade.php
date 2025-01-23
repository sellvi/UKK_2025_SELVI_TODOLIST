@extends('layouts.index')

@section('samyang')


<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4" style="width: 50%; max-width: 300px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">
        <h3 class="text-center mb-4">Login</h3>
        <form action="proses_login.php" method="post">
            <!-- Input Username -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required placeholder="Masukan username">
            </div>
            <!-- Input Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required placeholder="Masukan password">
            </div>
            <!-- Tombol Login -->
            <button type="submit" name="login" class="btn btn-primary btn-block" style="margin-top: 15px">Login</button>
        </form>
    </div>
</div>
@endsection

    
