@extends('layouts.masternonauth')

@section('title', 'Login')

@section('headerStyle')
    <link rel="stylesheet" href="{{ url('back/css/fa-brands.css') }}">
    <link rel="stylesheet" href="{{ url('back/css/themes/login.css') }}">
    <style>
        body {
            background: url('/back/img/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            padding: 2rem 2.5rem;
            width: 100%;
            max-width: 450px;
        }

        .login-card .logo {
            max-width: 120px;
            margin-bottom: 1rem;
        }

        .login-card h2 {
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .login-card .form-label {
            font-weight: 500;
        }

        .login-btn {
            background-color: #1e3d59;
            color: #fff;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #fff;
        }

        .alert {
            margin-bottom: 1rem;
        }
    </style>
@stop

@section('content')
    <div class="login-container">
        <div class="login-card">
            <div class="text-center">
                <img src="{{ url('back/img/logo.png') }}" class="logo" alt="Logo">
                <h2>Welcome Back!</h2>
            </div>

            @if(session('error'))
                <div class="alert alert-danger text-center">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">
                        <i class="fal fa-envelope"></i> Email
                    </label>
                    <input type="email"
                           class="form-control @error('email') is-invalid @enderror"
                           id="email" name="email"
                           value="{{ old('email') }}"
                           required autocomplete="username"
                           placeholder="admin@example.com">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">
                        <i class="fal fa-lock-alt"></i> Password
                    </label>
                    <input type="password"
                           class="form-control @error('password') is-invalid @enderror"
                           id="password" name="password"
                           required placeholder="••••••••">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn login-btn w-100 mt-3">
                    Login <img src="{{ url('back/img/arrow.png') }}" alt="Arrow" style="height: 14px; margin-left: 8px;">
                </button>
            </form>

            <div class="text-center mt-4">
                <small>&copy; {{ date('Y') }} Backwaters Lodge CMS</small>
            </div>
        </div>
    </div>
@stop

@section('footerScript')
    <script>
        document.querySelector('form').addEventListener('submit', function (e) {
            if (!this.checkValidity()) {
                e.preventDefault();
                this.classList.add('was-validated');
            }
        });
    </script>
@stop
