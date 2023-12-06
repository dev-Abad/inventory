@extends('layout')

@section('layout')
<section>
    <div class="form-box">
        <div class="container d-flex  justify-content-center align-items-center">
            <div class="row mt-5">
                <form action="{{ route('registration.post') }}" method="POST">
                     @csrf
                    <h1>Register</h1>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"><br>
                        <label for="floatingInput">Enter Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"><br>
                        <label for="floatingPassword">Enter Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"><br>
                        <label for="floatingPassword">Confirm Password</label>
                    </div>
                    <div class="mb-3">
                    <a href="{{ route('login') }}">
                        <button type="submit">Register</button>
                    </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection