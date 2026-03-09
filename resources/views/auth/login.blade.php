@extends('layouts.auth')
@section('content')
        
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section class="page-section login-page">
        <div class="full-width-screen">
            <div class="container-fluid p-0">
                <div class="particles-bg" id="particles-js">
                    <div class="content-detail">
                        <!-- Login form -->
                        <form class="login-form" method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="imgcontainer">
                                <img src="{{ asset('assets/images/darul-hikam-1.png') }}" alt="Avatar" class="avatar">
                            </div>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                        <script>
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Login Gagal',
                                                text: '{{ $error }}',
                                                showConfirmButton: false,
                                                timer: 3000
                                            });
                                        </script>
                                @endforeach

                                    
                            @endif
                            <div class="input-control">
                                <input type="email" placeholder="Enter Email" name="email" required>
                                <span class="password-field-show">
                                    <input type="password" placeholder="Enter Password" name="password"
                                        class="password-field" value="" required>
                                    <span data-toggle=".password-field" class="fa fa-fw fa-eye field-icon toggle-password">
                                        
                                    </span>
                                </span>
                                <label class="label-container">Remember me
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="psw"><a href="/" class="forgot-btn">Forgot password?</a></span>
                                <div class="login-btns">
                                    <button type="submit">Login</button>
                                </div>
                                <div class="division-lines">
                                    <p>or login with</p>
                                </div>
                                <div class="login-with-btns">
                                    <button type="button" class="google"><i class="fab fa-google"></i></button>
                                    <button type="button" class="facebook"><i class="fab fa-facebook-f"></i></button>
                                    <button type="button" class="twitter"><i class="fab fa-twitter"></i></button>
                                    <button type="button" class="linkedin"><i class="fab fa-linkedin-in"></i></button>
                                    <span class="already-acc">Not a member? <a href="/"
                                            class="signup-btn">Sign up</a></span>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
