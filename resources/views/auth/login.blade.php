@extends('layouts.app')

@section('content')

    <div class="account-popup">
        <div class="row">

            <!-- Login sec -->
            <div class="col-md-12">
                <div class="account-user">

                    <!-- LOGO -->
                    <div class="logo">
                        <a href="/" title="">
                            <i class="fa fa-get-pocket"></i>
                            <span>elinonga</span>
                            <strong>RENT PROPERTIES</strong>
                        </a>
                    </div>

                    @if (session('status'))
                        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <h4>Login Form</h4>

                        <div class="field">
                            <input type="text" name="email" placeholder="Your Email" />

                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="field">
                            <input type="password" name="password" placeholder="Type Password" />

                            @error('password')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="field mb-4">
                            <input type="checkbox" name="remember" id="remember" class="mr-2">
                            <label for="remember">Remember me</label>
                        </div>

                        <div class="field">
                            <input type="submit" value="LOGIN" class="flat-btn" />
                        </div>

                    </form>

                </div>
            </div>


        </div>
    </div>

@endsection
