@extends('layout')

@section('title','Register')

@section('layout')
<section>
    <div class="form-box">
        <div class="container d-flex  justify-content-center align-items-center">
            <div class="row mt-5">
                <form action="{{ route('registration.post') }}" method="POST">
                     @csrf
                    <h1>Register</h1>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="username" placeholder="name@example.com">
                        <label for="floatingInput">Enter Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name ="password" placeholder="Password">
                        <label for="floatingPassword">Enter Password</label>
                    </div>
                    <div class="mb-3">
                        <button type="submit">Register</button>
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