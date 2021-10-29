@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">

        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form>
              <div class="form-floating">
                    <input type="name" name="name" class="form-control rounded-top" id="name" placeholder="Name">
                    <label for="name">Name</label>
              </div>
              <div class="form-floating">
                    <input type="username" name="username" class="form-control" id="username" placeholder="Username">
                    <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email"class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="pasword" class="form-control rounded-bottom" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
    
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>
          </main>
    </div>
</div>
@endsection