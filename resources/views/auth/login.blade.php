@extends('layouts.applogin')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-12 col-md-12 col-xl-6 my-5">
            <dic class="card shadow ">
                <div class="card-body">
                    <div class="card-body">
                        <form action="{{route('masyarakat.login')}}" method="POST">
                            @csrf
                            <h3 class="text-center">Aplikasi Pengaduan Masyarakat</h3>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </dic>
        </div>
    </div>
</div>
@endsection