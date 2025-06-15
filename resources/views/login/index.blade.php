@extends('layouts.main')

@section('container')
    <div class="row justify-content-center pt-5">
        <div class="col-lg-5">
            <main class="form-login_ w-100 ">
                <h2 class="mb-3 fw-normal text-center">Please login</h2>
                <form>
                    <!-- <img class="mb-4" src="" alt="" width="72" height="57"> -->
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Is this your first time here? Click here <a
                        href="/register">Register</a></small>
            </main>
        </div>
    </div>
    <small class="mt-5 mb-3 text-body-secondary d-flex align-items-end justify-content-center">&copy;Fz | 2017–2025</small>
@endsection
