@extends('layouts.main')

@section('container')
    <div class="row justify-content-center pt-5">
        <div class="col-lg-6">
            <main class="form-registration w-100 ">
                <form>
                    <!-- <img class="mb-4" src="" alt="" width="72" height="57"> -->
                    <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" name="name" id="name" placeholder="Name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="email@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom" name="password" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already have an account? Click here <a href="/login">Login</a></small>
            </main>
            </div>
        </div>
    </div>
    <small class="mt-5 mb-3 text-body-secondary d-flex align-items-end justify-content-center">&copy;Fz | 2017–2025</small>
@endsection
