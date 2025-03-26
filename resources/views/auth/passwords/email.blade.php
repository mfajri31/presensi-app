@extends('layouts.auth')

@section('content')
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Reset Password</p>

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email" value="{{ old('email') }}" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope text-navy"></span>
                    </div>
                </div>
                @error('email')
                <span id="email" class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-info btn-block text-white">Kirim Link Reset Password</button>
                </div>
            </div>

            <p class="mb-1 mt-2 text-center">
                <a href="{{ route('login') }}">< Kembali ke Login</a>
            </p>
        </form>
    </div>
</div>
@endsection