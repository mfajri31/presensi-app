@extends('layouts.auth')

@section('content')
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Login Administrator</p>

        <form method="POST" action="{{ route('login') }}">
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
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password" required>
                <div class="input-group-append">
                    <div class="input-group-text text-navy">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                <span id="password" class="error invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-navy">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">
                            Ingat Saya
                        </label>
                    </div>
                </div>

                <div class="col-4">
                    <button type="submit" class="btn btn-info btn-block text-white">Login</button>
                </div>
            </div>
        </form>

        <p class="mb-1">
            <a href="{{ route('password.request') }}">Lupa Password</a>
        </p>
    </div>
</div>
@endsection