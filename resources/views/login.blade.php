@extends('layout')

@section('layout')
<section>
    <div class="form-box">
        <div class="container d-flex  justify-content-center align-items-center">
            <div class="row mt-5">
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <h1>LOGIN</h1>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="username" placeholder="name@example.com"><br>
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password"><br>
                        <label for="floatingPassword">Password</label>
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw-hide"></i>
                    </div>
                    <div class="mb-3">
                        <button type="submit">Login</button>
                    </div>
                    <div class="register">Already have an account?
                        <a href="{{ route('register') }}" id = "signup">Sign-up</a>
                    </div>
                    @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection